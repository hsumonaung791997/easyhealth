@extends('frontend.layouts.master')
@section('content')

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
        @include('frontend.layouts.nav')
        <section class="intro ui-title-page">
            <img src="{{ asset('frontend/img/services-details.png') }}" class="img-responsive" width="100%">
            <div class="breadcrumbs-title">
                <div class="container">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <h1>Private GP services near me</h1>
                        <div class="ui-subtitle-page">Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-section paddingbot-50">
            <div class="container">
                @if($gp_service != null)
                <div class="row">     
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="col-sm-12 col-md-12 text-center paddingbot-50">
                            <div class="wow fadeInDown" data-wow-delay="0.1s">
                                <div class="section-heading">
                                    <h2 class="h-bold">{{ $gp_service->title }}</h2>
                                </div>
                                <i class="title-bg"></i>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">
                                {!! $gp_service->content_one !!}
                            </p>
                        </div>
                    </div>    
                </div>
                @endif
                <div class="row">
                    <div class="col-sm-6 col-md-6 gp-frame-left paddingbot-20 paddingtop-20 wow fadeInLeft" data-wow-delay="0.2s">     
                        <div class="section-heading">
                            <h4 class="h-bold">How to book a GP Services</h4>
                            <br><br>
                            <a href="#" class="btn btn-skin btn-lg">CALL US</a>
                            <br><br> 
                            <h4 class="h-bold"><i class="fa fa-phone" aria-hidden="true"></i> 09 123456789</h4>
                            <p>For more information or to make a booking, please call us.</p>
                            <p><b>Lines are open Daily 7am to 11pm</b></p>
                        </div>     
                    </div>
                    <div class="col-sm-6 col-md-6 gp-frame-right paddingbot-20 paddingtop-20 gp-frame wow fadeInRight" data-wow-delay="0.2s">
                        <p>
                             {!! $gp_service->content_two !!}
                        </p>  
                    </div>
                </div>
                <div class="row paddingtop-50">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="section-heading text-center paddingbot-50">
                            <h2 class="h-bold">Private GP Services</h2>
                            <p>Myanmar’s First & Only Convenient-Care Clinic Chain</p>
                            <i class="title-bg"></i>
                        </div>
                    </div>
                    @foreach($gpminiservices as $gpminiservice)
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="box text-center">
                                @if($gpminiservice->media_id != null)
                                 <?php
                                    $image = $gpminiservice->media->file_path . '/' . $gpminiservice->media->file_name;
                                ?>
                                <img src="{{ asset($image) }}" class="img-responsive">
                                @endif                    
                                <h4 class="h-bold">{{ $gpminiservice->title }}</h4>
                                <i class="title-bg"></i>
                                <p>
                                    {!! str_limit(strip_tags($gpminiservice->content_one), 100) !!}
                                    @if (strlen(strip_tags($gpminiservice->content_one)) > 100)
                                      ... 
                                       <a href="{{ url($gpminiservice->id, 'gp_detail')}}" class="btn btn-skin btn-lg">View More</a>
                                    @endif
                                </p>
                               
                            </div>
                        </div>
                    </div>
                    @endforeach   
                </div>
            </div>
        </section>
        <section class="home-section bg-gray paddingbot-60">
            <div class="container marginbot-30">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="section-heading text-center">
                                <h2 class="h-bold">Our Facilities</h2>
                                <p>Our medical specialists care about you & your family’s health</p>
                            </div>
                        </div>
                        <i class="title-bg"></i>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="wow bounceInUp" data-wow-delay="0.2s">
                            <div id="owl-works" class="owl-carousel">
                                <div class="item"><img src="{{ asset('frontend/img/photo/1.jpg') }}" class="img-responsive" alt="img"></div>
                                <div class="item"><img src="{{ asset('frontend/img/photo/2.jpg') }}" class="img-responsive" alt="img"></div>
                                <div class="item"><img src="{{ asset('frontend/img/photo/3.jpg') }}" class="img-responsive" alt="img"></div>
                                <div class="item"><img src="{{ asset('frontend/img/photo/4.jpg') }}" class="img-responsive" alt="img"></div>
                                <div class="item"><img src="{{ asset('frontend/img/photo/5.jpg') }}" class="img-responsive" alt="img"></div>
                                <div class="item"><img src="{{ asset('frontend/img/photo/6.jpg') }}" class="img-responsive" alt="img"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
