<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table 	= 'location_data';
	protected $fillable = ['id','location_address','location_lat','location_lon'];

    /**
     * Returns all of the all location data.
     *
     * @return mixed
     */ 
     public function getLocation(){
       return self::get(); 
    }
}
