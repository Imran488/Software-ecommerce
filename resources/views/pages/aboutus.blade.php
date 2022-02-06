@extends('master')
@section('content')
@include('partials.header')

<!DOCTYPE html>
<html>
    <style>
        article,
        aside,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        #modal {
            width: 1000px;
            border: 1px solid #CCC;
            box-shadow: 0 1px 5px #CCC;
            border-radius: 5px;
            font-family: verdana;
            margin: 25px auto;
            overflow: hidden;
        }

        #modal header {
            background: #f1f1f1;
            background-image: -webkit-linear-gradient(top, #f1f1f1, #CCC);
            background-image: -ms-linear-gradient(top, #f1f1f1, #CCC);
            background-image: -moz-linear-gradient(top, #f1f1f1, #CCC);
            background-image: -o-linear-gradient(top, #f1f1f1, #CCC);
            box-shadow: 0 1px 2px rgb(8, 8, 8);
            padding: 10px;
        }

        #modal h1 {
            padding: 0;
            margin: 0;
            font-size: 24px;
            font-weight: normal;
            text-shadow: 0 1px 2px white;
            color: rgb(8, 160, 76);
            text-align: center;
        }

        #modal section {
            padding: 10px 30px;
            font-size: 18px;
            line-height: 175%;
            color: rgb(12, 11, 11);
            text-align: center;
        }

    </style>


<body>

    <div id="modal">
        <header>
            <h1><b><u>At A Glance</u></b></h1>
        </header>
        <section>
            <p>BGD Technology(UK)Limited will help you grow your business in any case. We
                have 100+ services that can change
                your business standard well.We provide the best IT solution for your business. We work together to make
                a
                positive change.
                We have made a lot of initiatives. We gather vast experience as an IT related services and
                products provider.
            </p>
        </section>
    </div>


    <div id="modal">
        <header>
            <h1><b><u>Our Mission</u></b></h1>
        </header>
        <section>
            <p>We aim to create different kinds of opportunities for different types of
                businesses in this digital
                world &amp; customers’ value so that our next generation and even our present generation can
                cope with advanced-level difficulties &amp; opportunities.
            </p>
        </section>
    </div>

    <div id="modal">
        <header>
            <h1><b><u>Our Vision</u></b></h1>
        </header>
        <section>
            <p>At BGD Technology(UK)Limited, We provide the best unique solution to our clients so that they can be satisfied with our
                service and solution forever. Clients’ satisfaction is the primary factor in our business because we can be
                remarkable in their hearts by providing the best quality services &amp; solutions.
            </p>
        </section>
    </div>

    <div id="modal">
        <header>
            <h1><b><u>Message From CEO</u></b></h1><br>
        </header>
        <section>
            <p>First of all, Thank you for taking the time to read my message. The purpose of this message is to help to build business relations between you &amp; me. All clients are valuable for me, &amp; I want to keep business relations forever. If there is any complaint regarding my service &amp; solution, Kindly feel free to contact me, Although there is a contact support page. Because I want my clients’ satisfaction that is more valuable than anything else. I hope we can maintain our business relationship until death.<br>
                <b>Thank you again for your valuable time.</b>
            </p>
        </section>
    </div>

</body>

</html>
@endsection
