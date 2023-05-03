export default () => {
    function wrapNewLines(targetSelector, wrapEl = 'span', wrapClass = 'anim-title-line', wrapElPar = 'div', wrapClassPar = 'hero__title-line') {
        const content = document.querySelectorAll(targetSelector)
        content.forEach(section => {
            let sectionWidth = section.getBoundingClientRect().width
            let words = section.innerText.split(/( )/g)
            section.innerHTML = ''
            words.forEach(word => {
                section.innerHTML += `<span>${word}</span>`
            })
            let lines = []
            let line = []
            let lineWidth = 0
            let spans = section.querySelectorAll('span')
            spans.forEach((span, i) => {
                let spanWidth = span.getBoundingClientRect().width
                if (lineWidth + spanWidth <= sectionWidth - 1) {
                    line.push(span)
                    lineWidth += spanWidth
                } else {
                    lines.push(line)
                    line = []
                    lineWidth = 0
                    line.push(span)
                    lineWidth += spanWidth
                }
            })
            if (line.length) lines.push(line)
            let newLines = lines
                .map(
                    line =>
                        `<${wrapElPar} class=${wrapClassPar}><${wrapEl} class=${wrapClass}>${line
                            .map(span => span.innerText)
                            .join('')}</${wrapEl}></${wrapElPar}>`
                )
                .join('')
            section.innerHTML = newLines
        })
    }
    wrapNewLines('.hero:not(.hero_main) .hero__title');
    wrapNewLines('.hero h2', 'span', 'anim-title-line', 'div', 'hero__content-line');
    wrapNewLines('.hero__wrapper>p', 'span', 'anim-title-line', 'div', 'hero__content-line');
    $(window).resize(function() {
        $(window).resize(function() {
            if (!jQuery.browser.mobile) {
                wrapNewLines('.hero:not(.hero_main) .hero__title');
                wrapNewLines('.hero h2', 'span', 'anim-title-line', 'div', 'hero__content-line');
                wrapNewLines('.hero__wrapper>p', 'span', 'anim-title-line', 'div', 'hero__content-line');
            }
        });
    });
};
