@extends('layouts.admin')

@section('title')
Cursuri
<div class="pull-right">
    <a href="/courses-admin-form">
        <button class="btn btn-primary btn-lg" type="button">Adauga</button>
    </a>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DataTables Advanced Tables
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover courses" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Nume</th>
                            <th>Descriere</th>
                            <th>Incepe</th>
                            <th>Sfarseste</th>
                            <th>Pe site</th>
                            <th>Localitate</th>
                            <th>Judet</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr class="even gradeC" id="course-{{$course->course_id}}">
                                <td>{{$course->course_name}}</td>
                                <td class="course-description">{{$course->course_description}} </td>
                                <td class="center">{{date('Y-m-d',strtotime($course->course_from))}}</td>
                                <td class="center">{{date('Y-m-d',strtotime($course->course_to))}}</td>
                                <td class="center">{{$course->course_on_site ? 'Da' : 'Nu'}}</td>
                                <td class="center">{{$course->city_name}}</td>
                                <td class="center">{{$course->county_name}}</td>
                                <td class="center">
                                    <a href="/courses-admin-form/{{$course->course_id}}" >
                                        <button type="button" class="btn btn-info btn-sm">
                                        <span class="glyphicon glyphicon-pencil"></span> Edit
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <button type="button" onclick="deleteCourse({{$course->course_id}})" class="btn btn-danger btn-sm">
                                        <span class="glyphicon glyphicon-pencil"></span> Sterge
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@stop


