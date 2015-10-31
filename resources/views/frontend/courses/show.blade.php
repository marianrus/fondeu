@extends('layouts.frontend.master')


@section('content')
<div class="page_layout page_margin_top clearfix">
<div class="row page_margin_top">
    <div class="column column_1_1">
        <div class="horizontal_carousel_container small">
            <ul class="blog horizontal_carousel autoplay-1 scroll-1 visible-3 navigation-1 easing-easeInOutQuint duration-750">
                <li class="post">
                    <a href="post.html" title="New Painkiller Rekindles Addiction Concerns">
                        <img src='images/samples/510x187/image_08.jpg' alt='img'>
                    </a>
                    <h5><a href="post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
                        <li class="date">
                            10:11 PM, Feb 02
                        </li>
                    </ul>
                </li>
                <li class="post">
                    <a href="post_small_image.html" title="High Altitudes May Aid Weight Control">
                        <img src='images/samples/510x187/image_01.jpg' alt='img'>
                    </a>
                    <h5><a href="post_small_image.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
                        <li class="date">
                            10:11 PM, Feb 02
                        </li>
                    </ul>
                </li>
                <li class="post">
                    <a href="post_gallery.html" title="Built on Brotherhood, Club Lives Up to Name">
                        <span class="icon gallery"></span>
                        <img src='images/samples/510x187/image_03.jpg' alt='img'>
                    </a>
                    <h5><a href="post_gallery.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
                        <li class="date">
                            10:11 PM, Feb 02
                        </li>
                    </ul>
                </li>
                <li class="post first">
                    <a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">
                        <img src='images/samples/510x187/image_09.jpg' alt='img'>
                    </a>
                    <h5><a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
                        <li class="date">
                            10:11 PM, Feb 02
                        </li>
                    </ul>
                </li>
                <li class="post first">
                    <a href="post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">
                        <img src='images/samples/510x187/image_07.jpg' alt='img'>
                    </a>
                    <h5><a href="post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
                        <li class="date">
                            10:11 PM, Feb 02
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<hr class="divider page_margin_top">
<div class="row page_margin_top">

<div class="column column_2_3">
<div class="row">
    <div class="post single">
        <h1 class="post_title">
            {{$course[0]['course_name']}}
        </h1>
        <ul class="post_details clearfix">
            <li class="detail category">In
                <a href="/categorie/{{$course[0]['category_course_id']}}"
                     title="{{$course[0]['course_name']}}">
                    {{$course[0]['category_course_name']}}
                </a>
            </li>
            <li class="detail date">8:25 PM, Feb 23</li>
            <li class="detail author">By <a href="author.html" title="{{$course[0]['partner_name']}}">{{$course[0]['partner_name']}}</a></li>
            <li class="detail views">{{$course[0]['viewed']}} Vizualizari</li>
            <li class="detail comments"><a href="#comments_list" class="scroll_to_comments" title="6 Comments">6 Comments</a></li>
        </ul>

<!--        <a href="images/samples/690x450/image_10.jpg" class="post_image page_margin_top prettyPhoto" title="Britons are never more comfortable than when talking about the weather.">-->
<!--            <img src='images/samples/690x450/image_10.jpg' alt='img'>-->
<!--        </a>-->

<!--        <div class="sentence">-->
<!--            <span class="text">Britons are never more comfortable than when talking about the weather.</span>-->
<!--            <span class="author">John Smith, Flickr</span>-->
<!--        </div>-->


        <div class="post_content page_margin_top_section clearfix">
            <div class="content_box">
                <h3 class="excerpt">
                    Politicians have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the site of disasters.
                </h3>
                <div class="text">
                    <p>{{$course[0]['course_description']}}</p>
                    <p>Politicians have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as “flood tourists” at the site of disasters, incapable of helping those in crisis and only there for a photo opportunity. The Environment Agency, the body responsible for combating floods and managing rivers, has also been blamed for failing to curb the disasters. But there’s an ever larger debate over the role of climate change in the current floods and storms, and it has been unremittingly hostile.</p>
                    <blockquote class="inside_text page_margin_top">
                        Politicians have looked weak in the face of such natural disaster, with many facing criticism from local residents.
                        <span class="author">&#8212;&nbsp;&nbsp;Julia Slingo, ETF</span>
                    </blockquote>
                    <p>For those affected by flooding however, their immediate concerns are not necessarily about the manmade changes to the earth’s atmosphere. A YouGov poll from February found that while 84% of those surveyed believed Britain was likely to experience similar extreme weather events in the next few years, only 30% thought it was connected to man-made climate change.</p>
                    <p>There is no evidence to counter the basic premise that a warmer world will lead to more intense daily and hourly rain events. When heavy rain in 2000 devastated parts of Britain, a later study found the climate change had doubled the chances of the flood occurring, said Julia Slingo.</p>
                    <a title="6 Comments" href="post.html" class="read_more page_margin_top scroll_to_comments"><span class="arrow"></span><span>6 COMMENTS</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

    @include('layouts.frontend.master-share')

