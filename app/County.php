<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $table = 'county';

    public static function getCountyIds()
    {
        $counties = [];

        foreach(self::all() as $county)
        {
            array_push($counties,$county->county_id);
        }
        return $counties;
    }

}
