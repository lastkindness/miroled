export default () => {
    $('.home-projects__carousel').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: false,
        arrows: true,
        speed: 1000,
        responsive: [
            {
                breakpoint: 800,
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
