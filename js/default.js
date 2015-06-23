$(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('body').addClass("scrolled");
            $('body').removeClass("notScrolled");
            
        }
        else {
            $('body').removeClass("scrolled");
            $('body').addClass("notScrolled");
        }
    });
    
    $(window).ready(function () {
        $('body').addClass("notScrolled");
    });