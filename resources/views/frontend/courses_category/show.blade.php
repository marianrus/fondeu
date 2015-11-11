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

<div class="row">
<div class="column column_1_3 page_margin_top">
<div class="tabs no_scroll clearfix">
    <ul class="tabs_navigation clearfix">
        <li>
            <a href="#sidebar-most-read" title="Most Read">
                Most Read
            </a>
            <span></span>
        </li>
        <li>
            <a href="#sidebar-most-commented" title="Commented">
                Commented
            </a>
            <span></span>
        </li>
    </ul>
    <div id="sidebar-most-read">
        <ul class="blog rating page_margin_top clearfix">
            <li class="post">
                <a href="post.html" title="Nuclear Fusion Closer to Becoming a Reality">
                    <img src='images/samples/510x187/image_12.jpg' alt='img'>
                </a>
                <div class="post_content">
                    <span class="number animated_element" data-value="6 257"></span>
                    <h5><a href="post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
                    </ul>
                </div>
            </li>
            <li class="post">
                <div class="post_content">
                    <span class="number animated_element" data-value="5 062"></span>
                    <h5><a href="post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a href="category_world.html" title="WORLD">WORLD</a></li>
                    </ul>
                </div>
            </li>
            <li class="post">
                <div class="post_content">
                    <span class="number animated_element" data-value="4 778"></span>
                    <h5><a href="post.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
                    </ul>
                </div>
            </li>
            <li class="post">
                <div class="post_content">
                    <span class="number animated_element" data-value="754"></span>
                    <h5><a href="post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a href="category_science.html" title="SCIENCE">SCIENCE</a></li>
                    </ul>
                </div>
            </li>
            <li class="post">
                <div class="post_content">
                    <span class="number animated_element" data-value="52"></span>
                    <h5><a href="post.html" title="Syrian Civilians Trapped for Months Continue to be Evacuated">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a href="category_science.html" title="SCIENCE">SCIENCE</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <a class="more page_margin_top" href="#">SHOW MORE</a>
    </div>
    <div id="sidebar-most-commented">
        <ul class="blog rating page_margin_top clearfix">
            <li class="post">
                <a href="post_small_image.html" title="Nuclear Fusion Closer to Becoming a Reality">
                    <img src='images/samples/510x187/image_02.jpg' alt='img'>
                </a>
                <div class="post_content">
                    <span class="number animated_element" data-value="70"></span>
                    <h5><a href="post_small_image.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
                    </ul>
                </div>
            </li>
            <li class="post">
                <div class="post_content">
                    <span class="number animated_element" data-value="62"></span>
                    <h5><a href="post_small_image.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a href="category_world.html" title="WORLD">WORLD</a></li>
                    </ul>
                </div>
            </li>
            <li class="post">
                <div class="post_content">
                    <span class="number animated_element" data-value="30"></span>
                    <h5><a href="post.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
                    </ul>
                </div>
            </li>
            <li class="post">
                <div class="post_content">
                    <span class="number animated_element" data-value="25"></span>
                    <h5><a href="post_quote.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a href="category_science.html" title="SCIENCE">SCIENCE</a></li>
                    </ul>
                </div>
            </li>
            <li class="post">
                <div class="post_content">
                    <span class="number animated_element" data-value="4"></span>
                    <h5><a href="post_quote_2.html" title="Syrian Civilians Trapped for Months Continue to be Evacuated">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a href="category_science.html" title="SCIENCE">SCIENCE</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <a class="more page_margin_top" href="#">SHOW MORE</a>
    </div>
</div>
<h4 class="box_header page_margin_top_section">Latest Posts</h4>
<div class="vertical_carousel_container clearfix">
    <ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
        <li class="post">
            <a href="post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
                <span class="icon small gallery"></span>
                <img src='images/samples/100x100/image_06.jpg' alt='img'>
            </a>
            <div class="post_content">
                <h5>
                    <a href="post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
                </h5>
                <ul class="post_details simple">
                    <li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
                    <li class="date">
                        10:11 PM, Feb 02
                    </li>
                </ul>
            </div>
        </li>
        <li class="post">
            <a href="post_soundcloud.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
                <img src='images/samples/100x100/image_12.jpg' alt='img'>
            </a>
            <div class="post_content">
                <h5>
                    <a href="post_soundcloud.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
                </h5>
                <ul class="post_details simple">
                    <li class="category"><a href="category_world.html" title="WORLD">WORLD</a></li>
                    <li class="date">
                        10:11 PM, Feb 02
                    </li>
                </ul>
            </div>
        </li>
        <li class="post">
            <a href="post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">
                <img src='images/samples/100x100/image_02.jpg' alt='img'>
            </a>
            <div class="post_content">
                <h5>
                    <a href="post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
                </h5>
                <ul class="post_details simple">
                    <li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
                    <li class="date">
                        10:11 PM, Feb 02
                    </li>
                </ul>
            </div>
        </li>
        <li class="post">
            <a href="post_small_image.html" title="Nuclear Fusion Closer to Becoming a Reality">
                <img src='images/samples/100x100/image_13.jpg' alt='img'>
            </a>
            <div class="post_content">
                <h5>
                    <a href="post_small_image.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>
                </h5>
                <ul class="post_details simple">
                    <li class="category"><a href="category_science.html" title="SCIENCE">SCIENCE</a></li>
                    <li class="date">
                        10:11 PM, Feb 02
                    </li>
                </ul>
            </div>
        </li>
    </ul>
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
                            <li class="category"><a href="/categorie/ {{$category['category_course_id']}}" title=" {{$category['category_course_name']}}"> {{$category['category_course_name']}}</a></li>
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
@{{ @include('layouts.frontend.master-pagination',$paginate=$courses) }}
</div>
@stop