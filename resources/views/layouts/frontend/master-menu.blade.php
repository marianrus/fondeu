<div class="menu_container clearfix sticky">
    <nav>
    <ul class="sf-menu">
    <li class="submenu selected">
        <a href="/" title="Home">
            Acasa
        </a>
    </li>
    <li class="submenu">
        <a href="/articles">
            Articole
        </a>
    </li>


    <li class="submenu mega_menu_parent">
        <a href="/cursuri" title="Mega Menu">
            Cursuri
        </a>
    <ul>
        <li class="submenu">
            <a href="blog.html" title="Latest Posts">
                Cele mai noi
            </a>
            <ul class="mega_menu blog">
                <li class="post">
                    <a href="post.html" title="New Painkiller Rekindles Addiction Concerns">
                        <img src='images/samples/330x242/image_08.jpg' alt='img'>
                    </a>
                    <h5><a href="post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles
                            Addiction Concerns</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a title="HEALTH" href="category_health.html">HEALTH</a></li>
                        <li class="date">
                            10:11 PM, Feb 02
                        </li>
                    </ul>
                </li>
                <li class="post">
                    <a href="post.html" title="High Altitudes May Aid Weight Control">
                        <img src='images/samples/330x242/image_11.jpg' alt='img'>
                    </a>
                    <h5><a href="post.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight
                            Control</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a title="HEALTH" href="category_health.html">HEALTH</a></li>
                        <li class="date">
                            10:11 PM, Feb 02
                        </li>
                    </ul>
                </li>
                <li class="post">
                    <a href="post.html" title="Build on Brotherhood, Club Lives Up to Name">
                        <img src='images/samples/330x242/image_06.jpg' alt='img'>
                    </a>
                    <h5><a href="post.html" title="Build on Brotherhood, Club Lives Up to Name">Build on Brotherhood, Club
                            Lives Up to Name</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a title="HEALTH" href="category_health.html">HEALTH</a></li>
                        <li class="date">
                            10:11 PM, Feb 02
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="submenu">
            <a href="blog.html" title="Recent Galleries">
                Recent Galleries
            </a>
            <ul class="mega_menu blog">
                <li class="post">
                    <a href="post_gallery.html" title="Build on Brotherhood, Club Lives Up to Name">
                        <span class="icon gallery"></span>
                        <img src='images/samples/330x242/image_03.jpg' alt='img'>
                    </a>
                    <h5><a href="post_gallery.html" title="Build on Brotherhood, Club Lives Up to Name">Build on Brotherhood,
                            Club Lives Up to Name</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a title="HEALTH" href="category_health.html">HEALTH</a></li>
                        <li class="date">
                            10:11 PM, Feb 02
                        </li>
                    </ul>
                </li>
                <li class="post">
                    <a href="post_gallery.html" title="High Altitudes May Aid Weight Control">
                        <span class="icon gallery"></span>
                        <img src='images/samples/330x242/image_05.jpg' alt='img'>
                    </a>
                    <h5><a href="post_gallery.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid
                            Weight Control</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a title="HEALTH" href="category_health.html">HEALTH</a></li>
                        <li class="date">
                            10:11 PM, Feb 02
                        </li>
                    </ul>
                </li>
                <li class="post">
                    <a href="post_gallery.html" title="New Painkiller Rekindles Addiction Concerns">
                        <span class="icon gallery"></span>
                        <img src='images/samples/330x242/image_04.jpg' alt='img'>
                    </a>
                    <h5><a href="post_gallery.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller
                            Rekindles Addiction Concerns</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a title="HEALTH" href="category_health.html">HEALTH</a></li>
                        <li class="date">
                            10:11 PM, Feb 02
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="submenu">
            <a href="blog.html" title="Recent Reviews">
                Cele mai vizualizate
            </a>
            <ul class="mega_menu blog">
                @foreach($mostViewedCourses as $course)
                <li class="post first">
                    <h5>
                        <a href="/curs/{{$course->course_id}}" title="{{$course->course_name}}">
