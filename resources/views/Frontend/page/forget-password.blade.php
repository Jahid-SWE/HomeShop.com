@extends('Frontend.master')
@section('forget-password')
    <div class="breadcrumb parallax-container">
        <div class="parallax"><img src="{{ asset('/') }}Frontend/image/prlx.jpg" alt="#"></div>
        <h1>Forgotten Password</h1>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="forgetpassword.html">Forgotten Password</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 hidden-xs column-left" id="column-right">
                <div class="recentpost left-sidebar-widget">
                    <div class="columnblock-title">Affiliate</div>
                    <div class="category_block">
                        <ul class="box-category">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="forgetpassword.html">Forgotten Password</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Payment Options</a></li>
                            <li><a href="#">Affiliate Tracking</a></li>
                            <li><a href="#">Transactions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="content" class="col-sm-9">
                <h1>Forgot Your Password?</h1>
                <p>Enter the e-mail address associated with your account. Click submit to have your password e-mailed to you</p>
                <form action="http://html.lionode.com/moonstore/ms01/forgotten" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <fieldset>
                        <legend>Your E-Mail Address</legend>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">E-Mail Address</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control" />
                            </div>
                        </div>
                    </fieldset>
                    <div class="buttons clearfix">
                        <div class="pull-left"><a href="login.html" class="btn btn-default">Back</a></div>
                        <div class="pull-right">
                            <input type="submit" value="Continue" class="btn btn-primary" />
                        </div>
                    </div>
                </form>
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
