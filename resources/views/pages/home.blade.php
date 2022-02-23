@extends('master')
@section('content')
@include('partials.header')
@include('partials.slider')

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
                                    <label for="link2"></label> <span>.uk</span> </div>
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

        @include('partials.service')
        @include('partials.solution')

    {{-- @include('partials.product') --}}




        {{-- <div class="romana_people_trust_area">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="romana_section_title text-center">
                            <h2>Feel Free to <span>Contact with Us</span> </h2>
                            <p>We are Always with You.</p>
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
        </div> --}}


    @include('partials.subscriber')

@endsection
