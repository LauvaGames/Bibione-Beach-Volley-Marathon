<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online calculator</title>
    <meta name="description" content="Fullscreen Form Interface: A distraction-free form concept with fancy animations" />
    <meta name="keywords" content="fullscreen form, css animations, distraction-free, web design" />
    <meta name="author" content="Codrops" />
    <!--<link rel="shortcut icon" href="../favicon.ico">-->
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/css/component.css" />
    <link rel="stylesheet" href="<?php echo(base_url());?>static/font-awesome-4.7.0/css/font-awesome.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/css/normalize2.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/css/demo2.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/css/cs-select2.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/css/cs-skin-slide2.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/css/cs-select.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/css/cs-skin-boxes.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/amazing_slider/sliderengine/amazingslider-1.css">
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/amazing_slider/sliderengine/amazingslider-2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/amazing_slider/sliderengine/amazingslider-3.css">
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/amazing_slider/sliderengine/amazingslider-4.css">
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/amazing_slider/sliderengine/amazingslider-5.css">
    <script src="<?php echo(base_url());?>static/js/modernizr.custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style type="text/css">
        body::before, body::after {
            background-color: transparent;
        }
        body {
            padding: 0;
            border: none;
            overflow-y: scroll;
            min-width: 650px;
        }
        div.cs-select {
            height: 50px;
        }
        span.cs-placeholder {
            padding: 10px;
            padding-right: 80px;
            font-size: 30px;
        }
        .cs-select > span::after {
            content: '\e00f';
            float: right;
        }
        .cs-skin-slide > span {
            height: auto;
        }
        .cs-skin-slide .cs-options {
            height: auto;
        }
        div.cs-skin-slide {
            font-size: 20px;
        }
        .cs-select .cs-options {
            background-color: transparent;
        }
        label.fs-field-label {
            min-width: 470px;
        }
        .fs-form-overview .fs-fields::before {
            content: 'Total package price:';
        }
        button.fs-submit, button.fs-continue {
            border-color: white;
            color: white;
        }
        .fs-form-full {
            margin: 0 40px;
            width: 40%;
        }
        button.fs-continue {
            right: 100px;
            top: 40px;
            bottom: auto;
        }

        /* back button */
        .back {
            padding: 0.6em 1.2em;
            /*border-radius: 40px;*/
            font-weight: 700;
            color: white;
            margin: 0 40px 30px 0;
            font-size: 0.75em;
        }
        .back:hover {
            background: #232529;
            color: #fff;
        }
        .fs-title {
            padding-top: 20px;
        }

        /** Slider **/
        .container_for_slider {
            margin-left: 600px;
            width: 550px;
            height: 350px;
            display: none;
        }
        .bottom_slider {
            margin-top: 100px;
            margin-bottom: 100px;
        }

        @media(max-width:1300px) {
            .container_for_slider {
                padding-top: 400px;
                margin-left: 0;
                /*margin: 0 auto;*/
            }
            .fs-fields {
                height: auto;
                /*min-height: 500px;*/
            }
            .fs-form-full {
                width: 80%;
                margin: 0 auto;
            }
            label.fs-field-label {
                min-width: 470px;
            }
            .bottom_slider {
                margin-top: 100px;
            }
            /*li.li_style > div {
                max-width: 550px;
                width: 550px;
                margin: 0 auto;
            }
            li.li_style > label {
                width: 550px;
                margin: 0 auto;
            }*/
        }
        @media(max-width:900px) {
            label.fs-field-label {
                min-width: 300px;
            }
            button.fs-continue {
                left: 30px;
                top: 420px;
                bottom: auto;
            }
        }
        @media(max-width:450px) {
            li.fs-current > div {
                width: 100%;
            }
            .fs-form-full {
                width: 100%;
                margin: 0 auto;
            }
        }

        @media(min-width:1600px) {
            .container_for_slider{
                margin-left: 125%;
            }
            .fs-form-full {
                margin-left: 150px;
                width: 40%;
            }
            .bottom_slider {
                margin-top: 150px;
            }
        }
        @media(min-width:1900px) {
            .fs-form-full {
                margin-left: 250px;
            }
            .container_for_slider{
                margin-left: 100%;
            }
        }
    </style>


