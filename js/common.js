$('.orbit-switch').on('click', () => {
    if($('.footer-name-form').is(':hidden')){
        $('.footer-name-form').fadeIn();
        $('.footer-details').hide();
        $('.orbit-switch').find('img').attr('src','./images/switch.png')
    } else {
        $('.footer-name-form').hide();
        $('.footer-details').fadeIn();
        $('.orbit-switch').find('img').attr('src','./images/switch-2.png')
    }
})

$(document).ready(function(){
    $('.menu-icon').click(function(){
        $('body').addClass('open-menu');
    });
    
    $('.close-menu').click(function(){
        $('body').removeClass('open-menu');
    });
});