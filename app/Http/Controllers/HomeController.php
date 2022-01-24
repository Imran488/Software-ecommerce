<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        return view('pages.home');
    }

    public function ContactUs(){
        return view('pages.contactus');
    }

    public function TermCondition(){
        return view('pages.termsandcondition');
    }

    public function RefundPolicy(){
        return view('pages.refundpolicy');
    }
    public function AboutUs(){
        return view('pages.aboutus');
    }
}
