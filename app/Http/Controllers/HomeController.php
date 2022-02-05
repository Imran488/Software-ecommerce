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

public function PrivacyPolicy(){
    return view ('pages.privacypolicy');
}

public function Faq(){
    return view ('pages.faq');
}

public function CookiesPolicy(){
    return view ('pages.cookiespolicy');
}

public function LicenseAgreement(){
    return view ('pages.license');
}


public function CopyrightInformation(){
    return view('pages.copyright');
}

    public function AboutUs(){
        return view('pages.aboutus');
    }
}
