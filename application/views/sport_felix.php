<!DOCTYPE HTML>
<html>
<head>
    <title>BVM</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="<?php echo(base_url());?>static/new_beach_volley/startbootstrap-scrolling-nav-gh-pages/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo(base_url());?>static/new_beach_volley/font-awesome-4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo(base_url());?>static/new_beach_volley/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/new_beach_volley/countdown/css/main.css">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand page-scroll" href="#page-top">Главная</a>-->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li>
                    <a class="page-scroll" href="#page-top">Главная</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">О нас</a>
                </li>
                <li>
                    <a class="page-scroll" href="#sport">Для спорт-групп</a>
                </li>
                <li>
                    <a class="page-scroll" href="#volley">Лагеря по волейболу</a>
                </li>
                <li>
                    <a class="page-scroll" href="#fitnes">Фитнес </a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Контакты</a>
                </li>
            </ul>


            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">RU</button>
                <div id="myDropdown" class="dropdown-content">
                    <a>EN</a>
                    <a>RU</a>
                    <a>FR</a>
                </div>
            </div>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<div id="containerCalc">
    <a id="click" href="http://volley4fun.com/v0v4ik/index.php/main/full_screen_form">Онлайн калькулятор заказов <i style="padding-left: 3px" class="fa fa-arrow-circle-o-right"></i></a>
</div>

