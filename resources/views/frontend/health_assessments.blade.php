@extends('frontend.layouts.master')
@section('content')
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
        @include('frontend.layouts.nav')
        <!-- breadcrumbs -->
        <section class="intro ui-title-page">
            <img src="{{ asset('frontend/img/health-assessments-title.png') }}" class="img-responsive" width="100%">
            <div class="breadcrumbs-title">
                <div class="container">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        @foreach($hs_modules->slice(0, 1) as $hs)
                        <h1>{{ $hs->title }} </h1>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- Left Menu -->
        <section class="home-section paddingtop-10 paddingbot-50">
            <div class="container">
                <div class="row">
                    <div>    
                        <div class="col-sm-4 col-md-4 paddingbot-50 wow fadeInRight" data-wow-delay="0.2s">
                            <nav>
                                <ul class="ace-responsive-menu" data-menu-style="vertical">
                                    
                                    <li>
                                        <a href=""><b class="h-bold">Health assessments</b></a>
                                    </li>
                                    <li>
                                        @foreach($hs_modules as $hs_module)
                                        <a href="">
                                            <i class="fa fa-caret-right" aria-hidden="true"></i> <span class="title">
                                                {{ $hs_module->title }}   
                                            </span>
                                        </a>
                                        @endforeach
                                    </li>
                                    <!-- <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right" aria-hidden="true"></i> <span class="title">Health Focus</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right" aria-hidden="true"></i> <span class="title">Health Enhance</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right" aria-hidden="true"></i> <span class="title">Health Peak</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right" aria-hidden="true"></i> <span class="title"> Mature health</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right" aria-hidden="true"></i> <span class="title">Health assessment FAQs</span>
                                        </a>
                                    </li>
                                    <li class="last">
                                        <a href="#">
                                            <i class="fa fa-caret-right" aria-hidden="true"></i> <span class="title">Health Focus</span>
                                        </a>
                                    </li> -->
                                </ul>   
                            </nav>    
                        </div>
                        @foreach($hs_modules->slice(0, 1) as $hs)
                        <div class="col-sm-8 col-md-8 paddingbot-30 wow fadeInLeft" data-wow-delay="0.1s">
                            <h4 class="h-bold">Our {{ $hs->title }} provides a key set of tests and measures to give you a view on your current health and any future health risks.</h4>
                            <p>
                                {!! $hs->description !!}
                                <!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. -->
                            </p>
                            <br>
                            <h4 class="h-bold">Ask us a question on +959 123456789</h4>
                            <a href="#" class="ph-call-btn btn btn-lg ">CALL NOW</a>
                        </div>
                        @endforeach
                    </div> 
                </div>
            </div>
        </section>
        <section class="home-section bg-gray paddingbot-60">
            <div class="container">
                <div class="row">
                    <div class="wow fadeInDown" data-wow-delay="0.1s" >
                        <div class="section-heading text-center">
                            <h2 class="h-bold">What's included</h2>
                        </div>
                        <i class="title-bg"></i>
                    </div>
                    <br><br>
                    <div class="col-sm-6 col-md-6 col-lg-6 wow fadeInLeft" data-wow-delay="0.1s" >
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 wow fadeInRight" data-wow-delay="0.1s" >
                        <p>
                            <i class="fa fa-check" aria-hidden="true"></i> Total assessment time - 60 minutes <br>
                            <i class="fa fa-check" aria-hidden="true"></i> Test time - 30 minutes <br>
                            <i class="fa fa-check" aria-hidden="true"></i> Review time - 30 minutes with a health adviser <br>
                            <i class="fa fa-check" aria-hidden="true"></i> Age range - Designed with those under 40 in mind, but available to everyone over 18 <br>
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section class="home-section paddingbot-60">
            <div class="container">
                <div class="row">
                    <div class="wow fadeInDown" data-wow-delay="0.1s" >
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Health Core tests and measures in detail</h2>
                        </div>
                        <i class="title-bg"></i>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="wow bounceInUp" data-wow-delay="0.2s">
                            <div id="owl-works" class="owl-carousel">
                                <div class="item text-center">
                                    <a href="#" title="This is an image title">
                                        <img src="{{ asset('frontend/img/health-icon1.png') }}" class="img-responsive" alt="img" width="100px">
                                        <b>Lifestyle</b>
                                    </a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>

                                </div>
                                <div class="item text-center">
                                    <a href="#" title="This is an image title">
                                        <img src="{{ asset('frontend/img/health-icon2.png') }}" class="img-responsive" alt="img">
                                        <b>Health</b>
                                    </a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                </div>
                                <div class="item text-center">
                                    <a href="#" title="This is an image title">
                                        <img src="{{ asset('frontend/img/health-icon3.png') }}" class="img-responsive" alt="img">
                                        <b>Body composition</b>
                                    </a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                </div>
                                <div class="item text-center">
                                    <a href="#" title="This is an image title">
                                        <img src="{{ asset('frontend/img/health-icon4.png') }}" class="img-responsive" alt="img">
                                        <b>Blood and urine tests</b>
                                    </a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>

        <!-- CLinic Center Locations -->
        @include('frontend.locations')


        <section class="home-section bg-gray paddingbot-60">
            <div class="container marginbot-30">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow fadeInUp" data-wow-delay="0.1s">
                            <div class="section-heading text-center">
                                <h2 class="h-bold">What’s next?</h2>
                                <h2 class="h-bold">Call us</h2>
                                <p>For more information or to make a booking, please call us.</p>
                                <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                                <h2 class="h-bold">09 123456789</h2>
                                <p>Lines are open Daily 7am to 11pm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- Core JavaScript Files --> 
</body>
@endsection
