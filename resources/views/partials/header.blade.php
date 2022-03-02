<header>
    <div class="romana_header_top">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-7 col-xs-12">
                    <div class="romana_header_top_left">
                        <div class="romana_left_info">
                            <ul>
                                <li><a href="mailto:info@bgdonline.com"><i class="fa-solid fa-envelope"></i>&nbsp &nbsp <b>info@bgdtech.uk</b></a></li>
                                <li><a href="tel:"><i class="fas fa-phone"></i>&nbsp &nbsp <b>+447441445018</b></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- column End -->
                <div class="col-sm-5 col-md-offset-2 col-xs-12">
                    <div class="romana_header_top_right">
                        <ul>
                            <li><a href="https://www.facebook.com/bgdtechnologiesuk"><i class="fab fa-facebook" style=height:25px;width:auto></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" style=height:25px;width:auto></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g" style=height:25px;width:auto></i></a></li>

                        </ul>
                    </div>
                </div>
                <!-- column End -->
            </div>
            <!-- row End -->
        </div>
        <!-- container End -->
    </div>
    <!-- Header-Top End -->
    <div class="romana_header_bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-xs-6">
                    <div class="romana_logo">
                        <a href="{{route('home')}}"><img src="{{url('images/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <!-- column End -->

                <div class="col-sm-10">
                    <div class="navbar-header"></div>

                    @if(session()->has('message'))
                    <p class="alert alert-success">{{session()->get('message')}}</p>
                    @endif

                    @if(session()->has('error'))
                    <p class="alert alert-danger">{{session()->get('error')}}</p>
                    @endif


                    <nav id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">

                            <li><a href="{{route('home')}}"><b>HOME</b></a></li>

                            {{-- <li><a href="{{route('about.us')}}"><b>ABOUT US</b></a></li> --}}


                            <li><a href="#"><b>ABOUT US</b></a>
                                <ul class="dropdown-menu mega-menu-about">

                                    <li class="menu-collumn">
                                        <a href="#" target="_blank" style="color:green; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>&nbsp &nbsp AT A GLANCE</a>
                                        <a href="#" target="_blank" style="color:green; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>&nbsp &nbsp COMPANY MISSION</a>
                                        <a href="#" target="_blank" style="color:green; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>&nbsp &nbsp COMPANY VISION</a>
                                        <a href="#" target="_blank" style="color:green; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>&nbsp &nbsp MESSAGE FROM C.E.O</a>
                                    </li>
                                </ul>
                            </li>



                            <li><a href="#"><b>SERVICES</b></a>
                                <ul class="dropdown-menu mega-menu">

                                    <li class="menu-collumn">
                                        <a href="#" target="_blank" style="color:green; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>&nbsp &nbsp Digital Marketting</a>
                                        <ul>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Facebook Marketting</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Google AdWords</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp SEO</a>

                                            <a href="#" target="_blank" style="color:green; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>&nbsp &nbsp Web Hosting</a>

                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Shared web hosting</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Windows hosting</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Linux Hosting</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Reseller hosting (Windows)</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Reseller hosting (Linux)</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp VPS Hosting</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Dedicated Server</a>


                                        </ul>
                                    </li>

                                    <li class="menu-collumn">
                                        <a href="#" target="_blank" style="color:green; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>&nbsp &nbsp Domain</a>
                                        <ul>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Domain Registration</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Domain Transfer</a>
                                        </ul>



                                        <a href="#" target="_blank" style="color:green; padding-left: 8px; font-weight: 700;"> <i class="fas fa-hand-point-right"></i>&nbsp &nbsp Web Development</a>

                                        <ul>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Starter Package</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Basic Package</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Economy Package</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Deluxe Package</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Gold Package</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Platinum Package </a>
                                        </ul>
                                    </li>

                                    <li class="menu-collumn">
                                        <a href="#" target="_blank" style="color:green; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>&nbsp &nbsp Managed Services</a>
                                        <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Office PC Maintaince</a>
                                        <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Radio Station Maintainance</a>
                                    </li>
                                </ul>
                            </li>




                            <li><a href="#"><b>SOLUTIONS</b></a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="menu-collumn">
                                        <a href="#" target="_blank"
                                            style="color:green; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>&nbsp &nbsp Enterprize</a>

                                        <ul>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Networks</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp IP- VPN</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Hosting</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Co- location</a>
                                        </ul>
                                    </li>
                                    <li class="menu-collumn">
                                        <a href="#" target="_blank"
                                            style="color:green; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>&nbsp &nbsp System Integration</a>

                                        <ul>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp ICT Consultancy</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Customized Solution</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Training</a>
                                        </ul>
                                    </li>
                                    <li class="menu-collumn">
                                        <a href="#" target="_blank"
                                            style="color:green; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>&nbsp &nbsp IP Phone</a>

                                        <ul>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp IPPBX</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>&nbsp &nbsp Call Center</a>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="{{route('contactus')}}"><b>CONTACT US</b></a></li>


                            @if(auth()->user())
                            <li><a href="#"><b>{{auth()->user()->name}}</b></a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="menu-collumn">

                                        <a>
                                            <a href="#"><i class="fa-solid fa-user"></i>&nbsp &nbsp &nbsp <b>My Profile</b></a>
                                            <a href="{{route('logout')}}"><i class="fa-solid fa-right-from-bracket"></i>&nbsp &nbsp &nbsp <b>Logout</b></a>
                                        </a>
                                    </li>
                                </ul>
                            </li>@else
                            <li>
                                <a href="{{route('login')}}" style="color:#ea2229;font-weight:800;"><b>LOGIN</b></a>
                            </li>@endif
                        </ul>

                    </nav>

                </div>

            </div>

        </div>

    </div>

</header>
