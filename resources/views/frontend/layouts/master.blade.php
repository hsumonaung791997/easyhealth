<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain">
    <meta name="author" content="Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain">
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend/img/favicon.ico') }}" type="image/x-icon">
    <title>Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain</title>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/master.css') }}">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

@yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget" style="color: #fff;">
                            <h5>Open Now</h5>
                            <ul>
                                <li>
                                    <span class="glyphicon glyphicon-time"></span> Daily Open : 7am to 11pm
                                </li>
                                <br>
                                <li>
                                    <span class="glyphicon glyphicon-phone-alt"></span>  +959 772 317388
                                </li>
                                <br>
                                <li>
                                    <i class="fa fa-envelope"></i> easyhealth.mm@gmail.com
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>Follow us</h5>
                            <ul class="company-social">
                                <li class="social-facebook"><a href="https://www.facebook.com/easyhealthmyanmar/"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget" style="color: #fff;">
                            <h5>Our Services</h5>
                            <ul>
                                <li><a href="{{ url('gp_services') }}"><i class="fa fa-caret-right" aria-hidden="true"></i> Private GP services </a></li>
                                <li><a href="{{ url('mini_pharmacies')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Mini pharmacies </a></li>
                                <li><a href="{{ url('health_assessments') }}"><i class="fa fa-caret-right" aria-hidden="true"></i> Health screenings and diagnostics </a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Home services</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Telemedicine services</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Corporate B2B healthcare</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>Corporate Info</h5>
                            <ul>
                                <li><a href="{{ url('contact') }}"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Locations</a></li>
                                <li><a href="{{ url('/our_doctors') }}"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Doctors </a></li>

                                <li><a href="{{ url('whyus') }}"><i class="fa fa-caret-right" aria-hidden="true"></i> Company Profile </a></li>
                                <li><a href="{{ url('management_team') }}"><i class="fa fa-caret-right" aria-hidden="true"></i> Management Team</a></li>
                                <li><a href="{{ url('privacy_policy') }}"><i class="fa fa-caret-right" aria-hidden="true"></i> Privacy Poilcy </a></li>
                            </ul>
                        </div>
                    </div>                      
            </div>
             <div class="col-sm-6 col-md-2">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="widget" style="color: #fff;">
                        <h5>Our Blogs</h5>
                        <ul>
                            <li><a href="{{ url('17/newsblog') }}"><i class="fa fa-caret-right" aria-hidden="true"></i> Press Releases</a></li>
                            <li><a href="{{ url('18/newsblog') }}"><i class="fa fa-caret-right" aria-hidden="true"></i> Health Blogs </a></li>
                        </ul>
                    </div>
                </div>
            </div>   
        </div>

        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="text-left">
                                <p><img src="{{ asset('frontend/img/footer-eh-logo.png') }}"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="text-right">
                                <div class="credits">
                                    &copy; easy health 2019
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>


    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.scrollTo.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('frontend/js/stellar.js') }}"></script>
    <script src="{{ asset('frontend/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/nivo-lightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>

    <!-- Date Picker -->
    <script>           
        $('#dob').calendar();
        $('#appointmentDate').calendar({
            type: 'date'
        });
    </script> 

    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <!-- Booking Button -->
    <div class="log-in">
        <a href="https://www.google.com/" target="_blank" id="popup__toggle" onclick="return true;">
            <div class="circlephone" style="transform-origin: center;"></div>
            <div class="circle-fill" style="transform-origin: center;"></div>
            <div class="img-circle" style="transform-origin: center;"><div class="img-circleblock" style="transform-origin: center;"></div></div>
        </a>
    </div>
</body>
</html>