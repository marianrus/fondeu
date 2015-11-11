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
        'course_description_short',
        'course_from',
        'course_to',
        'picture_id',
        'address',
        'city_id',
        'county_id',
        'partner_id'
    ];

    /**
     * @param $courseCategoryId
     * @return mixed
     */
    public static function getCourses($courseCategoryId)
    {
        return self::where('category_course_id', $courseCategoryId)->get();
    }


    public static function getMostViewedCourses($limit=9)
    {
        return self::orderBy('viewed','desc')
            ->join('category_course','category_course.category_course_id', '=','courses.category_course_id')
            ->take($limit)
            ->get();
    }

    public static function getCourse($courseId)
    {
        return self::where('course_id', '=', $courseId)
            ->join('category_course','category_course.category_course_id', '=','courses.category_course_id')
            ->join('partner','partner.partner_id', '=','courses.partner_id')
            ->take(1)
            ->get();
    }
    public static function getAllCourses( $limit = 10)
    {
        return self::find($limit)
            ->join('category_course','category_course.category_course_id', '=','courses.category_course_id')
            ->join('partner','partner.partner_id', '=','courses.partner_id')
            ->join('city','city.city_id', '=','courses.city_id')
            ->join('county','county.county_id', '=','courses.county_id')
            ->simplePaginate();
//            ->get();
    }

    public static function filterCourses($filter)
    {

        $where = [];

        if($filter['category']){
            $where['courses.category_course_id'] = $filter['category'];
        }

        if($filter['county'] != 'Toate'){
            $where['courses.county_id'] = $filter['county'];
        }
        if($filter['city']){
            $where['courses.city_id'] = $filter['city'];
        }

        $query =  self::find(10)
            ->join('category_course','category_course.category_course_id', '=','courses.category_course_id')
            ->join('partner','partner.partner_id', '=','courses.partner_id')
            ->join('city','city.city_id', '=','courses.city_id')
            ->join('county','county.county_id', '=','courses.county_id');

        if($filter['price'] && $filter['price']['from'] <= $filter['price']['to']){
            $from = $filter['price']['from'];
            $to   = $filter['price']['to'];
            $query->where($where);
            $query->orWhere(function($q) use($from, $to,$where){
                $q  ->where('courses.price', '>=',$from)
                    ->where('courses.price', '<=',$to);
//                foreach($where as $k =>$w){
//                    $q->where($k , '=', $w);
//                }
            });
        }
        return $query->get();
    }
}
