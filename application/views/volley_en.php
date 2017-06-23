<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="bibione, лагерь, тренировки по волейболу, bibione beach, волейбол тренировка, спортивный лагерь, lignano sabbiadoro, спортивный туризм, отдых туризм, пляжный волейбол 2017, фитнес, регби, фитнес сайт, фитнес цены">
    <meta name="author" content="LauvaWeb">
    <meta name="description" content="Спортивный туризм для всех: пляжный волейбол, фитнес, регби. Лагеря по пляжному волейболу.">
    <title>Sport tourism for everyone</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

    <link href="<?php echo(base_url());?>static/new_beach_volley/startbootstrap-scrolling-nav-gh-pages/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo(base_url());?>static/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.7/typicons.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo(base_url());?>static/new_beach_volley/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo(base_url());?>static/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo(base_url());?>static/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/amazing_slider/sliderengine/amazingslider-1.css">
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/amazing_slider/sliderengine/amazingslider-6.css">
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/countdown/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/lauva_styles.css">

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
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a class="page-scroll" href="#page-top">Main</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">About us</a>
                </li>
                <li>
                    <a class="page-scroll" href="#sport">Camps for sport groups</a>
                </li>
                <li>
                    <a class="page-scroll" href="#volley">Beach Volley camps</a>
                </li>
                <li>
                    <a class="page-scroll" href="#fitness">Fitness</a>
                </li>
                <li>
                    <a class="page-scroll" href="#regby">Rugby</a>
                </li>
                <li>
                    <a class="page-scroll" href="#children">For kids </a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contacts</a>
                </li>
                <li class="dropdown" id="select_lang">
                    <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Language
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="http://volley4fun.com/v0v4ik/index.php/main/newvolley">RU</a></li>
                        <li><a href="http://volley4fun.com/v0v4ik/index.php/main/newvolley_en">EN</a></li>
                        <li><a href="http://volley4fun.com/v0v4ik/index.php/main/newvolley_fr">FR</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="navbar navbar-default navbar-fixed-top" style="display:none;">
    <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>

<div id="containerCalc">
    <a id="click" class="btn btn-danger btn-lg" href="http://volley4fun.com/v0v4ik/index.php/main/full_screen_form_en">Online calculator <i style="padding-left: 3px" class="fa fa-arrow-circle-o-right"></i></a>
