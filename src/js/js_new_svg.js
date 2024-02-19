$(function () {
    $('[data-code]').mouseenter(function () {
        $('.district h5').html($(this).attr('data-title'));
        $('.district').show();
    });

    $('[data-code]').mouseleave(function () {
        $('.district').hide();
    });
});

$('.map').on('click', '.modal_open', function () {
    $('.modal_regions').toggleClass('active');
    $('.modal_header_regions h4').html($(this).attr('data-title'));
    let id = $(this).attr('data-code');
    if ($(`.modal_body_regions #${id}`).text() !== '' ) {
        $('.district').hide();
        $('.modal_body_regions div').hide();
        $(`.modal_body_regions div#${event.target.dataset.code}`).show();
    }
});

 $('.modal_regions').on('click', '#modal_close_new_orders', function(){
    $('.modal_regions').toggleClass('active');
 });

