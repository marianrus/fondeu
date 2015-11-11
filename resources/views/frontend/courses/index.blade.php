@extends('layouts.frontend.master')

@section('content')
<div class="page_header clearfix page_margin_top">

    @include('layouts.frontend.master-breadcrumb')

</div>

<div class="page_layout clearfix">
<div class="divider_block clearfix">
    <hr class="divider first">
    <hr class="divider subheader_arrow">
    <hr class="divider last">
</div>


<div class="col-lg-12 margin_top_20 margin-bottom" id="primary">
    <div id="search" class="input-group input-group-lg">
        <input name="search" type="text" class="form-control search-query ajax" placeholder="Cauta prin Cursuri" />
           <span class="input-group-btn">
             <button class="btn btn-primary btn-search" type="button"><i class="fa fa-search">Cauta</i></button>
           </span>
    </div>

    <div class="row loading" id="items">
    </div>
</div>

<br/>

<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>

<!--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>-->
<div class="row">
<div class="column column_1_3 page_margin_top">

    <div class="col-lg-12" id="secondary">
        <div class="panel-group-ba" id="filters">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#categories">
                        Categorie
                    </a>
                </h4>
            </div>
            <div id="categories" class="panel-collapse collapse in">
                <div class="panel-body">
                    <select id="category" class="form-control ajax">
                        <option value="0">Toate</option>
                        @foreach($categories as $cat)
                        <option value="{{$cat->category_course_id}}">{{$cat->category_course_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#categories">
                        Judet
                    </a>
                </h4>
            </div>
            <div class="panel-collapse collapse in">
                <div class="panel-body">
                    <select id="county" name="category" class="form-control ajax">
                        <option >Toate</option>
                        @foreach($counties as $county)
                            <option value="{{$county->county_id}}">{{$county->county_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#city-accordion">
                        Localitate
                    </a>
                </h4>
            </div>
            <div id="city-accordion" class="panel-collapse collapse in">
                <div class="panel-body">
                    <select id="cities" class="form-control">
                    </select>
                </div>
            </div>
        </div>



        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#price">
                       Pret
                    </a>
                </h4>
            </div>
            <div id="price" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="form-group ">
                        <div class="pull-left col-md-6">
                            <input class="form-control pull-left center_align number col-md-4"
                                   type="text"
                                   placeholder="De la"
                                   value="0"
                                   id="price_from">
                        </div>
                        <div class="pull-left col-md-6">
                            <input class="form-control center_align pull-left number col-md-4"
                                   type="text"
                                   placeholder="Pana la"
                                   value="1000"
                                   id="price_to">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#branches">
                        Cost
                    </a>
                </h4>
            </div>
            <div id="branches" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="branches[]" value="bs3" checked>
                            Platite
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="branches[]" value="bs2" checked>
                            Gratis
                        </label>
                    </div>

                    <span class="select-all">Select all</span> |
                    <span class="deselect-all">Deselect all</span>

                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#opportunities">
                        Oportunitati
                    </a>
                </h4>
            </div>
            <div id="opportunities" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="checkbox">
                        <label>
                            <input type="radio"  name="opportunities" value="1" >
                            Cu</label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="radio"  name="opportunities" value="0">
                            Fara</label>
                    </div>
                </div>
            </div>
        </div>



        </div>
    </div>
</div>
@stop



@section('right-sidebar')
<div class="column column_2_3">
    <div class="row">
        @for($columns = 0, $index=0; $columns<2; $columns++)
            <ul class="blog column column_1_2">
            @for($rows=0; $rows< 4; $rows++)
                @if($index==count($courses)) @break @endif
                <li class="post">
                    <div class="post_content">
                        <h2 class="with_number">
                            <a href="post_quote.html" title="Built on Brotherhood, Club Lives Up to Name">
                                {{$courses[$index]->course_name}}
                            </a>
                            <a class="comments_number" href="post_quote.html#comments_list" title="vizualizari">{{$courses[$index]->viewed}}<span class="arrow_comments"></span></a>
                        </h2>
                        <ul class="post_details">
                            <li class="category">
                                <a href="/categorie/{{$courses[$index]->category_course_id}}" title="{{$courses[$index]->category_course_name}}">{{$courses[$index]->category_course_name}}</a></li>
                            <li class="date">
                                10:11 PM, Feb 02
                            </li>
                        </ul>
                        <p class="course-description">{{$courses[$index]->course_description_short}}</p>
                        <p class="pull-left"><span class="glyphicon glyphicon-map-marker">{{$courses[$index]->county_name}}, {{$courses[$index]->city_name}}</span></p>
                        <a class="read_more" href="post_quote.html" title="Read morzze"><span class="arrow"></span><span>READ MORE</span></a>
                    </div>
                </li>
                @if($index++)@endif
            @endfor
        </ul>
        @endfor
    </div>

    @include('layouts.frontend.master-pagination', $paginate=$courses)
</div>
@stop