</div>
<!-- Intro Section -->
<section id="intro" class="intro-section">
    <div class="fullscreen-bg">
        <div class="overlay">
            <h1 id="title"><strong>Sport tourism for everyone:<br> Beach Volley<br> Fitness  <br> Rugby </strong></h1>
            <p id="subtitle">The next upcoming event</p>
            <?php  $this->load->view('countdown_en'); ?>
        </div>

        <video id="fon_video" loop muted autoplay poster="<?php echo(base_url());?>static/new_beach_volley/img/poster.jpg" class="fullscreen-bg__video">
            <source src="<?php echo(base_url());?>static/new_beach_volley/video/MIOM7238.mov" type="video/mp4">
        </video>

    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section" >
    <div class="container">
        <div class="row features">
            <div class="col-md-4 text-center wow bounceInUp" data-wow-delay="0.4s">
                <span class="icon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                <h4>About us</h4>
                <p class="text">SportSpirit is a tour operator and a sport school that is organizing a sport events of beach volley, fitness and rugby.
                    We work with groups of adults and kids in the area of Italy, Spain and France.
                    This year we are glad to invite you to take part in Beach Volley camps for adults, kids tournament and a Rugby festival.
                </p>

            </div>
            <div class="col-md-4 text-center wow bounceInUp" data-wow-delay="0.8s">
                <span class="icon"><i class="fa fa-handshake-o" aria-hidden="true"></i></span>
                <h4>Team</h4>
                <p class="text">Our team is always ready to find you the best solution for your sports holidays based on your requests, budget and the time you`d like to spend on vacation.
                    All our coaches are professionals with a large experience of playing and coaching.
                </p>
                <!--p class="#"><img src="images/olga.jpg" alt="" class="round"></p>---></div>
            <div class="col-md-4 text-center wow bounceInUp" data-wow-delay="1.2s">
                <span class="icon"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span>
                <h4>Our benefits</h4>
                <p class="text">
                <ul style="font-family: 'Open Sans', sans-serif; font-size: 16px; text-align: justify; line-height: 2.028571429;">
                    <li style="margin-bottom: 10px">Different levels of physical preparation of our participants (from beginner to advanced)</li>
                    <li style="margin-bottom: 10px">Comfortable apartments close to the event area (tournament or camp)</li>
                    <li style="margin-bottom: 10px">Reasonable prices</li>
                    <li style="margin-bottom: 10px">Individual approach to every client</li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Sport Section -->
<section id="sport" class="sport-section wow bounceInUp" data-wow-delay="1s">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 opaline col-md-offset-6">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 info">
                            <h3><strong>Camps for sports group:</strong></h3>
                            <!--<h5>Pellentesque Cursus Amet Parturient Etiam</h5>--->
                            <p style="font-size: 18px">If you`re looking for a nice place to prepare your team for the upcoming season, you`re on the right page. </p>
                                <p>We work with kids and adults groups. Depending on your free time, budget and preferences we will find a best solution for your group. <br>Type of sport: football, rugby, sport of athletics</p>
                            <h3> Upcoming event:</h3>
                            <div class="event_day">5-15 August, Bibione (Venice)</div>
                            <button class="contact_btn" data-toggle="modal" data-target="#contactFormSport"> Ask you question </button>
                            <button class="accommodation_btn" data-toggle="modal" data-target="#accommodation_sport_modal">Type of accommodation</button>
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
        <!--  style="font-weight: 500;" -->
        <h2><strong>Beach Volley camps </strong></h2>
        <div class="cont">
            <div id="rotator">
                <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:500px;margin:0px 0px 44px;">
                    <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                        <ul class="amazingslider-slides" style="display:none;">
                            <li><a href="<?php echo(base_url());?>static/amazing_slider/images/6kLLz18_EDg-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/6kLLz18_EDg.jpg" alt="Лагерь по пляжному волейболу. Bibione, Venice" data-duration="3000" /></a>
                            </li>
                            <li><a href="<?php echo(base_url());?>static/amazing_slider/images/9bQHSghfrtY-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/9bQHSghfrtY.jpg" alt="Лагерь по пляжному волейболу. Bibione, Venice"/></a>
                            </li>
                            <li><a href="<?php echo(base_url());?>static/amazing_slider/images/CNVzwYPv5lw-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/CNVzwYPv5lw.jpg" alt="Лагерь по пляжному волейболу. Bibione, Venice"/></a>
                            </li>
                            <li><a href="<?php echo(base_url());?>static/amazing_slider/images/-cOg5Q_CHXM-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/-cOg5Q_CHXM.jpg" alt="Лагерь по пляжному волейболу. Bibione, Venice"/></a>
                            </li>
                            <li><a href="<?php echo(base_url());?>static/amazing_slider/images/IMG_0076-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/IMG_0076.jpg" alt="Лагерь по пляжному волейболу. Bibione, Venice"/></a>
                            </li>
                            <li><a href="<?php echo(base_url());?>static/amazing_slider/images/IMG_0088-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/IMG_0088.jpg" alt="Лагерь по пляжному волейболу. Bibione, Venice"/></a>
                            </li>
                            <li><a href="<?php echo(base_url());?>static/amazing_slider/images/IMG_0124-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/IMG_0124.jpg" alt="Лагерь по пляжному волейболу. Bibione, Venice"/></a>
                            </li>
                            <li><a href="<?php echo(base_url());?>static/amazing_slider/images/IMG_0179-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/IMG_0179.jpg" alt="Лагерь по пляжному волейболу. Bibione, Venice"/></a>
                            </li>
                            <li><a href="<?php echo(base_url());?>static/amazing_slider/images/iOCuOq2c40k-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/iOCuOq2c40k.jpg" alt="Лагерь по пляжному волейболу. Bibione, Venice"/></a>
                            </li>
                            <li><a href="<?php echo(base_url());?>static/amazing_slider/images/KYb8W2kRRuM-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/KYb8W2kRRuM.jpg" alt="Лагерь по пляжному волейболу. Bibione, Venice"/></a>
                            </li>
                            <li><a href="<?php echo(base_url());?>static/amazing_slider/images/OPkQpbSGLGI-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/OPkQpbSGLGI.jpg" alt="Лагерь по пляжному волейболу. Bibione, Venice"/></a>
                            </li>
                            <li><a href="<?php echo(base_url());?>static/amazing_slider/images/pBIOhr41xu4-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/pBIOhr41xu4.jpg" alt="Лагерь по пляжному волейболу. Bibione, Venice"/></a>
                            </li>
                            <li><a href="<?php echo(base_url());?>static/amazing_slider/images/SrCjOL3xas8-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/SrCjOL3xas8.jpg" alt="Лагерь по пляжному волейболу. Bibione, Venice"/></a>
                            </li>
                            <li><a href="<?php echo(base_url());?>static/amazing_slider/images/t7MBlrcURSI-lightbox.jpg" class="html5lightbox"><img src="<?php echo(base_url());?>static/amazing_slider/images/t7MBlrcURSI.jpg" alt="Лагерь по пляжному волейболу. Bibione, Venice"/></a>
                            </li>
                        </ul>
                        <ul class="amazingslider-thumbnails" style="display:none;">
                            <li><img src="<?php echo(base_url());?>static/amazing_slider/images/6kLLz18_EDg-tn.jpg" /></li>
                            <li><img src="<?php echo(base_url());?>static/amazing_slider/images/9bQHSghfrtY-tn.jpg" /></li>
                            <li><img src="<?php echo(base_url());?>static/amazing_slider/images/CNVzwYPv5lw-tn.jpg" /></li>
                            <li><img src="<?php echo(base_url());?>static/amazing_slider/images/-cOg5Q_CHXM-tn.jpg" /></li>
                            <li><img src="<?php echo(base_url());?>static/amazing_slider/images/IMG_0076-tn.jpg" /></li>
                            <li><img src="<?php echo(base_url());?>static/amazing_slider/images/IMG_0088-tn.jpg" /></li>
                            <li><img src="<?php echo(base_url());?>static/amazing_slider/images/IMG_0124-tn.jpg" /></li>
                            <li><img src="<?php echo(base_url());?>static/amazing_slider/images/IMG_0179-tn.jpg" /></li>
                            <li><img src="<?php echo(base_url());?>static/amazing_slider/images/iOCuOq2c40k-tn.jpg" /></li>
                            <li><img src="<?php echo(base_url());?>static/amazing_slider/images/KYb8W2kRRuM-tn.jpg" /></li>
                            <li><img src="<?php echo(base_url());?>static/amazing_slider/images/OPkQpbSGLGI-tn.jpg" /></li>
                            <li><img src="<?php echo(base_url());?>static/amazing_slider/images/pBIOhr41xu4-tn.jpg" /></li>
                            <li><img src="<?php echo(base_url());?>static/amazing_slider/images/SrCjOL3xas8-tn.jpg" /></li>
                            <li><img src="<?php echo(base_url());?>static/amazing_slider/images/t7MBlrcURSI-tn.jpg" /></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="cont info" style="display: block;">
            <p>
                We love Beach Volley and sun!<br>
                Our participants are divided into groups depending on their level of play.<br>
                It doesn’t matter if you are traveling by yourself or with a group of friends who do not play beach volley, we`ll always find a solution for your player partner.<br>
                Who could participate in our camps:
            </p>
                <ul style="font-size: 18px">
                    <li>People who have been always dreaming to learn how to play beach volley but have never had the chance to start</li>
                    <li>Players who want to improve their physical and volleyball skills</li>
                    <li>People who prefer active sport holidays instead of lying on the beach all day long</li>
                </ul>
            <p>
                The main concept of our camp is to make people meet each other, have fun and share the same passion- beach volley!<br>
                By joining our group you will have an excellent opportunity - not just to have trainings but also to participate in the words largest Beach Volley Marathon 2017!
            </p>
            <h3> Upcoming event:</h3>
            <div class="event_day">9-18 сентября, Bibione (Venice)</div>
            <button class="contact_btn" data-toggle="modal" data-target="#contactFormVolley"> Ask you question </button>
            <button class="accommodation_btn" data-toggle="modal" data-target="#accommodation_volley_modal"> Type of accommodation </button>
        </div>
    </div>
