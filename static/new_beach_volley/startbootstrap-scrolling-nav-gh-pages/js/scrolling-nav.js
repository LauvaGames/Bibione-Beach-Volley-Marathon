//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1200, 'easeInOutExpo');
        event.preventDefault();
    });
});

$(window).scroll(function() {
    if(document.documentElement.clientWidth < 1096) {
        $('div.navbar-collapse').addClass('collapsing').removeClass('collapse in').attr('aria-expanded', false);
    } else {
        $('div.navbar-collapse').removeClass('collapsed').attr('aria-expanded', false);
    }
});

