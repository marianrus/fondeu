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
     * Placeholder for where criteria
     * @var array
     */
    private $where = [];

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



    private function setWhere()
    {

    }


    /**
     * If the filter is null it is returned all set of data without any conditions
     *
     * @param null $filter
     * @return array
     */
    public function filterCourses($filter=null)
    {
        $where = [];

        if(!empty($filter['category'])){
            $where['courses.category_course_id'] = $filter['category'];
        }

        if(!empty($filter['county'])){
            $where['courses.county_id'] = $filter['county'];
        }

        if(!empty($filter['city'])){
            $where['courses.city_id'] = $filter['city'];
        }

        $query =  \DB::table('courses')
            ->join('category_course','category_course.category_course_id', '=','courses.category_course_id')
            ->join('partner','partner.partner_id', '=','courses.partner_id')
            ->join('city','city.city_id', '=','courses.city_id')
            ->join('county','county.county_id', '=','courses.county_id');

        $query->whereRaw("1 = 1");
        $query->where($where);

        if(!empty($filter['query_string'])){
            $qS = $filter['query_string'];
            $query->where('courses.course_name','like','%'.$qS.'%');
            $query->orwhere('courses.course_description','like','%'.$qS.'%');
        }
        if(!empty($filter['price']) && $filter['price']['from'] <= $filter['price']['to']){
            $from = $filter['price']['from'];
            $to   = $filter['price']['to'];
            $query->where($where);
            $query->orWhere(function($q) use($from, $to,$where){
                $q  ->where('courses.price', '>=',$from)
                    ->where('courses.price', '<=',$to);
            });
        }

        $offSet = 0;
        $limit  = \Config::get('fondnews.results_per_page');

        // pagination
        if(!empty($filter['pagination'])){
            $offSet = $filter['pagination']['from'];
            $limit  = $filter['pagination']['to'];
        }

        $resultsPerPage =  \Config::get('fondnews.results_per_page');

        $query->skip($offSet);
        $query->take($resultsPerPage);

        $results  = $query->get(
            [
                'course_name','course_id','viewed','category_course.category_course_id','category_course.category_course_name','category_course_name','course_description_short','county_name','city_name'
            ]);

        return [
            'results'     =>  $results,
            'pagination'  => [
                                'from' => $limit,
                                'to'   => $limit + $resultsPerPage
                             ],
            'hasNext'     => count($results) == $resultsPerPage,
            'count'       => count($results)
        ];
    }
}
