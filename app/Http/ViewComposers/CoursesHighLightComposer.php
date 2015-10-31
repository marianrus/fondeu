<?php
/**
 * Created by PhpStorm.
 * User: marian
 * Date: 10/31/15
 * Time: 9:51 AM
 */

namespace App\Http\ViewComposers;


use App\Course;
use App\CourseCategory;

class CoursesHighLightComposer
{

    private $mostViewedCourses;

    private $mostCommentedCourses;

    public function __construct()
    {
        $this->mostViewedCourses = Course::getMostViewedCourses(5);
    }

    public function compose( $view)
    {
        $view->with('mostViewedCourses',$this->mostViewedCourses);
    }
}