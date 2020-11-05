<?php

namespace App\Http\Controllers\UserItem;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Symfony\Component\HttpFoundation\Request;
use App\Container\ItemContract;
class UserItemController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    public function pageVist(Request $request, ItemContract $item){
        return  $item->pageVist($request);
    }
    
    public function contentList($userId, ItemContract $item){
        return  $item->contentList($userId);
    }
}
