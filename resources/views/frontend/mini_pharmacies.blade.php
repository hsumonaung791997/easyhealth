@extends('frontend.layouts.master')
@section('content')
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
        @include('frontend.layouts.nav')

        <!-- breadcrumbs -->
        <section class="intro ui-title-page">
            <img src="{{ asset('frontend/img/medical-banner.png') }}" class="img-responsive" width="100%">
            <div class="breadcrumbs-title">
                <div class="container">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <h1>Mini Pharmacies </h1>
                        <div class="ui-subtitle-page">Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: boxes -->

        @if($otherminiservices != null)
        <section id="boxes" class="home-section paddingtop-10 paddingbot-50">
            <div class="container">
                <div class="row">
                    <div>
                        
                        <div class="col-sm-9 col-md-9 paddingbot-30 wow fadeInLeft" data-wow-delay="0.1s">
                            <p>{!! $otherminiservices->content_one !!}</p>
                        </div>
                        
                        <div class="col-sm-3 col-md-3 text-center paddingbot-50 wow fadeInRight" data-wow-delay="0.2s">
                            <a href="#" class="ph-call-btn btn btn-lg ">CALL NOW</a>
                            <br><br> 
                            <h4 class="h-bold"><i class="fa fa-phone" aria-hidden="true"></i> 09 123456789</h4>
                            <p>
                                For more information or to make a booking, please call us. <br>
                                <b>Open Daily 7am to 11pm</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: boxes -->

        <section class="home-section bg-gray paddingbot-60">
            <div class="container">
                <div class="row">

                    <div class="col-sm-7 col-md-7 col-lg-7">
                        <p>
                            {!! $otherminiservices->content_two !!}
                        </p>
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5 paddingtop-30">
                        @if($otherminiservices->media_id != null)
                            <?php
                                $image = $otherminiservices->media->file_path . '/' . $otherminiservices->media->file_name;
                            ?>
                            <img src="{{ asset($image) }}" class="img-responsive">
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section id="boxes" class="home-section paddingtop-50 paddingbot-50">
            <div class="container">
                <div class="row">
                    <div>
                        <div class="col-sm-7 col-md-7 paddingbot-30 wow fadeInLeft" data-wow-delay="0.1s">
                            <h3 class="h-bold">{{ $health_assessment->title }}</h3>
                            <p>
                                {!! $health_assessment->content_one !!}
                            </p>
                            <br>
                            <a href="{{ url($health_assessment->id, 'health_assessments') }}" class="btn btn-skin btn-lg">Learn more</a>
                        </div>
                        <div class="col-sm-5 col-md-5 text-center paddingtop-30 paddingbot-50 wow fadeInRight" data-wow-delay="0.2s">
                            @if($health_assessment->media_id != null)
                            <?php
                            $image = $health_assessment->media->file_path. '/' .$health_assessment->media->file_name;
                            ?>
                            <img src="{{ asset($image) }}" class="img-responsive" width="100%" height="100%">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
        <hr>
        <!-- CLinic Center Locations -->

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
</html>
