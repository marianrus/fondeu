<!DOCTYPE html>
<html>
<head>
    <title>Fond News @yield('title')</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="keywords" content="Medic, Medical Center" />
    <meta name="description" content="Responsive Medical Health Template" />
    <link href='//fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('css/Frontend/reset.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/Frontend/superfish.css')}}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/Frontend/prettyPhoto.css')}}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/Frontend/jquery.qtip.css')}}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/Frontend/style.css')}}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/Frontend/menu_styles.css')}}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/Frontend/animations.css')}}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/Frontend/responsive.css')}}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/Frontend/odometer-theme-default.css')}}" />
<!--    <link rel="stylesheet" href="{{ URL::asset('css/Frontend/dark_skin.css')}}"/>-->
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
    <div class="site_container">
        <div class="header_top_bar_container clearfix style_4">
            <div class="header_top_bar">
                <form class="search" action="search.html" method="get">
                    <input type="text" name="s" placeholder="Search..." value="Search..." class="search_input hint">
                    <input type="submit" class="search_submit" value="">
                </form>
                <!--<ul class="social_icons dark clearfix">
                <ul class="social_icons colors clearfix">-->
                <ul class="social_icons clearfix">
                    <li>
                        <a target="_blank" href="http://facebook.com/QuanticaLabs" class="social_icon facebook" title="facebook">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://twitter.com/QuanticaLabs" class="social_icon twitter" title="twitter">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="mailto:contact@pressroom.com" class="social_icon mail" title="mail">
                            &nbsp;
                        </a>
                    </li>
                    <li>
                        <a href="http://themeforest.net/user/QuanticaLabs/portfolio" class="social_icon envato" title="envato">
                            &nbsp;
                        </a>
                    </li>
                </ul>
                <div class="latest_news_scrolling_list_container">
                    <ul>
                        <li class="category">LATEST</li>
                        <li class="left"><a href="#"></a></li>
                        <li class="right"><a href="#"></a></li>
                        <li class="posts">
                            <ul class="latest_news_scrolling_list">
                                <li>
                                    <a href="post.html" title="">Climate Change Debate While Britain Floods</a>
                                </li>
                                <li>
                                    <a href="post.html" title="">The Public Health Crisis Hiding in Our Food</a>
                                </li>
                                <li>
                                    <a href="post.html" title="">Nuclear Fusion Closer to Becoming a Reality</a>
                                </li>
                            </ul>
                        </li>
                        <li class="date">
                            <abbr title="04 Apr 2014" class="timeago current">04 Apr 2014</abbr>
                            <abbr title="04 May 2014" class="timeago">04 May 2014</abbr>
                            <abbr title="04 June 2014" class="timeago">04 June 2014</abbr>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header_container">
            <div class="header clearfix">
                <div class="logo">
                    <h1><a href="/" title="{{Config::get('fondnews.application_name')}}">{{Config::get('fondnews.application_name')}}</a></h1>
                    <h4>{{Config::get('fondnews.application_description')}}</h4>
                </div>
                <div class="placeholder">728 x 90</div>
            </div>
        </div>
    @include('layouts.frontend.master-menu')