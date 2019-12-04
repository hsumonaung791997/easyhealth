@extends('frontend.layouts.master')
@section('content')

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
        @include('frontend.layouts.nav')

        <!-- breadcrumbs -->
        <section class="intro ui-title-page">
            <img src="{{ asset('frontend/img/health-assessments-title.png') }}" class="img-responsive" width="100%">
            <div class="breadcrumbs-title">
                <div class="container">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <h1>Compare health assessments</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Left Menu -->
        <section class="home-section paddingtop-10 paddingbot-50">
            <div class="container">
                <div class="row">
                    <div>
                        <div class="col-sm-4 col-md-4 paddingbot-50 wow fadeInRight" data-wow-delay="0.2s">
                            <nav>
                                <ul class="ace-responsive-menu" data-menu-style="vertical">
                                    <li>
                                        <a href=""><b class="h-bold">Health assessments</b></a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right" aria-hidden="true"></i> <span class="title">Health Core</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right" aria-hidden="true"></i> <span class="title">Health Focus</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right" aria-hidden="true"></i> <span class="title">Health Enhance</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right" aria-hidden="true"></i> <span class="title">Health Peak</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right" aria-hidden="true"></i> <span class="title"> Mature health</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right" aria-hidden="true"></i> <span class="title">Health assessment FAQs</span>
                                        </a>
                                    </li>
                                    <li class="last">
                                        <a href="#">
                                            <i class="fa fa-caret-right" aria-hidden="true"></i> <span class="title">Health Focus</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-sm-8 col-md-8 paddingbot-30 wow fadeInLeft" data-wow-delay="0.1s">
                            <h4 class="h-bold">Our Health Core assessment provides a key set of tests and measures to give you a view on your current health and any future health risks.</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                 
                            </p>
                            <br>
                            <h4 class="h-bold">Ask us a question on +959 123456789</h4>
                            <a href="#" class="ph-call-btn btn btn-lg ">CALL NOW</a>
                        </div>   
                    </div>
                </div>
            </div>
        </section>

        <section class="home-section bg-gray paddingbot-60">
            <div class="container">
                <div class="row">
                    <div class="wow fadeInDown" data-wow-delay="0.1s" >
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Compare health assessments</h2>
                        </div>
                        <i class="title-bg"></i>
                    </div>
                    <br><br>
                    <div class="col-sm-12 col-md-12 col-lg-12 wow fadeInLeft" data-wow-delay="0.1s" >
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="bg-white">Type</th>
                                    <th class="bg-cyan">Health Core</th>
                                    <th class="bg-teal">Health Focus</th>
                                    <th class="bg-violet">Health Enhance</th>
                                    <th class="bg-fuchsia">Health Peak</th>
                                    <th class="bg-green">Mature Health</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Assessment Time</th>
                                    <td>60 minutes</td>
                                    <td>1 Hour 30 minutes</td>
                                    <td>2 hours</td>
                                    <td>2 Hours 30 minutes</td>
                                    <td>2 Hours</td>
                                </tr>
                                <tr>
                                    <th scope="row">Available For</th>
                                    <td>Men and Women aged 18 and above</td>
                                    <td>Men and Women aged 18 and above</td>
                                    <td>Men and Women aged 18 and above</td>
                                    <td>Men and Women aged 18 and above</td>
                                    <td>Men and Women aged 65 and over</td>
                                </tr>
                                <tr>
                                    <th scope="row">Primarily Designed for</th>
                                    <td>Men and Women aged 40 and under</td>
                                    <td>Men and Women aged 50 and under</td>
                                    <td>Men and Women over the age of 40</td>
                                    <td>Men and Women aged 18 to 70</td>
                                    <td>Men and women over 65</td>
                                </tr>
                                <tr>
                                    <th scope="row">On the day</th>
                                    <td>Guidance on a healthier lifestyle with a health adviser</td>
                                    <td>Up to 30 minutes with a doctor including a focused physical examination</td>
                                    <td>Up to one hour with a doctor including a focused physical examination</td>
                                    <td>Up to one hour with a doctor including a focused physical examination</td>
                                    <td>Up to one hour with a doctor including a focused physical examination</td>
                                </tr>
                                <tr>
                                    <th scope="row">Prices</th>
                                    <td>$100</td>
                                    <td>$100</td>
                                    <td>$100</td>
                                    <td>$100</td>
                                    <td>$100</td>
                                </tr>
                                 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
         
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
