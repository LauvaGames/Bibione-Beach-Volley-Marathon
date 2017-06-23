<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BVM Beach Volley Camp</title>
    <!-- jQuery -->
    <script type="text/javascript" src="<?php echo(base_url());?>static/form/js/jquery-1.10.2.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo(base_url());?>static/bootstrap/css/theme.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo(base_url());?>static/style.css" rel="stylesheet">
    <link href="<?php echo(base_url());?>static/lauva_styles.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.7/typicons.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo(base_url());?>static/assets/css/pushy.css">
    <link rel="stylesheet" href="<?php echo(base_url());?>static/assets/css/masonry.css">
    <link rel="stylesheet" href="<?php echo(base_url());?>static/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo(base_url());?>static/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo(base_url());?>static/assets/css/odometer-theme-default.css">

    <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>static/countdown/css/main.css">
    
    <style type="text/css">
                    
    </style>
    
    <script>
        window.odometerOptions = {
            selector: '.odometer',
            format: '(,ddd)', // Change how digit groups are formatted, and how many digits are shown after the decimal point
            duration: 13000, // Change how long the javascript expects the CSS animation to take
            theme: 'default'
        };
    </script>
</head>
<body class="">
<!-- Pushy Menu -->
<nav class="pushy pushy-left">
    <ul class="list-unstyled">
        <li><a href="#home">Главная</a></li>
        <li><a href="#feat">О нас</a></li>
        <li><a href="#about">Программа</a></li>
        <li><a href="#news">Тарифы</a></li>
        <li><a href="#history">Для групп</a></li>
        <li><a href="#photos">Галерея</a></li>
        <li><a href="#contact">Свяжитесь с нами</a></li>
        <li><a href="#reservez_maintenant">Забронировать</a></li>
    </ul>
</nav>

<!-- Site Overlay -->
<div class="site-overlay"></div>
<div id="containerCalc">
    <a id="click" class="btn btn-danger btn-lg" href="http://volley4fun.com/v0v4ik/index.php/main/full_screen_form">Онлайн калькулятор заказов <i style="padding-left: 3px" class="fa fa-arrow-circle-o-right"></i></a>
</div>
<header id="home">
    <div class="container-fluid">
        <!-- change the image in style.css to the class header .container-fluid [approximately row 50] -->
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-md-offset-8 col-xs-2 text-center" style="margin-left:91.666666666%">

                    <div class="menu-btn"><span class="hamburger">&#9776;</span></div>
                    <a href="index.html" id="lang"><p>FR</p></a>
                </div>
            </div>
            <div class="jumbotron">
                <h1 style="margin-bottom: 0.5em"><small>Международный лагерь по пляжному волейболу</small></br>
                    <strong>в Италии</strong></h1>
                <?php  $this->load->view('countdown'); ?>
                <p>с участием в одном из самых масштабных турниров по пляжному волейболу в мире.</p>
            </div>
        </div>
    </div>
</header>


<section id="feat">
    <div class="container">
        <div class="row features">
            <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="100ms">
                <span class="typcn typcn-pencil x3"></span>
                <h4>Кто мы?</h4>
                <p class="text">SportFelix : ведущий спортивный туроператор, который организовывает спортивные мероприятия для взрослых и детей на Севере и Юге Италии.
                    </br>В этом году, мы рады пригласить Вас в лагерь по пляжному волейболу, в котором примут участие спортсмены из разных стран, а так же попробовать свои силы в одном из самых масштабных турниров по пляжному волейболу в мире.</p>

            </div>
            <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="300ms">
                <span class="typcn typcn-camera-outline x3"></span>
                <h4>Команда</h4>
                <p class="text">Наша команда всегда готова помочь подобрать для Вас наиболее выгодный вариант поездки в зависимости от Ваших предпочтений.
                    </br>Вы можете выбрать русскоговорящего тренера или тренера из Калифорнии.
                    </br>Все тренера бывшие или действующие игроки по пляжному волейболу, с опытом работы с волейбольными  группами, разных уровней игры и готовые передать Вам свой игровой опыт.</p>
                <!--p class="#"><img src="images/olga.jpg" alt="" class="round"></p>---></div>
            <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="500ms">
                <span class="typcn typcn-bookmark x3"></span>
                <h4>Наши плюсы</h4>
                <p class="text">Три уровня игры: новичок, любитель, продвинутый.</br>
                    Комфортабельные аппартаменты в 50 метрах от моря и площадок.</br>
                    Участие в одном из самых больших турниров в мире в разных номинациях. </br> Водная прогулка от Бибионе до Венеции с русскоговорящим гидом + экскурсия по Венеции.
                    </br>Тренеры из Калифорнии или России.</br> Оплата: полная или частичная.</p>
            </div>
        </div>
    </div>
