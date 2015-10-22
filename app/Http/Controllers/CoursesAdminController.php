<?php

namespace App\Http\Controllers;

use App\City;
use App\County;
use App\Course;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;

class CoursesAdminController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.courses.index',[
           'courses' => \DB::table('courses')
                   ->join('city','courses.city_id', '=','city.city_id')
                   ->join('county','courses.county_id', '=','county.county_id')
                   ->get()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editForm($id)
    {
        return view('admin.courses.edit',[
            'course' => Course::find($id),
            'cities' => City::orderBy('city_name','ASC')->get(),
            'counties' => County::orderBy('county_name','ASC')->get()
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $course = Course::find($id);
        $course->course_name = $request->input('course_name');
        $course->course_from = $request->input('course_from');
        $course->course_to   = $request->input('course_to');
        $course->county_id   = $request->input('county_id');
        $course->city_id     = $request->input('city_id');
        $course->location     = $request->input('location');

        $course->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();

        die(json_encode('success'));
    }
}