<div class="row page_margin_top">
    <ul class="taxonomies tags left clearfix">
        <li>
            <a href="#" title="People">PEOPLE</a>
        </li>
        <li>
            <a href="#" title="Sport">SPORT</a>
        </li>
    </ul>
    <ul class="taxonomies categories right clearfix">
        <li>
            <a href="category_health.html" title="HEALTH">HEALTH</a>
        </li>
    </ul>
</div>
<div class="row page_margin_top_section">
    <h4 class="box_header">Posts Carousel</h4>
    <div class="horizontal_carousel_container page_margin_top">
        <ul class="blog horizontal_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
            <li class="post">
                <a href="post.html" title="New Painkiller Rekindles Addiction Concerns">
                    <img src='images/samples/330x242/image_08.jpg' alt='img'>
                </a>
                <h5><a href="post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
                <ul class="post_details simple">
                    <li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
                    <li class="date">
                        10:11 PM, Feb 02
                    </li>
                </ul>
            </li>
            <li class="post">
                <a href="post_small_image.html" title="High Altitudes May Aid Weight Control">
                    <img src='images/samples/330x242/image_01.jpg' alt='img'>
                </a>
                <h5><a href="post_small_image.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
                <ul class="post_details simple">
                    <li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
                    <li class="date">
                        10:11 PM, Feb 02
                    </li>
                </ul>
            </li>
            <li class="post">
                <a href="post_gallery.html" title="Built on Brotherhood, Club Lives Up to Name">
                    <span class="icon gallery"><!--<span class="info">999</span>--></span>
                    <img src='images/samples/330x242/image_03.jpg' alt='img'>
                </a>
                <h5><a href="post_gallery.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>
                <ul class="post_details simple">
                    <li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
                    <li class="date">
                        10:11 PM, Feb 02
                    </li>
                </ul>
            </li>
            <li class="post first">
                <a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">
                    <img src='images/samples/330x242/image_09.jpg' alt='img'>
                </a>
                <h5><a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>
                <ul class="post_details simple">
                    <li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
                    <li class="date">
                        10:11 PM, Feb 02
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="row page_margin_top_section">
    <h4 class="box_header">Leave a Comment</h4>
    <p class="padding_top_30">Your email address will not be published. Required fields are marked with *</p>
    <form class="comment_form margin_top_15" id="comment_form" method="post" action="post.html">
        <fieldset class="column column_1_3">
            <input class="text_input" name="name" type="text" value="Your Name *" placeholder="Your Name *">
        </fieldset>
        <fieldset class="column column_1_3">
            <input class="text_input" name="email" type="text" value="Your Email *" placeholder="Your Email *">
        </fieldset>
        <fieldset class="column column_1_3">
            <input class="text_input" name="website" type="text" value="Website" placeholder="Website">
        </fieldset>
        <fieldset>
            <textarea name="message" placeholder="Comment *">Comment *</textarea>
        </fieldset>
        <fieldset>
            <input type="submit" value="POST COMMENT" class="more active">
            <a href="#cancel" id="cancel_comment" title="Cancel reply">Cancel reply</a>
        </fieldset>
    </form>
</div>

@include('layouts.frontend.master-comment')

</div>
@stop

@section('right-sidebar')
<div class="column column_1_3">

@include('frontend.courses.highLightCourses')


<h4 class="box_header page_margin_top_section">Categories</h4>
<ul class="taxonomies columns clearfix page_margin_top">
    <li>
        <a href="category_world.html" title="WORLD">WORLD</a>
    </li>
    <li>
        <a href="category_health.html" title="HEALTH">HEALTH</a>
    </li>
    <li>
        <a href="category_sports.html" title="SPORTS">SPORTS</a>
    </li>
    <li>
        <a href="category_science.html" title="SCIENCE">SCIENCE</a>
    </li>
    <li>
        <a href="category_lifestyle.html" title="LIFESTYLE">LIFESTYLE</a>
    </li>
</ul>
<h4 class="box_header page_margin_top_section">Tags</h4>
<ul class="taxonomies clearfix page_margin_top">
    <li>
        <a href="#" title="Business">BUSINESS</a>
    </li>
    <li>
        <a href="#" title="Education">EDUCATION</a>
    </li>
    <li>
        <a href="#" title="Family">FAMILY</a>
    </li>
    <li>
        <a href="#" title="Film">FILM</a>
    </li>
    <li>
        <a href="#" title="Food">FOOD</a>
    </li>
    <li>
        <a href="#" title="Garden">GARDEN</a>
    </li>
    <li>
        <a href="#" title="People">PEOPLE</a>
    </li>
    <li>
        <a href="#" title="Sport">SPORT</a>
    </li>
</ul>
</div>
</div>
</div>

@stop