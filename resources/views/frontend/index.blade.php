@extends('frontend.layouts.master')
@section('content')
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
        @include('frontend.layouts.nav')
        <!-- Main Carousel -->
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel"> 
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
                            <h1>Private GP services</h1> <br><br>    
                            <center><a href="#" class="btn-white-box ">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a></center>
                        </hgroup>     
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-2"></div>
                    <div class="hero">        
                        <hgroup>
                            <h1>Health screenings and diagnostics</h1>        
                            <br><br>    
                            <center><a href="#" class="btn-white-box ">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a></center>
                        </hgroup>            
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-3"></div>
                      <div class="hero">        
                        <hgroup>
                            <h1>Mini Pharmacy</h1>        
                            <br><br>    
                            <center><a href="#" class="btn-white-box ">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a></center>
                        </hgroup>
                    </div>
                </div>
            </div> 
        </div>
        <section class="home-section paddingtop-50 paddingbot-50">
            <div class="container">
                <div class="row paddingbot-50 paddingtop-30 text-center" style="background: #f1efeb;color: #333;">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold" style="color: #333;">Why Us? </h2>
                            <p><b>Myanmar’s First & Only Convenient-Care Clinic Chain</b></p>
                        </div>
                        <i class="title-bg"></i>
                    </div>
                    <br> 
                    <div class="col-sm-12 col-md-12">
                        <p>
                            <b>easy health</b> is established to improve the dynamics of convenience in the healthcare landscape of Myanmar. The mission of easy health is simple - to make quality healthcare conveniently accessible.
                            <br><br>
                            Through its structure of a convenient-care clinic chain, easy health currently provides walk-in consultation services, lab test services and mini pharmacy at its clinics. As the name suggests, easy health strives to ease the burdens in seeking healthcare by making things easier and more convenient. However, the convenience does not come at a cost of quality as the medical quality, excellent service and patient safety are within the core foundation of everything we do!  
                        </p>
                        <br>
                        <center><a href="#" class="btn-pink-box">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a></center>
                    </div>    
                </div>
            </div>
        </section>
        <section class="home-section bg-gray nopadding paddingtop-60">
            <div class="container">
                <div class="row">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Our Services</h2>
                            <p>Our medical specialists care about you & your family’s health</p>
                        </div>
                    </div>
                    <i class="title-bg"></i>
                    <br><br>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-4 paddingtop-10">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <img src="{{ asset('frontend/img/medical-services.png') }}" class="img-responsive" alt="" />
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="service-box">
                                <div class="service-icon">
                                <span class="fa fa-stethoscope fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Private GP Services</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
                                <a href="#"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-wheelchair fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Mini Pharmacies</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
                                <a href="#"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-plus-square fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Health Screenings and Diagnostics</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
                                <a href="#"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-sm-4 col-md-4">
                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-h-square fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Home Services</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
                                <a href="#"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-filter fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Telemedicine Services</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
                                <a href="#"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.3s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-user-md fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Corporate B2B Healthcare</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
                                <a href="#"> Read More</a>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </section>
        <section class="home-section paddingbot-60">
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="section-heading text-center">
                                <h2 class="h-bold">Our Partners</h2>
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
                        <div class="wow FadeInUp" data-wow-delay="0.2s">
                            <div class="col-xs-4 col-md-2 col-lg-2">  <img src="{{ asset('frontend/img/partner1.png') }}" class="img-responsive" alt="img"> </div>
                            <div class="col-xs-4 col-md-2 col-lg-2') }}"> <img src="{{ asset('frontend/img/partner1.png') }}" class="img-responsive" alt="img"> </div>
                            <div class="col-xs-4 col-md-2 col-lg-2"> <img src="{{ asset('frontend/img/partner1.png') }}" class="img-responsive" alt="img"> </div>
                            <div class="col-xs-4 col-md-2 col-lg-2"> <img src="{{ asset('frontend/img/partner1.png') }}" class="img-responsive" alt="img"> </div>
                            <div class="col-xs-4 col-md-2 col-lg-2">  <img src="{{ asset('frontend/img/partner1.png') }}" class="img-responsive" alt="img"> </div>
                            <div class="col-xs-4 col-md-2 col-lg-2"> <img src="{{ asset('frontend/img/partner1.png') }}" class="img-responsive" alt="img"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  
        <section class="bg-gray paddingtop-50 paddingbot-50">
            <div class="carousel-reviews broun-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="wow fadeInDown" data-wow-delay="0.1s">
                                <div class="section-heading text-center">
                                    <h2 class="h-bold">Our News Blog</h2>
                                </div>
                            </div>
                            <i class="title-bg"></i>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="block-text rel zmin">
                                            <img src="http://bestjquery.com/tutorial/news-slider/demo19/images/img-1.jpg" alt="">
                                            <br>
                                            <a title="" href="#">Latest News Post </a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad magni, nesciunt obcaecati possimus quasi quibusdam quos ratione sequi sit veritatis....</p>
                                            <a href="#" class="btn-pink-box">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="block-text rel zmin">
                                            <img src="http://bestjquery.com/tutorial/news-slider/demo19/images/img-2.jpg" alt="">
                                            <br>
                                            <a title="" href="#">Latest News Post</a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad magni, nesciunt obcaecati possimus quasi quibusdam quos ratione sequi sit veritatis....</p>
                                            <a href="#" class="btn-pink-box">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="block-text rel zmin">
                                            <img src="http://bestjquery.com/tutorial/news-slider/demo19/images/img-3.jpg" alt="">
                                            <br>
                                            <a title="" href="#">Latest News Post</a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad magni, nesciunt obcaecati possimus quasi quibusdam quos ratione sequi sit veritatis....</p>
                                            <a href="#" class="btn-pink-box">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="block-text rel zmin">
                                            <img src="http://bestjquery.com/tutorial/news-slider/demo33/images/img-1.jpg" alt="">
                                            <br>
                                            <a title="" href="#">Latest News Post</a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad magni, nesciunt obcaecati possimus quasi quibusdam quos ratione sequi sit veritatis....</p>
                                            <a href="#" class="btn-pink-box">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="block-text rel zmin">
                                            <img src="http://bestjquery.com/tutorial/news-slider/demo33/images/img-2.jpg" alt="">
                                            <br>
                                            <a title="" href="#">Latest News Post</a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad magni, nesciunt obcaecati possimus quasi quibusdam quos ratione sequi sit veritatis....</p>
                                            <a href="#" class="btn-pink-box">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="block-text rel zmin">
                                            <img src="http://bestjquery.com/tutorial/news-slider/demo33/images/img-3.jpg" alt="">
                                            <br>
                                            <a title="" href="#">Latest News Post</a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad magni, nesciunt obcaecati possimus quasi quibusdam quos ratione sequi sit veritatis....</p>
                                            <a href="#" class="btn-pink-box">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> 
</body>
@endsection

