
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
                        <h1>Our Blogs</h1>
                        <div class="ui-subtitle-page">Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain</div>
                    </div>
                </div>
            </div>

        </section>
         

        <section class="home-section paddingtop-10 paddingbot-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <div class="blog-img">
                                <img src="{{ asset('frontend/img/blog1.png') }}" alt="">
                                <div class="post-category">
                                   <a href="#"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Health &amp; Care</a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h4><a href="#">Why Primary Health Care is very important in life?</a></h4>
                                    <div class="meta">
                                        <ul>
                                            <li><i class="fa fa-user" aria-hidden="true"></i> Admin &nbsp;&nbsp;| &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> 04 June 2018</li>
                                        </ul>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. </p>
                                <a href="{{ url('blogs_detail') }}" class="box_btn">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <div class="blog-img">
                                <img src="{{ asset('frontend/img/blog2.png') }}" alt="">
                                <div class="post-category">
                                   <a href="#"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Health &amp; Care</a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h4><a href="#">14 Things You Should Never, Ever Do in Bed</a></h4>
                                    <div class="meta">
                                        <ul>
                                            <li><i class="fa fa-user" aria-hidden="true"></i> Admin &nbsp;&nbsp;| &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> 04 June 2018</li>
                                        </ul>
                                   </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.</p>
                                <a href="{{ url('blogs_detail') }}" class="box_btn">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <div class="blog-img">
                                <img src="{{ asset('frontend/img/blog1.png') }}" alt="">
                                <div class="post-category">
                                   <a href="#"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Health &amp; Care</a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h4><a href="#">Why Primary Health Care is very important in life?</a></h4>
                                    <div class="meta">
                                        <ul>
                                            <li><i class="fa fa-user" aria-hidden="true"></i> Admin &nbsp;&nbsp;| &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> 04 June 2018</li>
                                        </ul>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. </p>
                                <a href="{{ url('blogs_detail') }}" class="box_btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row paddingtop-50">
                    <div class="col-lg-4 col-md-4">
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <div class="blog-img">
                                <img src="{{ asset('frontend/img/blog1.png') }}" alt="">
                                <div class="post-category">
                                   <a href="#"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Health &amp; Care</a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h4><a href="#">Why Primary Health Care is very important in life?</a></h4>
                                    <div class="meta">
                                        <ul>
                                            <li><i class="fa fa-user" aria-hidden="true"></i> Admin &nbsp;&nbsp;| &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> 04 June 2018</li>
                                        </ul>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. </p>
                                <a href="{{ url('blogs_detail') }}" class="box_btn">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <div class="blog-img">
                                <img src="{{ asset('frontend/img/blog2.png') }}" alt="">
                                <div class="post-category">
                                   <a href="#"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Health &amp; Care</a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h4><a href="#">14 Things You Should Never, Ever Do in Bed</a></h4>
                                    <div class="meta">
                                        <ul>
                                            <li><i class="fa fa-user" aria-hidden="true"></i> Admin &nbsp;&nbsp;| &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> 04 June 2018</li>
                                        </ul>
                                   </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.</p>
                                <a href="{{ url('blogs_detail') }}" class="box_btn">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <div class="blog-img">
                                <img src="{{ asset('frontend/img/blog1.png') }}" alt="">
                                <div class="post-category">
                                   <a href="#"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Health &amp; Care</a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h4><a href="#">Why Primary Health Care is very important in life?</a></h4>
                                    <div class="meta">
                                        <ul>
                                            <li><i class="fa fa-user" aria-hidden="true"></i> Admin &nbsp;&nbsp;| &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> 04 June 2018</li>
                                        </ul>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. </p>
                                <a href="{{ url('blogs_detail') }}" class="box_btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center paddingtop-50">
                <ul class="pagination ">
                    <li class="disabled"><a href="#">«</a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
        </section>
        <!-- /Section: boxes -->

    </div>
    
</body>
@endsection
</html>
