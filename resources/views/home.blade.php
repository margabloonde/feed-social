<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <!-- Social-feed css -->
    <link href="{{asset('css/jquery.socialfeed.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/example.css')}}" rel="stylesheet" type="text/css">
    <!-- font-awesome for social network icons -->
    <link href="{{asset('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}" rel="stylesheet">

</head>
<body>
<section class="feed">
    <div class="container">
        <div class="social-feed-container">
        </div>
    </div>
</section>


<!-- jQuery -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Codebird.js - required for TWITTER -->
<script src="{{asset('bower_components/codebird-js/codebird.js')}}"></script>
<!-- doT.js for rendering templates -->
<script src="{{asset('bower_components/doT/doT.min.js')}}"></script>
<!-- Moment.js for showing "time ago" and/or "date"-->
<script src="{{asset('bower_components/moment/min/moment.min.js')}}"></script>
<!-- Moment Locale to format the date to your language (eg. italian lang)-->
<script src="{{asset('bower_components/moment/locale/it.js')}}"></script>
<!-- Social-feed js -->
<script src="{{asset('bower_components/social-feed/js/jquery.socialfeed.js')}}"></script>

<!--Instagram Client_ID cac55ad162bb45fa8cef3733bd281363-->
<!--Instagram Client_SECRET 3b417e52a27844d283d45b4eae89ed38-->
<!--Instagram TOKEN  751733154.cac55ad.85cfd2c3401b4f3ab972a21dd60334f3-->
<!--Facebook app_ID 1985651898355213 -->
<!--Facebook app_SECRET 4a3e26b62718cdd810701e2a5bb99f03 -->
<!--Facebook TOKEN 1985651898355213|-Ue_-cAdYptAWkvYxfCEgWYs1_M -->
<!--Twitter consumer_key 	6oeMlDIegub2JIC314cY6GIwd -->
<!--Twitter consumer_secret 	ek5cB3Ew9wZaVpN4QTIyqYZX0Xm1gctwU4asu71TrpndE2cE7p -->

<script>
    $(document).ready(function () {
        $('.social-feed-container').socialfeed({
            // INSTAGRAM
            instagram: {
                accounts: ['@bloondeweb', '#bloondeweb'],  //Array: Specify a list of accounts from which to pull posts
                limit: 2,                                    //Integer: max number of posts to load
                client_id: 'cac55ad162bb45fa8cef3733bd281363',       //String: Instagram client id (optional if using access token)
                access_token: '751733154.cac55ad.85cfd2c3401b4f3ab972a21dd60334f3' //String: Instagram access token
            },

            // FACEBOOK
            facebook:{
                accounts: ['@bloondeweb','!bloondeweb'],  //Array: Specify a list of accounts from which to pull wall posts
                limit: 2,                                   //Integer: max number of posts to load
                access_token: '1985651898355213|-Ue_-cAdYptAWkvYxfCEgWYs1_M'  //String: "APP_ID|APP_SECRET"
            },

            // TWITTER
            twitter:{
                accounts: ['@bloondeweb'],                      //Array: Specify a list of accounts from which to pull tweets
                limit: 2,                                   //Integer: max number of tweets to load
                consumer_key: '6oeMlDIegub2JIC314cY6GIwd',          //String: consumer key. make sure to have your app read-only
                consumer_secret: 'ek5cB3Ew9wZaVpN4QTIyqYZX0Xm1gctwU4asu71TrpndE2cE7p' //String: consumer secret key. make sure to have your app read-only
            },
            // GENERAL SETTINGS
            length:200,                                     //Integer: For posts with text longer than this length, show an ellipsis.
            show_media:true,                                //Boolean: if false, doesn't display any post images

        });
    });
</script>

</body>
</html>
