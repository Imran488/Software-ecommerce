<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function Digitalmarketting(){
        return view('pages.digitalmarketting');

    }

    public function Webhosting(){
        return view('pages.web-hosting');

    }

    public function Webdevelopment(){
        return view('pages.web-development');

    }


}

