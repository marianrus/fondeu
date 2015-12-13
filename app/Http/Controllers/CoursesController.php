<?php

namespace App\Http\Controllers;

use App\Category;
use App\County;
use App\Course;
use App\CourseCategory;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = new Course();
        return view('frontend.courses.index',[
                'categories' => CourseCategory::all(),
                'counties'   => \DB::table('county')->orderBy('county_name')->get(),
                'courses'    => $course->filterCourses()['results']
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $format  = $_GET['format'];
        $courses = Course::getCourse($id);
        if(isset($format) && $format =='json'){
            return $courses;
        }

        return view('frontend.courses.show',
            [
                'course' => $courses
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function filterCourses(Request $request)
    {
        $course = new Course();
        return json_encode($course->filterCourses($request->all()));
    }
}
