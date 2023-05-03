export default () => {
    $('.design-team__carousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
        speed: 1000,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true
                }
            }
        ]
    });
};
