<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
</head>

<body>

    <input type="text" class="input field-left" value="" id="query" style="display:none;" />
    
    <div id="social-feed-container" class="social-feed-container">
    <!--  -->
    </div>

    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800);
        @import url(http://weloveiconfonts.com/api/?family=brandico|zocial);
        @font-face {
            font-family: 'icomoon';
            src: url('../fonts/icomoon.eot');
            src: url('../fonts/icomoon.eot?#iefix') format('embedded-opentype'),
            url('../fonts/icomoon.woff') format('woff'),
            url('../fonts/icomoon.ttf') format('truetype'),
            url('../fonts/icomoon.svg#bryant_probold') format('svg');
            font-weight: normal;
            font-style: normal;
        }
        body *{font-family: 'Open Sans', sans-serif;}
        .social-feed-element {
            display: inline-block;
            vertical-align: top;
            width: 31%;
        }
        .social-feed-element *{color:#fff;}
        .social-feed-element:not(:first-of-type){margin-left: 10px;}
        .social-feed-element:not(:last-of-type){margin-right: 10px;}
        .social-feed-element > div{
            display: block;
            overflow: hidden;
            border:2px #000 solid;
            width: 100%;
            background-color: #fff;
            border-radius: 30px;
            -moz-border-radius: 30px;
            -webkit-border-radius: 30px;
            -ms-border-radius: 30px;
            box-shadow:0 5px 1px 2px #a6a6a6; }
        }
        .media,.content{
            display: block;
        }
        .content{padding:20px;}
        .social-feed-element .media{
            display: block;
            width: 100%;
            overflow: hidden;
            height: 180px;
        }
        img{display: block;}
        iframe{
            display: block;
            width: 100% !important;
        }
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 30px;
            height: 0;
            overflow: hidden;
        }
        .video-container iframe,
        .video-container object,
        .video-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .facebook .content{background-color: #3b5998;}
        .twitter .content{background-color: #55acee;}
        .youtube .content{background-color: #d50d1a;}
        .instagram .content{background-color: #2e5e86;}
        .fa::before{
            font-size: 32px;
            line-height: 32px;
            width: auto;
            height: 32px;
            display: block;
            text-align: left;
            /* use !important to prevent issues with browser extensions that change fonts */
            font-family: 'icomoon' !important;
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            /* Better Font Rendering =========== */
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .fa.fa-facebook::before{content: "\e907";}
        .fa.fa-twitter::before{content: "\e90a"}
        .fa.fa-youtube::before{content: "\e90b";}
        .fa.fa-instagram::before{content: "\e908";}
        i{font-style: normal;}
        @media screen and (max-width:960px){
            .social-feed-element{
                width: 100%;
                margin-right: 0px !important;
                margin-left: 0px !important;
                margin-bottom:20px;
            }
        }
    </style>

    <!-- jQuery -->
    <script src="jquery.min.js"></script>
    <!-- Codebird.js - required for TWITTER -->
    <script src="codebird.js"></script>
    <!-- doT.js for rendering templates -->
    <script src="doT.min.js"></script>
    <!-- Moment.js for showing "time ago" -->
    <script src="moment.min.js"></script>
    <!-- Social-feed js -->
    <script src="jquery.socialfeed.js"></script>

    <script>
        $(document).ready(function() {

            var updateFeed = function() {
                var initialQuery = $('#query').val();
                initialQuery = initialQuery.replace(" ", "");
                var queryTags = initialQuery.split(",");
                $('.social-feed-container').socialfeed({
                    facebook: {
                        accounts: ['@movimentoviver'],
                        limit: 1,
                        access_token: '150849908413827|a20e87978f1ac491a0c4a721c961b68c'
                    },
                    // youtube:{
                    //     urls: ['https://www.youtube.com/feeds/videos.xml?user=rafinhabastos'], //Array: Specifiy a list of youtube feed from which to pull posts
                    //     limit: 1  //Integer: max number of posts to load for each url
                    // },
	                instagram: {
	                    accounts: ['@movimento.viver'],
	                    limit: 1,
	                    client_id: '88b4730e0e2c4b2f8a09a6184af2e218',
	                    access_token: ''
	                },
                    twitter: {
                        accounts: ['@movimentoviver'],
                        limit: 1,
                        consumer_key: 'qzRXgkI7enflNJH1lWFvujT2P', // make sure to have your app read-only
                        consumer_secret: '8e7E7gHuTwyDHw9lGQFO73FcUwz9YozT37lEvZulMq8FXaPl8O', // make sure to have your app read-only
                    },

                    // GENERAL SETTINGS
                    length: 200,
                    show_media: true,
                    // Moderation function - if returns false, template will have class hidden
                    moderation: function(content) {
                        return (content.text) ? content.text.indexOf('fuck') == -1 : true;
                    },
                    //update_period: 5000,
                    // When all the posts are collected and displayed - this function is evoked
                    callback: function() {
                        console.log('all posts are collected');
                    }
                });
            };
            updateFeed();            
        });
        </script>
</body>

</html>
