<?php

namespace App\Http\Controllers;

use App\City;
use App\County;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HelperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * Returns cities associated to a county.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getCities($countyId)
    {
        return City::where('county_id','=',$countyId)->orderBy('city_name')->get(['city_name','city_id']);
    }
    public function getCitiesByName()
    {
        $cityName  = $_GET['city_name'];
        $countyId  = $_GET['county_id'];
        return City::where('county_id','=',$countyId)
                            ->where('city_name', 'LIKE', $cityName.'%')
                            ->orderBy('city_name')
                            ->get(['city_name','city_id']);
    }

    public function getCounties()
    {
        $county = $_GET['county'];
        return County::where('county_name','LIKE', $county.'%')->orderBy('county_name')->get(['county_id','county_name']);
//        return County::all();
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
}
