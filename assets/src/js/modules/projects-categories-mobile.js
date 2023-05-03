export default () => {
    $(window).on('DOMContentLoaded load resize', function (){
        let button_txt = $('.projects__filters-wrapper button.active').text();
        $('.projects__current-mobile').text(button_txt);
    });

    $('.projects__filters-wrapper').on('click', function (){
        $(this).toggleClass('insights__filters_full');
    });

    $('.filters__title, .link-underline').on('click', function (){
        $('.projects__current-mobile').text($(this).text());
    });
};
