<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hm_food_items extends Model
{
	protected $guarded = array();
    //
protected $table = 'hm_food_items';	
protected $primaryKey = 'id';
protected $fillable = ['food_name', 'description', 'price', 'food_image'];
}
