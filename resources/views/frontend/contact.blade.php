@extends('frontend.layouts.master')
@section('content')

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
        @include('frontend.layouts.nav')

        <!-- breadcrumbs -->
        <section class="intro ui-title-page">
            <img src="https://akkclvuato.cloudimg.io/v7/{{ asset('frontend/img/about-bg.png') }}?operations&filters" class="img-responsive">
            <div class="breadcrumbs-title">
                <div class="container">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <h1>Contact Us</h1>
                        <div class="ui-subtitle-page">Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain</div>
                    </div>
                </div>
            </div>
        </section>

         <!-- CLinic Center Locations -->

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
                    @if($message = Session::get('success'))
                    <center>
                        <div class="row alert alert-success alert-block" style="width: 72%;text-align: center;">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    </center>
                    @endif
                    <form method="post" action="{{ url('sendmail/send') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" />
                                    @if ($errors->has('name'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
                                     @if ($errors->has('email'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Your Phone Number " value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Your Message " style="width: 100%; height: 170px !important;"></textarea>
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
