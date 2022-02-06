@extends('master')
@section('content')
@include('partials.header')

@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial;
            font-size: 17px;
            padding: 8px;
        }

        * {
            box-sizing: border-box;
        }

        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%;
            /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%;
            /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        /* .container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
} */
        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .btn {
            background-color: #04AA6D;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }

            .col-25 {
                margin-bottom: 20px;
            }
        }

    </style>
    <div class="container pt-5">
        <div class="blur-effect m-auto px-5">
            <u>
                <h1 style="color:rgb(1, 133, 45)" class="py-3 text-center fw-bold">Make<span style="color:blue">
                        Payment</span></h1>
            </u><br><br><br>
            </h1>
        </div>
    </div>
</head>
<br>

<body>
    <div class="row">
        <div class="col-75">
            <div class="container">
                <form action="{{route('stripe.post')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="fname" name="name" placeholder="Type your full name" required>


                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="Type your email" required>

                            <label for="email"><i class="fas fa-phone"></i> Contact Number</label>
                            <input type="text" id="cnumber" name="cnumber" placeholder="Type your Contact Number"
                                required>


                            <label for="adr"><i class="fas fa-map-marked-alt"></i>  Address</label>
                            <textarea name="address" id="description" class="form-control" rows="5"
                                placeholder="Type your full address" required></textarea>
                        </div>

                        <div class="col-50">
                            <h3>Payment</h3>
                            {{-- <label for="fname">Accepted Accounts</label>
                            <div class="icon-container">
                                <i style="color:rgb(238, 9, 9);"> Nagad</i>
                                <i style="color:rgb(228, 15, 114);"> Bkash</i>
                                <i style="color:rgb(22, 98, 211);"> Rocket</i>
                                <i style="color:orange;"> Upay</i>
                            </div> --}}


                            <label for="cname">Name on Account</label>
                            <input type="text" name="accountname" id="aname" placeholder="Enter Your Name" required>



                            <label for="ccnum">Account number</label>
                            <input type="text" id="ccnum" name="accountnumber" placeholder="Enter Your  Account Number"
                                required>




                            <label for="ccnum">Total Amount</label>
                            <input type="text" id="number" name="totalamount" placeholder="Enter Total Amount "
                                required>
                        </div>

                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="checkbox"> Shipping address same as billing
                    </label>
                    <input type="submit" value="Continue to checkout" class="btn">
                    <a href="{{route('home')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a>
                </form>
                <div style="height: 100px;"></div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection
