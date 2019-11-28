
@extends('frontend.layouts.master')
@section('content')
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
        @include('frontend.layouts.nav')
        @foreach($blogs as $blog)
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
                                
                                <img src="{{ asset($image) }}">
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h4 class="h-bold">Why Primary Health Care is very important in life?</h4>
                                    <div class="meta">
                                        <ul>
                                            <li><i class="fa fa-user" aria-hidden="true"></i> Admin &nbsp;&nbsp;| &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> 04 June 2018</li>
                                        </ul>
                                    </div>
                                </div>
                                <p>
                                    Justo laoreet dignis sim lectus duic etiamd ipsum habitant tristique nam est. Donec venenatis leo eu varius curus da metus nuc placerat cursus In sodales purus non nisi. Aliquam orci lacus, mattis nec ornare sed, varius eget, turpis. Donec eget massa velit interdum interdum. Cras vehicula, pede a viverra varius pede sapien commodo turpis et blandit ut nisi. Eonec pede. Maecenas sodales elit. Suspendisse justo elit vulputate vel sodales sit amet convallis vel dolor.
                                    <br><br>
                                    Ut tellus.Nullam nec sem. Nullam risus turpis, rhoncus vel, varius consequat, laoreet ac, neque. Cras tristique ante lacinia dolor. Aenean a odio. Integer faucibus augue ut lacus.Sed purus neque, lacinia ac blandit nec pulvinar vel, pede. Suspendisse ut diam. Donec ut augue. Suspendisse et erat. Cras augue ipsum, pharetra indsa scelerisque acd mollis vel, metus. Nulla condimen tum sollicitudin lacus. Quisque urna enim placerat ut, auctor sed, mollis vitae. Cras volutpat, mauris a rhoncus accumsan est lacus tincidunt nibh eu pretium enim elit in augue. Vestibulum eget nibh velit fermentum sollicitudin. Sed vehicula lorem a rhonc usc varius felis felis ultrices dolor a euismod lacus ligula a nisl.
                                    <br><br>
                                    Ut tellus.Nullam nec sem. Nullam risus turpis, rhoncus vel, varius consequat, laoreet ac, neque. Cras tristique ante lacinia dolor. Aenean a odio. Integer faucibus augue ut lacus.Sed purus neque, lacinia ac blandit nec pulvinar vel, pede. Suspendisse ut diam. Donec ut augue. Suspendisse et erat. Cras augue ipsum, pharetra indsa scelerisque acd mollis vel, metus. Nulla condimen tum sollicitudin lacus. Quisque urna enim placerat ut, auctor sed, mollis vitae. Cras volutpat, mauris a rhoncus accumsan est lacus tincidunt nibh eu pretium enim elit in augue. Vestibulum eget nibh velit fermentum sollicitudin. Sed vehicula lorem a rhonc usc varius felis felis ultrices dolor a euismod lacus ligula a nisl.
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
                        <div class="single-blog">
                            <div class="blog-img">
                                <img src="{{ asset('frontend/img/blog1.png') }}" alt=""> 
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h4><a href="#">Blogs 1</a></h4>
                                    <div class="meta">
                                        <ul>
                                            <li><i class="fa fa-user" aria-hidden="true"></i> Admin &nbsp;&nbsp;| &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> 04 June 2018</li>
                                        </ul>
                                   </div>
                                </div>
                                <a href="#" class="box_btn">read more</a>
                            </div>
                        </div>
                        <div class="single-blog paddingtop-50">
                            <div class="blog-img">
                                <img src="{{ asset('frontend/img/blog1.png') }}" alt=""> 
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h4><a href="#">Blogs 2</a></h4>
                                    <div class="meta">
                                        <ul>
                                            <li><i class="fa fa-user" aria-hidden="true"></i> Admin &nbsp;&nbsp;| &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> 04 June 2018</li>
                                        </ul>
                                   </div>
                                </div>
                                <a href="#" class="box_btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: boxes -->
        
    </div>
    
</body>
@endsection
</html>
