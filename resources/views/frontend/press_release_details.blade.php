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
                        <h1>Why Primary Health Care is very important in life?</h1>
                        <div class="ui-subtitle-page">Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-section paddingbot-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 wow fadeInLeft" data-wow-delay="0.2s">
                        <!-- Single Blog -->
                        @if($blog !=null )
                        <div class="single-blog">
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h4 class="h-bold">{{ $blog->title }}</h4>
                                    <div class="meta">
                                        <ul>
                                            <li><i class="fa fa-user" aria-hidden="true"></i> Admin &nbsp;&nbsp;| &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> 04 June 2018</li>
                                        </ul>
                                    </div>
                                </div>
                                <p>
                                @if($blog->media_id != null)
                                    <?php
                                        $image = $blog->media->file_path . '/' . $blog->media->file_name;
                                    ?>
                                    <img src="{{ asset($image) }}" class="img-responsive" width="100%" height="100%">
                                @endif
                                
                                    {!! $blog->content !!}
                                </p>
                                <br>
                            </div>
                        </div>
                        @endif
                    </div>  
                </div>
            </div>
        </section>
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
        <!-- /Section: boxes -->      
    </div>
</body>
@endsection
