@extends('frontend.layouts.master')
@section('content')
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
        @include('frontend.layouts.nav')
        <!-- breadcrumbs -->
        <section class="intro ui-title-page">
            <img src="https://akkclvuato.cloudimg.io/v7/{{ asset('frontend/img/about-bg.png') }}?operations&filters" class="img-responsive" width="100%">
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
                        <div class="col-md-10 col-sm-10">
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                            <form>
                                <select id="inputStat" class="newblog form-control">
                                    <option value="0">Please Select</option>
                                    <option value="17" @if(!empty($type)) @if($type == 17) selected @endif @endif>Press Releases</option>
                                    <option value="18"  @if(!empty($type)) @if($type == 18) selected @endif @endif>Health Blogs</option>
                                </select>
                                <input type="hidden" name="url" id="url" value="{{ url('news_blogs') }}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">    
                        @foreach($newsblogs as $newsblog)
                            <div class="col-md-4 col-sm-6">
                                <div class="block-text rel zmin">
                                    @if($newsblog->media_id != null)
                                        <?php
                                            $image = $newsblog->media->file_path . '/' . $newsblog->media->file_name;
                                        ?>
                                        <img src="https://akkclvuato.cloudimg.io/v7/{{ asset($image) }}?operations&filters" class="img-responsive">
                                    @endif
                                    <br>
                                    <a title="" href="@if($newsblog->type == 17) {{ url($newsblog->id, 'press_release_details') }} @else {{ url($newsblog->id, 'blogs_detail') }} @endif">{{ $newsblog->title }}</a>
                                    <p>{{ str_limit(strip_tags($newsblog->content), 200) }}
                                    @if (strlen(strip_tags($newsblog->content)) > 200)
                                        <a href="@if($newsblog->type == 17) {{ url($newsblog->id, 'press_release_details') }} @else {{ url($newsblog->id, 'blogs_detail') }} @endif" class="btn-pink-box">Read More<i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                                    @endif</p>   
                                </div>
                            </div>
                        @endforeach
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
                                <h2 class="h-bold">09 772 317388</h2>
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
        $('#inputStat').on('change',function () {
            var url = $('#url').val() + '?type=' + $(this).attr();
            window.location.href = url;
        })
    });
</script>

