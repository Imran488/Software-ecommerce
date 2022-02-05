@extends('master')
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
            <h1><b>Cookies Policy</b></h1>
        </header>
        <section>

            <p>We use cookies to help improve your experience of our website at https://www.bgdtech.uk. This cookie policy is part of BGD Tech's privacy policy. It covers the use of cookies between your device and our site. </p>
            <p>We also provide basic information on third-party services we may use, who may also use cookies as part of their service. This policy does not cover their cookies. </p>
            <p>If you don’t wish to accept cookies from us, you should instruct your browser to refuse cookies from https://www.bgdtech.uk. In such a case, we may be unable to provide you with some of your desired content and services. </p>
            <h3 style="color:rgb(141, 3, 3);">What is a cookie?</h3>
            <p>A cookie is a small piece of data that a website stores on your device when you visit. It typically contains information about the website itself, a unique identifier that allows the site to recognize your web browser when you return, additional data that serves the cookie’s purpose, and the lifespan of the cookie itself. </p>
            <p>Cookies are used to enable certain features (e.g. logging in), track site usage (e.g. analytics), store your user settings (e.g. time zone, notification preferences), and to personalize your content (e.g. advertising, language). </p>
            <p>Cookies set by the website you are visiting are usually referred to as first-party cookies. They typically only track your activity on that particular site. </p>
            <p>Cookies set by other sites and companies (i.e. third parties) are called third-party cookies They can be used to track you on other websites that use the same third-party service. </p>
            <h3 style="color:rgb(141, 3, 3);">Types of cookies and how we use them</h3>
            <h5 >Essential cookies</h5>
            <p>Essential cookies are crucial to your experience of a website, enabling core features like user logins, account management, shopping carts, and payment processing. </p>
            <p>We use essential cookies to enable certain functions on our website. </p>
            <h5 >Performance cookies</h5>
            <p>Performance cookies track how you use a website during your visit. Typically, this information is anonymous and aggregated, with information tracked across all site users. They help companies understand visitor usage patterns, identify and diagnose problems or errors their users may encounter, and make better strategic decisions in improving their audience’s overall website experience. These cookies may be set by the website you’re visiting (first-party) or by third-party services. They do not collect personal information about you. </p>
            <p>We use performance cookies on our site. </p>
            <h3 style="color:rgb(141, 3, 3);">Functionality cookies</h3>
            <p>Functionality cookies are used to collect information about your device and any settings you may configure on the website you’re visiting (like language and time zone settings). With this information, websites can provide you with customized, enhanced, or optimized content and services. These cookies may be set by the website you’re visiting (first-party) or by third-party services.</p>
            <p>We use functionality cookies for selected features on our site.</p>
            <h3 style="color:rgb(141, 3, 3);">Targeting/advertising cookies</h3>
            <p>Targeting/advertising cookies help determine what promotional content is most relevant and appropriate to you and your interests. Websites may use them to deliver targeted advertising or limit the number of times you see an advertisement. This helps companies improve the effectiveness of their campaigns and the quality of content presented to you. These cookies may be set by the website you’re visiting (first-party) or by third-party services. Targeting/advertising cookies set by third-parties may be used to track you on other websites that use the same third-party service.</p>
            <p>We use targeting/advertising cookies on our site.</p>


        </section>
    </div>
</body>

</html>















