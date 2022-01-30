@extends('master')
@include('partials.header')

<style>
    .pkg-title {
        margin: 0 !important;
        color: rgb(255, 246, 246);
        padding: 0.3rem 0;
        background: hsla(145, 63%, 30%, 1);
        height: 3rem;
    }

    .pkg-item {
        text-align: center;
        padding: 0 !important;
        margin-bottom: 2rem !important;
        border-radius: .3rem;
        overflow: hidden;
        margin: 1rem;
        transition: all .2s ease-in-out;
    }

    .pkg-item:hover {
        margin: 0px;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
    }

    .pkg-item h3 {
        color: rgb(8, 145, 60);
        background:color:lightblue;
        padding: 1rem 0rem;
    }

    .description-area {
        margin: 0;
        padding: 0;
    }

    .pkg-item ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .pkg-item ul li {
        font-size: 12px;
        font-weight: bold;
        padding: 0.25rem 0 0.25rem 2rem;
        border-bottom: 1px solid rgb(3, 114, 40);
        text-transform: capitalize;
        text-align: left;
    }

</style>

<section id="terms-and-conditions">

    <div class="container pt-5">
        <div class="blur-effect m-auto px-5">
            <u>
                <h1 style="color:rgb(1, 133, 45)" class="py-3 text-center fw-bold">Digital<span style="color:blue">
                        Marketing</span></h1>
            </u><br><br><br>
            </h1>
        </div>
    </div>


    <div class="container py-5">

        <div class="row">
            <div class="title">

            </div>
        </div>

        <div class="row">


            <div class="col-md-4">
                <div class="card p-2 pkg-item animated slideInUp">
                    <h5 style="font-size: 24px;" class="pkg-title" id="Basic-Package">
                        Basic Package
                    </h5>
                    <h3 class="pkg-price">
                        $149 USD
                    </h3>
                    <div class="description-area">
                        <ul>
                            <li>3 Static Post</li>

                            <li>1 Album Post (4 Pic Per Album) </li>

                            <li>1 Cover Photo (per 2 month) </li>

                            <li>Day/Occasion Post (Optional) </li>

                            <li>Delivery Post </li>

                            <li>Strategic Planning </li>

                            <li>Media Management </li>

                            <li>Monthly Report </li>

                        </ul>
                    </div>

                    <form action="{{route('stripe.payment')}}" method="">

                        <input type="hidden" name="_token" value="fEO0o7SgbkQI6X0Zfbtch2QPA8zXW3TYHcxFSZO3">
                        <div style="display:none;">
                            <input type="text" name="name" value="Basic Package">
                            <input type="text" name="amount" value="149">
                        </div>
<br>
                        <button type="submit" class="btn btn-primary">
                            Buy Now
                        </button>
                    </form>

                </div>
            </div>


            <div class="col-md-4">
                <div class="card p-2 pkg-item animated slideInUp">
                    <h5 style="font-size: 24px;" class="pkg-title" id="Standard-Package">
                        Standard Package
                    </h5>
                    <h3 class="pkg-price">
                        $199 USD
                    </h3>
                    <div class="description-area">
                        <ul>
                            <li>5 Static Post</li>

                            <li>2 Album Post (4 Pic Per Album) </li>

                            <li>2 Cover Photo (per 2 month) </li>

                            <li>Day/Occasion Post (Optional) </li>

                            <li>Delivery Post </li>

                            <li>Strategic Planning </li>

                            <li>Media Management </li>

                            <li>Monthly Report </li>

                        </ul>
                    </div>

                    <form action="{{route('stripe.payment')}}" method="">

                        <input type="hidden" name="_token" value="fEO0o7SgbkQI6X0Zfbtch2QPA8zXW3TYHcxFSZO3">
                        <div style="display:none;">
                            <input type="text" name="name" value="Standard Package">
                            <input type="text" name="amount" value="199">
                        </div>
<br>
                        <button type="submit" class="btn btn-primary">
                            Buy Now
                        </button>
                    </form>

                </div>
            </div>


            <div class="col-md-4">
                <div class="card p-2 pkg-item animated slideInUp">
                    <h5 style="font-size: 24px;" class="pkg-title" id="Premium-Package">
                        Premium Package
                    </h5>
                    <h3 class="pkg-price">
                        $299 USD
                    </h3>
                    <div class="description-area">
                        <ul>
                            <li>8 Static Post</li>

                            <li>4 Album Post (4 Pic Per Album) </li>

                            <li>3 Cover Photo (per 2 month) </li>

                            <li>Day/Occasion Post (Optional) </li>

                            <li>Delivery Post </li>

                            <li>Strategic Planning </li>

                            <li>Media Management </li>

                            <li>Monthly Report </li>

                            <li>Carousel/Motion Video post</li>

                        </ul>
                    </div>

                    <form action="{{route('stripe.payment')}}" method="">

                        <input type="hidden" name="_token" value="fEO0o7SgbkQI6X0Zfbtch2QPA8zXW3TYHcxFSZO3">
                        <div style="display:none;">
                            <input type="text" name="name" value="Premium Package">
                            <input type="text" name="amount" value="299">
                        </div>
<br>
                        <button type="submit" class="btn btn-primary">
                            Buy Now
                        </button>
                    </form>

                </div>
            </div>

        </div>

    </div>

</section>
