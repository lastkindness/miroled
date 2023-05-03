import {gsap} from "gsap/dist/gsap";

export default () => {

    const hiddenElements = document.querySelectorAll('body:not(.single) .single-project-details_accordion .single-project-details__item_hidden');

    hiddenElements.forEach((hiddenElement) => {
        gsap.set(hiddenElement, { height: 0, opacity: '0' });
        const parentElement = hiddenElement.parentNode;
        hiddenElement.addEventListener('click', (e) => {
            e.stopPropagation();
        });
        parentElement.addEventListener('click', () => {
            parentElement.classList.toggle('active');
            const contentElement = parentElement.querySelector('div.single-project-details__content');
            let text = contentElement.dataset.defoult;
            let textHidden = contentElement.dataset.hidden;
            let titleE = contentElement.querySelector('span.title');
            gsap.to(hiddenElement, {
                duration: 0.5,
                height: hiddenElement.offsetHeight === 0 ? 'auto' : 0,
                opacity: hiddenElement.offsetHeight === 0 ? 1 : 0,
                ease: 'power2.inOut'
            });
            if(parentElement.classList.contains('active')) {
                titleE.textContent = textHidden;
            } else {
                titleE.textContent = text;
            }
        });
    });

    const hiddenSingleElements = document.querySelectorAll('.single .single-project-details__item_hidden');

    hiddenSingleElements.forEach((hiddenElement) => {
        const contentElement = hiddenElement.querySelector('div.single-project-details__content');
        gsap.set(contentElement, { height: 0, opacity: '0' });
        hiddenElement.addEventListener('click', (e) => {
            e.stopPropagation();
        });
        hiddenElement.addEventListener('click', () => {
            hiddenElement.classList.toggle('active');
            const tagElement = hiddenElement.querySelector('div.single-project-details__tag');
            let text = tagElement.dataset.defoult;
            let textHidden = tagElement.dataset.hidden;
            let titleE = tagElement.querySelector('span.title');
            gsap.to(contentElement, {
                duration: 0.5,
                height: contentElement.offsetHeight === 0 ? 'auto' : 0,
                opacity: contentElement.offsetHeight === 0 ? 1 : 0,
                ease: 'power2.inOut'
            });
            if(hiddenElement.classList.contains('active')) {
                titleE.textContent = textHidden;
            } else {
                titleE.textContent = text;
            }
        });
    });


};
