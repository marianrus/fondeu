@extends('layouts.backend.admin')

@section('title')
Categorii
<div class="pull-right">
    <a href="/category-admin-createForm">
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
                    Categori Articole
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
                                <th>Creata la</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $cat)
                            <tr class="category-table-row" id="category-{{$cat->category_id}}">
                                <td class="category-td category-id">{{$cat->category_id}}</td>
                                <td class="category-td">{{$cat->category_name}}</td>
                                <td class="category-td">{{$cat->category_description}}</td>
                                <td class="category-td">2015-10-15</td>
                                <td>
                                    <button class="btn btn-danger" onclick="categoryDelete({{$cat->category_id}})">
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