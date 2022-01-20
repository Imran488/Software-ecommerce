@extends('master')
<div id="preloader">
        <div class="preloader_spinner"></div>
    </div>
    <!-- preloader end -->
    <!-- ==========================================================
    1.*Header_area start
============================================================ -->
    @include('partials.header')
    <!-- Header End -->
    <!-- ==========================================================
2.*Hero_area start
============================================================ -->
    @include('partials.slider')
    <!-- HeroSlider area end -->



    <!-- ==========================================================
3.*romana_search_domain_area start
============================================================ -->
    <div class="romana_search_domain_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="romana_domain_text">
                        <h2>Looking for a premium quality Domain Name?</h2>
                        <p>BGD Technologies (UK) Limited. Helps you to get your desired domain.</p>
                    </div>
                </div>
                <!-- column End -->
                <div class="col-sm-6 col-xs-12">
                    <div class="romana_domain_search">
                        <form action="#">
                            <div class="romana_submit">
                                <a class="btn" href="#" role="button">Click to find out</a>
                            </div>
                        </form>
                        <div class="romana_checkbox romana_checkbox2">
                            <div class="romana_single_check">
                                <input id="com" name="com" type="checkbox" >
                                <label for="com"></label> <span>.com</span> </div>
                            <div class="romana_single_check">
                                <input id="net" name="net" type="checkbox">
                                <label for="net"></label> <span>.net</span> </div>
                            <div class="romana_single_check">
                                <input id="org" name="org" type="checkbox">
                                <label for="org"></label> <span>.org</span> </div>
                            <div class="romana_single_check">
                                <input id="link" name="link" type="checkbox">
                                <label for="link"></label> <span>.us</span> </div>
                            <div class="romana_single_check">
                                <input id="link2" name="link" type="checkbox">
                                <label for="link2"></label> <span>.info</span> </div>
                        </div>
                    </div>
                </div>
                <!-- column End -->
            </div>
            <!-- row End -->
        </div>
        <!-- container End -->
    </div>

    <div class="red-line"></div>





    <!-- ==========================================================
4.*romana_service_area start
============================================================ -->
    @include('partials.service')





    <!-- ==========================================================
5.*romana_people_trust_area start
============================================================ -->
    <div class="romana_people_trust_area">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="romana_people_trust_text">
                        <h2>Feel free to contact with us.</h2>
                    </div>
                    <!--            </div>-->
                    <!-- column End -->
                    <!--            <div class="col-md-2 col-sm-3 col-xs-12">-->
                    <div class="romana_people_trust_btn common_btn hvr-rectangle-out"> <a
                            href="#">Get In Touch ++</a> </div>
                </div>
                <!-- column End -->
            </div>
            <!-- row End -->
        </div>
        <!-- container End -->
    </div>




    <!--=============================================
    6.*Product_area  start
===============================================-->
    @include('partials.product')





    <!-- ==========================================================
7.*our_solution area start
============================================================ -->
    @include('partials.solution')
    <!-- ==========================================================
8.*Client_area start
============================================================ -->


 


    <!-- ==========================================================
9.*romana_Subscribe_area start
============================================================ -->
    @include('partials.subscriber')


