<header>
    <div class="romana_header_top">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-7 col-xs-12">
                    <div class="romana_header_top_left">
                        <div class="romana_left_info">
                            <ul>
                                <li><a href="mailto:info@bgdonline.com"><i class="far fa-envelope"></i>    info@bgdtech.uk</a></li>
                                <li><a href="tel:"><i class="fas fa-phone"></i>    +447441445018</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- column End -->
                <div class="col-sm-5 col-md-offset-2 col-xs-12">
                    <div class="romana_header_top_right">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook" style=height:25px;width:30px></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" style=height:25px;width:30px></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g" style=height:25px;width:30px></i></a></li>

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
                        <a href="#"><img src="{{url('images/logo.png')}}" alt=""width="85"height="85"></a>
                    </div>
                </div>
                <!-- column End -->

                <div class="col-sm-10">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span
                                class="sr-only"></span> <i class="fas fa-bars"></i>
                        </button>
                    </div>

                    @if(session()->has('message'))
                    <p class="alert alert-success">{{session()->get('message')}}</p>
                    @endif

                    @if(session()->has('error'))
                    <p class="alert alert-danger">{{session()->get('error')}}</p>
                    @endif
                    <nav id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">

                            <li><a href="{{route('home')}}"><b>HOME</b></a></li>

                            <li><a href="{{route('about.us')}}"><b>ABOUT US</b></a></li>

                            <li><a href="#"><b>SERVICES</b></a>
                                <ul class="dropdown-menu mega-menu">

                                    <li class="menu-collumn">
                                        <span href="#" target="_blank"style="color:red; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>Internet Connectivity</span>
                                        <ul>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Corporate</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Small Offices</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Home User</a>

                                            <br><br><span href="#" target="_blank"style="color:red; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>Web Hosting</span>

                                            <a href="#"><i class="fas fa-angle-double-right"></i>Shared web hosting</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Windows hosting</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Linux Hosting</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Reseller hosting (Windows)</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Reseller hosting (Linux)</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>VPS Hosting</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Dedicated Server</a>
                                        </ul>
                                    </li>

                                    <li class="menu-collumn">
                                        <span href="#" target="_blank"style="color:red; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>Data Connectivity</span>

                                        <ul>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Nationwide Secure Connectivity</a>

                                            <a href="#"><i class="fas fa-angle-double-right"></i>Dark Fiber Connectivity</a>

                                            <a href="#"><i class="fas fa-angle-double-right"></i>Clear Channel Connectivity</a>

                                            <a href="#"><i class="fas fa-angle-double-right"></i>Capacity Based Connectivity</a>


                                            <br><br>

                                            <span href="#" target="_blank"style="color:red; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>Managed Services </span>



                                            <a href="#"><i class="fas fa-angle-double-right"></i>Office PC Maintenance</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Radio Maintenance</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Fiber Optic Networks Maintenance</a>

                                        </ul>
                                    </li>

                                    <li class="menu-collumn">
                                        <span href="#" target="_blank"style="color:red; padding-left: 8px; font-weight: 700;"> <i class="fas fa-hand-point-right"></i>Web Development</span>




                                        <ul>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Starter Package</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Basic Package</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Economy Package</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Deluxe Package</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Gold Package</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Platinum Package </a>


                                            <br><br>

                                            <span href="#" target="_blank"style="color:red; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>Domain</span>



                                            <a href="#"><i class="fas fa-angle-double-right"></i>Domain Registration</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Domain Transfer</a>
                                        </ul>
                                    </li>
                                </ul>
                            </li>


                            <li><a href="#"><b>PRODUCTS</b></a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="menu-collumn">
                                        <span href="#" target="_blank"style="color:red; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>Camera</span>


                                        <ul>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>CC Camera </a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>IP Camera</a>
                                        </ul>
                                    </li>

                                    <li class="menu-collumn">
                                        <span href="#" target="_blank"style="color:red; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>Network Products</span>

                                        <ul>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Router</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Switch</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>TJ Box</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Fiber Optic Cable</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>UTP Cable</a>
                                        </ul>
                                    </li>
                                    <li class="menu-collumn">
                                        <span href="#" target="_blank"
                                            style="color:red; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>Radio Station</span>

                                        <ul>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Radio Station</a>

                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="#"><b>SOLUTIONS</b></a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="menu-collumn">
                                        <span href="#" target="_blank"
                                            style="color:red; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>Enterprize</span>

                                        <ul>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Networks</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>IP- VPN</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Hosting</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Co- location</a>
                                        </ul>
                                    </li>
                                    <li class="menu-collumn">
                                        <span href="#" target="_blank"
                                            style="color:red; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>System Integration</span>

                                        <ul>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>ICT Consultancy</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Customized Solution</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Training</a>
                                        </ul>
                                    </li>
                                    <li class="menu-collumn">
                                        <span href="#" target="_blank"
                                            style="color:red; padding-left: 8px; font-weight: 700;"><i class="fas fa-hand-point-right"></i>IP Phone</span>

                                        <ul>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>IPPBX</a>
                                            <a href="#"><i class="fas fa-angle-double-right"></i>Call Center</a>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="{{route('contactus')}}"><b>CONTACT US</b></a></li>
                            @if(auth()->user())
                            <li>
                                <a href="{{route('logout')}}"><b>{{auth()->user()->name}}|Logout</b>
                                </a>
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
