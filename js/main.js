import { initNav } from "./module/nav.js";
import { initScroll } from "./module/scroll.js";
import { initPopup } from "./module/popup.js";
import { initCounterAnimation } from "./module/counter.js";
import { initSlider } from "./module/sliders.js";
import { initReviewsSlider} from './module/sliders.js';
import { initTabs } from './module/tabs.js';
import { initGeneralSlider1 } from './module/sliders.js';
import { initGeneralSlider2 } from './module/sliders.js';
import { initGeneralSlider3 } from './module/sliders.js';
import { initScrollAnimation } from './module/scroll-animation.js';
import { initCardItemSlider } from './module/sliders.js';



window.addEventListener('DOMContentLoaded', () => {
    console.log('подключен скрипт main.js');

    initNav();
    initScrollAnimation();
    initScroll();
    baguetteBox.run('.gallery-wrapper');
    initCounterAnimation();
    initPopup();
initReviewsSlider();
    initSlider();
    initGeneralSlider1();
    initGeneralSlider2();
    initGeneralSlider3();
    initCardItemSlider();
    initTabs();



    if(window.innerWidth >= 769) {
        var image = document.querySelectorAll('.parallax__img__first');
        new simpleParallax(image, {
            delay: .6,
            transition: 'cubic-bezier(0, 0, 0, .9)'
        });     
    }


});
