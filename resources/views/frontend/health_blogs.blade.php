
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
                        <h1>Our Health Blogs</h1>
                        <div class="ui-subtitle-page">Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-section paddingtop-10 paddingbot-30">
            <div class="container">
                <div class="row">
                    @foreach($blogs->slice(0, 3) as $blog)
                        <div class="col-lg-4 col-md-4">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-img">
                                    <?php
                                        $image = $blog->media->file_path . '/' . $blog->media->file_name;
                                    ?>
                                    <img src="{{ asset($image) }}">
                                    <div class="post-category">
                                       <a href="#"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Health &amp; Care</a>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h4><a href="#">{{ $blog->title }}</a></h4>
                                        <div class="meta">
                                            <ul>
                                                <li><i class="fa fa-user" aria-hidden="true"></i> Admin &nbsp;&nbsp;| &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> 04 June 2018</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>
                                        {{ str_limit(strip_tags($blog->content), 100) }}
                                        @if (strlen(strip_tags($blog->content)) > 100)
                                          ... 
                                          <a href="{{ url($blog->id, 'blogs_detail') }}" class="box_btn pull-right">read more</a>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>   
            </div>
            <div class="container text-center paddingtop-50">
                <ul class="pagination ">
                    
                </ul>
            </div>
        </section>    <!-- /Section: boxes -->
    </div> 
</body>
@endsection
</html>
