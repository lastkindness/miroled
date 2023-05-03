import lottie from 'lottie-web';
export default () => {
    const lottieContainers = document.querySelectorAll('.lottie-container');

    lottieContainers.forEach((container) => {
        function isInViewport(el) {
            const rect = el.getBoundingClientRect();
            return rect.top - window.innerHeight < 0 && rect.bottom > 0;
        }

        const lottieContainer = container;
        const src = container.getAttribute('src');
        let iter = 0;

        const animation = lottie.loadAnimation({
            container: lottieContainer,
            renderer: 'svg',
            loop: true,
            autoplay: true,
            background: 'transparent',
            speed: '1',
            path: src,
            name: "Lottie Animation",
        });

        function handleScroll() {
            if (isInViewport(container)) {
                animation.play();
            } else {
                animation.stop();
            }
        }

        window.addEventListener('scroll', handleScroll);
    });
};
