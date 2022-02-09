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
            font-family: cursive;
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
            font-family: cursive;
            line-height: 175%;
            color: rgb(12, 11, 11);
            text-align: center;
        }

    </style>


<body>

    <div id="modal">
        <header>
            <h1><b>Frquently Asked Question?</b></h1>
        </header>
        <section>
            <h3 style="color:rgb(141, 3, 3);">Question:Which digital marketing services create the most impact online?</h3>

            <p>Answer:The top 4 services which directly creates an impact on your marketing are: Social Media Marketing SEO Advertising Email Marketing The other two services don’t create direct impact but are vital and play a supporting role for the above-mentioned services: Content Writing Designing</p>

            <h3 style="color:rgb(141, 3, 3);">Question:Should have expect audience growth from Social Media Management?</h3>
            <p>Answer:Social Media Management is used to build professional accounts with informative and engaging content and attractive posts. It is also used to keep the existing audience active and engaged. For this reason, a specific number of audience growth is not promised/expected.</p>

            <h3 style="color:rgb(141, 3, 3);">Question:Do you set up accounts?</h3>
            <p>Answer:Yes, upon request, we can fully set up your Social Media accounts (Facebook, Instagram, LinkedIn, Twitter, Pinterest, etc.).</p>

            <h3 style="color:rgb(141, 3, 3);">Question:Once the order is placed, which is the next step?</h3>
            <p>Answer:Once the order is placed, a detailed message with requirements will be sent to you. Please, answer as many of the requirements as possible. Having collected this information, we will study it and we will start working.</p>

            <h3 style="color:rgb(141, 3, 3);">Question:How are the posts created?</h3>
            <p>Answer:The posts are created based on your website and niche. They are one-of-a-kind branded posts in relevance to your business accompanied by engaging content, trending hashtags, emojis, and URL links.</p>

            <h3 style="color:rgb(141, 3, 3);">Question:What if my brand/business is not very active on Social Media?</h3>
            <p>Answer:This is why I am here for; to establish an online Social Media presence for you. Daily posting, appealing graphic designs, relevant content, trending hashtags, and more, will help you reach a wider audience organically.</p>

            <h3 style="color:rgb(141, 3, 3);">Question:What if the project requires more screens or any other special requirement?</h3>
            <p>Answer:Let’s chat and finalize any special requirements.</p>

            <h3 style="color:rgb(141, 3, 3);">Question:Can you redesign an old landing page?</h3>
            <p>Answer:Indeed. we know, you adore your old point of arrival. So we will keep the content the same, simply make it versatile, responsive and upgrade according to your necessity.</p>



            <h3 style="color:rgb(141, 3, 3);">What we need to provide?</h3>
            <ol>
                <li>1. You have to send me correct content/pictures/content required to finish arrange. </li>
                <li>2. Give me test/case page (in the event that you need comparable one) </li>
                <li>3. Hosting credentials(user, pw) in the event that you are utilizing your own particular server</li>
            </ol>
        </section>
    </div>
</body>

</html>
@endsection






