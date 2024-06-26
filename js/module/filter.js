export const filterCatalog = (filter_type = 'catalog', options = {}) => {
    if (filter_type === 'filter') {
        let default_options = {
            'select' : '*',
            'from' : 'jp_postmeta',
            'filterName' : 'marka',
            'order_by' : 'marka asc',
        };

        options = Object.assign(default_options, options);
        console.log(options)
        const url = '/wp-admin/admin-ajax.php'; 

        jQuery.ajax({
            url: url,
            type: 'POST',
            data: {
                action: 'get_filter',
                filter_options: options,
            },
            beforeSend: function() {
                jQuery('#'+ options['box_id'])
                    .addClass('downloaded')
                    .empty()
                    .append('<div class="catalog"><div class="download"></div></div>');
            },
            success: function(query_result) {
                let result = JSON.parse(query_result);
                console.log(result['query_result'], result['query'])
                let selected_value = options['selected'] !== undefined ? options['selected'] : '';
                result['query_result']
                let select_options = '<option value="" class="text-opacity-10">Выберите</option>';

                if(result['query_result'].length > 1) {
                    result['query_result'].forEach(function(filter_value) {
                        select_options += '<option value="'+ filter_value['meta_value'] + '"'+ (filter_value['meta_value'] == selected_value ? ' selected' : '') +'>'+ filter_value['meta_value'] +'</option>';
                    });
                }

                jQuery('#'+ options['box_id']).empty().append(select_options);
            },
            error: function(text) {
                console.log(text);
            }
        });
    }

    if(filter_type === 'catalog') {

        let default_options = {
            'box_id' : 'catalog_page',
            'select' : '*',
            'category_id' : 2,
            'from' : 'jp_posts',
            'order_by' : 'asc',
        };

        options = Object.assign(default_options, options);
        console.log(options);
        const url = '/wp-admin/admin-ajax.php';
        jQuery.ajax({
            url: url,
            type: 'POST',
            data:  {
                action: 'get_catalog',
                filter_options: options,
            },
            beforeSend: function() {
               
            },
            success: function(query_result) {

                let result = JSON.parse(query_result);
                console.log(result);
                let catalog_page  =  '';
                if(result['products'].length > 0) {
                    result['products'].forEach(function(product) {

                        if(product.meta_data ) {
                            let status = product.meta_data.status
                            let marka = product.meta_data.marka
                            let model = product.meta_data.model
                            let year = product.meta_data.year
                            let milleage = product.meta_data.milleage
                            let engine = product.meta_data.engine
                            let photo_src = product.photo
                            let product_link = product.product_link
                            console.log(product.photo)
                            

                        catalog_page    +=  '<div style="border-top-right-radius: 30px !important;" class=" rounded-xl relative bg-light-gray">';

                        catalog_page    +=      ' <p class=" clip_box top left text-white">';
                        catalog_page    +=      '    <span class="clip bg-blue rounded-full py-2 px-6">'+ status +'</span>';
                        catalog_page    +=      ' </p>';

                        catalog_page    +=       '<a href="'+ product_link +'">';
                        catalog_page    +=       '  <img style="min-height: 320px !important; object-fit: cover !important; border-bottom-left-radius: 30px !important; border-top-right-radius: 30px !important; border-bottom-right-radius: 30px !important;" class="clip" src="'+ photo_src +'" alt="car">';
                        catalog_page    +=       '</a>';

                        catalog_page    +=       '<div class="p-5">';
                        catalog_page    +=       '     <p class="font-bold text-black py-4">'+ marka +' '+ model +'</p>';
                        catalog_page    +=       '     <div class="card__list">';
                    
                        catalog_page    +=       '         <ul>';
                        catalog_page    +=       '             <li class="pb-2 font-semibold">Год выпуска</li>';
                        catalog_page    +=       '             <li class="pb-2 font-semibold">Пробег</li>';
                        catalog_page    +=       '             <li class="pb-2 font-semibold">Двигатель</li>';
                        catalog_page    +=       '         </ul>';

                        catalog_page    +=       '         <ul>';
                        catalog_page    +=       '             <li class="pb-2 font-semibold">'+ year +'</li>';
                        catalog_page    +=       '             <li class="pb-2 font-semibold">'+ milleage +'</li>';
                        catalog_page    +=       '             <li class="pb-2 font-semibold">'+ engine +'</li>';
                        catalog_page    +=       '         </ul>';
                        catalog_page    +=       '     </div>';
                        catalog_page    +=       '     <p class="py-2">*Точную стоимость авто уточняйте у менеджера</p>';


                        catalog_page    +=       '     <div class="flex gap-2 justify-between items-center">';
                        catalog_page    +=       '       <a href="#popup2" class="bg-blue text-white py-2 px-16 rounded-lg popup-link hover:bg-dark-blue transition-all">';
                        catalog_page    +=       '          Заказать';
                        catalog_page    +=       '       </a>';

                        catalog_page    +=       '       <svg class="next new__items__next" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">';
                        catalog_page    +=       '        <circle cx="25" cy="25" r="24" stroke="#467dd0" stroke-width="2"/>';
                        catalog_page    +=       '         <path d="M16 24H15V26H16V24ZM34.7071 25.7071C35.0976 25.3166 35.0976 24.6834 34.7071 24.2929L28.3431 17.9289C27.9526 17.5384 27.3195 17.5384 26.9289 17.9289C26.5384 18.3195 26.5384 18.9526 26.9289 19.3431L32.5858 25L26.9289 30.6569C26.5384 31.0474 26.5384 31.6805 26.9289 32.0711C27.3195 32.4616 27.9526 32.4616 28.3431 32.0711L34.7071 25.7071ZM16 26L34 26V24L16 24V26Z" fill="#467dd0"/>';
                        catalog_page    +=       '       </svg>';

                        catalog_page    +=       '      </div>';
                        
                        catalog_page    +=       '     </div>';
                        catalog_page    +=       '</div>';

                        }  
                    });
                    
                }
                else {
                    catalog_page += '<div>Машин не найдено</div>';
                }
                


                jQuery('#'+ options['box_id'])
                    .removeClass('downloaded')
                    .empty()
                    .append(catalog_page);
            },
            error: function (error) {
                console.log(error);
                console.log('Пипец')
            }
        })
    }


    if(filter_type === 'filter') {
        let default_options = {
            'box_id'                : '',
            'select'                : 'marka',
            'from'                  : 'main',
            'order_by'              : 'marka',
            'order_by_direction'    : 'asc',
            'group_by'              : 'marka',
        };

        options = Object.assign(default_options, options);

        if(filter_type !== 'filter') {
            options['select'] = filter_type,
            options['order_by'] = filter_type;
            options['group_by'] = filter_type;
        }
        
        // jQuery.ajax({
        //     url: '/wp-admin/admin-ajax.php',
        //     type: 'POST',
        //     data: {
        //         action: 'get_filter',
        //         auction_options: options,
        //     },
        //     beforeSend: function() {
        //         jQuery('#'+ options['box_id']).addClass('downloaded');
        //     },
        //     success: function(query_result) {
        //         let result = JSON.parse(query_result);
        //         console.log(result);
        //         let filter_options = result['filter'];
        //         let select_options = '<option value="">Выбрать</option>';
        //         let selected_value = options['selected'] !== undefined ? options['selected'] : '';
                
        //         if(filter_options.length > 1) {
        //             filter_options.forEach(function(filter_value, iteration) {
        //                 select_options += '<option value="'+ filter_value[options['group_by'].toUpperCase()] + '"'+ (filter_value[options['group_by'].toUpperCase()] == selected_value ? ' selected' : '') +'>'+ filter_value[options['group_by'].toUpperCase()] +'</option>';
        //             });
        //         }
        //         else if(filter_options.length == 1) {
        //             select_options += '<option value="'+ filter_options[0][options['group_by'].toUpperCase()] + '" selected>'+ filter_options[0][options['group_by'].toUpperCase()] +'</option>';
        //         }

        //         jQuery('#'+ options['box_id']).removeClass('downloaded').empty().append(select_options);
        //     },
        //     error: function(text) {
        //         console.log(text);
        //     }
        // });
    }
}
