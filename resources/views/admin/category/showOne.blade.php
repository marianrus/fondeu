@extends('layouts.backend.admin')

@section('title')
Categorii
@stop

@section('content')
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-9">
            <form action="/category-admin/{{$category->category_id}}" method="post">
                {!! csrf_field() !!}
                {!! method_field('PUT') !!}
                <fieldset disabled id="fieldsetId">

                    <div class="form-group">
                        <label for="category-disabledInput">Nume</label>
                        <input class="form-control" id="category-disabledInput"
                               type="text"
                               placeholder="Nume"
                               disabled
                               name="category_name"
                               value="{{$category->category_name}}"
                            >
                    </div>

                    <div class="form-group">
                        <label>Descriere</label>
                        <textarea
                            class="form-control"
                            rows="3"
                            name="category_description"
                            id="category-disabledTextarea">{{$category->category_description}}</textarea>
                    </div>
                </fieldset>
                <button class="btn btn-danger pull-right" id="category-cancel" type="button">Cancel</button>
                <button class="btn btn-primary pull-right" id="category-save" type="submit">Salveaza</button>
            </form>
            <button class="btn btn-success" type="button" id="category-edit">Editeaza</button>
        </div>
    </div>
</div>


@stop