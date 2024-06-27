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
import { filterCatalog } from "./module/filter.js";



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


    const marka = document.querySelector('#marka');
    const model = document.querySelector('#model');
    const fuel = document.querySelector('#fuel');
    const privod = document.querySelector('#privod');
    const catalog_page = document.querySelector('#catalog_page');

    const filter_page = document.querySelector('.filter-swiper');

    if(filter_page) {

        // let buttonValue;
        // jQuery('button.filter_country').on('click', function(event) {
        //     let currentButton = jQuery(this)
        //     buttonValue = currentButton.val();
        //     console.log(buttonValue);
        // });

        if(marka.length !== 0) {
            filterCatalog('filter', {
                'box_id' : 'marka',
                'select' : '*',
                'filterName' : 'marka',
                'from' : 'jp_postmeta',
            })
        }
        
        if(model.length !== 0) {
            filterCatalog('filter', {
                'box_id' : 'model',
                'select' : '*',
                'filterName' : 'model',
                'from' : 'jp_postmeta',
            })
        }
        
        if(fuel.length !== 0) {
            filterCatalog('filter', {
                'box_id' : 'fuel',
                'select' : '*',
                'filterName' : 'fuel',
                'from' : 'jp_postmeta',
            })
        }
        
        if(privod.length !== 0) {
            filterCatalog('filter', {
                'box_id' : 'privod',
                'select' : '*',
                'filterName' : 'privod',
                'from' : 'jp_postmeta',
            })
        }
        
        //  При изменении кнопки со страной из которой машину привезли РАБОТАЕТ НЕ ТРОГАЙ
        if(catalog_page.length !== 0) {

            let tabs_container = jQuery('.tabs-container__btns');
            const form_box  = jQuery('#formForMain');

            jQuery(tabs_container)
                .off('click')
                .on('click', function(event_object) { 
                    let this_btn = jQuery(event_object.currentTarget);
                    let filter_btn_id = this_btn.find('button._active');
                    filter_btn_id = filter_btn_id.attr('id');
        
                    filterCatalog('catalog', {
                        'box_id': 'catalog_page',
                        'select': '*',
                        'category_id': jQuery('button.filter_country._active').val(),
                        'post_type': 'post',
                        'from': 'jp_posts',
                        'where'                 : {
                            'fuel'              : form_box.find('[name="fuel"]').val(),
                            'privod'            : form_box.find('[name="privod"]').val(),
                            'volume_from'       : form_box.find('[name="volume_from"]').val(),
                            'volume_to'         : form_box.find('[name="volume_to"]').val(),
                            'year_from'         : form_box.find('[name="year_from"]').val(),
                            'year_to'           : form_box.find('[name="year_to"]').val(),
                            'price_from'        : form_box.find('[name="price_from"]').val(),
                            'price_to'          : form_box.find('[name="price_to"]').val(),
                            'status'          : form_box.find('[name="filter_checkbox"]').val(),
                        },
                    });
        
                    return false;
                });
        }   

        // Вывод всех машин разом без фильтров при загрузке страницы РАБОТАЕТ НЕ ТРОГАЙ
        filterCatalog('catalog', {
            'box_id': 'catalog_page',
            'select': '*',
            'category_id' : jQuery('button.filter_country._active').val(),
            'post_type': 'post',
            'from': 'jp_posts',
        });

        // // Слушает изменение селекта
        jQuery('body').off('change')
        // ДОПИСАТЬ СВЯЗКУ ПО ПОЛЯМ
        // .on('change', 'select[name="marka"], select[name="model"]', function(event_object) {

        //     let this_select     = jQuery(event_object.currentTarget);
        //     let form_box        = this_select.parents('form').eq(0);
        //     let options;
            
        //     if(this_select.attr('name') == 'marka') {
        //         options = {
        //             'box_id'    : 'model',
        //             'selected'  : form_box.find('[name="model"]').val(),
        //             'filterName': 'model',
        //             'select'    : '*',
        //             'category'      : buttonValue,
        //             'where'     : {
        //                 'value'    : this_select.val(),
        //             },
        //             'from'      : 'jp_postmeta',
        //         };
        //     }
        //     else if(this_select.attr('name') == 'model') {
        //         options = {
        //             'box_id'    : 'marka',
        //             'selected'  : form_box.find('[name="marka"]').val(),
        //             'filterName': 'marka',
        //             'select'    : '*',
        //             'category'  : buttonValue,
        //             'where'     : {
        //                 'value'    : this_select.val(),
        //             },
        //             'from'      : 'jp_postmeta',
        //         };
        //     }
        //     else {
        //         options = {};
        //     }

        //     filterCatalog('filter', options);
        // })
        .on('click', 'button#send_form', function(event_object) {
            const this_send = jQuery(event_object.currentTarget);

            const form_box  = this_send.parents('form').eq(0);

            const options = {
                'box_id'                : 'catalog_page',
                'select'                : '*',
                'category_id'           : jQuery('button.filter_country._active').val(),
                'where'                 : {
                    'marka'             : form_box.find('[name="marka"]').val(),
                    'model'             : form_box.find('[name="model"]').val(),
                    'fuel'              : form_box.find('[name="fuel"]').val(),
                    'privod'            : form_box.find('[name="privod"]').val(),
                    'volume_from'       : form_box.find('[name="volume_from"]').val(),
                    'volume_to'         : form_box.find('[name="volume_to"]').val(),
                    'year_from'         : form_box.find('[name="year_from"]').val(),
                    'year_to'           : form_box.find('[name="year_to"]').val(),
                    'price_from'        : form_box.find('[name="price_from"]').val(),
                    'price_to'          : form_box.find('[name="price_to"]').val(),
                    'status'            : jQuery('.checkbox__container').find('[name="filter_checkbox"]:checked').val(),
                },
            };

            console.log(options);

            filterCatalog('catalog', options);
            
            return false;
        })
    }

    
    if(window.innerWidth >= 769) {
        var image = document.querySelectorAll('.parallax__img__first');
        new simpleParallax(image, {
            delay: .6,
            transition: 'cubic-bezier(0, 0, 0, .9)'
        });     
    }
}
    

);
