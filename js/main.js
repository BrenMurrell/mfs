$(function () {
    $('.fa-bars').on('click',function(event) {
        event.preventDefault();
        //alert('boom');
        $(this).siblings('ul').toggleClass('open');
    })
    $('.hero').height(innerHeight - 96);
});
$(window).load(function() {
    $('body').addClass('loaded');
});
