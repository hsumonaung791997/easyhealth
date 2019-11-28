

<section class="home-section paddingbot-60">
    <div class="container marginbot-30">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="section-heading text-center">
                        <h2 class="h-bold">Find a private GP near me</h2>
                        <p>View our health centre pages below or call us for advice on +959 123456789</p>
                    </div>
                </div>
                <i class="title-bg"></i>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach($locations as $location)
            <div class="col-sm-6 col-md-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="partner">
                    <h4 class="h-bold"><i class="fa fa-hospital-o" aria-hidden="true"></i> {{ $location->name }}</h4>
                    <p>{{ $location->address }}</p>
                    <b><a href="#">View Health Center Page > </a></b>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>