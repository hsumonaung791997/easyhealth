@extends('frontend.layouts.master')
@section('content')
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
        @include('frontend.layouts.nav')
        <!-- breadcrumbs -->
        <section class="intro ui-title-page">
            <img src="img/services-details.png" class="img-responsive" width="100%">
            <div class="breadcrumbs-title">
                <div class="container">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <h1>Our Services</h1>
                        <div class="ui-subtitle-page">easy health - Myanmar’s First & Only Convenient-Care Clinic Chain</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="paddingtop-50 paddingbot-50" >
            <div class="container">
                @if($servicedescrption != null)
                <div class="">
                    <div style="background: #f1efeb;color: #333;" class="col-sm-12 col-md-12 paddingtop-30 paddingbot-30">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="section-heading text-center">
                                <h2 class="h-bold" style="color: #333;">{{ $servicedescrption->title}}</h2>
                                <p><b>Myanmar’s First & Only Convenient-Care Clinic Chain</b></p>
                            </div>
                            <i class="title-bg"></i>
                        </div>
                        <br>                        
                        <p>
                             {!! $servicedescrption->content_one !!}
                        </p>
                    </div>
                </div>
                @endif
            </div>
        </section>
        <section class="paddingbot-50 paddingtop-20">
            <div class="container">
                <div class="row">
                    @foreach($ourservices as $key => $ourservice)
                    <div class="col-sm-6 col-md-6 svbox">
                        <div class="bg-colour-{{$key}} wow fadeInLeft" data-wow-delay="0.3s">
                            <span class="fa fa-service-icon-{{$key}} fa-4x"></span>
                            <br>
                            <h3 class="h-light">{{ $ourservice->title }}</h3>
                            <p style="font-size: 14px;">
                                {!! str_limit(strip_tags($ourservice->content_one), 250) !!}
                                @if (strlen(strip_tags($ourservice->content_one)) > 250)
                                <a href=" @if( $ourservice->type == 11 ){{ url($ourservice->id , 'gp_services')}} @elseif ($ourservice->type == 12) {{ url($ourservice->id , 'health_assessments') }} @else {{ url($ourservice->id , 'other')}} @endif" class="btn-white-box ">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                                @endif
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
     