</section>

<!-- Fitness Section -->
<section id="fitness" class="fitness-section wow bounceInUp" data-wow-delay="0.5s">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 opaline">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 info">
                            <h3><strong>Fitness </strong></h3>
                            <!--<h5>Pellentesque Cursus Amet Parturient Etiam</h5>--->
                            <p style="font-size:18px; "> Beach fitness is a new way to spend your holidays dancing, meeting people and having fun on the beach!<br>
                                Beach Fitness is a new idea of vacation based on active rest with no age limits and skill boundaries. It is an authentic Italian summer convention that gathers every year thousands of fans from all over Europe (3,500 people last year). It is a meeting point that enables people to socialize and make new friends: you can take part in Bibione events for your interest in fitness, but also for new experience and to know new people. Beach Fitness is a fun activity-based vacations.
                            </p>
                            <!--
                            <ul>
                                <li><a style="font-size:18px; color:white" href="https://www.youtube.com/watch?v=L0o8ZwNT_mg">функциональный тренинг</a></li>
                                <li><a style="font-size:18px; color:white" href="https://www.youtube.com/watch?v=hH0k5hr03e4">world jumping</a></li>
                                <li><a style="font-size:18px; color:white" href="https://www.youtube.com/watch?v=mlVrkiCoKkg">кроссфит</a></li>
                                <li><a style="font-size:18px; color:white" href="https://www.youtube.com/watch?v=qBy0xZPoWzM">аква фитнес</a></li>
                                <li><a style="font-size:18px; color:white" href="https://www.youtube.com/watch?v=b8Vysc0A46E">пилатес</a></li>
                                <li><a style="font-size:18px; color:white" href="https://www.youtube.com/watch?v=rINsf2Rvkys">танцы и зумба</a></li>
                            </ul>
                            -->
                            <h3> Upcoming event:</h3>
                            <div class="event_day">9-18 сентября, Bibione (Venice)</div>
                            <button class="contact_btn" data-toggle="modal" data-target="#contactFormFitness"> Ask you question </button>
                            <button class="accommodation_btn" data-toggle="modal" data-target="#accommodation_fitness_modal"> Type of accommodation </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Regby Section -->