<!--                            <span class="icon"><span>{{$course->viewed}}</span></span>-->
                            {{$course->course_name}}
                        </a>
                    </h5>
                    <ul class="post_details simple">
                        <li class="category">
                            <a title="{{$course->category_course_name}}" href="/categorie/{{$course->category_course_id}}">
                                {{$course->category_course_name}}
                            </a>
                        </li>
                        <li class="date">
                            10:11 PM, Feb 02
                        </li>
                    </ul>
                </li>
                @endforeach
            </ul>
        </li>



        <li class="submenu">
            <a href="blog.html" title="Most Read">
                Most Read
            </a>

            <div class="mega_menu row">
                <div class="column column_1_2">
                    <ul class="blog small">
                        <li class="post">
                            <a href="post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
                                <img src='images/samples/100x100/image_06.jpg' alt='img'>
                            </a>

                            <div class="post_content">
                                <h5>
                                    <a href="post.html"
                                       title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking
                                        Illnes and Salt Leaves Researchers Doubtful</a>
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
                            <a href="post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
                                <img src='images/samples/100x100/image_12.jpg' alt='img'>
                            </a>

                            <div class="post_content">
                                <h5>
                                    <a href="post.html"
                                       title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian
                                        Civilians Trapped For Months Continue To Be Evacuated</a>
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
                            <a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">
                                <img src='images/samples/100x100/image_02.jpg' alt='img'>
                            </a>

                            <div class="post_content">
                                <h5>
                                    <a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on
                                        Brotherhood, Club Lives Up to Name</a>
                                </h5>
                                <ul class="post_details simple">
                                    <li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
                                    <li class="date">
                                        10:11 PM, Feb 02
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="column column_1_2">
                    <ul class="blog small">
                        <li class="post">
                            <a href="post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
                                <img src='images/samples/100x100/image_04.jpg' alt='img'>
                            </a>

                            <div class="post_content">
                                <h5>
                                    <a href="post.html"
                                       title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking
                                        Illnes and Salt Leaves Researchers Doubtful</a>
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
                            <a href="post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
                                <img src='images/samples/100x100/image_10.jpg' alt='img'>
                            </a>

                            <div class="post_content">
                                <h5>
                                    <a href="post.html"
                                       title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian
                                        Civilians Trapped For Months Continue To Be Evacuated</a>
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
                            <a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">
                                <img src='images/samples/100x100/image_07.jpg' alt='img'>
                            </a>

                            <div class="post_content">
                                <h5>
                                    <a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on
                                        Brotherhood, Club Lives Up to Name</a>
                                </h5>
                                <ul class="post_details simple">
                                    <li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
                                    <li class="date">
                                        10:11 PM, Feb 02
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="submenu">
            <a href="/courses-category" title="Categorii de cursuri">
               Categorii cursuri
            </a>
            <div class="mega_menu row">
                @if($index=0)@endif
                @for($i = 0; $i < 2; $i++)
                    <div class="column column_1_2">
                        <ul class="blog small">
                            @for($j = 0; $j < 3;$j++)
                            @if($index==count($courseCategories)) @break @endif
                                <li class="post">
                                    <a href="/categorie/{{$courseCategories[$index]->category_course_id}}"
                                                title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
                                        <img src='images/samples/100x100/image_06.jpg' alt='img'>
                                    </a>
                                    <div class="post_content">
                                        <h5>
                                            <a href="/categorie/{{$courseCategories[$index]->category_course_id}}"
                                               title="{{$courseCategories[$index]->category_course_name}}">
                                                {{$courseCategories[$index]->category_course_name}}
                                            </a>
                                        </h5>
                                        <ul class="post_details simple">
                                            <li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
                                            <li class="date">
                                                10:11 PM, Feb 02
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @if($index++)@endif
                            @endfor
                        </ul>
                    </div>
                @endfor
            </div>
        </li>
    </ul>
    </li>
    <li class="submenu">
        <a href="/opp">
            Oportunitati
        </a>
    </li>
    <li class="submenu">
        <a href="authors.html" title="Authors">
            Parteneri
        </a>
        <ul>
            <li>
                <a href="authors.html" title="Authors List">
                    Authors List
                </a>
            </li>
            <li>
                <a href="author.html" title="Author Single">
                    Author Single
                </a>
            </li>
        </ul>
    </li>
    <li class="submenu">
        <a href="contact.html" title="Contact">
            Contact
        </a>
        <ul class="expand_left_contact">
            <li>
                <a href="contact.html" title="Contact Style 1">
                    Contact Style 1
                </a>
            </li>
            <li>
                <a href="contact_2.html" title="Contact Style 2">
                    Contact Style 2
                </a>
            </li>
        </ul>
    </li>
    </ul>
    </nav>
    @include('layouts.frontend.master-menu-mobile')
</div>