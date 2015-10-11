@extends('layouts.admin')

@section('title')
    Articole
@stop

@section('content')

<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Nou articol
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-9">
                    <form  action="/articles-admin-form" method="post">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label>Numele Articolului</label>
                            <input class="form-control" name="article_name" placeholder="Numele Articolului">
                            <p class="help-block">Numele articolului ce v-a aparea pe site.</p>
                        </div>

                        <div class="form-group">
                            <label>Categoria</label>
                            <select name="category_id" class="form-control">
                                @foreach($category as $cat)
                                    <option value="{{$cat->category_id}}">{{$cat->category_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Descriere</label>
                            <textarea class="form-control" name="article_description" id="description" rows="20"></textarea>
                            <iframe id="form_target" name="form_target" style="display:none"></iframe>
<!--                            <form id="uploadForm" action="/upload"-->
<!--                                  target="form_target"-->
<!--                                  method="post"-->
<!--                                  enctype="multipart/form-data"-->
<!--                                  style="width:0px;height:0;overflow:hidden">-->
<!--                                <input id="imageUpload" name="image" type="file" style="display: none"-->
<!--                                       onchange="$('#uploadForm').submit();console.log('pressed')"-->
<!--                                    >-->
<!--                            </form>-->
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
                            <a href="/articles-admin"><button class="btn btn-danger" type="button">Anuleaza</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
