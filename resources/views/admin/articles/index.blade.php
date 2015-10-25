@extends('layouts.backend.admin')

@section('title')
Articole
<div class="pull-right">
    <a href="/articles-admin-form">
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
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Nume</th>
                            <th>Descriere</th>
                            <th>Categorie</th>
                            <th>Este pe site</th>
                            <th>Este pe facebook</th>
                            <th>Creat la</th>
                            <th>Modificat la</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                            <tr class="even gradeC" id="article-{{$article->article_id}}">
                                <td>{{$article->article_name}}</td>
                                <td class="article-description">{!!$article->article_description!!}</td>
                                <td>
                                    <a href="/category-admin/{{$article->category_id}}">
                                        {{$article->category_name}}
                                    </a>
                                </td>
                                <td class="center">
                                    @if($article->article_on_site)
                                        Da
                                    @else
                                        Nu
                                    @endif

                                </td>
                                <td class="center">
                                    @if($article->article_on_facebook)
                                    Da
                                    @else
                                    Nu
                                    @endif
                                </td>
                                <td class="center">{{date('d/m/Y',strtotime($article->created_at))}}</td>
                                <td class="center">{{date('d/m/Y',strtotime($article->updated_at))}}</td>
                                <td class="center">
                                    <a href="/articles-admin/{{$article->article_id}}" >
                                        <button type="button" class="btn btn-info btn-sm">
                                        <span class="glyphicon glyphicon-pencil"></span> Edit
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <button type="button" onclick="deleteArticle({{$article->article_id}})" class="btn btn-danger btn-sm">
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


