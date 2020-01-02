@extends('frontend.layouts.master')
@section('content')
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
        @extends('frontend.layouts.nav')
        <!-- breadcrumbs -->
        <section class="intro ui-title-page">
            <img src="img/about-bg.png" class="img-responsive" width="100%">
            <div class="breadcrumbs-title">
                <div class="container">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <h1>News Blog</h1>
                        <div class="ui-subtitle-page">easy health - Myanmar’s First & Only Convenient-Care Clinic Chain</div>
                    </div>
                </div>
            </div>
        </section>
         
        <section class="bg-gray paddingtop-50 paddingbot-50">
            <div class="carousel-reviews broun-block">
                <div class="container">
                     
                    <div class="row">
                        <div class="col-md-8 col-sm-8">

                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select id="inputState" class="form-control">
                                     
                                    <option value="17" class="a" >Press Releases</option>
                                    <option value="18" class="a">Health Blogs</option>
                                </select>
                                <button type="submit" class="btn btn-sm pull-right">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">    
                        <div id="carousel-reviews" class="carousel slide" data-ride="carousel">                    
                           <div class="carousel-inner" id="newsblog">
                                @foreach($newsblogs as $newsblog)
                                <div class="item active">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="block-text rel zmin">
                                           @if($newsblog->media_id != null)
                                            <?php
                                                $image = $newsblog->media->file_path . '/' . $newsblog->media->file_name;
                                            ?>
                                                <img src="{{ asset($image) }}" class="img-responsive" width="100%" height="100%">
                                            @endif
                                            <br>
                                            <a title="" href="#">{{ $newsblog->title }}</a>
                                            <p>{{ str_limit(strip_tags($newsblog->content), 200) }}
                                            @if (strlen(strip_tags($newsblog->content)) > 200)
                                                <a href="#" class="btn-white-box ">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                                            @endif</p>
                                            <a href="{{url($newsblog->id, 'blogs_details')}}" class="btn-pink-box">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: testimonial -->

        <section class="home-section paddingbot-60">
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
@endsection
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.a').select(function(){
            alert('ok');
        });
    });
</script>

