import {gsap} from "gsap/dist/gsap";
export default () => {
    $('.fade-content').each(function() {
        gsap.set($(this), {opacity: 1});
    });
    /*$(window).scroll(function() {
        $('.fade-content').each(function() {
            var position = $(this).offset().top;
            var windowTop = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (position < windowTop + windowHeight) {
                gsap.to($(this), {
                    duration: 1.4,
                    opacity: 1,
                    ease: 'power4.easeInOut'
                });
            } else {
                gsap.to($(this), {
                    duration: 1.4,
                    opacity: 0,
                    ease: 'power4.easeInOut'
                });
            }
        });
    });*/
};
