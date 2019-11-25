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
                        <div class="single-blog">
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h4 class="h-bold">Why Primary Health Care is very important in life?</h4>
                                    <div class="meta">
                                        <ul>
                                            <li><i class="fa fa-user" aria-hidden="true"></i> Admin &nbsp;&nbsp;| &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> 04 June 2018</li>
                                        </ul>
                                    </div>
                                </div>
                                <p>
                                    Justo laoreet dignis sim lectus duic etiamd ipsum habitant tristique nam est. Donec venenatis leo eu varius curus da metus nuc placerat cursus In sodales purus non nisi. Aliquam orci lacus, mattis nec ornare sed, varius eget, turpis. Donec eget massa velit interdum interdum. Cras vehicula, pede a viverra varius pede sapien commodo turpis et blandit ut nisi. Eonec pede. Maecenas sodales elit. Suspendisse justo elit vulputate vel sodales sit amet convallis vel dolor.
                                    <br><br>
                                    <img src="{{ asset('frontend/img/detail.jpg') }}" alt=""> 
                                    <br><br>
                                    Ut tellus.Nullam nec sem. Nullam risus turpis, rhoncus vel, varius consequat, laoreet ac, neque. Cras tristique ante lacinia dolor. Aenean a odio. Integer faucibus augue ut lacus.Sed purus neque, lacinia ac blandit nec pulvinar vel, pede. Suspendisse ut diam. Donec ut augue. Suspendisse et erat. Cras augue ipsum, pharetra indsa scelerisque acd mollis vel, metus. Nulla condimen tum sollicitudin lacus. Quisque urna enim placerat ut, auctor sed, mollis vitae. Cras volutpat, mauris a rhoncus accumsan est lacus tincidunt nibh eu pretium enim elit in augue. Vestibulum eget nibh velit fermentum sollicitudin. Sed vehicula lorem a rhonc usc varius felis felis ultrices dolor a euismod lacus ligula a nisl.
                                    <br><br>
                                    Ut tellus.Nullam nec sem. Nullam risus turpis, rhoncus vel, varius consequat, laoreet ac, neque. Cras tristique ante lacinia dolor. Aenean a odio. Integer faucibus augue ut lacus.Sed purus neque, lacinia ac blandit nec pulvinar vel, pede. Suspendisse ut diam. Donec ut augue. Suspendisse et erat. Cras augue ipsum, pharetra indsa scelerisque acd mollis vel, metus. Nulla condimen tum sollicitudin lacus. Quisque urna enim placerat ut, auctor sed, mollis vitae. Cras volutpat, mauris a rhoncus accumsan est lacus tincidunt nibh eu pretium enim elit in augue. Vestibulum eget nibh velit fermentum sollicitudin. Sed vehicula lorem a rhonc usc varius felis felis ultrices dolor a euismod lacus ligula a nisl.
                                </p>
                                <br>
                                <div class="meta">
                                    <ul>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Healthcare | Fitness </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                </div>
            </div>
        </section>
        <!-- /Section: boxes -->
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