</section>
<section id="about" class="number wow fadeInUp" data-wow-delay="300ms">
    <!-- change the image in style.css to the class .number .container-fluid [approximately row 102] -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 opaline col-md-offset-6">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>Предварительная программа:</h3>
                            <h3> 13-22 мая: 9дней/10 ночей </h3>
                            <!--<h5>Pellentesque Cursus Amet Parturient Etiam</h5>--->
                            <p>13 мая, суббота: наконец то свершилось!
                                Мы рады приветствовать наших участников в аэропорту Венеции. </br>
                                14 мая, воскресенье: две тренировки с нашим замечательным тренером, знакомство с Bibione, дружеское "apero" для участников нашего лагеря.</p><p> 15 мая, понедельник: две тренировки, продолжаем знакомство с Bibione, на этот раз: велосипедная прогулка в Laguna di Bibione.<p/> <p> 16 мая, вторник: две тренировки.Пора подзарядиться энергией:посещение Спа комплекса Bibione Termae.<p/>
                            <p> 17 мая, среда: 2 тренировки, разбор видео, барбекю.<p/><p> 18 мая, четверг: спаринг матчи с игроками из Швеции, долгожданная поездка в Венецию.<p/>
                            <p>19-20-21 мая: участие в турнире в номинациях: 2*2,3*3,4*4. Spritz Party на пляже.<p/><p> 22 мая, понедельник: трансфер до аэропорта Венеции.
                            <p>
                        </div>
                    </div>
                    <!--
                    <div class="row text-center">
                        <div class="col-md-4 boxes col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-1 col-md-offset-1 col-sm-6 wow fadeInUp">
                            <h5>Туристический пакет<p/>Все включено:</h5>
                            <h6>От :</h6>
                            <h3> от 39,501 рублей</h3>
                        </div>
                        <div class="col-md-4 boxes col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-2 col-md-offset-2 col-sm-6 wow fadeInUp" data-wow-delay="300ms">
                            <h5>Базовый набор :</h5> <h6>От :</h6>
                            <h3> от 22.050 рублей </h3>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<section id="news" class="blog wow fadeInUp" data-wow-delay="300ms">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2> Для всех участников лагеря</h2>
                <h2> 250 евро с человека: </h2>
                <p>Продуманная тренировочная программа с тренером с учетом уровня игры и подготовки.
                <p>Участие в Beach Volley Marathon 2017 в двух номинациях на выбор: 2*2 Ж или М, 3*3 Ж или М, 4*4 Микст.</p>
                <p>Безлимитное использование тренировочных кортов.</p>
                <p>Бесплатная парковка</p>


                <h2>Описание апартаментов:</h2>
                <p> Апартаменты Terme T1(мах 4 человека): один раскладной диван в гостиной на 2 человек, комната с одной двуспальной кроватью на 2 человек,телевизор, бронированная дверь, лифт, сейф, телевизор, бассейн, сад, балкон,туалет, ванная, кухня в гостиной. На одну квартиру выдаются два пляжных зонта, шезлонг. Вода, газ, кондиционер, отопление входят в стоимость.</p>
                <p> Апартаменты Terme T2 (мах 6 человек): один раскладной диван в гостиной на 2 человек, комната с одной двуспальной кроватью на 2 человек, комната с двумя раздельная кроватями, лифт, сейф, телевизор,бассейн,сад, балкон, туалет, ванная, кухня в гостиной. На одну квартиру выдаются два пляжных зонта, шезлонг. Вода, газ, кондиционер, отопление входят в стоимость.</p>


                <h2> Дополнительные услуги: </h2> постельное белье: 8 евро/ неделя полотенца: 7 евро/неделя, аренда детской кроватки: 20 евро неделя,аренда велосипеда: 7 евро/неделя
                Дети до 3 лет: проживание бесплатное.

                <h2> Пример подсчета: </h2>
                250 евро - базовая цена.К этой цене ней Вы прибавляете стоимость проживания в зависимости от Ваших предпочтений, для этого мы просим заполнить заявочную форму или связаться с нами. </p>



                <h2> Перелет оплачивается отдельно</h2>
                <p> Москва-Венеция : от 250 евро (15 750 рублей) </p>
                <p> Спб-Венеция: от 290 евро (18 290 рублей) </p>
                <p> Хельсинки-Венеция: от 190 евро (12 600 рублей) </p>
                <p> *Обратите внимание, что цены могут меняться в зависимости от даты бронирования </p>
                <p></p>
                <h2> Дополнительные услуги на Ваш выбор:</h2>
                <p> Экскурсия в Венецию с русскоговорящим гидом: 45 евро</p>

                <p>Трансфер от аэропорта Венеции и обратно: от 15 до 40 евро, в зависимости от кол-ва человек в группе.  </p>
                <p>Завтрак и ужин в ресторане за 9 дней : 250 евро </p>
                <p>Участие в двух номинациях Beach Volley Marathon 2017  на выбор : 80 евро </p>


                <a class="btn btn-danger btn-lg" href="pricebibionecamp.pdf">Скачать прайслист<i class="fa fa-arrow-circle-o-right"></i></a>
            </div>
            <div class="col-md-5">
                <a href="#">
                    <img src="<?php echo(base_url());?>static/images/insta.jpg" alt="" class="img-responsive">
                </a>
            </div>
        </div>
        <!-- Contact form -->
        <div class="contact_form" id="reservez_maintenant">

        <!-- Lauva calc -->
        <h2>Отправить заявку</h2>



            <h2>Забронировать</h2>

            <form method="post" action="<?php echo(base_url());?>static/form/php/submit.php" accept-charset="utf-8">

                <div>
                    <p>Имя:</p>
                    <input type="text" name="name" id="name" required="required" />
                </div>

                <div>
                    <p>Фамилия:</p>
                    <input type="text" name="lastname" id="lastname" required="required" />
                </div>

                <div>
                    <p>Дата рождения:</p>
                    <input type="text" name="birth_date" id="birth_date" placeholder="В виде 09.09.1999" required="required" />
                </div>

                <div>
                    <p>Место рождения:</p>
                    <input type="text" name="birth_place" id="birth_place" />
                </div>

                <div>
                    <p>Уровень игры:</p>
                    <select name="proficiency" class="required">
                        <option value="" selected='selected'>- - -</option>
                        <option value="Начинающий">Начинающий</option>
                        <option value="Любитель">Любитель</option>
                        <option value="Продвинутый">Продвинутый</option>
                    </select>
                </div>

                <div>
                    <p>Пол:</p>
                    <span class="radio_botton">
				<label><input type="radio" name="sex" value="женский" required="required" /><span>женский</span></label>
				<label><input type="radio" name="sex" value="мужской" /><span>мужской</span></label>
				</span>
                </div>

                <div>
                    <p>Страна:</p>
                    <select name="country" size="1">
                        <option value="" selected='selected'>- - -</option>
                        <option value="Австралия">Австралия</option>
                        <option value="Австрия">Австрия</option>
                        <option value="Азербайджан">Азербайджан</option>
                        <option value="Албания">Албания</option>
                        <option value="Алжир">Алжир</option>
                        <option value="Ангола">Ангола</option>
                        <option value="Андорра">Андорра</option>
                        <option value="Антигуа и Барбуда">Антигуа и Барбуда</option>
                        <option value="Аргентина">Аргентина</option>
                        <option value="Армения">Армения</option>
                        <option value="Афганистан">Афганистан</option>
                        <option value="Багамские острова">Багамские острова</option>
                        <option value="Бангладеш">Бангладеш</option>
                        <option value="Барбадос">Барбадос</option>
                        <option value="Бахрейн">Бахрейн</option>
                        <option value="Белоруссия">Белоруссия</option>
                        <option value="Белиз">Белиз</option>
                        <option value="Бельгия">Бельгия</option>
                        <option value="Бенин">Бенин</option>
                        <option value="Болгария">Болгария</option>
                        <option value="Боливия">Боливия</option>
                        <option value="Босния и Герцеговина">Босния и Герцеговина</option>
                        <option value="Ботсвана">Ботсвана</option>
                        <option value="Бразилия">Бразилия</option>
                        <option value="Бруней">Бруней</option>
                        <option value="Буркина-Фасо">Буркина-Фасо</option>
                        <option value="Бурунди">Бурунди</option>
                        <option value="Бутан">Бутан</option>
                        <option value="Вануату">Вануату</option>
                        <option value="Великобритания">Великобритания</option>
                        <option value="Венгрия">Венгрия</option>
                        <option value="Венесуэла">Венесуэла</option>
                        <option value="Восточный Тимор">Восточный Тимор</option>
                        <option value="Вьетнам">Вьетнам</option>
                        <option value="Габон">Габон</option>
                        <option value="Гаити">Гаити</option>
                        <option value="Гайана">Гайана</option>
                        <option value="Гамбия">Гамбия</option>
                        <option value="Гана">Гана</option>
                        <option value="Гватемала">Гватемала</option>
                        <option value="Гвинея">Гвинея</option>
                        <option value="Гвинея-Бисау">Гвинея-Бисау</option>
                        <option value="Германия">Германия</option>
                        <option value="Гондурас">Гондурас</option>
                        <option value="Гренада">Гренада</option>
                        <option value="Греция">Греция</option>
                        <option value="Грузия">Грузия</option>
                        <option value="Дания">Дания</option>
                        <option value="Джибути">Джибути</option>
                        <option value="Доминика">Доминика</option>
                        <option value="Доминиканская Республика">Доминиканская Республика</option>
                        <option value="Египет">Египет</option>
                        <option value="Замбия">Замбия</option>
                        <option value="Зимбабве">Зимбабве</option>
                        <option value="Израиль">Израиль</option>
                        <option value="Индия">Индия</option>
                        <option value="Индонезия">Индонезия</option>
                        <option value="Иордания">Иордания</option>
                        <option value="Ирак">Ирак</option>
                        <option value="Иран">Иран</option>
                        <option value="Ирландия">Ирландия</option>
                        <option value="Исландия">Исландия</option>
                        <option value="Испания">Испания</option>
                        <option value="Италия">Италия</option>
                        <option value="Йемен">Йемен</option>
                        <option value="Кабо-Верде">Кабо-Верде</option>
                        <option value="Казахстан">Казахстан</option>
                        <option value="Камбоджа">Камбоджа</option>
                        <option value="Камерун">Камерун</option>
                        <option value="Канада">Канада</option>
                        <option value="Катар">Катар</option>
                        <option value="Кения">Кения</option>
                        <option value="Кипр">Кипр</option>
                        <option value="Киргизия">Киргизия</option>
                        <option value="Кирибати">Кирибати</option>
                        <option value="Китай">Китай</option>
                        <option value="Колумбия">Колумбия</option>
                        <option value="Коморы">Коморы</option>
                        <option value="Республика Конго">Республика Конго</option>
                        <option value="Демократическая Республика Конго">Демократическая Республика Конго</option>
                        <option value="КНДР">КНДР</option>
                        <option value="Южная Корея">Южная Корея</option>
                        <option value="Коста-Рика">Коста-Рика</option>
                        <option value="Кот-д'Ивуар">Кот-д'Ивуар</option>
                        <option value="Куба">Куба</option>
                        <option value="Кувейт">Кувейт</option>
                        <option value="Лаос">Лаос</option>
                        <option value="Латвия">Латвия</option>
                        <option value="Лесото">Лесото</option>
                        <option value="Либерия">Либерия</option>
                        <option value="Ливан">Ливан</option>
                        <option value="Ливия">Ливия</option>
                        <option value="Литва">Литва</option>
                        <option value="Лихтенштейн">Лихтенштейн</option>
                        <option value="Люксембург">Люксембург</option>
                        <option value="Маврикий">Маврикий</option>
                        <option value="Мавритания">Мавритания</option>
                        <option value="Мадагаскар">Мадагаскар</option>
                        <option value="Македония">Македония</option>
                        <option value="Малави">Малави</option>
                        <option value="Малайзия">Малайзия</option>
                        <option value="Мали">Мали</option>
                        <option value="Мальдивы">Мальдивы</option>
                        <option value="Мальта">Мальта</option>
                        <option value="Марокко">Марокко</option>
                        <option value="Маршалловы острова">Маршалловы острова</option>
                        <option value="Мексика">Мексика</option>
                        <option value="Мозамбик">Мозамбик</option>
                        <option value="Молдавия">Молдавия</option>
                        <option value="Монако">Монако</option>
                        <option value="Монголия">Монголия</option>
                        <option value="Мьянма">Мьянма</option>
                        <option value="Намибия">Намибия</option>
                        <option value="Науру">Науру</option>
                        <option value="Непал">Непал</option>
                        <option value="Нигер">Нигер</option>
                        <option value="Нигерия">Нигерия</option>
                        <option value="Нидерланды">Нидерланды</option>
                        <option value="Никарагуа">Никарагуа</option>
                        <option value="Новая Зеландия">Новая Зеландия</option>
                        <option value="Норвегия">Норвегия</option>
                        <option value="ОАЭ">ОАЭ</option>
                        <option value="Оман">Оман</option>
                        <option value="Пакистан">Пакистан</option>
                        <option value="Палау">Палау</option>
                        <option value="Панама">Панама</option>
                        <option value="Папуа-Новая Гвинея">Папуа-Новая Гвинея</option>
                        <option value="Парагвай">Парагвай</option>
                        <option value="Перу">Перу</option>
                        <option value="Польша">Польша</option>
                        <option value="Португалия">Португалия</option>
                        <option value="Россия">Россия</option>
                        <option value="Руанда">Руанда</option>
                        <option value="Румыния">Румыния</option>
                        <option value="Сальвадор">Сальвадор</option>
                        <option value="Самоа">Самоа</option>
                        <option value="Сан-Марино">Сан-Марино</option>
                        <option value="Сан-Томе и Принсипи">Сан-Томе и Принсипи</option>
                        <option value="Саудовская Аравия">Саудовская Аравия</option>
                        <option value="Свазиленд">Свазиленд</option>
                        <option value="Сейшельские острова">Сейшельские острова</option>
                        <option value="Сенегал">Сенегал</option>
                        <option value="Сент-Винсент и Гренадины">Сент-Винсент и Гренадины</option>
                        <option value="Сент-Китс и Невис">Сент-Китс и Невис</option>
                        <option value="Сент-Люсия">Сент-Люсия</option>
                        <option value="Сербия">Сербия</option>
                        <option value="Сингапур">Сингапур</option>
                        <option value="Сирия">Сирия</option>
                        <option value="Словакия">Словакия</option>
                        <option value="Словения">Словения</option>
                        <option value="США">США</option>
                        <option value="Соломоновы Острова">Соломоновы Острова</option>
                        <option value="Сомали">Сомали</option>
                        <option value="Судан">Судан</option>
                        <option value="Суринам">Суринам</option>
                        <option value="Сьерра-Леоне">Сьерра-Леоне</option>
                        <option value="Таджикистан">Таджикистан</option>
                        <option value="Таиланд">Таиланд</option>
                        <option value="Танзания">Танзания</option>
                        <option value="Того">Того</option>
                        <option value="Тонга">Тонга</option>
                        <option value="Тринидад и Тобаго">Тринидад и Тобаго</option>
                        <option value="Тувалу">Тувалу</option>
                        <option value="Тунис">Тунис</option>
                        <option value="Туркмения">Туркмения</option>
                        <option value="Турция">Турция</option>
                        <option value="Уганда">Уганда</option>
                        <option value="Узбекистан">Узбекистан</option>
                        <option value="Украина">Украина</option>
                        <option value="Уругвай">Уругвай</option>
                        <option value="Федеративные Штаты Микронезии">Федеративные Штаты Микронезии</option>
                        <option value="Фиджи">Фиджи</option>
                        <option value="Филиппины">Филиппины</option>
                        <option value="Финляндия">Финляндия</option>
                        <option value="Франция">Франция</option>
                        <option value="Хорватия">Хорватия</option>
                        <option value="Центральноафриканская Республика">Центральноафриканская Республика</option>
                        <option value="Чад">Чад</option>
                        <option value="Черногория">Черногория</option>
                        <option value="Чехия">Чехия</option>
                        <option value="Чили">Чили</option>
                        <option value="Швейцария">Швейцария</option>
                        <option value="Швеция">Швеция</option>
                        <option value="Шри-Ланка">Шри-Ланка</option>
                        <option value="Эквадор">Эквадор</option>
                        <option value="Экваториальная Гвинея">Экваториальная Гвинея</option>
                        <option value="Эритрея">Эритрея</option>
                        <option value="Эстония">Эстония</option>
                        <option value="Эфиопия">Эфиопия</option>
                        <option value="ЮАР">ЮАР</option>
                        <option value="Южный Судан">Южный Судан</option>
                        <option value="Ямайка">Ямайка</option>
                        <option value="Япония">Япония</option>
                    </select>
                </div>

                <div>
                    <p>Экскурсия в Венецию:</p>
                    <span class="radio_botton">
				<label><input type="radio" name="visit" value="да" /><span>да</span></label>
				<label><input type="radio" name="visit" value="нет" /><span>нет</span></label>
				</span>
                </div>

                <div>
                    <p>Размещение в апартаментах на:</p>
                    <select name="accommodation">
                        <option value="" selected='selected'>- - -</option>
                        <option value="2 человека">2 человека</option>
                        <option value="4 человека">4 человека</option>
                        <option value="5 человек">5 человек</option>
                    </select>
                </div>

                <div>
                    <p>Оплата:</p>
                    <span class="radio_botton">
				<label><input type="radio" name="payment" value="сразу" /><span>сразу</span></label>
				<label><input type="radio" name="payment" value="в рассрочку" /><span>в рассрочку</span></label>
				</span>
                </div>

                <div>
                    <p>E-mail:</p>
                    <input type="text" name="contacts" />
                </div>

                <div>
                    <p>Сообщение:</p>
                    <textarea name="message" rows="8" cols="20" placeholder="Дополнительная информация, которую вы хотели бы сообщить"></textarea>
                </div>

                <div>
                    <input type="submit" name="submit" value="Отправить" class="submit" />
                </div>

            </form>
        </div>
        <!-- Contact form -->
    </div>
