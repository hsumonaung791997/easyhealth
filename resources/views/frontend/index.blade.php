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
                            <center><a href="{{ url(11,'gp_services') }}" class="btn-white-box ">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a></center>
                        </hgroup>     
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-2"></div>
                    <div class="hero">        
                        <hgroup>
                            <h1>Health screenings and diagnostics</h1>        
                            <br><br>    
                            <center><a href="{{ url(12,'health_assessments') }}" class="btn-white-box ">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a></center>
                        </hgroup>            
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-3"></div>
                      <div class="hero">        
                        <hgroup>
                            <h1>Mini Pharmacy</h1>        
                            <br><br>    
                            <center><a href="{{ url(13,'other') }}" class="btn-white-box ">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a></center>
                        </hgroup>
                    </div>
                </div>
            </div> 
        </div>
        @if($whyus != null)
        <section class="home-section paddingtop-50 paddingbot-50">
            <div class="container">
                
                <div class="row paddingbot-50 paddingtop-30 text-center" style="background: #f1efeb;color: #333;">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold" style="color: #333;">Why Us? </h2>
                            <p><b>{{ $whyus->title }}</b></p>
                        </div>
                        <i class="title-bg"></i>
                    </div>
                    <br> 
                    <div class="col-sm-12 col-md-12">
                        <p>
                            {!! $whyus->description !!}
                        </p>
                        <br>
                        <center><a href="{{ url('whyus') }}" class="btn-pink-box">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a></center>
                    </div>    
                </div>
               
            </div>
        </section>
        @endif
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
                            <img src="https://akkclvuato.cloudimg.io/v7/{{ asset('frontend/img/medical-services.png') }}?operations&filters" class="img-responsive" alt="" />
                        </div>
                    </div>
                    @if($ourservices != null)
                    @foreach($ourservices as $key => $ourservice)
                    <div class="col-sm-4 col-md-4">
                        <div class="wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="service-box">
                                <div class="service-icon">
                                <span class="fa fa-service-icon-{{$key}} fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">{{ $ourservice->title }}</h5>
                                <p> {!! str_limit(strip_tags($ourservice->content_one), 80) !!}
                                @if (strlen(strip_tags($ourservice->content_one)) > 80)
                                @endif  </p>
                                 <a href=" @if( $ourservice->type == 11 ){{ url($ourservice->id , 'gp_services')}} @elseif ($ourservice->type == 12) {{ url($ourservice->id , 'health_assessments') }} @else {{ url($ourservice->id , 'other')}} @endif">Read More</a>                      
                            </div>
                        </div>
                    </div>
                </div> 
                @endforeach
                @endif
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
                    @if($partners != null)
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="wow FadeInUp" data-wow-delay="0.2s">
                            @foreach($partners as $partner)
                            <div class="col-xs-4 col-md-2 col-lg-2">
                                @if($partner->media_id != null)
                                <?php
                                   $image = $partner->media->file_path . '/' . $partner->media->file_name;
                                ?>
                                <img src="https://akkclvuato.cloudimg.io/v7/{{ asset($image) }}?operations&filters" class="img-responsive" alt="img"> 
                                @endif 
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
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
                @if($blogs != null)
                <div class="container">                   
                    <div class="row">                      
                        <div class="owl-carousel">
                             @foreach($blogs as $blog)
                            <div class="item">
                                @if($blog->media_id != null)
                                        <?php
                                            $image = $blog->media->file_path . '/' . $blog->media->file_name;
                                        ?>
                                        <img src="https://akkclvuato.cloudimg.io/v7/{{ asset($image) }}?operations&filters" class="img-responsive" width="100%" height="100%">
                                    @endif
                                <br>
                                <h4><a  href="@if($blog->type == 17) {{ url($blog->id, 'press_release_details' ) }} @else {{ url( $blog->id, 'blogs_detail') }} @endif ">{{ $blog->title}} </a></h4>
                                <p>
                                    {{ str_limit(strip_tags($blog->content), 100) }}
                                        @if (strlen(strip_tags($blog->content)) > 100)
                                          ... 
                                          <a href="@if($blog->type == 17) {{ url($blog->id, 'press_release_details') }} @else {{ url($blog->id, 'blogs_detail') }} @endif" class="btn-pink-box">Read More<i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                                        @endif
                                </p>
                            </div>
                            @endforeach
                        </div> 
                   </div>                    
                </div>
                @endif
            </div>
        </section>
    </div> 
</body>
@endsection

