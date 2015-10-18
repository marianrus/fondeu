<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EuProjects extends Model
{
    protected $table = 'eu_project';

    protected $primaryKey = 'eu_project_id';

    public $timestamps = false;

    public static function getEuProjectTypes()
    {
        return \DB::table('eu_project_type')->get();
    }
}
