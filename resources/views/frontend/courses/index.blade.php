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

<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
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
                    <select name="category" class="form-control ajax">
                        <option value="">Toate</option>
                        @foreach($categories as $cat)
                        <option id="{{$cat->category_id}}">{{$cat->category_name}}</option>
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
                        Price Range
                    </a>
                </h4>
            </div>
            <div id="price" class="panel-collapse collapse in">
                <div class="panel-body">
                    <input name="price" id="pricing" class="ajax" type="text" value="" data-slider-min="4" data-slider-max="50" data-slider-step="1" data-slider-value="[4,18]"/><br />
                    $4 <span class="pull-right">$50</span>

                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#price">
                        Price Range
                    </a>
                </h4>
            </div>
            <div id="price" class="panel-collapse collapse in">
                <div class="panel-body">
                    <input name="price" id="pricing" class="ajax" type="text" value="" data-slider-min="4" data-slider-max="50" data-slider-step="1" data-slider-value="[4,18]"/><br />
                    $4 <span class="pull-right">$50</span>

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
                    <a data-toggle="collapse" data-parent="#accordion" href="#compability">
                        Compability
                    </a>
                </h4>
            </div>
            <div id="compability" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="browsers[]" value="latest-chrome" checked>
                            Latest Chrome</label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="browsers[]" value="latest-firefox" checked>
                            Latest Firefox</label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="browsers[]" value="latest-safari" checked>
                            Latest Safari</label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="browsers[]" value="latest-opera" checked>
                            Latest Opera</label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="browsers[]" value="internet-explorer-11" checked>
                            Internet Explorer 11</label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="browsers[]" value="internet-explorer-10" checked>
                            Internet Explorer 10</label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="browsers[]" value="internet-explorer-9" checked>
                            Internet Explorer 9</label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="browsers[]" value="internet-explorer-8" >
                            Internet Explorer 8</label>
                    </div>

                    <span class="select-all">Select all</span> |
                    <span class="deselect-all">Deselect all</span>

                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#columns">
                        Columns
                    </a>
                </h4>
            </div>
            <div id="columns" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="columns[]" value="1" checked>
                            1</label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="columns[]" value="2" checked>
                            2</label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="columns[]" value="3" checked>
                            3</label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="columns[]" value="4plus" checked>
                            4+</label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="columns[]" value="na" checked>
                            N/A</label>
                    </div>

                    <span class="select-all">Select all</span> |
                    <span class="deselect-all">Deselect all</span>

                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#preprocessors">
                        CSS Preprocessors
                    </a>
                </h4>
            </div>
            <div id="preprocessors" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="preprocessors[]" value="sass" checked>
                            SASS</label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="preprocessors[]" value="less" checked>
                            LESS</label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="preprocessors[]" value="na" checked>
                            N/A</label>
                    </div>

                    <span class="select-all">Select all</span> |
                    <span class="deselect-all">Deselect all</span>

                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#type">
                        Type
                    </a>
                </h4>
            </div>
            <div id="type" class="panel-collapse collapse in">
                <div class="panel-body">

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="types[]" value="wrapbootstrap" checked>
                            Wrapbootstrap</label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ajax" name="types[]" value="bootstrapbay" checked>
                            BootstrapBay</label>
                    </div>



                    <span class="select-all">Select all</span> |
                    <span class="deselect-all">Deselect all</span>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function(){
                $("#pricing").slider({
                    min : 10,
                    max : 30
                });
            })

            // $(".search-query").on("keydown", function(event){
            //     if (event.keyCode == 13) {
            //       changeHash();
            //     }
            //     e.preventDefault();
            // });
        </script>
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
                        <p class="course-description">{{substr($courses[$index]->course_description,0 ,300)}}</p>
                        <a class="read_more" href="post_quote.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>
                    </div>
                </li>
                @if($index++)@endif
            @endfor
        </ul>
        @endfor
    </div>
    @include('layouts.frontend.master-pagination')
</div>
@stop