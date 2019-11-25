@extends('frontend.layouts.master')
@section('content')
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
        @include('frontend.layouts.nav')

        <section class="intro ui-title-page bread-bg paddingtop-100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 wow fadeInDown" data-wow-delay="0.1s">
                        <h1>appointment form</h1>
                        <div class="ui-subtitle-page">Easy Health - Myanmar’s First & Only Convenient-Care Clinic Chain</div>
                    </div>
                </div>
            </div>
        </section>
         
        <!-- Section: boxes -->
        <section id="boxes" class="home-section paddingtop-20 paddingbot-70">
            <div class="container">
                <img src="{{ asset('frontend/img/appointment.jpg') }}" class="img-responsive"><br><br>
                <div class="row">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Appointment Form </h2>
                            <p>Please fill-in the form below and make an oppointment with any of our specialist doctors</p>
                        </div>
                        <i class="title-bg"></i>
                    </div>
                </div>
                <div class="container contact-form wow fadeInUp" data-wow-delay="0.1s">
                    <form method="post">
                       <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="txtName" class="form-control" placeholder="First Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <div class="ui calendar" id="dob">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" class="form-control" placeholder="Date of Birth" width="100%">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="ui calendar" id="appointmentDate">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" class="form-control" placeholder="Preferred Appointment Date" width="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="txtName" class="form-control" placeholder="Last Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Select Your Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Select Your Department</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%;height: 170px !important;"></textarea>
                                </div>
                            <center>
                                
                                <div class="form-group">
                                    <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                                </div>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>
    
    <!-- Core JavaScript Files -->
    
</body>
@endsection
</html>