</section>
<section id="history" class="story wow fadeInUp" data-wow-delay="300ms">
    <!-- change the image in style.css to the class .story .container-fluid [approximately row 141] -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 opaline">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <p class="lead"><h3>Для групп:</h3></p>
                            <p><i>Мы организовываем не только индивидуальные поездки, но и групповые туры. Если Вы заинтересованы провести свой отпуск в веселой спортивной компании, для Вас будут действовать специальные цены. <b> Не теряйте время ! Свяжитесь с нами уже сейчас!</b></i></p>
                            <p>Откройте для себя пляжный волейбол - спорт, который для многих стал стилем жизни!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="photos" class="gallery wow fadeInUp" data-wow-delay="300ms">
    <div class="container">
        <div class="row">
            <div class="masonry image-gallery">
                <div class="grid-sizer"></div>
                <div class="gutter-sizer"></div>
                <div class="item item-width2">
                    <a href="<?php echo(base_url());?>static/images/swim1.jpg">
                        <img src="<?php echo(base_url());?>static/images/swim1.jpg" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="<?php echo(base_url());?>static/images/img10.jpg">
                        <img src="<?php echo(base_url());?>static/images/img10.jpg" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="<?php echo(base_url());?>static/images/img11.jpg">
                        <img src="<?php echo(base_url());?>static/images/img11.jpg" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="<?php echo(base_url());?>static/images/img12.jpg">
                        <img src="<?php echo(base_url());?>static/images/img12.jpg" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="<?php echo(base_url());?>static/images/img13.jpg">
                        <img src="<?php echo(base_url());?>static/images/img13.jpg" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="<?php echo(base_url());?>static/images/img14.jpg">
                        <img src="<?php echo(base_url());?>static/images/img14.jpg" alt="" />
                    </a>
                </div>
                <div class="item item-width2">
                    <a href="<?php echo(base_url());?>static/images/img15.jpg">
                        <img src="<?php echo(base_url());?>static/images/img15.jpg" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="<?php echo(base_url());?>static/images/img16.jpg">
                        <img src="<?php echo(base_url());?>static/images/img16.jpg" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="<?php echo(base_url());?>static/images/img17.jpg">
                        <img src="<?php echo(base_url());?>static/images/img17.jpg" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--- <section class="clients wow fadeInUp" data-wow-delay="300ms">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <img src="images/logo-sample-01.jpg" class="img-responsive" />
                    </div>
                    <div class="col-md-2">
                        <img src="images/logo-sample-02.jpg" class="img-responsive" />
                    </div>
                    <div class="col-md-2">
                        <img src="images/logo-sample-03.png" class="img-responsive" />
                    </div>
                    <div class="col-md-2">
                        <img src="images/logo-sample-04.jpg" class="img-responsive" />
                    </div>
                    <div class="col-md-2">
                        <img src="images/logo-sample-05.jpg" class="img-responsive" />
                    </div>
                    <div class="col-md-2">
                        <img src="images/logo-sample-06.png" class="img-responsive" />
                    </div>
                </div>
            </div>
        </section>--->
