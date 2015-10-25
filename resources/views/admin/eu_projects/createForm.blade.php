@extends('layouts.backend.admin')

@section('title')
Proiecte Europene
@stop

@section('content')
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-9">
            <form action="/eu-project-admin" method="post">
                {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="project-disabledInput">Nume</label>
                        <input class="form-control" id="project-disabledInput"
                               type="text"
                               placeholder="Nume"
                               name="eu_project_name">
                    </div>
                    <div class="form-group">
                        <label for="project_start_at">Incepe la</label>
                        <input class="form-control"  id="project_start_at"
                               type="text"
                               placeholder="Incepe La"
                               name="started_at">
                    </div>
                    <div class="form-group">
                        <label for="project_start_at">Se termina la</label>
                        <input class="form-control"  id="project_ends_at"
                               type="text"
                               placeholder="Se termina"
                               name="ends_at">
                    </div>
                    <div class="form-group">
                        <label for="project_start_at">Link extern</label>
                        <input class="form-control"  id="external_link"
                               type="text"
                               placeholder="Link extern"
                               name="eu_project_link">
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
                        <select name="eu_project_type_id" class="form-control">
                            @foreach($project_types as $pt)
                            <option value="{{$pt->eu_project_type_id}}">{{$pt->eu_project_type_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Descriere</label>
                        <textarea
                            class="form-control"
                            rows="3"
                            name="eu_project_description">
                        </textarea>
                    </div>
                <button class="btn btn-danger pull-right"  type="button">Cancel</button>
                <button class="btn btn-primary pull-right"  type="submit">Salveaza</button>
            </form>
        </div>
    </div>
</div>


@stop