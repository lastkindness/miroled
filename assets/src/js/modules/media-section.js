export default () => {
    let section = document.querySelectorAll('.single-post .image-video');

    section.forEach((el, index)=> {
        if(index === 0) {
            el.classList.remove('image-video_middle');
        }
    })

};
