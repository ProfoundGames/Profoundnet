$( document ).ready(function() {
    
    $('.contentContainer').click(function(){
        $('.menu').addClass('hide');
        $('.header').removeClass('show');
    });
    
    if(window.self === window.top){
        $alert();
    }
    
});