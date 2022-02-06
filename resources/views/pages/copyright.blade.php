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
            text-align: left;
        }

    </style>


<body>

    <div id="modal">
        <header>
            <h1><b>CopyRight Information</b></h1>
        </header>
        <section>
            <p>
                Copyright secures the privileges of makers of unique works-like abstract, sensational, melodic and imaginative works (for instance, play scripts, films, verse, books, tunes, photography and even PC programming). It ensures the state of affairs communicated/introduced in works (e.g., the pictures, game plans of words or music, and so forth); it doesn't, as indicated by the UK. Copyright Office, ensure "realities, thoughts, frameworks, or techniques for activity." When you make (draw, compose, photo, and so forth) something unique, intellectual property law consequently gives you responsibility for work. Right now you make a work, copyright exists.
            </p><br>
            <p>This is additionally the situation with advanced substance, including sites.</p><br>
            <p>At the lower part of most sites, you've probably seen wording of any semblance of "Copyright 2017, "Protected by copyright law" or "© 2017" at the lower part of sites. That lets others know that the site's proprietor claims freedoms to what in particular is on the site. For instance, SCORE.org employments "Copyright © 2017 SCORE Association, www.score.org" and my organization's site shows "© 2008 - 2017 CorpNet, Incorporated. Protected by copyright law." to show that we own our sites. Regardless of whether you remember such a notification for your site, you actually have copyright assurance. Yet, I suggest you consider adding that text since it can assist with hindering others from thinking your substance is free for the taking.</p><br>
            <p>What Are The Advantages Of Officially Registering For A Copyright?</p><br>
            <p>While not legally necessary, you can additionally exhibit your possession privileges to your site by enrolling for an authority copyright through the UK. Copyright Office. Thusly, you'll have your privileges on the freely available report, and you'll get a testament of enrollment. Before you can record a copyright encroachment case, you really want to have formally enrolled for copyright. A site with an enrolled copyright might be qualified for legal harms and lawyer's charges on the off chance that a claim is fruitful.</p><br>
            <p>Instructions to Register For A Copyright</p><br>
            <p>You should either be the first creator of a work or the first creator should allow you privileges to enlist a copyright. Remember, that making a site frequently includes joint effort between engineers, originators, photographic artists and content journalists, so there might be a few shades of dim where possession is concerned. To keep away from disarray and expected lawful issues, consider settling on your functioning concurrences with workers for hire offering those types of assistance as clear as conceivable in regards to who claims the work they make when fabricating your site.</p><br>
            <p>To enroll for a copyright for your site, go to the UK. Copyright Office's online Registration Portal to finish an application under the classification of "Other Digital Content." Expect a handling time of six to eight months assuming you document on the web or eight to 10 months in the event that you record utilizing a paper structure. The charge for recording a Standard Application electronically in 2017 is simply $55.</p><br>
            <p>For more point by point data about intellectual property law and the security it gives you and your business, I recommend you visit the UK. Copyright Office site. It portrays the law exhaustively, and it likewise gives a supportive rundown of as often as possible posed inquiries.</p><br>
            <p>Furthermore, similarly as with any business issue or worry that has lawful importance, consider conversing with a lawyer to guarantee you're going to the proper lengths to secure your site and the entirety of your image's resources.</p>
        </section>
    </div>
</body>

</html>
@endsection
