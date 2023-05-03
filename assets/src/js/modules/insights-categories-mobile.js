export default () => {
    $(window).on('load resize', function (){
        $('.insights__filters_current-mobile').text($('.insights__filter.active').text());
    });

    $('.insights__filters').on('click', function (){
        $(this).toggleClass('insights__filters_full');
    });

    $('.insights__filter').on('click', function (){
        $('.insights__filters_current-mobile').text($(this).text());
    });
};
