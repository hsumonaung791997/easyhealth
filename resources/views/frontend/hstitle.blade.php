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
                        <h1>Health Core</h1>
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
                                    @foreach($hsminiservicestitle as $hsminiservice)
                                    <li>
                                        <a href="{{url($hsminiservice->id,'health_assessments_detail')}}">
                                            <i class="fa fa-caret-right" aria-hidden="true"></i> <span class="title">{{ $hsminiservice->title }}</span>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>   
                            </nav>    
                        </div>
                        <div class="col-sm-8 col-md-8 paddingbot-30 wow fadeInLeft" data-wow-delay="0.1s">
                            <h4 class="h-bold"> {{$health_assessment->title}}</h4>
                            <p>
                                 
                                 {!!$health_assessment->content_one!!} 
                                 
                            </p>
                            <br>
                            <h4 class="h-bold">Ask us a question on +959 123456789</h4>
                            <a href="#" class="ph-call-btn btn btn-lg ">CALL NOW</a>
                        </div>
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
                           {!!$health_assessment->content_two!!} 
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 wow fadeInRight" data-wow-delay="0.1s" >
                        <p>
                             {!!$health_assessment->content_three!!} 
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
</body>
@endsection
