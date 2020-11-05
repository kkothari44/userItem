<?php
namespace App\Container;
use Illuminate\Support\Facades\Validator;
use App\UserItems;
use Illuminate\Support\Facades\DB;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ItemContainer implements ItemContract{
    
    public function pageVist($request){
        $data = $request->all();
        $validate = Validator::make($data,[
            'userId' => 'required',
            'itemId' => 'required',
        ]);
        if ($validate->fails()) {
            return response()->json(['message' => $validate->messages()], 400);
        }
        
        $userItem = new UserItems([
            'user_id' => $request->userId,
            'item_id' => $request->itemId,
        ]);
        $userItem->save();
        return response()->json(['message' => "true"]);
    }
    
    public function contentList($userId){
        $data = [];
        $ageDatas = DB::select("select c.item_id as item_id  from user_age_groups as u inner join content_age_groups as c on c.age_group_id = u.age_group_id where u.user_id = $userId");
        foreach($ageDatas as $ageData){
            array_push($data, $ageData->item_id); 
        }
        $recentItems = DB::select("SELECT item_id FROM content.content_date where date(cdate) = curdate()");
        foreach($recentItems as $recentItem){
            array_push($data, $recentItem->item_id); 
        }
        $userVists = DB::select("SELECT item_id FROM content.user_items where user_id = $userId");
        foreach($userVists as $userVist){
            array_push($data, $userVist->item_id); 
        }
        return response()->json(['content_id' => $data]);
    }
}