</head>
<body>
<div class="container">

    <div class="fs-form-wrap" id="fs-form-wrap">
        <div class="fs-title">
            <button style="border: 1px solid white;" class="back"><i class="fa fa-arrow-left" aria-hidden="true"></i><a style='color:white; padding-left:3px' href="http://volley4fun.com/v0v4ik/index.php/main/newvolley_en">Main page</a></button>
            <h1>Total package price: <span id="price"></span> <i class="fa fa-eur" aria-hidden="true"></i></h1>

        </div>
        <form id="myform" class="fs-form fs-form-full" autocomplete="off">
            <ol class="fs-fields">
                <li data-input-trigger class="li_style">
                    <div>
                        <label class="fs-field-label fs-anim-upper" for="q1"> Choose your residence</label>
                        <select class="cs-select cs-skin-slide fs-anim-lower" id="q1" name="q1">
                            <option value="terme" data-class="icon-camera">Delle Terme</option>
                            <option value="azzuro" data-class="icon-camera">Villaggio Azzuro</option>
                        </select>
                    </div>
                    <div style="margin-top: 50px">
                        <label class="fs-field-label fs-anim-upper" for="q2">Types of accomondation</label>
                        <select class="cs-select cs-skin-slide fs-anim-lower" id="q2" name="q2" >
                            <option value="2" data-class="icon-money">shared appartment (2 persons inside)</option>
                            <option value="3" data-class="icon-money">shared appartment (3 persons inside)</option>
                            <option value="4" data-class="icon-money">shared appartment (4 persons inside)</option>
                        </select>
                    </div>
                </li>
                <li data-input-trigger class="li_style">
                    <label class="fs-field-label fs-anim-upper" for="q3">Sport package</label>
                    <select class="cs-select cs-skin-slide fs-anim-lower" id="q3" name="q3">
                        <option value="none" data-class="icon-withoutTrains">Without training and tournament</option>
                        <option value="tournament" data-class="icon-cup">Participation in Beach Volley Marathon</option>
                        <option value="standart" data-class="icon-cup">Full sport package (all trainings+ 2categories of the tournament)</option>
                    </select>
                </li>
                <li data-input-trigger class="li_style">
                    <label class="fs-field-label fs-anim-upper" for="q4">Your level of play</label>
                    <select class="cs-select cs-skin-slide fs-anim-lower" id="q4" name="q4">
                        <option value="sightseeing" data-class="icon-skill1">Begginer</option>
                        <option value="business" data-class="icon-skill2">Amateur</option>
                        <option value="honeymoon" data-class="icon-skill3">Advanced</option>
                        <option value="food" data-class="icon-skill4">Pro</option>
                    </select>
                </li>
                <li data-input-trigger class="li_style">
                    <label class="fs-field-label fs-anim-upper" for="q5">Kids</label>
                    <select class="cs-select cs-skin-slide fs-anim-lower" id="q5" name="q5">
                        <option value="sightseeing" data-class="icon-circleB">No </option>
                        <option value="business" data-class="icon-circleB">Yes</option>
                    </select>
                </li>
                <li data-input-trigger class="li_style">
                    <label class="fs-field-label fs-anim-upper" for="q6">Trip to Venice</label>
                    <select class="cs-select cs-skin-slide fs-anim-lower" id="q6" name="q6">
                        <option value="false" data-class="icon-circleW">No</option>
                        <option value="true" data-class="icon-circleB">Yes</option>
                    </select>
                </li>
                <li data-input-trigger class="li_style">
                    <div>
                        <label class="fs-field-label fs-anim-upper" for="q7">Individual training</label>
                        <select class="cs-select cs-skin-slide fs-anim-lower" id="q7" name="q7">
                            <option value="false" data-class="icon-circleW">No</option>
                            <option value="true" data-class="icon-circleB">Yes</option>
                        </select>
                    </div>
                    <div style="margin-top: 50px">
                        <label class="fs-field-label fs-anim-upper" for="q8">Participation in 3 categories of Beach Volley Marathon</label>
                        <select class="cs-select cs-skin-slide fs-anim-lower" id="q8" name="q8">
                            <option value="false" data-class="icon-circleW">No</option>
                            <option value="true" data-class="icon-circleB">Yes</option>
                        </select>
                    </div>
                </li>
                <li class="li_style">
                    <label class="fs-field-label fs-anim-upper" for="q9">Your name</label>
                    <input class="fs-anim-lower" id="q9" name="q9" type="text" placeholder="Dean Moriarty"/>
                </li>
                <li class="li_style">
                    <label class="fs-field-label fs-anim-upper" for="q10" data-info="We won't send you spam, we promise...">Your e-mail contact </label>
                    <input class="fs-anim-lower" id="q10" name="q10" type="email" placeholder="dean@road.us"/>
                </li>
                <li class="li_style">
                    <label class="fs-field-label fs-anim-upper" for="q11">Your number</label>
                    <input class="fs-anim-lower" id="q11" name="q11" type="number" placeholder="7 9хх ххх-хх-хх"/>
                </li>


            </ol><!-- /fs-fields -->

            <div id="slider_terme" class="container_for_slider"> Delle Terme
                <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:550px;margin:0px auto 44px;">
                    <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                        <ul class="amazingslider-slides" style="display:none;">
                            <li><a href="<?php echo(base_url());?>static/amazing_slider/images/terme1-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/terme1.jpg" data-duration="3000" /></a>
                            </li>
                            <li><a href="<?php echo(base_url());?>static/amazing_slider/images/terme2-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/terme2.jpg" /></a>
                            </li>
                            <li><a href="<?php echo(base_url());?>static/amazing_slider/images/terme3-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/terme3.jpg" /></a>
                            </li>
                        </ul>
                        <ul class="amazingslider-thumbnails" style="display:none;">
                            <li><img src="<?php echo(base_url());?>static/amazing_slider/images/terme1-tn.jpg" /></li>
                            <li><img src="<?php echo(base_url());?>static/amazing_slider/images/terme2-tn.jpg" /></li>
                            <li><img src="<?php echo(base_url());?>static/amazing_slider/images/terme3-tn.jpg" /></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="slider_azzuro" class="container_for_slider"> Villaggio Azzuro
                <div id="amazingslider-2" style="display:block;position:relative;margin:0 auto;">
                    <ul class="amazingslider-slides" style="display:none;">
                        <li><a href="<?php echo(base_url());?>static/amazing_slider/images/azzuro2-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/azzuro2.jpg" data-texteffect="Bottom bar" data-duration="3000" /></a>
                        </li>
                        <li><a href="<?php echo(base_url());?>static/amazing_slider/images/azzuro1-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/azzuro1.jpg" data-duration="3000" /></a>
                        </li>
                    </ul>
                    <ul class="amazingslider-thumbnails" style="display:none;">
                        <li><img src="<?php echo(base_url());?>static/amazing_slider/images/azzuro2-tn.jpg" /></li>
                        <li><img src="<?php echo(base_url());?>static/amazing_slider/images/azzuro1-tn.jpg" /></li>
                    </ul>
                </div>
            </div>

            <div id="azzuro_2_3_4" class="container_for_slider bottom_slider">
                <div id="amazingslider-3" style="display:block;position:relative;margin:0 auto;">
                    <ul class="amazingslider-slides" style="display:none;">
                        <li><a href="<?php echo(base_url());?>static/amazing_slider/images/azzuro_x234_1-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/azzuro_x234_1.jpg" data-duration="3000" /></a>
                        </li>
                        <li><a href="<?php echo(base_url());?>static/amazing_slider/images/azzuro_x234_2-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/azzuro_x234_2.jpg" /></a>
                        </li>
                        <li><a href="<?php echo(base_url());?>static/amazing_slider/images/azzuro_x234_3-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/azzuro_x234_3.jpg" /></a>
                        </li>
                        <li><a href="<?php echo(base_url());?>static/amazing_slider/images/azzuro_x234_4-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/azzuro_x234_4.jpg" /></a>
                        </li>
                    </ul>
                    <ul class="amazingslider-thumbnails" style="display:none;">
                        <li><img src="<?php echo(base_url());?>static/amazing_slider/images/azzuro_x234_1-tn.jpg" /></li>
                        <li><img src="<?php echo(base_url());?>static/amazing_slider/images/azzuro_x234_2-tn.jpg" /></li>
                        <li><img src="<?php echo(base_url());?>static/amazing_slider/images/azzuro_x234_3-tn.jpg" /></li>
                        <li><img src="<?php echo(base_url());?>static/amazing_slider/images/azzuro_x234_4-tn.jpg" /></li>
                    </ul>
                    <div class="amazingslider-engine"><a href="http://amazingslider.com" title="jQuery Slideshow">jQuery Slideshow</a></div>
                </div>
            </div>
            <div id="terme_2" class="container_for_slider bottom_slider">
                <div id="amazingslider-4" style="display:block;position:relative;margin:0 auto;">
                    <ul class="amazingslider-slides" style="display:none;">
                        <li><a href="<?php echo(base_url());?>static/amazing_slider/images/terme_x2_1-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/terme_x2_1.jpg" /></a>
                        </li>
                        <li><a href="<?php echo(base_url());?>static/amazing_slider/images/terme_x2_2-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/terme_x2_2.jpg" /></a>
                        </li>
                        <li><a href="<?php echo(base_url());?>static/amazing_slider/images/terme_x2_3-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/terme_x2_3.jpg" data-duration="3000" /></a>
                        </li>
                    </ul>
                    <ul class="amazingslider-thumbnails" style="display:none;">
                        <li><img src="<?php echo(base_url());?>static/amazing_slider/images/terme_x2_1-tn.jpg" /></li>
                        <li><img src="<?php echo(base_url());?>static/amazing_slider/images/terme_x2_2-tn.jpg" /></li>
                        <li><img src="<?php echo(base_url());?>static/amazing_slider/images/terme_x2_3-tn.jpg" /></li>
                    </ul>
                </div>
            </div>
            <div id="terme_3_4" class="container_for_slider bottom_slider">
                <div id="amazingslider-5" style="display:block;position:relative;margin:0 auto;">
                    <ul class="amazingslider-slides" style="display:none;">
                        <li><a href="<?php echo(base_url());?>static/amazing_slider/images/terme_x4_1-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/terme_x4_1.jpg" data-duration="3000" /></a>
                        </li>
                        <li><a href="<?php echo(base_url());?>static/amazing_slider/images/terme_x4_2-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/terme_x4_2.jpg" /></a>
                        </li>
                        <li><a href="<?php echo(base_url());?>static/amazing_slider/images/terme_x4_3-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/terme_x4_3.jpg" /></a>
                        </li>
                        <li><a href="<?php echo(base_url());?>static/amazing_slider/images/terme_x4_4-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/terme_x4_4.jpg" /></a>
                        </li>
                    </ul>
                    <ul class="amazingslider-thumbnails" style="display:none;">
                        <li><img src="<?php echo(base_url());?>static/amazing_slider/images/terme_x4_1-tn.jpg" /></li>
                        <li><img src="<?php echo(base_url());?>static/amazing_slider/images/terme_x4_2-tn.jpg" /></li>
                        <li><img src="<?php echo(base_url());?>static/amazing_slider/images/terme_x4_3-tn.jpg" /></li>
                        <li><img src="<?php echo(base_url());?>static/amazing_slider/images/terme_x4_4-tn.jpg" /></li>
                    </ul>
                    <div class="amazingslider-engine"><a href="http://amazingslider.com" title="Responsive JavaScript Slider">Responsive JavaScript Slider</a></div>
                </div>
            </div>


            <div id="lastPrice" style="margin: 50px 0"> </div>
            <input id="inputPrice" type="hidden" />
            <button id="but" class="fs-submit" type="button">Send your request</a></button>
        </form><!-- /fs-form -->

    </div><!-- /fs-form-wrap -->

