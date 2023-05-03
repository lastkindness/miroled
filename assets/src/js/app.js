'use strict';

/**
 *  Load modules
 */
import "@lottiefiles/lottie-player";
import header from './modules/header';
import filterProjects from './modules/filter-projects';
import filterInsight from './modules/filter-insights';
import lotties from './modules/lottie.js';
import homeProjects from './modules/home-projects';
import insightsCarousel from './modules/insights-carousel';
import designTeam from './modules/design-team';
import insightsDropdown from './modules/insights-categories-mobile';
import titleLineAnim from './modules/title-line-anim';
import mobileMenu from './modules/mobile-menu';
import projectsDropdown from './modules/projects-categories-mobile';
import projectsSingle from './modules/single-project-details';
import mediaSection from './modules/media-section';
import splitTitleLines from './modules/split-title-lines';
import fadeContent from './modules/fade-content';

import '../scss/app.scss';

$(document).ready(() => {
    header();
    lotties();
    filterProjects();
    filterInsight();
    splitTitleLines();
    homeProjects();
    insightsCarousel();
    designTeam();
    insightsDropdown();
    titleLineAnim();
    mobileMenu();
    projectsDropdown();
    projectsSingle();
    mediaSection();
    fadeContent();

    let projects_btn_txt = $('.projects__filters-wrapper button.active').text();
    $('.projects__current-mobile').text(projects_btn_txt);

    let insights_btn_text = $('.insights__filter.active').text();
    $('.insights__filters_current-mobile').text(insights_btn_text);
});
