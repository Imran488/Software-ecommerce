<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="google-site-verification" content="d18jpR7u8HROf91dFGi0EKTyP8JDJCeCPMQVUxqPUvA" />
    <meta name="msvalidate.01" content="8D4CE304B885C544914E7E84AF3695E0" />
    {{-- <link rel="stylesheet" media="screen and (max-width: 600px)" href="mobile.css">
    <link rel="stylesheet" media="screen and (min-width: 992px)" href="laptop.css"> --}}
    <!-- Title -->
    <title>BGD Technologies (UK) Limited</title>
    <!-- ================================================================
    ***Favicon***
    ================================================================= -->
    <link rel="shortcut icon" type="image/png" href="{{url('images/logo.png')}}">
    <!-- ================================================================
    ***CSS File***
    ================================================================= -->
    <!-- ================= *** Google Font-Poppins *** ======================= -->
    <link href="#" rel="stylesheet">

    <!-- ================= *** Animate CSS *** ======================= -->
    <link href="{{url('css/animate.min.css')}}" rel="stylesheet" type="text/css">

    <!-- ================= *** Bootstrap CSS *** ===================== -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <!-- ================= *** Font-awesome CSS *** ================== -->
    <link href="{{url('css/hover-min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- ================= *** icofont CSS *** ======================= -->
    <link href="{{url('css/icofont.css')}}" rel="stylesheet" type="text/css">

    <!-- ================= *** Owl Carousel CSS *** ================== -->
    <link href="{{url('css/owl.carousel.css')}}" rel="stylesheet" type="text/css">

    <!-- ================= *** Main CSS *** ========================== -->
    <link rel="stylesheet" href="{{url('css/style.css')}}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


     <!-- Facebook Pixel Code -->

        <!-- End Facebook Pixel Code -->
</head>

<body>
    @yield('content')

    <!-- ==================================================
10.*Footer_area start
=================================================== -->
    @include('partials.footer')





    <!-- ======================================================
    ***Js Files***
=========================================================== -->
    <!-- ================= Main Js ==================== -->
    <script src="{{url('js/jquery-3.1.0.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!-- ================= Bootstrap min Js =========== -->
    <script src="{{url('js/bootstrap.min.js')}}"></script>

    <!-- ================= owl carousel min Js ======== -->
    <script src="{{url('js/owl.carousel.min.js')}}"></script>

    <!-- ================= Active Js ================== -->
    <script src="{{url('js/active.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-fzff82+8pzHnwA1mQ0dzz9/E0B+ZRizq08yZfya66INZBz86qKTCt9MLU0NCNIgaMJCgeyhujhasnFUsYMsi0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <!-- chatscript -->

    <!--Start of Tawk.to Script
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/58e476fcf97dd14875f5bbcb/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
End of Tawk.to Script-->



    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '1227260430736185',
                autoLogAppEvents: true,
                xfbml: true,
                version: 'v2.12'
            });
        };
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '593445138414612');
        fbq('track', 'PageView');
        </script>

        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=593445138414612&ev=PageView&noscript=1"
        /></noscript>
</body>

</html>
