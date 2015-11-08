$(function () {
    $('.fa-bars').on('click',function(event) {
        event.preventDefault();
        //alert('boom');
        $(this).siblings('ul').toggleClass('open');
    })
});
