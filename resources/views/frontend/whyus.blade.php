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
                @if($whyus != null )
                <div class="row">
                    <div class="col-sm-7 col-md-7">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            
                            <div class="box">
                                <div class="wow fadeInLeft" data-wow-delay="0.1s">
                                    <div class="section-heading">

                                        <h2 class="h-bold"> {{ $whyus->title }}</h2>
                                        <p>Myanmar’s First & Only Convenient-Care Clinic Chain</p>
                                    </div>
                                </div>
                                <p>
                                    {!! $whyus->description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-5">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="box text-center">
                                <br><br>
                                @if($whyus->media_id != null)
                                <?php
                                    $image = $whyus->media->file_path . '/' . $whyus->media->file_name;

                                ?>
                                <img src="{{ asset($image) }}" class="img-responsive" width="100%" height="100%">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </section>
        <!-- /Section: boxes -->
        <!-- Section: team -->
        @if($teamcover != null)
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
                <div class="row">
                    @if($teamcover->media_id != null)
                    <?php
                        $image = $teamcover->media->file_path . '/' . $teamcover->media->file_name;
                    ?>
                    <img src="{{ asset($image) }}" class="img-responsive" width="100%">
                    @endif
                    <br>
                    <p> {!! $teamcover->description !!} </p>
                    <br> 
                    <center>
                        <a href="{{ url('management_team')}}" class="btn-pink-box">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                    </center>
                </div>
            </div>
        </section>
         @endif
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
            </div>

            @if($doctors != null)   
                <div class="container">
                    <div class="row">
                        @foreach($doctors as $doctor)
                        <div class="col-md-4 col-sm-4">
                            @if($doctor->media_id != null)
                                <?php
                                    $image = $doctor->media->file_path . '/' . $doctor->media->file_name;
                                ?>
                                <img src="{{ asset($image)}}" alt="" width="100%">
                            @endif
                            <br><br>
                            <a href="{{ url('our_doctor')}}" class="cbp-singlePage cbp-l-grid-team-name">{{ $doctor->name }}</a>
                            <div class="cbp-l-grid-team-position">{{ $doctor->position }}</div>
                            <br><br>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <center>
                            <br><br>
                            <a href="{{url('our_doctor')}}" class="btn btn-skin btn-lg">Learn more</a>
                        </center>
                    </div>
                </div>
            @endif
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


        <!-- <section class="home-section paddingtop-0 paddingbot-40">
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
        </section> -->

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
                                 @foreach($facilities as $facility)
                                    <div class="item"> 
                                        @if($facility->media_id != null)
                                            <?php
                                                $image = $facility->media->file_path . '/' . $facility->media->file_name;
                                            ?>
                                            <img src="{{ asset($image) }}" class="img-responsive" alt="img">
                                        @endif
                                    </div>
                                  @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: works -->

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
 
