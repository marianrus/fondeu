<!DOCTYPE html>
<html>
<head>
    <title>Fond News @yield('title')</title>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="keywords" content="{{Config::get('fondnews.application_name')}}. {{Config::get('fondnews.application_description')}}" />
    <meta name="description" content="{{Config::get('fondnews.application_description')}}" />
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
    <link rel="stylesheet" href="{{ URL::asset('js/Frontend/bootstrap-modal/css/bootstrap-modal.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('js/Frontend/bootstrap-modal/css/bootstrap-modal-bs3patch.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('css/Dashboard/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('plugins/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('plugins/select2/bootstrap-select2.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('plugins/datepicker/css/datepicker.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('plugins/bootstrap-social-buttons/bootstrap-social.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('plugins/sweetalert/lib/sweet-alert.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" />
    <link rel="shortcut icon" href="images/favicon.ico">
<!--    <link media="all" type="text/css" rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">-->
    <link media="all" type="text/css" rel="stylesheet" href="http://brick.a.ssl.fastly.net/Source+Sans+Pro:300,400,400i,600/Open+Sans:300,400,600,700">
</head>

<body>
    <div class="loading">Loading&#8230;</div>
    <div class="site_container">
        <div class="header_top_bar_container clearfix style_4">
            <div class="header_top_bar">
                <form class="search" action="search.html" method="get">
                    <input type="text" name="s" placeholder="Search..." value="Search..." class="search_input hint">
                    <input type="submit" class="search_submit" value="">
                </form>
                <ul class="social_icons float-left">
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
                    @if(Auth::check())
                    <li class="dropdown">
                        <a href="autentificare/" class="dropdown-toggle user" data-toggle="dropdown">
                            <img src="images/people/guy-5.jpg" alt="Bill" class="img-circle" width="40" /> Bill <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/cont">Cont</a></li>
                            <li><a href="user-private-messages.html">Messages</a></li>
                            <li><a href="/autentificare/logout">Iesire</a></li>
                        </ul>
                    </li>

                    @else
                    <li>
                        <a href="/autentificare" class="account" title="account">
                            Cont
                        </a>
                    </li>
                    @endif
                </ul>

<!--                <ul class="login clearfix">-->
<!--                -->
<!--                </ul>-->
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
