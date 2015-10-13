@extends('layouts.admin')

@section('title')
Categorii
@stop

@section('content')
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-9">
            <form action="/category-admin" method="post">
                {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="category-disabledInput">Nume</label>
                        <input class="form-control" id="category-disabledInput"
                               type="text"
                               placeholder="Nume"
                               name="category_name">
                    </div>

                    <div class="form-group">
                        <label>Descriere</label>
                        <textarea
                            class="form-control"
                            rows="3"
                            name="category_description">
                        </textarea>
                    </div>
                <button class="btn btn-danger pull-right"  type="button">Cancel</button>
                <button class="btn btn-primary pull-right"  type="submit">Salveaza</button>
            </form>
        </div>
    </div>
</div>


@stop