<div class="tabs no_scroll {{$div_class_append}} clearfix">
    <ul class="tabs_navigation clearfix">
        <li>
            <a href="#sidebar-most-read" title="Most Read">
                Vizualizate
            </a>
            <span></span>
        </li>
        <li>
            <a href="#sidebar-most-commented" title="Commented">
                Comentate
            </a>
            <span></span>
        </li>
    </ul>

    <div id="sidebar-most-read">
        <ul class="blog rating page_margin_top clearfix">
            @foreach($mostViewedCourses as $viewed)
                <li class="post">
                    <div class="post_content">
                        <span class="number animated_element" data-value="{{$viewed->viewed}}"></span>
                        <h5>
                            <a href="/curs/{{$viewed->course_id}}"
                                title="{{$viewed->course_name}}">
                                {{$viewed->course_name}}
                            </a>
                        </h5>
                        <ul class="post_details simple">
                            <li class="category">
                                <a href="/categorie/{{$viewed->category_course_id}}"
                                    title="{{$viewed->category_course_name}}">
                                    {{$viewed->category_course_name}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endforeach
        </ul>
        <a class="more page_margin_top" href="/cursuri">Toate Cursurile</a>

    </div>
    <div id="sidebar-most-commented">
        <ul class="blog rating page_margin_top clearfix">
            <li class="post">
                <a href="post.html" title="Nuclear Fusion Closer to Becoming a Reality">
                    <img src='images/samples/510x187/image_02.jpg' alt='img'>
                </a>
                <div class="post_content">
                    <span class="number animated_element" data-value="70"></span>
                    <h5><a href="post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
                    </ul>
                </div>
            </li>
            <li class="post">
                <div class="post_content">
                    <span class="number animated_element" data-value="62"></span>
                    <h5><a href="post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
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
                    <h5><a href="post_quote_2.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a href="category_science.html" title="SCIENCE">SCIENCE</a></li>
                    </ul>
                </div>
            </li>
            <li class="post">
                <div class="post_content">
                    <span class="number animated_element" data-value="4"></span>
                    <h5><a href="post.html" title="Syrian Civilians Trapped for Months Continue to be Evacuated">Syrian Civilians Trapped for Months Continue to be Evacuated</a></h5>
                    <ul class="post_details simple">
                        <li class="category"><a href="category_science.html" title="SCIENCE">SCIENCE</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <a class="more page_margin_top" href="#">SHOW MORE</a>
    </div>
</div>