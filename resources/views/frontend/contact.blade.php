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
                        <h1>Contact Us</h1>
                        <div class="ui-subtitle-page">Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain</div>
                    </div>
                </div>
            </div>
        </section>
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4598.691819306117!2d96.15327342064478!3d16.784242021764783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1edbd6df99bb5%3A0xc2a7ab22ae14a24a!2seasy%20health!5e0!3m2!1smy!2smm!4v1572596668261!5m2!1smy!2smm" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

         <!-- CLinic Center Locations -->
        @include('frontend.locations')

        <!-- Section-->
        <section class="home-section paddingtop-50 paddingbot-30">
            <div class="container">
                 <div class="row">
                    <!-- Boxes de Acoes -->
                    <div class="col-xs-12 col-sm-6 col-lg-4">
                        <div class="box wow fadeInLeft" data-wow-delay="0.1s">                           
                            <div class="icon">
                                <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="info">
                                    <h3 class="title">42-D-3, Bo Yar Nyunt Street, <br>Dagon Township, Yangon</h3>
                                     
                                </div>
                            </div>
                            <div class="space"></div>
                        </div> 
                    </div>
                        
                    <div class="col-xs-12 col-sm-6 col-lg-4">
                        <div class="box wow fadeInUp" data-wow-delay="0.1s">                           
                            <div class="icon">
                                <div class="image"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
                                <div class="info">
                                    <h3 class="title">+959 772 317388 </h3><br>
                                </div>
                            </div>
                            <div class="space"></div>
                        </div> 
                    </div>
                        
                    <div class="col-xs-12 col-sm-6 col-lg-4">
                        <div class="box wow fadeInRight" data-wow-delay="0.1s">                           
                            <div class="icon">
                                <div class="image"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                <div class="info">
                                    <h3 class="title">easyhealth.mm@gmail.com</h3><br>
                                     
                                </div>
                            </div>
                            <div class="space"></div>
                        </div> 
                    </div>          
                    <!-- /Boxes de Acoes -->
                </div>
            </div>
        </section>
        <!-- /Section: boxes -->

        <!-- Section: boxes -->
        <section id="boxes" class="home-section paddingtop-20 paddingbot-70">
            <div class="container">
                <div class="row">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Drop us a Message </h2>
                            <p>Our medical specialists care about you & your family’s health</p>
                        </div>
                        <i class="title-bg"></i>
                    </div>
                </div>
                <div class="container contact-form wow fadeInUp" data-wow-delay="0.1s">
                    <form method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 170px !important;"></textarea>
                                </div>
                            </div>
                            <center>
                                <div class="form-group">
                                    <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                                </div>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>
</body>
@endsection
</html>
