$(function() {
    var width=$('.slider-box').width();                     // Ширина слайдера.
    interval = 3000;                                    // Интервал смены слайдов.

    $('.slider img:last').clone().prependTo('.slider');     // Копия последнего слайда помещается в начало.
    $('.slider img').eq(1).clone().appendTo('.slider');     // Копия первого слайда помещается в конец.
    $('.slider').css('margin-left', -width);                // Контейнер .slider сдвигается влево на ширину одного слайда.
    setInterval('animation()',interval);                    // Запускается функция animation(), выполняющая смену слайдов.
});
function animation(){

    var margin = parseInt($('.slider').css('marginLeft'));  // Текущее смещение блока .slider
    width=$('.slider-box').width(),                     // Ширина слайдера.
        slidersAmount=$('.slider').children().length;       // Количество слайдов в слайдере.
    if(margin!=(-width*(slidersAmount-1)))                  // Если текущий слайд не последний,
    {
        margin=margin-width;                                  // то значение margin уменьшается на ширину слайда.
    }else{                                                  // Если показан последний слайд,
        $('.slider').css('margin-left', -width);              // то блок .slider возвращается в начальное положение,
        margin=-width*2;
    }
    $('.slider').animate({marginLeft:margin},1000);          // Блок .slider смещается влево на 1 слайд.
};


$(function() {
    var width=$('.slider2-box').width();
    interval = 3000;

    $('.slider2 img:last').clone().prependTo('.slider');
    $('.slider2 img').eq(1).clone().appendTo('.slider');
    $('.slider2').css('margin-left', -width);
    setInterval('animation2()',interval);
});
function animation2(){

    var margin = parseInt($('.slider2').css('marginLeft'));
    width=$('.slider2-box').width(),
        slidersAmount=$('.slider2').children().length;
    if(margin!=(-width*(slidersAmount-1)))
    {
        margin=margin-width;
    }else{
        $('.slider2').css('margin-left', -width);
        margin=-width*2;
    }
    $('.slider2').animate({marginLeft:margin},1000);
};

$(function() {
    var width=$('.slider3-box').width();
    interval = 3000;

    $('.slider3 img:last').clone().prependTo('.slider');
    $('.slider3 img').eq(1).clone().appendTo('.slider');
    $('.slider3').css('margin-left', -width);
    setInterval('animation3()',interval);
});
function animation3(){

    var margin = parseInt($('.slider3').css('marginLeft'));
    width=$('.slider3-box').width(),
        slidersAmount=$('.slider3').children().length;
    if(margin!=(-width*(slidersAmount-1)))
    {
        margin=margin-width;
    }else{
        $('.slider3').css('margin-left', -width);
        margin=-width*2;
    }
    $('.slider3').animate({marginLeft:margin},1000);
};

$(function() {
    var width=$('.slider4-box').width();
    interval = 3000;

    $('.slider4 img:last').clone().prependTo('.slider');
    $('.slider4 img').eq(1).clone().appendTo('.slider');
    $('.slider4').css('margin-left', -width);
    setInterval('animation4()',interval);
});
function animation4(){

    var margin = parseInt($('.slider4').css('marginLeft'));
    width=$('.slider4-box').width(),
        slidersAmount=$('.slider4').children().length;
    if(margin!=(-width*(slidersAmount-1)))
    {
        margin=margin-width;
    }else{
        $('.slider4').css('margin-left', -width);
        margin=-width*2;
    }
    $('.slider4').animate({marginLeft:margin},1000);
};