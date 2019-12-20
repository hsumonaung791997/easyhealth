@extends('frontend.layouts.master')
@section('content')
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
        @include('frontend.layouts.nav')

        <!-- breadcrumbs -->
        <section class="intro ui-title-page">
            <img src="{{ asset('frontend/img/about-bg.png') }}" class="img-responsive">
            <div class="breadcrumbs-title">
                <div class="container">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <h1>Why Us?</h1>
                        <div class="ui-subtitle-page">Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: boxes -->
        <section class="home-section paddingtop-50 paddingbot-50">
            <div class="container">
                <div class="row">
                    @foreach($whyus as $w)
                    <div class="col-sm-7 col-md-7">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            
                            <div class="box">
                                <div class="wow fadeInLeft" data-wow-delay="0.1s">
                                    <div class="section-heading">
                                        <h2 class="h-bold"> {{ $w->title }}</h2>
                                        <p>Myanmar’s First & Only Convenient-Care Clinic Chain</p>
                                    </div>
                                </div>
                                <p>
                                    {!! $w->description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-5">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="box text-center">
                                <br><br>
                                <?php
                                    $image = $w->media->file_path . '/' . $w->media->file_name;
                                ?>
                                <img src="{{ asset($image) }}" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- /Section: boxes -->
        <!-- Section: team -->
        <section class="home-section bg-gray paddingbot-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="section-heading text-center">
                                <h2 class="h-bold">Our Management Team</h2>
                                <br>
                            </div>
                        </div>
                        <i class="title-bg"></i> <br>
                    </div>
                </div>
            </div>
            <div class="container">
                @foreach($teams as $team)
                <div class="row">
                    <?php
                       $image = $team->media->file_path . '/' . $team->media->file_name;
                    ?>
                    <img src="{{ asset($image) }}" class="img-responsive" width="100%">
                    <br>
                    <p>{!! $team->description !!}</p>
                    <br> 
                    <center>
                        <a href="#" class="btn-pink-box">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                    </center>
                </div>
                @endforeach
            </div>
        </section>
        <!-- /Section: team -->

        <!-- Section: team -->
        <section class="home-section paddingbot-60">
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="section-heading text-center">
                                <h2 class="h-bold">Our Doctors</h2>
                                <p>Our medical specialists care about you & your family’s health</p>
                            </div>
                        </div>
                        <i class="title-bg"></i>
                    </div>
                </div>

                <div class="row">
                    @foreach($doctors as $doctor)
                    <div class="col-sm-8 col-md-9">
                        <div class="wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="box">
                                <div>
                                    <div class="section-heading">
                                        <h3 class="h-bold">Doctor Name</h3>
                                        <h4>Position</h4>
                                    </div>
                                </div>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="box text-center">
                                <br><br>
                                <img src="img/doctors2.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="row paddingtop-50">
                    <div class="col-sm-8 col-md-9">
                        <div class="wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="box">
                                <div>
                                    <div class="section-heading">
                                        <h3 class="h-bold">Doctor Name</h3>
                                        <h4>Position</h4>
                                    </div>
                                </div>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="box text-center">
                                <br><br>
                                <img src="img/doctors1.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-section bg-gray paddingbot-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="section-heading text-center">
                                <h2 class="h-bold">Our Values</h2> 
                            </div>
                        </div>
                        <i class="title-bg"></i>
                        <br>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-12 paddingtop-10">
                        <div class="serv-section-2">
                            <div class="serv-section-2-icon"> <i class="fa fa-line-chart" aria-hidden="true"></i>  </div>
                            <div class="serv-section-desc">
                                <h4>01.</h4>
                                <h5>Quality</h5> </div>
                            <div class="section-heading-line-left"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12 paddingtop-10">
                        <div class="serv-section-2 serv-section-2-act">
                            <div class="serv-section-2-icon serv-section-2-icon-act"> <i class="fa fa-comment-o" aria-hidden="true"></i> </div>
                            <div class="serv-section-desc">
                                <h4>02.</h4>
                                <h5>Openness & Honesty</h5> </div>
                            <div class="section-heading-line-left"></div>
                           
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12 paddingtop-10">
                        <div class="serv-section-2">
                            <div class="serv-section-2-icon"> <i class="fa fa-users" aria-hidden="true"></i> </div>
                            <div class="serv-section-desc">
                                <h4>03.</h4>
                                <h5>Teamwork</h5> </div>
                            <div class="section-heading-line-left"></div>
                            
                        </div>
                    </div>
                </div>
                <div class="row paddingtop-20">
                    <div class="col-md-4 col-sm-12 col-12 paddingtop-10">
                        <div class="serv-section-2">
                            <div class="serv-section-2-icon"> <i class="fa fa-cube" aria-hidden="true"></i> </div>
                            <div class="serv-section-desc">
                                <h4>04. </h4>
                                <h5>Flexibility</h5> </div>
                            <div class="section-heading-line-left"></div>
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12 paddingtop-10">
                        <div class="serv-section-2 serv-section-2-act">
                            <div class="serv-section-2-icon"> <i class="fa fa-trophy" aria-hidden="true"></i> </div>
                            <div class="serv-section-desc">
                                <h4>05. </h4>
                                <h5>Passion </h5> </div>
                            <div class="section-heading-line-left"></div>
                           
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12 paddingtop-10">
                        <div class="serv-section-2">
                            <div class="serv-section-2-icon"> <i class="fa fa-user-md" aria-hidden="true"></i> </div>
                            <div class="serv-section-desc">
                                <h4>05.</h4>
                                <h5>Integrity</h5> </div>
                            <div class="section-heading-line-left"></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="home-section paddingtop-0 paddingbot-40">
            <div class="callaction check-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wow fadeInUp" data-wow-delay="0.1s">
                                <div class="cta-text">
                                  <center><h3><i class="fa fa-stethoscope"></i> လွယ်ကူစွာ easy health မှာ ကျန်းမာရေး စောင့်ရှောက်ပါ </h3></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </section>

        <!-- Section: works -->
        <section class="home-section paddingbot-60">
            <div class="container marginbot-50">
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
        <!-- /Section: works -->

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
                                <b>Open Daily 7am to 11pm</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
@endsection
 
