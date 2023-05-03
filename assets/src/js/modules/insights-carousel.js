export default () => {
    $(window).on( 'load resize', function () {
        if ( !$('.insights__previews').hasClass('slick-initialized') ){
            $('.insights__previews').slick({
                mobileFirst: true,
                arrows: false,
                dots: true,
                speed: 1000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: "unslick",
                    }
                ]
            });
        }
    });
};
