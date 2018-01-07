@extends('includes.header')

@section('title')
    <title>Flyboy Inc :: Bio</title>
@endsection

@section('pagelink')
    <link href="{{ URL::to('css/bio-readmore.css') }}" rel="stylesheet"/>
@endsection

@section('pageContent')


    <nav class="main-nav-outer" id="test">
        <!--main-nav-start-->
        <div class="container">
            <ul class="main-nav">
                <li><a href="{{ route('user.bio') }}">Bio</a></li>
                <li><a href="{{ route('user.music') }}">Music</a></li>
                <li><a href="{{ route('user.photos') }}">Photos</a></li>
                <li><a href="{{ route('user.videos') }}">Videos</a></li>
                <li class="small-logo"><a href="{{ route('user.index') }}"><img src="{{ URL::to('img/flyboy70.png') }}"
                                                                                alt="logo" style="display: inline;"></a>
                </li>
                <li><a href="{{ route('user.news') }}">News</a></li>
                <li><a href="{{ route('user.events') }}">Events</a></li>
                <li><a href="{{ route('user.contact') }}">Contact</a></li>
                <li><a href="#"></a></li>
            </ul>
            <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
        </div>
    </nav>
    <!--main-nav-end-->


    <section id="bio-readmore">
        <div class="container">
            <div class="row">
                <div class="title" style="margin-top: 50px;">
                    <h2>BIO</h2>
                    <center>
                        <div style="height:2px;background-color:#000;width:25px;margin-top:-40px;margin-bottom:50px;"
                             class="divider"></div>
                    </center>
                </div>
            </div>
            <div class="row wow fadeInDown delay-05s">
                <div class="col-md-12">
                    <div class="image">
                        <img class="img-responsive" src="{{ URL::to('img/sliders/slider-2.jpg') }}"
                             alt="Image goes here"/>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp delay-05s">
                <div class="col-md-12">
                    <div class="bio">
                        <b class="bold">Bio</b>
                        <p>
                            Anidugbe Oluwatobiloba Daniel, known as Kiss Daniel, is a Nigerian recording artist,
                            performer and entertainer best known for his chart-topping single "Woju". Formally signed to
                            G-Worldwide Entertainment in 2013, he left the company in November 2017 to create his own
                            record label, Fly Boy Inc.
                        </p>
                    </div>

                    <div class="bio">

                        <b class="bold">Early Life: </b>
                        <p>
                            Kiss Daniel was born Oluwatobiloba Daniel Anidugbe in Ogun State, Nigeria. He hails from
                            Abeokuta North, a local government area in Ogun State. He graduated from the Federal
                            University of Agriculture, Abeokuta (FUNAAB), in 2013, with a degree in Water Resources
                            Management and Agrometeorology (Water Engineering). While at FUNAAB, he decided to pursue
                            music as a career alongside his studies.
                        </p>
                    </div>

                    <div class="bio">
                        <b class="bold">Music Career: </b>
                        <p>
                            Kiss Daniel showed an interest in music from an early age, and was encouraged by his father.
                            He started his music career professionally 2013 after his tertiary education, when he came
                            across G-Worldwide Entertainment CEO, Emperor Geezy. After being signed to G-Worldwide
                            entertainment, he released his first official single "Shoye" which was produced by Beatburx
                            on May 1, 2014, along with a music video was directed by MEX.[5] Daniel released his second
                            single "Woju", produced by DJ Coublon on September 1, 2014. The video for Woju was directed
                            by Adasa Cookey, shot in Lagos, Nigeria. The song spent eleven weeks on the MTV Base
                            Official Naija Top Ten, including six weeks at the number one spot.
                        </p>

                        <p>
                            Daniel then recorded and released a remix of "Woju" featuring Tiwa Savage and Davido. "Woju"
                            and its remix peaked at Number 1 and Number 2 respectively on the MTV Base Official Naija
                            Top 10, the first time that an original song and its remix would peak at the first and
                            second positions on the chart. A cover of the song performed by 2face Idibia appeared
                            online.
                            In May 2015, Daniel released a third follow up single "Laye" on his birthday, along with a
                            video two weeks later which was shot in different locations in eastern part of Africa and
                            was directed by AJE FILMS. In September 2015, Daniel won two awards within the space of
                            three weeks.
                        </p>
                    </div>

                    <div class="bio">
                        <b class="bold">Musical Influence: </b>
                        <p>Kiss Daniel has listed acts like Danfo Drivers, Zulezu, Oritse Femi, 2face Idibia, 9ice, W4,
                            Wande Coal, Owl City and Ed Sheeran as musical influences.</p>
                    </div>

                    <div class="bio">
                        <b class="bold">Awards & Nominations: </b>
                        <li>Extreme Awards (Benin Republic) Next Rated Artiste of The Year - Won</li>
                        <li>Maya Awards (Ibadan) Newcomer/Revelation of The Year - Won</li>
                        <li>Nigeria Entertainment Awards (USA) / Best New Act of the Year (2015) – Won</li>
                        <li>Nigeria Entertainment Awards / Hottest Single of the Year “Woju” (2015) – Nominated</li>
                        <li>City People Entertainment Awards / Most Popular Song “Woju” (2015) – Nominated</li>
                        <li>Afrimma Awards (USA)/ Best Newcomer the Year (2015) – Nominated</li>
                        <li>Coson Music Awards / Best Song in Melody (2015) – Won</li>
                        <li>Coson Music Awards / Hottest Song on the Street (2015) – Nominated</li>
                        <li>Africa Youth Choice Awards / Next Rated (2015) – Won</li>
                        <li>Peace Achievers Awards / Best New Act (2015) – Won</li>
                        <li>Afrima Awards (Nigeria)/ New Revelation in Africa (2015) – Nominated</li>
                        <li>Afrima Awards Most Promising Act in Africa (2015) – Won</li>
                        <li>MTN4SYTE TV Music Video Awards (Ghana) /Best African Act Video “Woju Remix” (2015)-Won</li>
                        <li>Headies Awards / Next Rated” (2015) – Nominated (Upcoming)</li>
                        <li>Headies Awards / Song of the Year “Woju” (2015) – Nominated (Upcoming)</li>
                        <li>Headies Awards / Pop Single of the year “Woju” (2015) – Nominated (Upcoming)</li>
                        <li> Nigerian Music Video Awards /Best Highlife Video “Laye” (2015) - Nominated (Upcoming)</li>
                        <li>Nigerian Music Video Awards /Best Video By A New Artiste “Laye” (2015) – Nominated
                            (Upcoming)
                        </li>
                    </div>
                </div>
            </div>
            <hr>

        </div>
    </section>

@endsection
