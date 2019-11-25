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
                        <h1>Our Doctors</h1>
                        <div class="ui-subtitle-page">Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain</div>
                    </div>
                </div>
            </div>
        </section>
        


        <!-- Section: boxes -->
        <section class="home-section paddingtop-30 paddingbot-50">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8">
                        <div class="wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="box">
                                <div>
                                    <div class="section-heading">
                                        <h2 class="h-bold">Doctor Name</h2>
                                        <h4>Position</h4>
                                    </div>
                                </div>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="box text-center">
                                <br><br>
                                <img src="{{ asset('frontend/img/doctors2.png') }}" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       


       <section class="home-section bg-gray paddingtop-50 paddingbot-50">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8">
                        <div class="wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="box">
                                <div>
                                    <div class="section-heading">
                                        <h2 class="h-bold">Doctor Name</h2>
                                        <h4>Position</h4>
                                    </div>
                                </div>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="box text-center">
                                <br><br>
                                <img src="{{ asset('frontend/img/doctors1.png') }}" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: boxes -->
        <section class="home-section paddingtop-50 paddingbot-50">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8">
                        <div class="wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="box">
                                <div>
                                    <div class="section-heading">
                                        <h2 class="h-bold">Doctor Name</h2>
                                        <h4>Position</h4>
                                    </div>
                                </div>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="box text-center">
                                <br><br>
                                <img src="{{ asset('frontend/img/doctors3.png') }}" class="img-responsive">
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
                                <h2 class="h-bold">Our doctors would be happy to hear from you.</h2>
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
</html>