<!-- Intro Section -->
<section id="intro" class="intro-section">

    <div class="fullscreen-bg">
        <!--
        <div class="overlay">
            <div id="bodyCountdown">
                <div id="wrap">
                    <div id="left">
                        <div class='test floatLeft'>
                            <script type="text/javascript">
                                (function() {
                                    var _id = "80686148c0822f49f3615f2ef2730fd0";
                                    while (document.getElementById("timer" + _id)) _id = _id + "0";
                                    document.write("<div id='timer" + _id + "' style='min-width:146px;height:146px;'></div>");
                                    var _t = document.createElement("script");
                                    _t.src = "http://megatimer.ru/timer/timer.min.js";
                                    var _f = function(_k) {
                                        var l = new MegaTimer(_id, {
                                            "view": [1, 0, 0, 0],
                                            "type": {
                                                "currentType": "1",
                                                "params": {
                                                    "usertime": true,
                                                    "tz": "3",
                                                    "utc": 1504958400000
                                                }
                                            },
                                            "design": {
                                                "type": "circle",
                                                "params": {
                                                    "width": "11",
                                                    "radius": "61",
                                                    "line": "solid",
                                                    "line-color": "#36c4c5",
                                                    "background": "solid",
                                                    "background-color": "rgba(255,255,255,0.13)",
                                                    "direction": "direct",
                                                    "number-font-family": {
                                                        "family": "Open Sans",
                                                        "link": "<link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>"
                                                    },
                                                    "number-font-size": "51",
                                                    "number-font-color": "#ffffff",
                                                    "separator-margin": "23",
                                                    "separator-on": false,
                                                    "separator-text": ":",
                                                    "text-on": true,
                                                    "text-font-family": {
                                                        "family": "Open Sans",
                                                        "link": "<link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>"
                                                    },
                                                    "text-font-size": "15",
                                                    "text-font-color": "#ffffff"
                                                }
                                            },
                                            "designId": 8,
                                            "theme": "black",
                                            "width": 146,
                                            "height": 146
                                        });
                                        if (_k != null) l.run();
                                    };
                                    _t.onload = _f;
                                    _t.onreadystatechange = function() {
                                        if (_t.readyState == "loaded") _f(1);
                                    };
                                    var _h = document.head || document.getElementsByTagName("head")[0];
                                    _h.appendChild(_t);
                                }).call(this);
                            </script>
                        </div>
                        <div class='test floatRight'>
                            <script type="text/javascript">
                                (function() {
                                    var _id = "bd1ed18e034533c28369f280bb2cbf64";
                                    while (document.getElementById("timer" + _id)) _id = _id + "0";
                                    document.write("<div id='timer" + _id + "' style='min-width:146px;height:146px;'></div>");
                                    var _t = document.createElement("script");
                                    _t.src = "http://megatimer.ru/timer/timer.min.js";
                                    var _f = function(_k) {
                                        var l = new MegaTimer(_id, {
                                            "view": [0, 1, 0, 0],
                                            "type": {
                                                "currentType": "1",
                                                "params": {
                                                    "usertime": true,
                                                    "tz": "3",
                                                    "utc": 1504958400000
                                                }
                                            },
                                            "design": {
                                                "type": "circle",
                                                "params": {
                                                    "width": "11",
                                                    "radius": "61",
                                                    "line": "solid",
                                                    "line-color": "#36c4c5",
                                                    "background": "solid",
                                                    "background-color": "rgba(255,255,255,0.13)",
                                                    "direction": "direct",
                                                    "number-font-family": {
                                                        "family": "Open Sans",
                                                        "link": "<link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>"
                                                    },
                                                    "number-font-size": "51",
                                                    "number-font-color": "#ffffff",
                                                    "separator-margin": "23",
                                                    "separator-on": false,
                                                    "separator-text": ":",
                                                    "text-on": true,
                                                    "text-font-family": {
                                                        "family": "Open Sans",
                                                        "link": "<link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>"
                                                    },
                                                    "text-font-size": "15",
                                                    "text-font-color": "#ffffff"
                                                }
                                            },
                                            "designId": 8,
                                            "theme": "black",
                                            "width": 146,
                                            "height": 146
                                        });
                                        if (_k != null) l.run();
                                    };
                                    _t.onload = _f;
                                    _t.onreadystatechange = function() {
                                        if (_t.readyState == "loaded") _f(1);
                                    };
                                    var _h = document.head || document.getElementsByTagName("head")[0];
                                    _h.appendChild(_t);
                                }).call(this);
                            </script>
                        </div>
                    </div>
                    <div id="right">
                        <div class='test floatLeft'>
                            <script type="text/javascript">
                                (function() {
                                    var _id = "de605b63771375f71c00f9e2de2b2718";
                                    while (document.getElementById("timer" + _id)) _id = _id + "0";
                                    document.write("<div id='timer" + _id + "' style='min-width:146px;height:146px;'></div>");
                                    var _t = document.createElement("script");
                                    _t.src = "http://megatimer.ru/timer/timer.min.js";
                                    var _f = function(_k) {
                                        var l = new MegaTimer(_id, {
                                            "view": [0, 0, 1, 0],
                                            "type": {
                                                "currentType": "1",
                                                "params": {
                                                    "usertime": true,
                                                    "tz": "3",
                                                    "utc": 1504958400000
                                                }
                                            },
                                            "design": {
                                                "type": "circle",
                                                "params": {
                                                    "width": "11",
                                                    "radius": "61",
                                                    "line": "solid",
                                                    "line-color": "#36c4c5",
                                                    "background": "solid",
                                                    "background-color": "rgba(255,255,255,0.13)",
                                                    "direction": "direct",
                                                    "number-font-family": {
                                                        "family": "Open Sans",
                                                        "link": "<link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>"
                                                    },
                                                    "number-font-size": "51",
                                                    "number-font-color": "#ffffff",
                                                    "separator-margin": "23",
                                                    "separator-on": false,
                                                    "separator-text": ":",
                                                    "text-on": true,
                                                    "text-font-family": {
                                                        "family": "Open Sans",
                                                        "link": "<link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>"
                                                    },
                                                    "text-font-size": "15",
                                                    "text-font-color": "#ffffff"
                                                }
                                            },
                                            "designId": 8,
                                            "theme": "black",
                                            "width": 146,
                                            "height": 146
                                        });
                                        if (_k != null) l.run();
                                    };
                                    _t.onload = _f;
                                    _t.onreadystatechange = function() {
                                        if (_t.readyState == "loaded") _f(1);
                                    };
                                    var _h = document.head || document.getElementsByTagName("head")[0];
                                    _h.appendChild(_t);
                                }).call(this);
                            </script>
                        </div>
                        <div class='test floatRight'>
                            <script type="text/javascript">
                                (function() {
                                    var _id = "dc8b7dc8218ff1cc65d5679ffb76b355";
                                    while (document.getElementById("timer" + _id)) _id = _id + "0";
                                    document.write("<div id='timer" + _id + "' style='min-width:146px;height:146px;'></div>");
                                    var _t = document.createElement("script");
                                    _t.src = "http://megatimer.ru/timer/timer.min.js";
                                    var _f = function(_k) {
                                        var l = new MegaTimer(_id, {
                                            "view": [0, 0, 0, 1],
                                            "type": {
                                                "currentType": "1",
                                                "params": {
                                                    "usertime": true,
                                                    "tz": "3",
                                                    "utc": 1504958400000
                                                }
                                            },
                                            "design": {
                                                "type": "circle",
                                                "params": {
                                                    "width": "11",
                                                    "radius": "61",
                                                    "line": "solid",
                                                    "line-color": "#36c4c5",
                                                    "background": "solid",
                                                    "background-color": "rgba(255,255,255,0.13)",
                                                    "direction": "direct",
                                                    "number-font-family": {
                                                        "family": "Open Sans",
                                                        "link": "<link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>"
                                                    },
                                                    "number-font-size": "51",
                                                    "number-font-color": "#ffffff",
                                                    "separator-margin": "23",
                                                    "separator-on": false,
                                                    "separator-text": ":",
                                                    "text-on": true,
                                                    "text-font-family": {
                                                        "family": "Open Sans",
                                                        "link": "<link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>"
                                                    },
                                                    "text-font-size": "15",
                                                    "text-font-color": "#ffffff"
                                                }
                                            },
                                            "designId": 8,
                                            "theme": "black",
                                            "width": 146,
                                            "height": 146
                                        });
                                        if (_k != null) l.run();
                                    };
                                    _t.onload = _f;
                                    _t.onreadystatechange = function() {
                                        if (_t.readyState == "loaded") _f(1);
                                    };
                                    var _h = document.head || document.getElementsByTagName("head")[0];
                                    _h.appendChild(_t);
                                }).call(this);
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->

        <div class="overlay">
            <p style="color: white"> Международный лагерь по пляжному<br> волейболу в Италии</p>
        </div>
        <!--
        <button id="pause" type="button">Pause Video</button>
        <button id="play" type="button">Play Video</button>
        -->
        <video id="fon_video" loop muted autoplay poster="<?php echo(base_url());?>static/new_beach_volley/img/448387.jpg" class="fullscreen-bg__video">
            <source src="<?php echo(base_url());?>static/new_beach_volley/video/MIOM7238.mov" type="video/mp4">

        </video>

    </div>


