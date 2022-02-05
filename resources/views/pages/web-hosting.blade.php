@php

    $datas = array(
            array(
                'title'=>'Basic Package',
                'price'=>'200',
                'description'=>array(
                    'Host 5 Domain',
                    '5GB SSD Storage',
                    'Unlimited Bandwidth',
                    'Unlimited Sub Domain',
                    'Unlimited Email Accounts',
                    'Unlimited Databases',
                    '2 Core / 2GB RAM / 30 EP',
                    'Ruby, Python, NodeJS',
                    'Free SSL certificate',
                    'Singapore/USA/UK Server',
                    'LiteSpeed Web Server',
                    'cPanel Control Panel',

                ),
        ),
                array(
                'title'=>'Standard Package',
                'price'=>'400',
                'description'=>array(
                    'Host 10 Domain',
                    '10GB SSD Storage',
                    'Unlimited Bandwidth',
                    'Unlimited Sub Domain',
                    'Unlimited Email Accounts',
                    'Unlimited Databases',
                    '2 Core / 2GB RAM / 30 EP',
                    'Ruby, Python, NodeJS',
                    'Free SSL certificate',
                    'Singapore/USA/UK Server',
                    'LiteSpeed Web Server',
                    'cPanel Control Panel',
                    ),

                ),

            array(
                'title' => 'Premium Package',
                'price' => '800',
                'description' => array(
                    'Host 20 Domain',
                    '20GB SSD Storage',
                    'Unlimited Bandwidth',
                    'Unlimited Sub Domain',
                    'Unlimited Email Accounts',
                    'Unlimited Databases',
                    '2 Core / 2GB RAM / 30 EP',
                    'Ruby, Python, NodeJS',
                    'Free SSL certificate',
                    'Singapore/USA/UK Server',
                    'LiteSpeed Web Server',
                    'cPanel Control Panel',
                )
            ),
                array(
                'title'=>'Ultimate Package',
                'price'=>'1000',
                'description'=>array(
                    'Unlimited Domain',
                    'Unlimited  SSD Storage',
                    'Unlimited Bandwidth',
                    'Unlimited Sub Domain',
                    'Unlimited Email Accounts',
                    'Unlimited Databases',
                    '2 Core / 2GB RAM / 30 EP',
                    'Ruby, Python, NodeJS',
                    'Free SSL certificate',
                    'Singapore/USA/UK Server',
                    'LiteSpeed Web Server',
                    'cPanel Control Panel',

                    ),
                ),

    )

@endphp
 @extends('master')
 @include('partials.header')
     <section id="terms-and-conditions">

        <div class="container pt-5">
            <div class="blur-effect m-auto px-5">
                <u>
                    <h1 style="color:rgb(1, 133, 45)" class="py-3 text-center fw-bold">Web<span style="color:blue">Hosting</span></h1>
                </u>
                <a class="btn btn-primary"href="{{route('home')}}">Back</a>
                <br><br><br>
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
                             <h5 style="font-size: 24px;"  class="pkg-title">
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
                            </div><br>

                            <form action="{{route('stripe.post')}}" method="post">
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

     </section>





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
