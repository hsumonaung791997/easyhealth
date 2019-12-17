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
        <section class="home-section paddingtop-50 paddingbot-30">
            <div class="container">
                <div class="row">  
                    <div class="col-lg-9 col-md-9 wow fadeInLeft" data-wow-delay="0.2s">
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <div class="blog-img">
                               @if($blog->media_id != null)
                                    <?php
                                        $image = $blog->media->file_path . '/' . $blog->media->file_name;
                                    ?>
                                    <img src="{{ asset($image) }}" class="img-responsive" width="100%" height="100%">
                                @endif
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h4 class="h-bold">{{ $blog->title }}</h4>
                                    <div class="meta">
                                        <ul>
                                            <li><i class="fa fa-user" aria-hidden="true"></i> Admin &nbsp;&nbsp;| &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> 04 June 2018</li>
                                        </ul>
                                    </div>
                                </div>
                                <p>
                                    {!! $blog->content !!}
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
                    <div class="col-lg-3 col-md-3 wow fadeInRight" data-wow-delay="0.2s">
                        <!-- Single Blog -->
                        @foreach($health_details as $detail)
                            <div class="single-blog">
                                <div class="blog-img">
                                    @if($detail->media_id != null)
                                        <?php
                                            $image = $detail->media->file_path . '/' . $detail->media->file_name;
                                        ?>
                                        <img src="{{ asset($image) }}" class="img-responsive" width="100%" height="100%">
                                    @endif
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h4><a href="#">{{ $detail->title }}</a></h4>
                                        <div class="meta">
                                            <ul>
                                                <li><i class="fa fa-user" aria-hidden="true"></i> Admin &nbsp;&nbsp;| &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> 04 June 2018</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="{{ url($detail->id, 'blogs_detail') }}" class="box_btn">read more</a>
                                </div>
                           </div>
                        @endforeach    
                    </div>                                     
                </div>
            </div>
        </section>
        <!-- /Section: boxes -->       
    </div>    
</body>