<section id="regby" class="regby-section">
    <div class="container">
        <h2><strong>Rugby </strong></h2>
        <div class="cont info regby_cont">
            <p>
                Аre you a rugby fun and you`re looking for a nice vacation? <br>
                A wonderful opportunity is waiting for you on the beautiful Mallorca beach <br>
                Rugby clinics with an ex-rugby stars, training camps and a great international tournament at the end of the week for amateur and professional sportsmen. All of these for a reasonable price and individual work with every client <br>
                If you`re a rugby club, society, amateur club, contact us and we'll find the best solution for you
            </p>
            <h3> Upcoming event:</h3>
            <div class="event_day">24 -25 июня, Bibione (Venice)</div>
            <button class="contact_btn" data-toggle="modal" data-target="#contactFormRegby"> Ask you question </button>
            <button class="accommodation_btn" data-toggle="modal" data-target="#accommodation_regby_modal"> Type of accommodation </button>
        </div>
        <div class="cont regby_video_cont">
            <div id="rotator2" style="padding-left: 30px">
                <iframe src="https://player.vimeo.com/video/195995718?title=0&byline=0&portrait=0" width="660" height="359" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<section id="children" class="children-section" style="padding-top: 50px ">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 opaline col-md-offset-6">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 info">
                            <h3><strong>For kids</strong></h3>
                            <p style="font-size:18px; "> Beach Ball is a famous beach volley tournament for people 11-20 years old . It was set up with the help of The Italian Volleyball Federation and Kinder+Sport. This sports event takes place in Bibione (Venice airoport) every year on July 1-8th. There are 5 days of competitions with one free day for sightseeing Venice or a training session day with coaches from California. You'll get a 7-day full board stay for 350 euros (transport charges are not included). This tournament is the best solution for young players to spend their holidays and to play their favorite game. For more information, please fill in the contact form.
                            </p>
                            <h3> Upcoming event:</h3>
                            <div class="event_day">1-8 июля, Bibione (Venice)</div>
                            <button class="contact_btn" data-toggle="modal" data-target="#contactFormRegby"> Ask you question </button>
                            <button class="accommodation_btn" data-toggle="modal" data-target="#accommodation_children_modal"> Type of accommodation </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="reviews" class="reviews-section wow bounceInUp">
    <div class="container">
        <h2 style="text-align: center; color: white">Clients opinions</h2>
        <div class="cont review_cont">
            <div class="review">
                <div class="commentator">
                    <div class="comment_photo reviewer1">

                    </div>
                    <div class="comment_name">
                        Владимир Капацын
                    </div>
                </div>
                <div class="review_text">
                    Это была одна из лучших моих поездок. Большое спасибо организаторам за, то что они гармонично слели спортивную состовляющую и курортный отдых.
                    Я прекрасно провел время, замечательно отдохнул и завел себе новых друзей. Осенью снова к вам.
                    Bibione the best!
                </div>
            </div>
            <div class="review">
                <div class="commentator">
                    <div class="comment_photo reviewer2">
                    </div>
                    <div class="comment_name">
                        Лиза Клюка
                    </div>
                </div>
                <div class="review_text">
                    Спасибо организатору Ольге за предоставленную возможность принять участие в лагере по пляжному волейболу, за организацию и просто за отлично проведенное время.Это было замечательно!Надеюсь принять участие в следующем выезде в сентябре!
                </div>
            </div>
        </div>
        <div class="cont review_cont">
            <div class="review">
                <div class="commentator">
                    <div class="comment_photo reviewer3">
                    </div>
                    <div class="comment_name">
                        Роман Эгель
                    </div>
                </div>
                <div class="review_text">
                    Spesso mi trovo a parlare e a descrivere cos'è Bibione. Sport e divertimento rendono Bibione evento unico che offre sempre nuove emozioni. Gli appassionati di questo sport devono assolutamente partecipare. Fantastico!!!
                </div>
            </div>
            <div class="review">
                <div class="commentator">
                    <div class="comment_photo reviewer4">
                    </div>
                    <div class="comment_name">
                        Giulia Momoli
                    </div>
                </div>
                <div class="review_text">
                    Credo che ogni appassionato di Beach Volley, professionista e non, debba passare per Bibione almeno una volta nella vita, anche perché so per certo che non sarebbe l'unica! La BVM offre uno spettacolo davvero unico e suggestivo.
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h2>Блог</h2>
        <div class="cont">
            <script type="text/javascript" src="//vk.com/js/api/openapi.js?146"></script>

            <!-- VK Widget -->
            <div id="vk_groups"></div>
            <script type="text/javascript">
                VK.Widgets.Group("vk_groups", {mode: 4, wide: 1, width: "560", height: "360"}, 78614268);
            </script>
        </div>
        <div class="cont">
            <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/Wb1W4kCDigM?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container-fluid">
        <div class="container">
            <div class="row" style="padding-top: 20px; padding-bottom: 50px">
                <div class="col-md-7 opaline" style="background-color: transparent">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 info" style="min-width: 520px">
                            <h3 style="margin-bottom: 20px">Contact us</h3>
                            <p>Via Milano 2B, 30020 Marcon VE</p>
                            <p>Трошина Ольга</p>
                            <p><i style='font-size:30px' class="fa fa-envelope-o" aria-hidden="true"></i> tror.spb@gmail.com</p>
                            <p><i style='font-size:35px' class="fa fa-whatsapp" aria-hidden="true"></i> 0783619070</p>
                            <p><i style='font-size:35px' class="fa fa-skype" aria-hidden="true"></i> troshina1</p>
                            <p><a style="text-decoration:none; color:white" href="https://www.facebook.com/olga.beachvolleycamp" target="_blank"><i style='font-size:35px;color:white' class="fa fa-facebook-official" aria-hidden="true"></i> https://www.facebook.com/olga.beachvolleycamp</a></p>
                            <p><a style="text-decoration:none; color:white" href="https://fr.linkedin.com/in/olga-troshina-764954123" target="_blank"><i style='font-size:35px;color:white' class="fa fa-linkedin-square" aria-hidden="true"></i> https://fr.linkedin.com/in/olga-troshina-764954123</a></p>
                            <p><a style="text-decoration:none; color:white" href="https://vk.com/id4336118" target="_blank"><i style='font-size:35px; color:white' class="fa fa-vk" aria-hidden="true"></i> https://vk.com/club78614268</a></p>

                        </div>
                    </div>
                </div>
                <div class="col-md-5" style="margin-bottom: 65px;">
                    <div id="map"></div>
                    <script>
                        function initMap() {
                            var uluru = {lat: 45.633, lng: 13.061};
                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 12,
                                center: uluru
                            });
                            var marker = new google.maps.Marker({
                                position: uluru,
                                map: map
                            });
                            //45.633679, 13.061321
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h3>SportSpirit</h3>
                <p>© 2017 SportSpirit. Designed and Developed by LauvaWeb</p>
            </div>
            <div class="col-lg-4">
                <p class="social_networks">
                    <a href="https://www.facebook.com/olga.beachvolleycamp" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    <a href="https://fr.linkedin.com/in/olga-troshina-764954123" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    <a href="https://vk.com/id4336118" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/beachvolleymarathon/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://www.youtube.com/watch?v=Rlb1U0rQMPE/" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>

                </p>
            </div>
        </div>
    </div>
