@extends('Frontend.master')
@section('affiliate')
    <div class="breadcrumb parallax-container">
        <div class="parallax"><img src="{{ asset('/') }}Frontend/image/prlx.jpg" alt="#"></div>
        <h1>Login</h1>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="login.html">Login</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div id="column-left" class="col-sm-3 hidden-xs column-left">
                <div class="Categories left-sidebar-widget">
                    <div class="columnblock-title">Affiliate</div>
                    <div class="affiliate_block category_block">
                        <ul class="box-category treeview-list treeview">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="login.html">Forgotten Password</a></li>
                            <li><a href="login.html">My Account</a></li>
                            <li><a href="login.html">Payment Options</a></li>
                            <li><a href="login.html">Affiliate Tracking</a></li>
                            <li><a href="login.html">Transactions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="content" class="col-sm-9">
                <h1>Affiliate Program</h1>
                <p>maxenlist affiliate program is free and enables members to earn revenue by placing a link or links on their web site which advertises maxenlist or specific products on it. Any sales made to customers who have clicked on those links will earn the affiliate commission. The standard commission rate is currently 5%.</p>
                <p>For more information, visit our FAQ page or see our Affiliate terms &amp; conditions.</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well">
                            <h2>New Affiliate</h2>
                            <p>
                            <p>I am not currently an affiliate.</p>
                            <p>Click Continue below to create a new affiliate account. Please note that this is not connected in any way to your customer account.</p>
                            <a class="btn btn-primary" href="register.html">Continue</a></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="well">
                            <h2>Affiliate Login</h2>
                            <p><strong>I am a returning affiliate.</strong></p>
                            <form action="http://html.lionode.com/moonstore/ms01/login.html" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="control-label" for="input-email">Affiliate E-Mail</label>
                                    <input type="text" name="email" value="" placeholder="Affiliate E-Mail" id="input-email" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="input-password">Password</label>
                                    <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />
                                    <a class="forgot" href="forgetpassword.html">Forgotten Password</a> </div>
                                <input type="submit" value="Login" class="btn btn-primary" />
                            </form>
                        </div>
                    </div>
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
