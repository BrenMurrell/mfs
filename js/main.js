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
$(window).resize(function() {
    $('.hero').height(innerHeight - 96);
});
$('.page_item_has_children > a').on('click',function(event) {
    event.preventDefault();
    $(this).parent('li').toggleClass('open');
});