</footer>


<div id="contactFormSport" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Оставить заявку</h4>
            </div>
            <div class="modal-body">
                <div class="field-wrap">
                    <label>
                        Ваше имя<span class="req">*</span>
                    </label>
                    <input required class="username" name="username"/>
                </div>
                <div class="field-wrap">
                    <label>
                        Email <span class="req">*</span>
                    </label>
                    <input required type="email" class="email" name="email" />
                </div>
                <div class="field-wrap">
                    <label class="active highlight">
                        Телефон: (999)999-9999<span class="req">*</span>
                    </label>
                    <input required type=text class="phone" name="phone" />
                </div>
                <div class="field-wrap">
                    <label>
                        Коментарий<span class="req">*</span>
                    </label>
                    <textarea class="comment" name="comment" rows="6"></textarea>
                </div>
                <div class="field-wrap" style="display: flex; justify-content: center">
                    <button id='submit_contactSport_form' type="button" class="btn btn-danger" data-dismiss="modal">Отправить</button>
                </div>

            </div>
        </div>

    </div>
</div>
<div id="contactFormVolley" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Оставить заявку</h4>
            </div>
            <div class="modal-body">
                <div class="field-wrap">
                    <label>
                        Ваше имя<span class="req">*</span>
                    </label>
                    <input required class="username" name="username"/>
                </div>
                <div class="field-wrap">
                    <label>
                        Email <span class="req">*</span>
                    </label>
                    <input required type="email" class="email" name="email" />
                </div>
                <div class="field-wrap">
                    <label class="active highlight">
                        Телефон: (999)999-9999<span class="req">*</span>
                    </label>
                    <input required type=text class="phone" name="phone" />
                </div>
                <div class="field-wrap">
                    <label>
                        Коментарий<span class="req">*</span>
                    </label>
                    <textarea class="comment" name="comment" rows="6"></textarea>
                </div>
                <div class="field-wrap" style="display: flex; justify-content: center">
                    <button id='submit_contactSport_form' type="button" data-dismiss="modal" class="btn btn-danger">Отправить</button>
                </div>

            </div>
        </div>

    </div>
