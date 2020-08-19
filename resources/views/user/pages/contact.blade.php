@extends('user.main')

@section('title', 'Contact')

@section('content')

    <div class="all-title-box">
        <div class="container text-center">
            <h1>Contact<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
        </div>
    </div>
        
    <div id="contact" class="section wb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Need Help? Sure we are Online!</h3>
                    <p class="lead">Let us give you more details about the special offer website you want us. Please fill out the form below. <br>We have million of website owners who happy to work with us!</p>
                </div><!-- end title -->

                <div class="row">   
                        <div class="contact_form">
                            <div id="message"></div>
                            <form id="contactform" class="" action="{{route('contact')}}" name="contactform" method="post">
                            @csrf
                                @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                                @endif
                                <div class="row row-fluid">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input type="text" name="name" id="first_name" class="form-control" placeholder="Full Name">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input type="text" name="title" id="last_name" class="form-control" placeholder="Title">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <textarea class="form-control" name="content" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                    </div>
                                    <div class="text-center pd">
                                        <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Get a Quote</button>
                                    </div>
                                </div>
                            </form>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
    </div><!-- end section -->

    <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="template_web/images/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="template_web/images/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="template_web/images/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="template_web/images/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="template_web/images/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="template_web/images/logo_06.png" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

@endsection