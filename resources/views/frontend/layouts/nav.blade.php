<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="top-area">
        <!-- <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6"></div>
                <div class="col-sm-6 col-md-6">
                    <p class="bold text-right"><a href="#"><img src="{{ asset('frontend/img/eng.png') }}"></a> &nbsp; <a href="#"><img src="{{ asset('frontend/img/mm.png') }}"></a></p>
                </div>
            </div>
        </div> -->
    </div>
    
    <div class="container navigation">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('frontend/img/logo.png') }}" alt="" width="210" height="" /></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                <li><a href="{{ url('whyus')}}"><i class="fa fa-question-circle" aria-hidden="true"></i> Why Us?</a></li>
                <li><a href="{{ url('ourservices') }}"><i class="fa fa-user-md" aria-hidden="true"></i> Our Services</a></li>
                <li> <a href="{{ url('news_blogs') }}"><i class="fa fa-stethoscope" aria-hidden="true"></i> News Blog</a>
                </li>
                <li><a href="{{ url('contact') }}"><i class="fa fa-hospital-o" aria-hidden="true"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>