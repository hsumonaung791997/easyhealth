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
                <div class="">
                    <div style="background: #f1efeb;color: #333;" class="col-sm-12 col-md-12 paddingtop-30 paddingbot-30">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="section-heading text-center">
                                <h2 class="h-bold" style="color: #333;">Our Services </h2>
                                <p><b>Myanmar’s First & Only Convenient-Care Clinic Chain</b></p>
                            </div>
                            <i class="title-bg"></i>
                        </div>
                        <br>                        
                        <p>
                            <b>easy health</b> is established to improve the dynamics of convenience in the healthcare landscape of Myanmar. The mission of easy health is simple - to make quality healthcare conveniently accessible.
                            <br><br>
                            Through its structure of a convenient-care clinic chain, easy health currently provides walk-in consultation services, lab test services and mini pharmacy at its clinics. As the name suggests, easy health strives to ease the burdens in seeking healthcare by making things easier and more convenient. However, the convenience does not come at a cost of quality as the medical quality, excellent service and patient safety are within the core foundation of everything we do! 
                            <br>
                        </p>
                         
                    </div>
                </div>
            </div>
        </section>
        <section class="paddingbot-50 paddingtop-20">
            <div class="container">
                <div class="row">
                    @foreach($gp as $key => $g)
                    <div class="col-sm-6 col-md-6 svbox">
                        <div class="bg-colour-{{$key}} wow fadeInLeft" data-wow-delay="0.3s">
                            <span class="fa fa-stethoscope fa-4x"></span>
                            <br>
                            <h3 class="h-light">{{ $g->title }}</h3>
                            <p style="font-size: 14px;">
                                {{ str_limit(strip_tags($g->description), 160) }}
                                @if (strlen(strip_tags($g->description)) > 160)
                                <a href="{{ url($g->id , 'gp_services') }}" class="btn-white-box ">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                                @endif
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="paddingbot-50 paddingtop-20">
            <div class="container">
                <div class="row">
                    @foreach($hs as $key => $h)
                    <div class="col-sm-6 col-md-6 svbox">
                        <div class="bg-colour-{{$key}} wow fadeInLeft" data-wow-delay="0.3s">
                            <span class="fa fa-stethoscope fa-4x"></span>
                            <br>
                            <h3 class="h-light">{{ $h->title }}</h3>
                            <p style="font-size: 14px;">
                                {{ str_limit(strip_tags($h->description), 160) }}
                                @if (strlen(strip_tags($h->description)) > 160)
                                <a href="{{ url($h->id , 'health_assessments') }}" class="btn-white-box ">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                                @endif
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="paddingbot-50 paddingtop-20">
            <div class="container">
                <div class="row">
                    @foreach($other as $key => $oth)
                    <div class="col-sm-6 col-md-6 svbox">
                        <div class="bg-colour-{{$key}} wow fadeInLeft" data-wow-delay="0.3s">
                            <span class="fa fa-stethoscope fa-4x"></span>
                            <br>
                            <h3 class="h-light">{{ $oth->title }}</h3>
                            <p style="font-size: 14px;">
                                {{ str_limit(strip_tags($oth->description), 160) }}
                                @if (strlen(strip_tags($oth->description)) > 160)
                                <a href="{{ url($oth->id , 'mini_pharmacies') }}" class="btn-white-box ">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
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
     