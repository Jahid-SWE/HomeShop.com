@extends('Frontend.master')
@section('contact-page')
    <div class="breadcrumb parallax-container">
        <div class="parallax"><img src="{{ asset('/') }}Frontend/image/prlx.jpg" alt="#"></div>
        <h1>Contact Us</h1>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <h3 class="contactus-title">You Have Got Questions We have Got Answers</h3>
                <p class="text-center contact-desc">make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="complaint">
                    <h2 class="tf">Tel</h2>
                    <div class="call-info">0123 456 789 / 0123 456 788</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="email">
                    <h2 class="tf">Mail</h2>
                    <div class="email-info">infoservices@minimo.com</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="time">
                    <h2 class="tf">Time</h2>
                    <div class="time-info">Mon – Sat: 9:00 – 18:00</div>
                </div>
            </div>
        </div>
        <div class="main-form">
            <h3 class="contactus-title">Leave Message</h3>
            <div class="row">
                <form name="contactform" method="POST" action="http://html.lionode.com/moonstore/ms01/contact-form-handler.php">
                    <div class="col-sm-6">
                        <input type="text" required name="name" placeholder="Name">
                    </div>
                    <div class="col-sm-6 ">
                        <input type="email" required name="email" placeholder="Email">
                    </div>
                    <div class="col-sm-6 ">
                        <input type="text" required name="phone" placeholder="Phone Number">
                    </div>
                    <div class="col-sm-6 ">
                        <input type="text" required name="subject" placeholder="Subject">
                    </div>
                    <div class="col-xs-12 ">
                        <textarea required name="message" placeholder="Message" rows="3" cols="30"></textarea>
                    </div>
                    <div class="col-xs-12  text-center">
                        <div class="commun-btn">
                            <button type="submit" name="submit" class="btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="map">
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                    <div style="overflow:hidden;height:520px;width:100%;">
                        <div id="gmap_canvas" style="height:520px;width:1170px;"></div>
                        <a class="google-map-code" href="http://www.pureblack.de/google-maps/" id="get-map-data">pureblack.de</a> </div>
                    <script type="text/javascript"> function init_map(){var myOptions = {zoom:14, scrollwheel:false,center:new google.maps.LatLng(36.778261,-119.41793239999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(36.778261, -119.41793239999998)});}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top-cms parallax-container">
        <div class="parallax"><img src="{{ asset('/') }}Frontend/image/news.jpg" alt="#"></div>
        <div class="container">
            <div class="row">
                <div class="newslatter">
                    <form>
                        <h5>SIGN UP FOR OUR DISCOUNTS TODAY!</h5>
                        <h4 class="title-subline">Be sure to follow our blog and sign up for all of our mailing updates!</h4>
                        <div class="input-group">
                            <input type="text" class=" form-control" placeholder="Your-email@website.com">
                            <button type="submit" value="Sign up" class="btn btn-large btn-primary">Subscribe</button>
                        </div>
                    </form>
                </div>
                <div class="footer-social">
                    <ul>
                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="client-title">Favourite Brands</h3>
        <h4 class="title-subline">The High Quality Products</h4>
        <div id="brand_carouse" class="owl-carousel brand-logo">
            <div class="item text-center"> <a href="#"><img src="{{ asset('/') }}Frontend/image/brand/brand1.png" alt="Disney" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="{{ asset('/') }}Frontend/image/brand/brand2.png" alt="Dell" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="{{ asset('/') }}Frontend/image/brand/brand3.png" alt="Harley" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="{{ asset('/') }}Frontend/image/brand/brand4.png" alt="Canon" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="{{ asset('/') }}Frontend/image/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="{{ asset('/') }}Frontend/image/brand/brand6.png" alt="Canon" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="{{ asset('/') }}Frontend/image/brand/brand7.png" alt="Canon" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="{{ asset('/') }}Frontend/image/brand/brand8.png" alt="Canon" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="{{ asset('/') }}Frontend/image/brand/brand9.png" alt="Canon" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img src="{{ asset('/') }}Frontend/image/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
        </div>
    </div>
@endsection