</div>
<div id="contactFormFitness" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Оставить заявку</h4>
            </div>
            <div class="modal-body">
                <div class="field-wrap">
                    <label>
                        Ваше имя<span class="req">*</span>
                    </label>
                    <input required class="username" name="username"/>
                </div>
                <div class="field-wrap">
                    <label>
                        Email <span class="req">*</span>
                    </label>
                    <input required type="email" class="email" name="email" />
                </div>
                <div class="field-wrap">
                    <label class="active highlight">
                        Телефон: (999)999-9999<span class="req">*</span>
                    </label>
                    <input required type=text class="phone" name="phone" />
                </div>
                <div class="field-wrap">
                    <label>
                        Коментарий<span class="req">*</span>
                    </label>
                    <textarea class="comment" name="comment" rows="6"></textarea>
                </div>
                <div class="field-wrap" style="display: flex; justify-content: center">
                    <button id='submit_contactSport_form' type="button" data-dismiss="modal" class="btn btn-danger">Отправить</button>
                </div>

            </div>
        </div>

    </div>
</div>
<div id="contactFormRegby" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Оставить заявку</h4>
            </div>
            <div class="modal-body">
                <div class="field-wrap">
                    <label>
                        Ваше имя<span class="req">*</span>
                    </label>
                    <input required class="username" name="username"/>
                </div>
                <div class="field-wrap">
                    <label>
                        Email <span class="req">*</span>
                    </label>
                    <input required type="email" class="email" name="email" />
                </div>
                <div class="field-wrap">
                    <label class="active highlight">
                        Телефон: (999)999-9999<span class="req">*</span>
                    </label>
                    <input required type=text class="phone" name="phone" />
                </div>
                <div class="field-wrap">
                    <label>
                        Коментарий<span class="req">*</span>
                    </label>
                    <textarea class="comment" name="comment" rows="6"></textarea>
                </div>
                <div class="field-wrap" style="display: flex; justify-content: center">
                    <button id='submit_contactSport_form' type="button" class="btn btn-danger" data-dismiss="modal">Отправить</button>
                </div>

            </div>
        </div>

    </div>
</div>

