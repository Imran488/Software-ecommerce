@php

$datas = array(
array(
'title'=>'Basic Package',
'price'=>'149',
'description'=>array(
'3 Static Post' ,
'1 Album Post (4 Pic Per Album) ',
'1 Cover Photo (per 2 month) ',
'Day/Occasion Post (Optional) ',
'Delivery Post ',
'Strategic Planning ',
'Media Management ',
'Monthly Report ',

),
),
array(
'title'=>'Standard Package',
'price'=>'199',
'description'=>array(
'5 Static Post' ,
'2 Album Post (4 Pic Per Album) ',
'2 Cover Photo (per 2 month) ',
'Day/Occasion Post (Optional) ',
'Delivery Post ',
'Strategic Planning ',
'Media Management ',
'Monthly Report ',
),

),

array(
'title' => 'Premium Package',
'price' => '299',
'description' => array(
'8 Static Post' ,
'4 Album Post (4 Pic Per Album) ',
'3 Cover Photo (per 2 month) ',
'Day/Occasion Post (Optional) ',
'Delivery Post ',
'Strategic Planning ',
'Media Management ',
'Monthly Report ',
'Carousel/Motion Video post',
)
),

)

@endphp
@extends('master')
@section('content')
@include('partials.header')

<div class="container pt-5">
    <div class="blur-effect m-auto px-5">
        <u>
            <h1 style="color:rgb(1, 133, 45)" class="py-3 text-center fw-bold">Digital <span style="color:blue">
                    Marketting</span></h1>
        </u>
        <a class="btn btn-primary" href="{{route('home')}}">Back</a>
        <br><br><br>
        </h1>
    </div>
</div>

<div class="container py-5">

    <div class="row">
        <div class="title">

        </div>
    </div>

    <div class="row">
        @foreach ($datas as $data)


        <div class="col-md-4">
            <div class="card p-2 pkg-item animated slideInUp">
                <h5 class="pkg-title" id="{{str_replace(' ','-', $data['title'])}}">
                    {{ $data['title'] }}
                </h5>
                <h3 class="pkg-price">
                    {{ $data['price'] }} GBP
                </h3>
                <div class="description-area">
                    <ul>
                        @foreach ($data['description'] as $description)
                        <li>{{ $description }}</li>

                        @endforeach
                    </ul>
                </div>

                <form action="{{route('stripe.post')}}" method="POST">
                    @csrf
                    <div style="display:none;">
                        <input type="text" name="name" value="{{$data['title']}}">
                        <input type="text" name="amount" value="{{$data['price']}}">
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary">
                        Buy Now
                    </button>
                </form>

            </div>
        </div>
        @endforeach

    </div>

</div>


@endsection



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
        color: rgb(8, 34, 150);
        background: color:lightblue;
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
