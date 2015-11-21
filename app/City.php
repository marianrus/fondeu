<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';

    public static function  getCities($countyId)
    {
        return \DB::table('city')->where("county_id", "=", $countyId)->get();
    }

    public static  function getRandomCity($countyId)
    {
        $cities     = self::getCities($countyId);
        $randomCity = rand(0, count($cities));
        if(!count($cities)){
            echo "returned 10 \n";
            return 10;
        }

        try{
            return $cities[$randomCity]->city_id;
        }catch (\Exception $e){
            return 1;
        }

    }
}
