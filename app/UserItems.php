<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserItems extends Model
{
    //
    
    protected $table = 'user_items';


    protected $fillable = [
        'user_id', 'item_id',
    ];
    
    public $timestamps = false;

}
