@extends('layouts.backend.admin')

@section('title')
Articole

@stop

@section('content')

<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Editeaza articol
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-9">
                    <form  action="/courses-admin/{{$course->course_id}}" method="post">
                        {!! csrf_field() !!}
                        {!! method_field('PUT') !!}
                        <div class="form-group">
                            <label>Numele Cursului</label>
                            <input class="form-control"
                                   name="course_name"
                                   value="{{$course->course_name}}"
                                   placeholder="Numele Cursului"
                                >
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="course_from">Incepe la</label>
                                <input class="form-control date"
                                       type="text"
                                       placeholder="Incepe La"
                                       name="course_from"
                                       value="{{date('d-m-Y',strtotime($course->course_from))}}"
                                    >
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="course_to date">Pana la</label>
                                <input class="form-control"
                                       type="text"
                                       placeholder="Incepe La"
                                       name="course_to"
                                       value="{{date('d-m-Y',strtotime($course->course_to))}}"
                                    >
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Judet</label>
                                    <select name="county_id" id="county_id" class="form-control">
                                        @foreach($counties as $county)
                                        <option value="{{$county->county_id}}"
                                            @if($county->county_id == $course->county_id) selected @endif
                                         >{{$county->county_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Oras</label>
                                    <select name="city_id" class="form-control">
                                        @foreach($cities as $city)
                                            <option value="{{$city->city_id}}"
                                        @if($city->city_id == $course->city_id) selected @endif
                                                >{{$city->city_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Locatie</label>
                                    <input class="form-control"
                                           name="location"
                                           value="{{$course->course_name}}"
                                           placeholder="Numele Cursului"
                                        >
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="form-group">
                            Picure
                        </div>
                        <hr/>
                        <div class="form-group">
                            <label>Descriere</label>
                            <textarea class="form-control" name="course_description" id="description" rows="20">{{$course->course_description}}</textarea>
                            <iframe id="form_target" name="form_target" style="display:none"></iframe>
                        </div>

                </div>
                <div class="col-lg-3">
                    <h1>Vizibilitate</h1>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="onSite" value="1">Vizibil pe site
                            </label><br/>
                            <label>
                                <input type="checkbox" name="onFacebook" value="1">Vizibil pe Facebook
                            </label>
                        </div>
                    </div>
                    <!--                            <input type="submit">-->
                    <button type="submit" class="btn btn-success">Salveaza</button>
                    <button type="reset" class="btn btn-primary">Reseteaza</button>
                    <a href="/courses-admin"><button class="btn btn-danger" type="button">Anuleaza</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
