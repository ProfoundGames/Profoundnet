$(window).scroll(function () {
        if ($(this).scrollTop() > 20) {
            $('body').addClass("scrolled");
            $('.meTxt').addClass("hide");
            $('body').removeClass("notScrolled");
            $('body').addClass("scrolled");
            
        }
        else {
            $('body').removeClass("scrolled");
            $('.meTxt').removeClass("hide");
            $('body').addClass("notScrolled");
            $('body').removeClass("scrolled");
        }
    });
    
    $(window).ready(function () {
        $('body').addClass("notScrolled");
    });