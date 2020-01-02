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
                        <h1> Management Team</h1>
                        <div class="ui-subtitle-page">Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: team -->
        <section class="home-section paddingbot-60">   
            <div class="container">
                <div class="row">
                    <div id="grid-container" class="cbp-l-grid-team">
                        <ul>
                            @foreach($teams as $team)
                            <li class="cbp-item text-center">
                                <a href="#" class="cbp-caption ">
                                    <div class="cbp-caption-defaultWrap">
                                        <?php 
                                        $image = $team->media->file_path. '/' .$team->media->file_name;
                                        ?>
                                        <img src="{{ asset($image) }}" alt="" width="100%">
                                    </div>
                                </a>
                                <h4 class="h-bold">{{ $team->title }}</h4>
                                <div class="cbp-l-grid-team-position">{{ $team->position }}</div>

                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                 
            </div>
        </section>
        <!-- /Section: team -->

        <hr>

        <!-- CLinic Center Locations -->

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
