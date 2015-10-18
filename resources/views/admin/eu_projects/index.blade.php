@extends('layouts.admin')

@section('title')
    Proiecte europene
<div class="pull-right">
    <a href="/eu-projects-createForm">
        <button class="btn btn-primary btn-lg" type="button">Adauga</button>
    </a>
</div>
@stop
@section('content')
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Proiecte Europene
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nume</th>
                                <th>Descriere</th>
                                <th>Incepe la</th>
                                <th>Se Termina la</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($eu_projects as $ep)
                            <tr class="project-table-row" id="project-{{$ep->eu_project_id}}">
                                <td class="project-td project-id">{{$ep->eu_project_id}}</td>
                                <td class="project-td">{{$ep->eu_project_name}}</td>
                                <td class="project-td">{{$ep->eu_project_description}}</td>
                                <td class="project-td">{{$ep->started_at}}</td>
                                <td class="project-td">{{$ep->ends_at}}</td>
                                <td>
                                    <button class="btn btn-danger" onclick="projectDelete({{$ep->eu_project_id}})">
                                        Sterge
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
</div>
</div>
@stop