import axios from 'axios';

export default () => {

    const URL = `${myajax.home_url}/wp-json/insights/v1`;
    const filters = $('.insights__filters');
    const parent = $('.insights__list');

    filters.on('click', 'button', function (e) {
        e.preventDefault();
        const button = $(this);
        button
            .prop('disabled', true)
            .addClass('active')
            .siblings().removeClass('active')
            .prop('disabled', false);
        parent.css('min-height', parent.outerHeight()).children().fadeOut(200, function() {
            parent.empty();
        });

        const category = button.data('categoryid');

        axios(`${URL}/insights?categories=${category}&page=1`)
            .then(({ data }) => {
                parent.append(data.htmlMembers).removeAttr('style');
            })
            .catch(() => button.prop('disabled', false));
    });
}
