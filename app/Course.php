<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $primaryKey = 'course_id';

    public $timestamps = false;
    protected $fillable =[
        'course_name',
        'course_description',
        'course_from',
        'course_to',
        'picture_id',
        'address',
        'city_id',
        'county_id',
        'partner_id'
    ];
}
