import {gsap} from "gsap/dist/gsap";

export default () => {
    const body = $('body');
    var dwidth = $(window).width();
    var dheight = $(window).height();
    const headerNav = $('.header__nav');
    if(dheight <= 500) {
        $(body).addClass('small-menu');
    } else {
        $(body).removeClass('small-menu');
    }
    if (dwidth <= 1024) {
        mobileMenu();
    } else {
        $(body).removeClass('small-menu');
        desktopMenu();
    }

    var dwidth = $(window).width();
    var dheight = $(window).height();

    $(window).resize(function(){
        var wwidth = $(window).width();
        var dheight = $(window).height();
        if(dwidth!==wwidth){
            dwidth = $(window).width();
            dheight = $(window).height();
            if(dheight <= 500) {
                $(body).addClass('small-menu');
            } else {
                $(body).removeClass('small-menu');
            }
            if (dwidth <= 1024) {
                mobileMenu();
            } else {
                $(body).removeClass('small-menu');
                desktopMenu();
            }
        }
    });

    function mobileMenu() {
        $('.header__nav.menu__nav').append($('.header:not(.header_sticky) .header__menu-button'));
        const burger = $('.burger');
        const header = $('header');
        gsap.set(headerNav, { x: '320px', opacity: '0' });
        burger.on('click', function(e) {
            $(body).toggleClass('active-menu');
            $(header).toggleClass('active-menu');
            setTimeout(function() {
                gsap.set(headerNav, { opacity: '1' });
                if($(header).hasClass('active-menu')) {
                    gsap.set(headerNav, { x: '0' });
                    gsap.fromTo(".header__nav .menu-item", {
                        x: '100%',
                        duration: 0.4,
                        stagger: {
                            each: 0.02,
                            from: "top",
                        },
                        opacity: 0,
                    }, {
                        x: '0%',
                        duration: 0.4,
                        stagger: {
                            each: 0.02,
                            from: "top",
                        },
                        opacity: 1,
                    });
                } else {
                    gsap.fromTo(".header__nav .menu-item", {
                        x: '0%',
                        duration: 0.4,
                        stagger: {
                            each: 0.02,
                            from: "top",
                        },
                        opacity: 1,
                    }, {
                        x: '100%',
                        duration: 0.4,
                        stagger: {
                            each: 0.02,
                            from: "top",
                        },
                        opacity: 0,
                    });
                    setTimeout(function () {
                        gsap.set(headerNav, { x: '100%' });
                    }, 200);
                }}, 200);
        });
    };

    function desktopMenu() {
        headerNav.removeAttr('style');
        gsap.set(".header__nav .menu-item", {clearProps:"all"});
        gsap.set(".header__menu-button.btn", {clearProps:"all"});
    };
};
