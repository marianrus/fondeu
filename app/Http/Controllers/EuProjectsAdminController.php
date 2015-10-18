<?php

namespace App\Http\Controllers;

use App\EuProjects;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;

class EuProjectsAdminController extends BaseController
{
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.eu_projects.index',[
            'eu_projects' => EuProjects::all()
        ]);
    }

    /**
     * @param Request $request
     */
    public function create(Request $request)
    {

        $this->validateCreateEuProject($request);

        $euProject =  new EuProjects();
        $euProject->eu_project_type_id = $request->input('eu_project_type_id');
        $euProject->eu_project_name = $request->input('eu_project_name');
        $euProject->eu_project_description = $request->input('eu_project_description');
        $euProject->started_at = $request->input('started_at');
        $euProject->ends_at    = $request->input('ends_at');
        $euProject->eu_project_link    = $request->input('eu_project_link');

        $euProject->save();

       return redirect('eu-projects-admin');
    }

    private function validateCreateEuProject(Request $request)
    {
        $this->validate($request,[
            'eu_project_name'=>'required'
        ]);
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
        //
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
        $project =  EuProjects::find($id);
        $project->delete();

        die(json_encode('success'));
    }

    public function createForm(){
        return view('admin.eu_projects.createForm',[
            'project_types' => EuProjects::getEuProjectTypes()
        ]);
    }
}
