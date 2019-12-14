@extends('frontend.layouts.master')
@section('content')
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
        @include('frontend.layouts.nav')
        <!-- breadcrumbs -->
        <section class="intro ui-title-page">
            <img src="{{ asset('frontend/img/press-release.png') }}" class="img-responsive" width="100%">
            <div class="breadcrumbs-title">
                <div class="container">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <h1>press release</h1>
                        <div class="ui-subtitle-page">Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-section paddingtop-10 paddingbot-30">
            <div class="container">
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-lg-12 col-md-12 marginbot-50">
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h4><a href="{{ url($blog->id, 'press_release_details') }}">{{ $blog->title }}</a></h4>
                                    <div class="meta">
                                        <ul>
                                            <li><i class="fa fa-user" aria-hidden="true"></i> Admin &nbsp;&nbsp;| &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> 04 June 2018</li>
                                        </ul>
                                    </div>
                                </div>
                                <p>{!! $blog->content !!}</p>
                                <a href="{{ url($blog->id, 'press_release_details') }}" class="box_btn">read more</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>    
            </div>
            <div class="container text-center paddingtop-50">
                <ul class="pagination ">
                 {{ $blogs->links() }}
                </ul>
            </div>
        </section>
        <!-- /Section: boxes -->
    </div>
</body>
@endsection