</section>

<!-- About Section -->
<section id="about" class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>О нас</h1>
                <div>
                    <div class="cont">
                        <div class="content_text">SportFelix: ведущий спортивный туроператор, который организовывает спортивные мероприятия для взрослых и детей на Севере и Юге Италии. </br>
                            В этом году, мы рады пригласить Вас в лагерь по пляжному волейболу, в котором примут участие спортсмены из разных стран, а так же попробовать свои силы в одном из самых масштабных турниров по пляжному волейболу в мире.</br>
                            Наша команда всегда готова помочь подобрать для Вас наиболее выгодный вариант поездки в зависимости от Ваших предпочтений.</br>
                            Вы можете выбрать русскоговорящего тренера или тренера из Калифорнии. </br> Все тренера бывшие или действующие игроки по пляжному волейболу, с опытом работы с волейбольными группами, разных уровней игры и готовые передать Вам свой игровой опыт.</div>
                    </div>
                    <div class="cont">
                        <div class="slider-box">
                            <div class="slider">
                                <img src="<?php echo(base_url());?>static/new_beach_volley/img/448387.jpg" alt="" />
                                <img src="<?php echo(base_url());?>static/new_beach_volley/img/448387.jpg" alt="" />
                                <img src="<?php echo(base_url());?>static/new_beach_volley/img/448387.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sport Section -->
<section id="sport" class="sport-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Сборы для спортивных групп</h1>
                <div>
                    <div class="cont">
                        <div class="slider2-box">
                            <div class="slider2">
                                <img src="<?php echo(base_url());?>static/new_beach_volley/img/448387.jpg" alt="" />
                                <img src="<?php echo(base_url());?>static/new_beach_volley/img/448387.jpg" alt="" />
                                <img src="<?php echo(base_url());?>static/new_beach_volley/img/448387.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="cont">
                        <div class="content_text">SportFelix: ведущий спортивный туроператор, который организовывает спортивные мероприятия для взрослых и детей на Севере и Юге Италии. </br>
                            В этом году, мы рады пригласить Вас в лагерь по пляжному волейболу, в котором примут участие спортсмены из разных стран, а так же попробовать свои силы в одном из самых масштабных турниров по пляжному волейболу в мире.</br>
                            Наша команда всегда готова помочь подобрать для Вас наиболее выгодный вариант поездки в зависимости от Ваших предпочтений.</br>
                            Вы можете выбрать русскоговорящего тренера или тренера из Калифорнии. </br> Все тренера бывшие или действующие игроки по пляжному волейболу, с опытом работы с волейбольными группами, разных уровней игры и готовые передать Вам свой игровой опыт.</div>
                        <div class="wrap_button">
                            <button class="coffee_button">Подробнее</button>
                            <button class="coffee_button">Заявка</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Volley Section -->