</div><!-- /container -->



<script src="<?php echo(base_url());?>static/js/classie.js"></script>
<script src="<?php echo(base_url());?>static/js/selectFx.js"></script>
<script src="<?php echo(base_url());?>static/js/fullscreenForm.js"></script>
<script src="<?php echo(base_url());?>static/js/classie2.js"></script>
<script src="<?php echo(base_url());?>static/js/selectFx2.js"></script>
<script src="<?php echo(base_url());?>static/js/calculator.js"></script>
<script src="<?php echo(base_url());?>static/amazing_slider/sliderengine/amazingslider.js"></script>
<script src="<?php echo(base_url());?>static/amazing_slider/sliderengine/initslider-1.js"></script>
<script src="<?php echo(base_url());?>static/amazing_slider/sliderengine/initslider-2.js"></script>
<script src="<?php echo(base_url());?>static/amazing_slider/sliderengine/initslider-3.js"></script>
<script src="<?php echo(base_url());?>static/amazing_slider/sliderengine/initslider-4.js"></script>
<script src="<?php echo(base_url());?>static/amazing_slider/sliderengine/initslider-5.js"></script>
<script>
    (function() {
        var formWrap = document.getElementById( 'fs-form-wrap' );

        [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
            new SelectFx( el, {
                stickyPlaceholder: false,
                onChange: function(val){
                    document.querySelector('span.cs-placeholder').style.backgroundColor = val;
                }
            });
        } );

        new FForm( formWrap, {
            onReview : function() {
                classie.add( document.body, 'overview' ); // for demo purposes only
            }
        } );
    })();
</script>