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
                        <h1>Our Doctors</h1>
                        <div class="ui-subtitle-page">Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: boxes -->
        <section class="home-section paddingtop-30 paddingbot-50">
            @foreach($ourdoctors as $doctor) 
            <div class="container">              
                <div class="row">                     
                    <div class="col-sm-8 col-md-8">
                        <div class="wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="box">                             
                                <div>
                                    <div class="section-heading">
                                        <h2 class="h-bold">{{ $doctor->name }}</h2>
                                    </div>
                                </div>
                                <p>
                                    {{ $doctor->position }}
                                </p>
                                <p>
                                    {!! $doctor->description !!}
                                </p>
                            </div>                          
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="box text-center">
                                <br><br>
                                @if($doctor->media_id != null)
                                    <?php
                                        $image = $doctor->media->file_path . '/' . $doctor->media->file_name;
                                    ?>
                                    <img src="https://akkclvuato.cloudimg.io/v7/{{ asset($image) }}?operations&filters" class="img-responsive" width="100%" height="100%">
                                @endif
                            </div>
                        </div>
                    </div>
                </div> 
                <hr>            
            </div>         
        </section> 
       @endforeach       
    </div>
</body>
@endsection
</html>
