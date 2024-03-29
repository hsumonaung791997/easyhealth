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
                        <h1> Management Team</h1>
                        <div class="ui-subtitle-page">Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: team -->
        @if($teams != null)
        <section class="home-section paddingbot-60">   
               <div class="container">
                    <div class="row">
                        @foreach($teams as $team)
                        <div class="col-md-4 col-sm-4">
                            @if($team->media_id != null)
                                <?php
                                    $image = $team->media->file_path . '/' . $team->media->file_name;
                                ?>
                                <img src="https://akkclvuato.cloudimg.io/v7/{{ asset($image)}}?operations&filters" alt="" width="100%">
                            @endif
                            <br><br>
                             <div class="cbp-l-grid-team-position">{{ $team->title }}</div>
                            <div class="cbp-l-grid-team-position">{{ $team->position }}</div>
                            <br><br>
                        </div>
                        @endforeach
                    </div>
                </div>
        </section>
        @endif
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
                                <h2 class="h-bold">09 772 317388</h2>
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

