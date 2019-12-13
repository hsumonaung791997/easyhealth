@extends('frontend.layouts.master')
@section('content')
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
        @include('frontend.layouts.nav')

        <!-- Main Carousel -->
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <!-- Overlay -->
            <div class="overlay"></div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#bs-carousel" data-slide-to="1"></li>
                <li data-target="#bs-carousel" data-slide-to="2"></li>
            </ol>
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                    <div class="slide-1"></div>
                    <div class="hero">
                        <hgroup>
                            <h1>Private GP services</h1>        
                            <h3>Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain</h3>
                        </hgroup>
                         
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-2"></div>
                    <div class="hero">        
                        <hgroup>
                            <h1>Health screenings and diagnostics</h1>        
                            <h3>Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain</h3>
                        </hgroup>       
                         
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-3"></div>
                      <div class="hero">        
                        <hgroup>
                            <h1>Mini Pharmacy</h1>        
                            <h3>Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain</h3>
                        </hgroup>
                    </div>
                </div>
            </div> 
        </div>
         
        @if($whyus != null || !empty($whyus))
        <section class="home-section paddingtop-50">
            <div class="container">
                <div class="row">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold"> {{ $whyus->title }}</h2>
                            <p>Myanmar’s First & Only Convenient-Care Clinic Chain</p>
                        </div>
                        <i class="title-bg"></i>
                    </div>
                    <br><br>
                    <div class="col-sm-8 col-md-8">
                        <p>
                            {!! $whyus->description !!}
                        </p>
                        <a href="{{ url('whyus') }}" class="btn btn-skin btn-lg">Learn more</a>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <?php 
                         $image = $whyus->media->file_path . '/' . $whyus->media->file_name;
                        ?>
                        <img src="{{ asset($image) }}" alt="" class="img-responsive" width="100%" height="100%">
                    </div>
                </div>
            </div>
        </section>
        @endif


        <section class="home-section paddingtop-40">
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
                        <!-- <div class="col-md-4">
                              <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                <div class="cta-btn">
                                  <a href="appointment-form.html" class="btn btn-skin btn-lg"><span class="glyphicon glyphicon-book"></span> Book Appointment</a>
                                </div>
                              </div>
                        </div> -->
                    </div>
                </div>
            </div>   
        </section>

        <section class="home-section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Services We offer</h2>
                            <p>Our medical specialists care about you & your family’s health</p>
                        </div>
                    </div>
                    <i class="title-bg"></i>
                    <br><br>
                    <div class="col-sm-4 col-md-4">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                          <img src="{{ asset('frontend/img/service-welcome.png') }}" class="img-responsive" alt="" />
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="service-box">
                                <div class="service-icon"> 
                                  <span class="fa fa-stethoscope fa-3x"></span>
                                </div>
                                <div class="service-desc">
                                  <p><h5 class="h-light">Private GP Services</h5></p>
                                </div>
                            </div>
                        </div>

                         
                        <div class="wow fadeInRight" data-wow-delay="0.3s">
                            <div class="service-box">
                                <div class="service-icon">
                                  <span class="fa fa-plus-square fa-3x"></span>
                                </div>
                                <div class="service-desc">
                                    <p><h5 class="h-light">Mini Pharmacies</h5></p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="service-box">
                                <div class="service-icon">
                                     <span class="fa fa-filter fa-3x"></span>
                                  
                                </div>
                                <div class="service-desc">
                                    <p><h5 class="h-light">Health Screenings and Diagnostics</h5></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="service-box">
                                <div class="service-icon">
                                    <span class="fa fa-h-square fa-3x"></span>
                                </div>
                                <div class="service-desc">
                                    <p><h5 class="h-light">Home Services</h5></p>
                                </div>
                            </div>
                        </div>
                        <div class="wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="service-box">
                                <div class="service-icon">
                                  <span class="fa fa-user-md fa-3x"></span>
                                </div>
                                <div class="service-desc">
                                  <h5 class="h-light">Telemedicine Services</h5>
                                </div>
                            </div>
                        </div>
                        <div class="wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="service-box">
                                <div class="service-icon">
                                  <span class="fa fa-hospital-o fa-3x"></span>
                                </div>
                                <div class="service-desc">
                                  <h5 class="h-light">Corporate B2B Healthcare</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="home-section bg-gray paddingbot-60">
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="section-heading text-center">
                                <h2 class="h-bold">Our Medical Specialists</h2>
                                <p>Our medical specialists care about you & your family’s health</p>
                            </div>
                        </div>
                        <i class="title-bg"></i>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div id="grid-container" class="cbp-l-grid-team">
                        <ul>
                            <li class="cbp-item psychiatrist">
                                <a href="#" class="cbp-caption cbp-singlePage">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="img/doctors2.png" alt="" width="100%">
                                    </div>
                                </a>
                                <a href="#" class="cbp-singlePage cbp-l-grid-team-name">Dr.Alice Grue</a>
                                <div class="cbp-l-grid-team-position">SENIOR NURSE</div>
                            </li>
                            <li class="cbp-item cardiologist">
                                <a href="#" class="cbp-caption cbp-singlePage">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="img/doctors1.png" alt="" width="100%">
                                    </div>
                                </a>
                                <a href="#" class="cbp-singlePage cbp-l-grid-team-name">Dr.Joseph Murphy</a>
                                <div class="cbp-l-grid-team-position">HEART SURGON</div>
                            </li>
                            <li class="cbp-item cardiologist">
                                <a href="#" class="cbp-caption cbp-singlePage">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="img/doctors3.png" alt="" width="100%">
                                    </div>
                                </a>
                              <a href="#" class="cbp-singlePage cbp-l-grid-team-name">Dr.Alison Davis</a>
                              <div class="cbp-l-grid-team-position">FAMILY PHYSICIAN</div>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <br><br>
                <center>
                    <a href="about.html" class="btn btn-skin btn-lg">Learn more</a>
                </center>
            </div>
        </section> -->


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
         

        <!-- CLinic Center Locations -->
        
        @include('frontend.locations')
    </div>
    
</body>
@endsection