<section id="volley" class="volley-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Лагеря по пляжному волейболу</h1>
                <div>
                    <div class="cont">
                        <div class="content_text">SportFelix: ведущий спортивный туроператор, который организовывает спортивные мероприятия для взрослых и детей на Севере и Юге Италии. </br>
                            В этом году, мы рады пригласить Вас в лагерь по пляжному волейболу, в котором примут участие спортсмены из разных стран, а так же попробовать свои силы в одном из самых масштабных турниров по пляжному волейболу в мире.</br>
                            Наша команда всегда готова помочь подобрать для Вас наиболее выгодный вариант поездки в зависимости от Ваших предпочтений.</br>
                            Вы можете выбрать русскоговорящего тренера или тренера из Калифорнии. </br> Все тренера бывшие или действующие игроки по пляжному волейболу, с опытом работы с волейбольными группами, разных уровней игры и готовые передать Вам свой игровой опыт.</div>
                        <div class="wrap_button">
                            <button class="coffee_button">Подробнее</button>
                            <button class="coffee_button">Заявка</button>
                        </div>
                    </div>
                    <div class="cont">
                        <div class="slider3-box">
                            <div class="slider3">
                                <img src="<?php echo(base_url());?>static/new_beach_volley/img/448387.jpg" alt="" />
                                <img src="<?php echo(base_url());?>static/new_beach_volley/img/448387.jpg" alt="" />
                                <img src="<?php echo(base_url());?>static/new_beach_volley/img/448387.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fitnes Section -->
<section id="fitnes" class="fitnes-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Фитнес</h1>
                <div>
                    <div class="cont">
                        <div class="slider4-box">
                            <div class="slider4">
                                <img src="<?php echo(base_url());?>static/new_beach_volley/img/448387.jpg" alt="" />
                                <img src="<?php echo(base_url());?>static/new_beach_volley/img/448387.jpg" alt="" />
                                <img src="<?php echo(base_url());?>static/new_beach_volley/img/448387.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="cont">
                        <div class="content_text">SportFelix: ведущий спортивный туроператор, который организовывает спортивные мероприятия для взрослых и детей на Севере и Юге Италии. </br>
                            В этом году, мы рады пригласить Вас в лагерь по пляжному волейболу, в котором примут участие спортсмены из разных стран, а так же попробовать свои силы в одном из самых масштабных турниров по пляжному волейболу в мире.</br>
                            Наша команда всегда готова помочь подобрать для Вас наиболее выгодный вариант поездки в зависимости от Ваших предпочтений.</br>
                            Вы можете выбрать русскоговорящего тренера или тренера из Калифорнии. </br> Все тренера бывшие или действующие игроки по пляжному волейболу, с опытом работы с волейбольными группами, разных уровней игры и готовые передать Вам свой игровой опыт.</div>
                        <div class="wrap_button">
                            <button class="coffee_button">Подробнее</button>
                            <button class="coffee_button">Заявка</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Свяжитесь с нами</h1>
                <div class="cont contact" style="min-width: 470px; /*color: white*/">
                    <h3>SPORTFELIX Sports Tourism Specialist</h3>
                    <p>Via Milano 2B, 30020 Marcon VE</p>
                    <p>Трошина Ольга</p>
                    <p>Email: tror.spb@gmail.com</p>
                </div>
                <div class="cont contact soc" style="/*color: white*/">
                    <p>Whatsapp: 0783619070</p>
                    <p>Viber: +33695301606</p>
                    <p>Skype: troshina1</p>
                </div>
                <button type="button" style="width: 200px; margin-top: 50px" class="coffee_button">Забронировать</button>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>SportFelix</h3>
                <p>© 2017 SportFelix. Designed and Developed by LauvaWeb</p>
            </div>
            <div class="col-md-4">
                <p class="social_networks">
                    <a href="https://www.facebook.com/olga.beachvolleycamp" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    <a href="https://fr.linkedin.com/in/olga-troshina-764954123" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/beachvolleymarathon/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://www.youtube.com/watch?v=Rlb1U0rQMPE/" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>
    </div>
</footer>


</body>
</html>

<script src="<?php echo(base_url());?>static/new_beach_volley/startbootstrap-scrolling-nav-gh-pages/js/jquery.js"></script>
<script src="<?php echo(base_url());?>static/new_beach_volley/js/slider.js"></script>
<script src="<?php echo(base_url());?>static/new_beach_volley/startbootstrap-scrolling-nav-gh-pages/js/bootstrap.min.js"></script>
<script src="<?php echo(base_url());?>static/new_beach_volley/startbootstrap-scrolling-nav-gh-pages/js/jquery.easing.min.js"></script>
<script src="<?php echo(base_url());?>static/new_beach_volley/startbootstrap-scrolling-nav-gh-pages/js/scrolling-nav.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        var timerId = setInterval(function() {
            var h = $('video').css('height');
            $('.overlay').css('height', h);
        });

        var vid = document.getElementById("fon_video");

        $('#pause').on("click", function(){
            vid.pause();
        });
        $('#play').on("click", function(){
            vid.play();
        });
    });
</script>
<script>
    /* When the user clicks on the button,
     toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>