@extends('frontend.layouts.master')
@section('content')

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
        @include('frontend.layouts.nav')

        <!-- breadcrumbs -->
        <section class="intro ui-title-page">
            <img src="{{ asset('frontend/img/women-health-title.png') }}" class="img-responsive" width="100%">
            <div class="breadcrumbs-title">
                <div class="container">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <h1>Women's Health </h1>
                        <div class="ui-subtitle-page">Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain</div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: boxes -->
        <section id="boxes" class="home-section paddingtop-10 paddingbot-50">
            <div class="container">
                <div class="row">
                    <div>
                        <div class="col-sm-9 col-md-9 paddingbot-30 wow fadeInLeft" data-wow-delay="0.1s">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                <br>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
                            </p>
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
                         <h3 class="h-bold">We cover a wide range of female focused health concerns, including:</h3>
                         <p>
                             <ul>  
                                <li>Pregnancy testing</li>
                                <li>Smear tests (aged 25 and over) for cervical cancer </li>
                                <li>Discussion and advice on contraceptive choices </li>
                                <li>Provision of prescription for emergency contraception, combined and progestogen-only contraceptive pills, contraceptive patch, contraceptive ring and contraceptive injection </li>
                                <li>Pelvic pain </li>
                                <li>Vaginal discharge </li>
                                <li>Period problems </li>
                                <li>Menopause and HRT </li>
                                <li> Genital itching or irritation </li>
                                <li>Genital lumps or ulcers </li>
                                <li>Breast lumps </li>
                                <li>Breast pain </li>
                                <li>Nipple discharge </li>
                                <li>Breast examination and advice/demonstration of self-examination techniques </li>
                                <li>Pre-pregnancy advice </li>
                                <li>Osteoporosis and assessment of osteoporosis risk </li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5 paddingtop-30">
                         <img src="{{ asset('frontend/img/women-health-des.png') }}" class="img-responsive">
                    </div>
                </div>
            </div>
        </section>


        <section id="boxes" class="home-section paddingtop-50 paddingbot-50">
            <div class="container">
                <div class="row">
                    <div>
                        <div class="col-sm-7 col-md-7 paddingbot-30 wow fadeInLeft" data-wow-delay="0.1s">
                            <h3 class="h-bold">Health assessments</h3>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                            <br>
                            <a href="#" class="btn btn-skin btn-lg">Learn more</a>
                        </div>
                        <div class="col-sm-5 col-md-5 text-center paddingtop-30 paddingbot-50 wow fadeInRight" data-wow-delay="0.2s">
                            <img src="{{ asset('frontend/img/health-ass.png') }}" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <!-- CLinic Center Locations -->
        <section class="home-section paddingbot-60">
            <div class="container marginbot-30">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="section-heading text-center">
                                <h2 class="h-bold">Find a private GP near me</h2>
                                <p>View our health centre pages below or call us for advice on +959 123456789</p>
                            </div>
                        </div>
                        <i class="title-bg"></i>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="partner">
                            <h4 class="h-bold"><i class="fa fa-hospital-o" aria-hidden="true"></i> Easy Health Center - Hleden</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <b><a href="#">View Health Center Page > </a></b>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 wow fadeInRight" data-wow-delay="0.1s">
                        <div class="partner">
                            <h4 class="h-bold"><i class="fa fa-hospital-o" aria-hidden="true"></i> Easy Health Center - Maynigone</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <b><a href="#">View Health Center Page > </a></b>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="partner">
                            <h4 class="h-bold"><i class="fa fa-hospital-o" aria-hidden="true"></i> Easy Health Center - Tarmwe</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <b><a href="#">View Health Center Page > </a></b>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 wow fadeInRight" data-wow-delay="0.1s">
                        <div class="partner">
                            <h4 class="h-bold"><i class="fa fa-hospital-o" aria-hidden="true"></i> Easy Health Center - Lamataw</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <b><a href="#">View Health Center Page > </a></b>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="partner">
                            <h4 class="h-bold"><i class="fa fa-hospital-o" aria-hidden="true"></i> Easy Health Center - Sule</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <b><a href="#">View Health Center Page > </a></b>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 wow fadeInRight" data-wow-delay="0.1s"s>
                        <div class="partner">
                            <h4 class="h-bold"><i class="fa fa-hospital-o" aria-hidden="true"></i> Easy Health Center - Hlaing</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <b><a href="#">View Health Center Page > </a></b>
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