<section id="contact" class="prefooter wow fadeInUp" data-wow-delay="300ms">
    <!-- change the image in style.css to the class .prefooter .container-fluid [approximately row 154] -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Свяжитесь с нами <br> SPORTFELIX Sports Tourism Specialist</h3>
                    <p>Via Milano 2B, 30020 Marcon VE</p>
                    <p>Трошина Ольга</p>
                    <p>Email: tror.spb@gmail.com</p>
                    <p>Whatsapp: 0783619070</p>
                    <p>Viber: +33695301606</p>
                    <p>Skype: troshina1</p>

                    <div class="row">
                        <div class="col-md-6">
                            <!--        <input type="submit" target="form.html" class="form-control" placeholder="Your Email Here...">
                                     <br> -->

                            <!--	<input type="text" class="form-control" placeholder="Your Email Here...">
                                <br>
                                <input type="text" class="form-control" placeholder="Your Email Here...">
                                <br>
                                <input type="text" class="form-control" placeholder="Your Email Here...">
                                <br>
                                <input type="text" class="form-control" placeholder="Your Email Here...">
                                <br>
                                <input type="text" class="form-control" placeholder="Your Email Here...">
                                <br>--->
                            <p><a href="#reservez_maintenant" <button type="button" class="btn btn-danger">Забронировать</button></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>SportFelix</h3>
                <p>© 2016 SportFelix. Designed and Developed by <a target="_blank" href="http://www.themeinthebox.com">ThemeintheBox.com</a></p>
            </div>
            <div class="col-md-4">
                <p class="text-right social"><a href="https://www.facebook.com/olga.beachvolleycamp" target="_blank"><i class="typcn social_network_icon">&nbsp;</i></a>
                    <a href="https://fr.linkedin.com/in/olga-troshina-764954123" target="_blank"><i class="typcn social_network_icon">&nbsp;</i></a>
                    <a href="https://www.instagram.com/beachvolleymarathon/" target="_blank"><i class="typcn social_network_icon">&nbsp;</i></a><a href="https://www.youtube.com/watch?v=Rlb1U0rQMPE/" target="_blank"><i class="typcn social_network_icon">&nbsp;</i></a>
                    <a href="https://www.youtube.com/watch?v=Rlb1U0rQMPE/" target="_blank"><i class="typcn social_network_icon">&nbsp;</i></a>

                </p></div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo(base_url());?>static/assets/js/jquery.min.js"></script>
