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

class MenuComposer
{
    private $mostViewed;

    private $courseCategories;


    public function __construct()
    {
        $this->mostViewed       = Course::getMostViewedCourses();
        $this->courseCategories = CourseCategory::all();
    }

    public function compose( $view)
    {
        $this->courseCategorySection($view);
        $this->mostViewedCourses($view);
    }


    private function mostViewedCourses($view)
    {
        $view->with('mostViewedCourses',$this->mostViewed);
    }


    /**
     * @param $view
     */
    private function courseCategorySection($view)
    {
        $view->with('courseCategories',$this->courseCategories);
    }
} 