<div id="accommodation_sport_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Type of accommodation</h4>
            </div>
            <div class="modal-body">
                <div id="jssor_4" style="position:relative;margin:0 auto;top:0px;left:0px;width:568px;height:300px;overflow:hidden;visibility:hidden;">
                    <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        <div style="position:absolute;display:block;background:url('http://volley4fun.com/v0v4ik/static/images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                    </div>
                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:568px;height:300px;overflow:hidden;">
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_regby_1.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Hotel Belle vue club Mallorca</div>
                        </div>
                        <div data-p="112.50">
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_regby_2.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Hotel Belle vue club Mallorca</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_regby_3.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Hotel Belle vue club Mallorca</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_regby_4.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Hotel Belle vue club Mallorca</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_regby_5.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Hotel Belle vue club Mallorca</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_regby_6.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Hotel Belle vue club Mallorca</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/sport_slider1.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rafa Nadal Centre</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/sport_slider2.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rafa Nadal Centre</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/sport_slider3.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rafa Nadal Centre</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/sport_slider4.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rafa Nadal Centre</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/sport_slider5.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rafa Nadal Centre</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/sport_slider6.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rafa Nadal Centre</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/sport_slider7.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rafa Nadal Centre</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/sport_slider8.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rafa Nadal Centre</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/sport_slider9.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rafa Nadal Centre</div>
                        </div>
                    </div>
                    <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
                    <span data-u="arrowright" class="jssora02r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
                </div>

                <!--
                <div id="slider-wrap">
                    <div id="slider">
                        <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                            <img src="<?php echo(base_url());?>static/amazing_slider/images/slider_regby_1.jpg"/>
                        </div>
                        <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                            <img src="<?php echo(base_url());?>static/amazing_slider/images/slider_regby_2.jpg"/>
                        </div>
                        <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                            <img src="<?php echo(base_url());?>static/amazing_slider/images/slider_regby_3.jpg"/>
                        </div>
                        <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                            <img src="<?php echo(base_url());?>static/amazing_slider/images/slider_regby_4.jpg"/>
                        </div>
                        <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                            <img src="<?php echo(base_url());?>static/amazing_slider/images/slider_regby_5.jpg"/>
                        </div>
                        <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                            <img src="<?php echo(base_url());?>static/amazing_slider/images/slider_regby_6.jpg"/>
                        </div>
                        <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                            <img src="<?php echo(base_url());?>static/amazing_slider/images/sport_slider1.jpg"/>
                        </div>
                        <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                            <img src="<?php echo(base_url());?>static/amazing_slider/images/sport_slider2.jpg"/>
                        </div>
                        <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                            <img src="<?php echo(base_url());?>static/amazing_slider/images/sport_slider3.jpg"/>
                        </div>
                        <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                            <img src="<?php echo(base_url());?>static/amazing_slider/images/sport_slider4.jpg"/>
                        </div>
                        <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                            <img src="<?php echo(base_url());?>static/amazing_slider/images/sport_slider5.jpg"/>
                        </div>
                        <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                            <img src="<?php echo(base_url());?>static/amazing_slider/images/sport_slider6.jpg"/>
                        </div>
                        <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                            <img src="<?php echo(base_url());?>static/amazing_slider/images/sport_slider7.jpg"/>
                        </div>
                        <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                            <img src="<?php echo(base_url());?>static/amazing_slider/images/sport_slider8.jpg"/>
                        </div>
                        <div class="slide" style="position: absolute; top: 0px; left: 0px; display: block">
                            <img src="<?php echo(base_url());?>static/amazing_slider/images/sport_slider9.jpg"/>
                        </div>
                    </div>

                </div>-->
            </div>
        </div>
    </div>