<script src="<?php echo(base_url());?>static/bootstrap/js/bootstrap.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/js/bootstrap-scrollspy.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo(base_url());?>static/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="http://masonry.desandro.com/masonry.pkgd.js"></script>
<script src="<?php echo(base_url());?>static/assets/js/masonry.js"></script>
<script src="<?php echo(base_url());?>static/assets/js/pushy.min.js"></script>
<script src="<?php echo(base_url());?>static/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo(base_url());?>static/assets/js/wow.min.js"></script>
<script src="<?php echo(base_url());?>static/assets/js/scripts.js"></script>
<script src="<?php echo(base_url());?>static/assets/js/odometer.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter41897204 = new Ya.Metrika({
                    id:41897204,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/41897204" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-34344036-1', 'auto');
    ga('send', 'pageview');

</script>

<!-- Contact form -->
<!-- Select -->
<script src='<?php echo(base_url());?>static/form/select/libs/jqueryUI/jquery-ui.js'></script>
<script src='<?php echo(base_url());?>static/form/select/src/javascripts/jquery.selectBoxIt.min.js'></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('select').selectBoxIt({autoWidth: false});
    });
</script>
<!-- Selectivizr -->
<script type="text/javascript" src="<?php echo(base_url());?>static/form/js/selectivizr.js"></script>
<!--[if (gte IE 6)&(lte IE 8)]>
<script type="text/javascript" src="<?php echo(base_url());?>static/form/js/selectivizr.js"></script>
<![endif]-->
<!-- Form validation -->
<script src="<?php echo(base_url());?>static/form/js/jquery-validation/jquery.validate.min.js"></script>
<script>
    $(document).ready(function () {
        var lang = $('html').attr('lang');
        if(lang == 'ru'){
            $('form').validate({
                ignore: '',
                errorElement: 'div',
                errorPlacement: function(error, element) {
                    error.insertAfter(element.parent().closest('div').find('p'));
                },
                rules: {
                    name: {
                        required: true
                    },
                    lastname: {
                        required: true
                    },
                    birth_date: {
                        required: true
                    },
                    proficiency: {
                        required: true
                    },
                    sex: {
                        required: true
                    },
                    country: {
                        required: true
                    },
                    visit: {
                        required: true
                    },
                    accommodation: {
                        required: true
                    },
                    payment: {
                        required: true
                    },
                    contacts: {
                        required: true
                    }
                },
                messages: {
                    name: '<span>*</span> Это поле необходимо заполнить',
                    lastname: '<span>*</span> Это поле необходимо заполнить',
                    birth_date: '<span>*</span> Это поле необходимо заполнить',
                    proficiency: '<span>*</span> Это поле необходимо заполнить',
                    sex: '<span>*</span> Это поле необходимо заполнить',
                    country: '<span>*</span> Это поле необходимо заполнить',
                    visit: '<span>*</span> Это поле необходимо заполнить',
                    accommodation: '<span>*</span> Это поле необходимо заполнить',
                    payment: '<span>*</span> Это поле необходимо заполнить',
                    contacts: '<span>*</span> Это поле необходимо заполнить'
                }
            });
        }else if(lang == 'fr'){
            $('form').validate({
                ignore: '',
                errorElement: 'div',
                errorPlacement: function(error, element) {
                    error.insertAfter(element.parent().closest('div').find('p'));
                },
                rules: {
                    name: {
                        required: true
                    },
                    lastname: {
                        required: true
                    },
                    birth_date: {
                        required: true
                    },
                    proficiency: {
                        required: true
                    },
                    sex: {
                        required: true
                    },
                    country: {
                        required: true
                    },
                    visit: {
                        required: true
                    },
                    accommodation: {
                        required: true
                    },
                    payment: {
                        required: true
                    },
                    contacts: {
                        required: true
                    }
                },
                messages: {
                    name: '<span>*</span> Ce champ est obligatoire',
                    lastname: '<span>*</span> Ce champ est obligatoire',
                    birth_date: '<span>*</span> Ce champ est obligatoire',
                    proficiency: '<span>*</span> Ce champ est obligatoire',
                    sex: '<span>*</span> Ce champ est obligatoire',
                    country: '<span>*</span> Ce champ est obligatoire',
                    visit: '<span>*</span> Ce champ est obligatoire',
                    accommodation: '<span>*</span> Ce champ est obligatoire',
                    payment: '<span>*</span> Ce champ est obligatoire',
                    contacts: '<span>*</span> Ce champ est obligatoire'
                }
            });
        }
    });
</script>
