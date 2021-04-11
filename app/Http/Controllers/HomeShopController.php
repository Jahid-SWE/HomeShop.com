<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeShopController extends Controller
{
public function index(){
    return view('Frontend.home.home');
}
public function collection(){
    return view('Frontend.collection.collection');
}
public function category(){
    return view('Frontend.category.category');
}
public function cart(){
    return view('Frontend.page.cart-page');
}
    public function checkOut(){
        return view('Frontend.page.checkout-page');
    }
    public function singlePage(){
    return view('Frontend.page.single-page');
    }
    public function registration(){
        return view('Frontend.page.registration-page');
    }
    public function contact(){
        return view('Frontend.page.contact-page');
    }
    public function affiliate(){
        return view('Frontend.page.affiliate');
    }
    public function forgetPassword(){
        return view('Frontend.page.forget-password');
    }
    public function blog(){
        return view('Frontend.blog.blog');
    }
    public function about(){
        return view('Frontend.about.about');
    }
}