</div>
<div id="accommodation_volley_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Type of accommodation</h4>
            </div>
            <div class="modal-body">
                <div id="jssor_3" style="position:relative;margin:0 auto;top:0px;left:0px;width:568px;height:300px;overflow:hidden;visibility:hidden;">
                    <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        <div style="position:absolute;display:block;background:url('http://volley4fun.com/v0v4ik/static/images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                    </div>
                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:568px;height:300px;overflow:hidden;">
                        <div>
                            <p style="margin-bottom: 10px; padding: 0 5px"> 9 сентября - трансфер аэропорт Венеции- Бибионе. <br>
                                10-11-12-13-14 сентября - тренировочные дни (тренировки по 2 раза в день). <br>
                                15-16-17 сентября - участие в Beach Volley Marathon, в категориях 2*2, 3*3, 4*4. В зависимости от Вашего уровня игры, по решению тренерского состава, каждый участник будет распределен по командам. <br>
                                18 сентября - день отъезда. <br>
                                <b>Пример тренировочного дня:</b> <br>
                                9:30 - тренировка мужской группы <br>
                                11:30 - тренировка жеской группы <br>
                                с 13:30 до 16:00 свободное время, обед, солнечные ванны на крыше у бассейна <br>
                                16:00 - вторая тренировка мужской группы <br>
                                17:30- вторая тренировка женской группы, товарищеские игры с игроками из других стран <br>
                                19:00 до 0:00 - свободное время, ужин, отличное время в компании друзей, прогулка, аперо у бассейна, видео- разбор игр с тренером.</p>
                            <!--<div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Программа</div>-->
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley1.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza delle Terme</div>
                        </div>
                        <div data-p="112.50">
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley2.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza delle Terme</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley3.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza delle Terme</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley4.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza delle Terme</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley5.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza delle Terme</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley6.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza delle Terme</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley7.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza Azzuro</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley8.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza Azzuro</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley9.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza Azzuro</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley10.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza Azzuro</div>
                        </div>
                    </div>
                    <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
                    <span data-u="arrowright" class="jssora02r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="accommodation_fitness_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Type of accommodation</h4>
            </div>
            <div class="modal-body">
                <div id="jssor_2" style="position:relative;margin:0 auto;top:0px;left:0px;width:568px;height:300px;overflow:hidden;visibility:hidden;">
                    <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        <div style="position:absolute;display:block;background:url('http://volley4fun.com/v0v4ik/static/images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                    </div>
                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:568px;height:300px;overflow:hidden;">
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley1.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza delle Terme</div>
                        </div>
                        <div data-p="112.50">
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley2.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza delle Terme</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley3.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza delle Terme</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley4.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza delle Terme</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley5.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza delle Terme</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley6.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza delle Terme</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley7.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza Azzuro</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley8.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza Azzuro</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley9.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza Azzuro</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_volley10.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Rezidenza Azzuro</div>
                        </div>
                    </div>
                    <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
                    <span data-u="arrowright" class="jssora02r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="accommodation_regby_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Type of accommodation</h4>
            </div>
            <div class="modal-body">
                <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:568px;height:300px;overflow:hidden;visibility:hidden;">
                    <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        <div style="position:absolute;display:block;background:url('http://volley4fun.com/v0v4ik/static/images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                    </div>
                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:568px;height:300px;overflow:hidden;">
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_regby_1.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Hotel Belle vue club Mallorca</div>
                        </div>
                        <div data-p="112.50">
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_regby_2.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Hotel Belle vue club Mallorca</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_regby_3.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Hotel Belle vue club Mallorca</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_regby_4.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Hotel Belle vue club Mallorca</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_regby_5.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Hotel Belle vue club Mallorca</div>
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo(base_url());?>static/amazing_slider/images/slider_regby_6.jpg" />
                            <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">Hotel Belle vue club Mallorca</div>
                        </div>
                    </div>
                    <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
                    <span data-u="arrowright" class="jssora02r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
                </div>
            </div>
        </div>

    </div>
</div>
<div id="accommodation_children_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Hotel Belle vue club Mallorca & Rafa Nadal Centre</h4>
            </div>
            <div class="modal-body">
                <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/Pzhwf6wDF2k?list=PLdwBqQIpqmA1A_bc9cMK0kb7M_QJEwMIH?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
            </div>
        </div>
    </div>
</div>








</body>
</html>
<!--<script src="<?php echo(base_url());?>static/amazing_slider/sliderengine/jquery.js"></script>-->

<script src="<?php echo(base_url());?>static/new_beach_volley/startbootstrap-scrolling-nav-gh-pages/js/jquery.js"></script>
<script src="http://code.createjs.com/easeljs-0.6.1.min.js"></script>
<script src="<?php echo(base_url());?>static/new_beach_volley/js/slider2.js"></script>
<script src="<?php echo(base_url());?>static/new_beach_volley/js/slider3.js"></script>
<script src="<?php echo(base_url());?>static/js/contact.js"></script>
<script src="<?php echo(base_url());?>static/js/jssor.slider-24.1.5.min.js"></script>
<script src="<?php echo(base_url());?>static/WOW-master/dist/wow.min.js"></script>
<script src="<?php echo(base_url());?>static/new_beach_volley/startbootstrap-scrolling-nav-gh-pages/js/bootstrap.min.js"></script>
<script src="<?php echo(base_url());?>static/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<script src="<?php echo(base_url());?>static/new_beach_volley/startbootstrap-scrolling-nav-gh-pages/js/jquery.easing.min.js"></script>
<script src="<?php echo(base_url());?>static/new_beach_volley/startbootstrap-scrolling-nav-gh-pages/js/scrolling-nav.js"></script>
<script src="<?php echo(base_url());?>static/amazing_slider/sliderengine/amazingslider.js"></script>
<script src="<?php echo(base_url());?>static/amazing_slider/sliderengine/initslider-6.js"></script>
<script src="<?php echo(base_url());?>static/amazing_slider/sliderengine/initslider-1.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9oBfk1eUi3IMLq7APVsSRxk3eE9ys6w4&callback=initMap"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var timerId = setInterval(function() {
            var h = $('video').css('height');
            $('.overlay').css('height', h);
        });
    });
</script>
<script>
    new WOW().init();
</script>
<script type="text/javascript">jssor_1_slider_init();</script>
<script type="text/javascript">jssor_2_slider_init();</script>
<script type="text/javascript">jssor_3_slider_init();</script>
<script type="text/javascript">jssor_4_slider_init();</script>
