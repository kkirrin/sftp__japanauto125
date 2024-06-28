<?php 
/*
Template Name: главная
*/
?>


<?php get_header(); ?>



<main>
            <h1 class="visually-hidden">Скрытый заголовок</h1>
         
            <section id="main" class="main-swiper md:max-h-full -z-10 md:-mt-[102px] -mt-[132px] w-full">
                <div class="main-wrapper overflow-hidden container">
                    <div class="main-item relative overflow-hidden mt-6">
                        <div class="swiper-wrapper">               
                            <div class="swiper-slide rounded-b-[30px] relative bg-black -z-10 max-h-screen">
                                <img style="width: -webkit-fill-available;" class="parallax__img__first md:block hidden rounded-b-[30px] md:h-[840px] h-auto" src="<?php echo get_template_directory_uri() . '/src/img/main/bg_1.webp'; ?>" alt="bg-1">
                                <img style="width: -webkit-fill-available;" class="thumbnail md:hidden sm:block hidden rounded-b-[30px]" src="<?php echo get_template_directory_uri() . '/src/img/main/bg__m_1.webp'; ?>" alt="bg-1">
                                <img style="width: -webkit-fill-available;" class="md:hidden sm:hidden block rounded-b-[30px] sm:max-h-[600px] object-cover max-h-screen" src="<?php echo get_template_directory_uri() . '/src/img/main/bg_s_1.webp'; ?>" alt="bg-1">
                                <div class="absolute md:top-40 top-20 md:left-40 left-0-0 md:w-2/3 w-full p-5">
                                    <h2>
                                        Автомобили из Кореи <br>с доставкой в Уссурийск
                                    </h2>
                                    
                                    <p class="md:text-[20px] text-[14px] text-white md:pt-10 pt-5 blue-circle-text font-semibold">
                                        Подберем автомобиль по вашему бюджету на аукционах Японии и доставим в любую точку России. Купите автомобиль мечты и сэкономьте до 50% по сравнению со вторичным рынком                                    

                                        <ul class="gap-8 pt-10 two-columns counter-list">
                                            <div class="blur-pattern flex justify-center gap-2 items-center md:flex-row flex-col">
                                                <span class="font-medium md:text-[50px] text-[30px] text-white counter-auto"></span><span class="md:text-base text-xs text-white"> Выкупленнных <br> автомобилей</span>
                                            </div>
                                            <div class="blur-pattern flex justify-center gap-2 items-center md:flex-row flex-col">
                                                <span class="font-medium md:text-[50px] text-[30px] text-white counter-days"></span> <span class="md:text-base text-xs text-white">Дней от договора <br>до вручения ключей</span>
                                            </div>

                                            <div class="md:block hidden button__blue__to__dark__blue__to__gray text-center up">
                                                <a href="#popup1" class="popup-link">
                                                    Подобрать автомобиль
                                                </a>
                                            </div>
                                            
                                            <a href="https://japanauto125.ru/?page_id=8/" class="md:block hidden button__transparent__to__dark__blue__to__dark__blue up">
                                                Перейти в каталог
                                            </a>
                                            
                                            <div class="wrapper__button">
                                                <div class="button__blue__to__dark__blue__to__gray text-center">
                                                    <a href="#popup1" class=" popup-link up">
                                                       Подобрать автомобиль
                                                    </a>
                                                </div>
                                                
                                                <a href="https://japanauto125.ru/?page_id=8/" class="button__transparent__to__dark__blue__to__dark__blue up">
                                                    Перейти в каталог
                                                </a>
                                            </div>
                                            
                                        </ul>
                                
                                </div>
                            </div>                 
                            <div class="swiper-slide rounded-b-[30px] relative bg-black -z-10 max-h-screen">
                                <img style="width: -webkit-fill-available;" class="parallax__img__first md:block hidden rounded-b-[30px] md:h-[840px] h-auto" src="<?php echo get_template_directory_uri() . '/src/img/main/bg_2.webp'; ?>" alt="bg-1">
                                <img style="width: -webkit-fill-available;" class="thumbnail md:hidden sm:block hidden rounded-b-[30px]" src="<?php echo get_template_directory_uri() . '/src/img/main/bg_m_2.webp'; ?>" alt="bg-1">
                                <img style="width: -webkit-fill-available;" class="md:hidden sm:hidden block rounded-b-[30px] sm:max-h-[600px] object-cover max-h-screen" src="<?php echo get_template_directory_uri() . '/src/img/main/bg_s_2.webp'; ?>" alt="bg-1">
                                <div class="absolute md:top-40 top-20 md:left-40 left-0-0 md:w-2/3 w-full p-5">
                                    <h2>
                                        Автомобили из Кореи <br> с доставкой в Уссурийск
                                    </h2>
                                    
                                    <p class="md:text-[20px] text-[14px] text-white md:pt-10 pt-5 blue-circle-text font-semibold">
                                        Подберем автомобиль по вашему бюджету на Корейских площадках и доставим в любую точку России. Купите автомобиль мечты и сэкономьте до 50% по сравнению со вторичным рынком                                    </p>
                                    

                                        <ul class="gap-8 pt-10 two-columns counter-list">
                                            <div class="blur-pattern flex justify-center gap-2 items-center md:flex-row flex-col">
                                                <span class="font-medium md:text-[50px] text-[30px] text-white">689</span><span class="md:text-base text-xs text-white"> Выкупленнных <br> автомобилей</span>
                                            </div>
                                            <div class="blur-pattern flex justify-center gap-2 items-center md:flex-row flex-col">
                                                <span class="font-medium md:text-[50px] text-[30px] text-white">30</span> <span class="md:text-base text-xs text-white">Дней от договора <br>до вручения ключей</span>
                                            </div>

                                            <div class="md:block hidden button__blue__to__dark__blue__to__gray text-center up">
                                                <a href="#popup1" class=" popup-link" id="popup">
                                                    Подобрать автомобиль
                                                </a>
                                            </div>
                                            
                                            <a href="https://japanauto125.ru/?page_id=8/" class="md:block hidden button__transparent__to__dark__blue__to__dark__blue up">
                                                Перейти в каталог
                                            </a>
                                            
                                            <div class="wrapper__button">
                                                <div class="button__blue__to__dark__blue__to__gray text-center">
                                                    <a href="#popup1" class=" popup-link" id="popup">
                                                        Подобрать автомобиль
                                                    </a>
                                                </div>
                                                
                                                <a href="https://japanauto125.ru/?page_id=8/" class="button__transparent__to__dark__blue__to__dark__blue">
                                                    Перейти в каталог
                                                </a>
                                            </div>
                                            
                                        </ul>
                                
                                </div>
                            </div>                 
                            <div class="swiper-slide rounded-b-[30px] relative bg-black -z-10 max-h-screen">
                                <img style="width: -webkit-fill-available;" class="parallax__img__first md:block hidden rounded-b-[30px] md:h-[840px] h-auto" src="<?php echo get_template_directory_uri() . '/src/img/main/bg_3.webp'; ?>" alt="bg-1">
                                <img style="width: -webkit-fill-available;" class="thumbnail md:hidden sm:block hidden rounded-b-[30px]" src="<?php echo get_template_directory_uri() . '/src/img/main/bg_m_3.png'; ?>" alt="bg-1">
                                <img style="width: -webkit-fill-available;" class="md:hidden sm:hidden block rounded-b-[30px] sm:max-h-[600px] object-cover max-h-screen" src="<?php echo get_template_directory_uri() . '/src/img/main/bg_s_3.webp'; ?>" alt="bg-1">
                                <div class="absolute md:top-40 top-20 md:left-40 left-0-0 md:w-2/3 w-full p-5">
                                    <h2>
                                        Автомобили из Китая <br> с доставкой в Уссурийск
                                    </h2>
                                    
                                    <p class="md:text-[20px] text-[14px] text-white md:pt-10 pt-5 blue-circle-text font-semibold">
                                        Подберем автомобиль по вашему бюджету на Китайских площадках и доставим в любую точку России. Купите автомобиль мечты и сэкономьте до 50% по сравнению со вторичным рынком
                                    </p>
                                    

                                        <ul class="gap-8 pt-10 two-columns counter-list">
                                            <div class="blur-pattern flex justify-center gap-2 items-center md:flex-row flex-col">
                                                <span class="font-medium md:text-[50px] text-[30px] text-white">689</span><span class="md:text-base text-xs text-white"> Выкупленнных <br> автомобилей</span>
                                            </div>
                                            <div class="blur-pattern flex justify-center gap-2 items-center md:flex-row flex-col">
                                                <span class="font-medium md:text-[50px] text-[30px] text-white">30</span> <span class="md:text-base text-xs text-white">Дней от договора <br>до вручения ключей</span>
                                            </div>

                                            <div class="md:block hidden button__blue__to__dark__blue__to__gray text-center up">
                                                <a href="#popup1" class=" popup-link" id="popup">
                                                    Подобрать автомобиль
                                                </a>
                                            </div>
                                            
                                            <a href="https://japanauto125.ru/?page_id=8/" class="md:block hidden button__transparent__to__dark__blue__to__dark__blue up">
                                                Перейти в каталог
                                            </a>
                                            
                                            <div class="wrapper__button">
                                                <div class="button__blue__to__dark__blue__to__gray text-center">
                                                    <a href="#popup1" class=" popup-link" id="popup">
                                                        Подобрать автомобиль
                                                    </a>
                                                </div>
                                                
                                                <a href="https://japanauto125.ru/?page_id=8/" class="button__transparent__to__dark__blue__to__dark__blue">
                                                    Перейти в каталог
                                                </a>
                                            </div>
                                            
                                        </ul>
                                
                                </div>
                            </div> 
                            <div class="swiper-pagination"></div>
                        </div>
                        
                    </div>
                </div>                        
            </section>
            
            <!-- Каталог -->
            <section id="popular" class="md:pt-[120px] pt-[60px]" data-scroll>
                <div class="container">
                    <div class="flex items-center justify-between">
                        <div class="md:pb-[40px] pb-[30px]">
                           <h2 class="text-black">Популярные авто </h2>
                       </div>
   
                       <div class="swiper-pagination"></div>
                       <div class="md:flex flex-nowrap gap-5 hidden">
                           <button style="width: 50px; height: 50px;" class="prev-popular-item rounded-full p-5 bg-light-gray hover:bg-gray hover:scale-110 transition-all up">
                               <img src="<?php echo get_template_directory_uri() . '/src/img/icons/prev.svg'; ?>" alt="влево">
                           </button>
                           <button style="width: 50px; height: 50px;" class="next-popular-item rounded-full p-5 bg-light-gray hover:bg-gray hover:scale-110 transition-all up ">
                               <img src="<?php echo get_template_directory_uri() . '/src/img/icons/next.svg'; ?>" alt="вправо" >
                           </button>
                       </div>
                       
                   </div>

                   
                    <div class="popular-wrapper overflow-hidden">
                        <div class="tabs-container">
                            <div class="tabs-container__btns">
                                <button class="_tabs-item md:text-lg text-xs _active" data-tab="#way">В пути</button>
                                <button class="_tabs-item md:text-lg text-xs" data-tab="#order">Под заказ</button>
                                <button class="_tabs-item md:text-lg text-xs" data-tab="#stock">В наличии</button>
                            </div>
                            
                            <div id="way" class="_tabs-block _active"> 
                                <div class="popular-items-section">
                                    <div class="swiper popular-items-1">
                                        <div class="swiper-wrapper">
                                            <?php
                                                $my_posts = get_posts(array(
                                                    'numberposts' => 25,
                                                    'order' => 'title',
                                                    'orderby' => 'rand',
                                                    'post_type' => 'post',
                                                    'meta_query' => [
                                                        array(
                                                            'key'     =>'status',
                                                            'value'   => 'в пути',
                                                            'compare' => '=',
                                                        ),
                                                    ],
                                                    'suppress_filters' => true
                                                ));

                                                foreach ($my_posts as $post) :                                
                                                    echo '<div style="border-top-right-radius: 30px !important;" class="swiper-slide rounded-xl relative bg-light-gray">';
                                                    echo '  <p class=" clip_box top left text-white"><span class="clip bg-blue rounded-full py-2 px-6">'. get_field('status') .'</span></p>';
                                                    echo '      <a href="'. get_the_permalink() .'"><img style="width: -webkit-fill-available; min-height: 320px !important; object-fit: cover !important; border-bottom-left-radius: 30px !important; border-top-right-radius: 30px !important; border-bottom-right-radius: 30px !important;" class="clip" src="'. get_the_post_thumbnail() .'</a>';
                                                    echo '      <div class="p-5">';
                                                    echo '          <p class="font-bold text-black py-4 text-[20px]">'. get_field('marka') .' '. get_field('model') .'</p>';
                                                    echo '              <div class="card__list">';
                                                    echo '               <ul>';
                                                    echo '                 <li class="pb-2">Год выпуска</li>';
                                                    echo '                 <li class="pb-2">Пробег</li>';
                                                    echo '                 <li class="pb-2">Двигатель</li>'; 
                                                    echo '               </ul>';
                                                    echo '               <ul>';
                                                    echo '                  <li class="pb-2 font-semibold">'. get_field('year') .'</li>';
                                                    echo '                  <li class="pb-2 font-semibold">'. get_field('milleage') .'</li>';
                                                    echo '                  <li class="pb-2 font-semibold">'. get_field('engine') .'</li>';
                                                    echo '                </ul>';
                                                    echo '                </div>';
                                                    echo '                <p class="py-2">*Точную стоимость авто уточняйте у менеджера</p>';
                                                    echo '                <div class="flex gap-2 justify-between items-center">';
                                                    echo '                  <a href="#popup2" class="bg-blue text-white py-2 px-16 rounded-lg popup-link hover:bg-dark-blue transition-all"> Заказать</a>';
                                                    echo '              <svg class="next new__items__next" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                         <circle cx="25" cy="25" r="24" stroke="#467dd0" stroke-width="2"/>
                                                                        <path d="M16 24H15V26H16V24ZM34.7071 25.7071C35.0976 25.3166 35.0976 24.6834 34.7071 24.2929L28.3431 17.9289C27.9526 17.5384 27.3195 17.5384 26.9289 17.9289C26.5384 18.3195 26.5384 18.9526 26.9289 19.3431L32.5858 25L26.9289 30.6569C26.5384 31.0474 26.5384 31.6805 26.9289 32.0711C27.3195 32.4616 27.9526 32.4616 28.3431 32.0711L34.7071 25.7071ZM16 26L34 26V24L16 24V26Z" fill="#467dd0"/>
                                                                        </svg>';
                                                    echo '          </div>';
                                                    echo '      </div>';                            
                                                    

                                                ?>
                                                
                                              
                                                    
                                                </div>        
                                            

                                            <?php endforeach; ?>
                                            <?php wp_reset_postdata(); ?>

                                            </div>
                                    </div>
                                
                                </div>
                            </div>
                            <div id="order" class="_tabs-block"> 
                                <div class="popular-items-section">
                                    <div class="swiper popular-items-2">
                                        <div class="swiper-wrapper">
                                            <?php
                                                $my_posts = get_posts(array(
                                                    'numberposts' => 25,
                                                    'order' => 'title',
                                                    'orderby' => 'rand',
                                                    'post_type' => 'post',
                                                    'meta_query' => [
                                                        array(
                                                            'key'     =>'status',
                                                            'value'   => 'под заказ',
                                                            'compare' => '=',
                                                        ),
                                                    ],
                                                    'suppress_filters' => true
                                                ));

                                                foreach ($my_posts as $post) :                                
                                                    echo '<div style="border-top-right-radius: 30px !important;" class="swiper-slide rounded-xl relative bg-light-gray">';
                                                    echo '  <p class=" clip_box top left text-white"><span class="clip bg-blue rounded-full py-2 px-6">'. get_field('status') .'</span></p>';
                                                    echo '      <a href="'. get_the_permalink() .'"><img style="width: -webkit-fill-available; min-height: 320px !important; object-fit: cover !important; border-bottom-left-radius: 30px !important; border-top-right-radius: 30px !important; border-bottom-right-radius: 30px !important;" class="clip" src="'. get_the_post_thumbnail() .'';
                                                    echo '      </a> ';
                                                    echo '      <div class="p-5">';
                                                    echo '          <p class="font-bold text-black py-4 text-[20px]">'. get_field('marka') .' '. get_field('model') .'</p>;';
                                                    echo '              <div class="card__list">';
                                                    echo '               <ul>';
                                                    echo '                 <li class="pb-2">Год выпуска</li>';
                                                    echo '                 <li class="pb-2">Пробег</li>';
                                                    echo '                 <li class="pb-2">Двигатель</li>'; 
                                                    echo '               </ul>';
                                                    echo '               <ul>';
                                                    echo '                  <li class="pb-2 font-semibold">'. get_field('year') .'</li>';
                                                    echo '                  <li class="pb-2 font-semibold">'. get_field('milleage') .'</li>';
                                                    echo '                  <li class="pb-2 font-semibold">'. get_field('engine') .'</li>';
                                                    echo '                </ul>';
                                                    echo '                </div>';
                                                    echo '                <p class="py-2">*Точную стоимость авто уточняйте у менеджера</p>';
                                                    echo '                <div class="flex gap-2 justify-between items-center">';
                                                    echo '                  <a href="#popup2" class="bg-blue text-white py-2 px-16 rounded-lg popup-link hover:bg-dark-blue transition-all"> Заказать</a>';
                                                    echo '              <svg class="next new__items__next" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                         <circle cx="25" cy="25" r="24" stroke="#467dd0" stroke-width="2"/>
                                                                        <path d="M16 24H15V26H16V24ZM34.7071 25.7071C35.0976 25.3166 35.0976 24.6834 34.7071 24.2929L28.3431 17.9289C27.9526 17.5384 27.3195 17.5384 26.9289 17.9289C26.5384 18.3195 26.5384 18.9526 26.9289 19.3431L32.5858 25L26.9289 30.6569C26.5384 31.0474 26.5384 31.6805 26.9289 32.0711C27.3195 32.4616 27.9526 32.4616 28.3431 32.0711L34.7071 25.7071ZM16 26L34 26V24L16 24V26Z" fill="#467dd0"/>
                                                                        </svg>';
                                                    echo '          </div>';
                                                    echo '      </div>';                            
                                                    

                                                ?>
                                                
                                              
                                                    
                                                </div>        
                                            

                                            <?php endforeach; ?>
                                            <?php wp_reset_postdata(); ?>
                                    </div>
                                
                                </div>
                            </div>
                            <div id="stock" class="_tabs-block"> 
                                <div class="popular-items-section">
                                    <div class="swiper popular-items-3">
                                        <div class="swiper-wrapper">
                                            <?php
                                                $my_posts = get_posts(array(
                                                    'numberposts' => 25,
                                                    'order' => 'title',
                                                    'orderby' => 'rand',
                                                    'post_type' => 'post',
                                                    'meta_query' => [
                                                        array(
                                                            'key'     =>'status',
                                                            'value'   => 'в наличии',
                                                            'compare' => '=',
                                                        ),
                                                    ],
                                                    'suppress_filters' => true
                                                ));

                                                foreach ($my_posts as $post) :                                
                                                    echo '<div style="border-top-right-radius: 30px !important;" class="swiper-slide rounded-xl relative bg-light-gray">';
                                                    echo '      <a href="'. get_the_permalink() .'"><img style="width: -webkit-fill-available;min-height: 320px !important; object-fit: cover !important; border-bottom-left-radius: 30px !important; border-top-right-radius: 30px !important; border-bottom-right-radius: 30px !important;" class="clip" src="'. get_the_post_thumbnail() .'';
                                                    echo '      </a> ';
                                                    echo '      <div class="p-5">';
                                                    echo '          <p class="font-bold text-black py-4 text-[20px]">'. get_field('marka') .' '. get_field('model') .'</p>;';
                                                    echo '              <div class="card__list">';
                                                    echo '               <ul>';
                                                    echo '                 <li class="pb-2">Год выпуска</li>';
                                                    echo '                 <li class="pb-2">Пробег</li>';
                                                    echo '                 <li class="pb-2">Двигатель</li>'; 
                                                    echo '               </ul>';
                                                    echo '               <ul>';
                                                    echo '                  <li class="pb-2 font-semibold">'. get_field('year') .'</li>';
                                                    echo '                  <li class="pb-2 font-semibold">'. get_field('milleage') .'</li>';
                                                    echo '                  <li class="pb-2 font-semibold">'. get_field('engine') .'</li>';
                                                    echo '                </ul>';
                                                    echo '                </div>';
                                                    echo '                <p class="py-2">*Точную стоимость авто уточняйте у менеджера</p>';
                                                    echo '                <div class="flex gap-2 justify-between items-center">';
                                                    echo '                  <a href="#popup2" class="bg-blue text-white py-2 px-16 rounded-lg popup-link hover:bg-dark-blue transition-all"> Заказать</a>';
                                                    echo '              <svg class="next new__items__next" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                         <circle cx="25" cy="25" r="24" stroke="#467dd0" stroke-width="2"/>
                                                                        <path d="M16 24H15V26H16V24ZM34.7071 25.7071C35.0976 25.3166 35.0976 24.6834 34.7071 24.2929L28.3431 17.9289C27.9526 17.5384 27.3195 17.5384 26.9289 17.9289C26.5384 18.3195 26.5384 18.9526 26.9289 19.3431L32.5858 25L26.9289 30.6569C26.5384 31.0474 26.5384 31.6805 26.9289 32.0711C27.3195 32.4616 27.9526 32.4616 28.3431 32.0711L34.7071 25.7071ZM16 26L34 26V24L16 24V26Z" fill="#467dd0"/>
                                                                        </svg>';
                                                    echo '          </div>';
                                                    echo '      </div>';                            
                                                    

                                                ?>
                                                
                                              
                                                    
                                                </div>        
                                            

                                            <?php endforeach; ?>
                                            <?php wp_reset_postdata(); ?>
 
                                                                  
                                        </div>
                                    </div>
                                
                                </div>
                            </div>

                           
                            
                        </div>
                    </div>   
                    
                    <div class="md:hidden flex-nowrap gap-5 flex justify-center">
                        <button class="prev-popular-item rounded-full p-5 bg-light-gray hover:bg-gray hover:scale-110 transition-all">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/prev.svg'; ?>" alt="влево">
                        </button>
                        <button class="next-popular-item rounded-full p-5 bg-light-gray hover:bg-gray hover:scale-110 transition-all">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/next.svg'; ?>" alt="вправо" >
                        </button>
                    </div>
                </div>
            </section> 
           
            <!-- Условия -->
            <section id="service" class="md:pt-[120px] pt-[60px]" data-scroll>
                <div class="container">
                    <div class="flex items-center justify-between">
                        <div class="md:pb-[40px] pb-[30px]">
                           <h2 class="text-black">Предлагаем лучшие условия 
                            и сервис для наших клиентов </h2>
                            <div class="service__wrapper">
                                <div class="rounded-3xl border-light-gray p-6 service__card">
                                    <div class="flex justify-between">
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_b_180_24623)">
                                            <rect x="0.5" y="0.5" width="49" height="49" rx="24.5" stroke="#467DD0"/>
                                            <path d="M15.0286 22.04C15.0286 21.2533 15.1419 20.5467 15.3686 19.92C15.6086 19.2933 15.9419 18.76 16.3686 18.32C16.7953 17.88 17.3153 17.5467 17.9286 17.32C18.5419 17.08 19.2286 16.96 19.9886 16.96C20.7353 16.96 21.4153 17.08 22.0286 17.32C22.6419 17.5467 23.1619 17.8733 23.5886 18.3C24.0153 18.7267 24.3419 19.2467 24.5686 19.86C24.8086 20.4733 24.9286 21.1533 24.9286 21.9V27.06C24.9286 28.7133 24.5086 29.9933 23.6686 30.9C22.8286 31.8067 21.6419 32.26 20.1086 32.26C18.5219 32.26 17.2753 31.8 16.3686 30.88C15.4753 29.96 15.0286 28.6867 15.0286 27.06V22.04ZM17.6886 26.98C17.6886 27.9 17.8886 28.6067 18.2886 29.1C18.6886 29.58 19.2686 29.82 20.0286 29.82C21.5219 29.82 22.2686 28.8933 22.2686 27.04V22.04C22.2686 21.1867 22.0686 20.5333 21.6686 20.08C21.2819 19.6267 20.7286 19.4 20.0086 19.4C19.2886 19.4 18.7219 19.6333 18.3086 20.1C17.8953 20.5667 17.6886 21.2133 17.6886 22.04V26.98ZM30.26 19.72H28.4V17.22H32.92V32H30.26V19.72Z" fill="#467DD0"/>
                                            </g>
                                            <defs>
                                            <filter id="filter0_b_180_24623" x="-100" y="-100" width="250" height="250" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="50"/>
                                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_180_24623"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_180_24623" result="shape"/>
                                            </filter>
                                            </defs>
                                        </svg>
                                        <img class="service__img" src="<?php echo get_template_directory_uri() .'/src/img/main/1_img.png'; ?>" alt="1-img">
                                    </div>
                                    <p class="service__title">Работаем по договору</p>
                                    <p class="service__text">Осознавая нашу ответственность, мы тщательно проработали договор, с которым можно ознакомиться ниже</p>
                                    <button class="button__blue__to__dark__blue__to__gray mt-5 up">Образец договора</button>
                                </div>
                                <div class="rounded-3xl border p-6 service__card">
                                    <div class="flex justify-between">
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_b_348_1208)">
                                            <rect x="0.5" y="0.5" width="49" height="49" rx="24.5" stroke="#467DD0"/>
                                            <path d="M15.0286 22.04C15.0286 21.2533 15.1419 20.5467 15.3686 19.92C15.6086 19.2933 15.9419 18.76 16.3686 18.32C16.7953 17.88 17.3153 17.5467 17.9286 17.32C18.5419 17.08 19.2286 16.96 19.9886 16.96C20.7353 16.96 21.4153 17.08 22.0286 17.32C22.6419 17.5467 23.1619 17.8733 23.5886 18.3C24.0153 18.7267 24.3419 19.2467 24.5686 19.86C24.8086 20.4733 24.9286 21.1533 24.9286 21.9V27.06C24.9286 28.7133 24.5086 29.9933 23.6686 30.9C22.8286 31.8067 21.6419 32.26 20.1086 32.26C18.5219 32.26 17.2753 31.8 16.3686 30.88C15.4753 29.96 15.0286 28.6867 15.0286 27.06V22.04ZM17.6886 26.98C17.6886 27.9 17.8886 28.6067 18.2886 29.1C18.6886 29.58 19.2686 29.82 20.0286 29.82C21.5219 29.82 22.2686 28.8933 22.2686 27.04V22.04C22.2686 21.1867 22.0686 20.5333 21.6686 20.08C21.2819 19.6267 20.7286 19.4 20.0086 19.4C19.2886 19.4 18.7219 19.6333 18.3086 20.1C17.8953 20.5667 17.6886 21.2133 17.6886 22.04V26.98ZM26.32 29.66L31.58 24.68C32.1933 24.1067 32.6267 23.5933 32.88 23.14C33.1467 22.6733 33.28 22.2 33.28 21.72C33.28 21.3867 33.2267 21.08 33.12 20.8C33.0133 20.52 32.86 20.28 32.66 20.08C32.4733 19.8667 32.2467 19.7 31.98 19.58C31.7267 19.46 31.4467 19.4 31.14 19.4C30.4467 19.4 29.8867 19.6667 29.46 20.2C29.0467 20.7333 28.84 21.44 28.84 22.32H26.22C26.22 21.4933 26.3333 20.7533 26.56 20.1C26.7867 19.4333 27.1133 18.8733 27.54 18.42C27.9667 17.9533 28.48 17.5933 29.08 17.34C29.6933 17.0867 30.3733 16.96 31.12 16.96C31.8133 16.96 32.4533 17.08 33.04 17.32C33.6267 17.56 34.1333 17.9 34.56 18.34C35 18.7667 35.34 19.2733 35.58 19.86C35.82 20.4467 35.94 21.08 35.94 21.76C35.94 22.2133 35.8933 22.64 35.8 23.04C35.7067 23.4267 35.5467 23.82 35.32 24.22C35.0933 24.6067 34.8 25.0067 34.44 25.42C34.08 25.82 33.6267 26.2667 33.08 26.76L30.06 29.5H35.88V32H26.32V29.66Z" fill="#467DD0"/>
                                            </g>
                                            <defs>
                                            <filter id="filter0_b_348_1208" x="-100" y="-100" width="250" height="250" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="50"/>
                                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_348_1208"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_348_1208" result="shape"/>
                                            </filter>
                                            </defs>
                                        </svg>
                                            
                                            
                                        <img class="service__img" src="<?php echo get_template_directory_uri() .'/src/img/main/2_img.png'; ?>" alt="1-img">
                                    </div>
                                    <p class="service__title">Оплата авто при получении</p>
                                    <p class="service__text">Вы можете забронировать автомобиль в пути, 
                                    а оплатить его при получении</p>
                                </div>
                                <div class="rounded-3xl border p-6 service__card">
                                    <div class="flex justify-between">
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_b_180_24645)">
                                            <rect x="0.5" y="0.5" width="49" height="49" rx="24.5" stroke="#467DD0"/>
                                            <path d="M15.0286 22.04C15.0286 21.2533 15.1419 20.5467 15.3686 19.92C15.6086 19.2933 15.9419 18.76 16.3686 18.32C16.7953 17.88 17.3153 17.5467 17.9286 17.32C18.5419 17.08 19.2286 16.96 19.9886 16.96C20.7353 16.96 21.4153 17.08 22.0286 17.32C22.6419 17.5467 23.1619 17.8733 23.5886 18.3C24.0153 18.7267 24.3419 19.2467 24.5686 19.86C24.8086 20.4733 24.9286 21.1533 24.9286 21.9V27.06C24.9286 28.7133 24.5086 29.9933 23.6686 30.9C22.8286 31.8067 21.6419 32.26 20.1086 32.26C18.5219 32.26 17.2753 31.8 16.3686 30.88C15.4753 29.96 15.0286 28.6867 15.0286 27.06V22.04ZM17.6886 26.98C17.6886 27.9 17.8886 28.6067 18.2886 29.1C18.6886 29.58 19.2686 29.82 20.0286 29.82C21.5219 29.82 22.2686 28.8933 22.2686 27.04V22.04C22.2686 21.1867 22.0686 20.5333 21.6686 20.08C21.2819 19.6267 20.7286 19.4 20.0086 19.4C19.2886 19.4 18.7219 19.6333 18.3086 20.1C17.8953 20.5667 17.6886 21.2133 17.6886 22.04V26.98ZM28.62 27.52C28.7133 28.24 28.9733 28.8067 29.4 29.22C29.8267 29.62 30.3667 29.82 31.02 29.82C31.7 29.82 32.2533 29.5933 32.68 29.14C33.12 28.6733 33.34 28.08 33.34 27.36C33.34 26.6 33.0733 26 32.54 25.56C32.02 25.1067 31.32 24.88 30.44 24.88H30V22.32H30.22C30.8867 22.32 31.3933 22.1933 31.74 21.94C32.1 21.6733 32.28 21.2933 32.28 20.8C32.28 20.3867 32.16 20.0533 31.92 19.8C31.68 19.5333 31.3667 19.4 30.98 19.4C30.2733 19.4 29.86 19.8467 29.74 20.74H27.04C27.1333 19.5667 27.5267 18.6467 28.22 17.98C28.9133 17.3 29.8267 16.96 30.96 16.96C31.5333 16.96 32.06 17.06 32.54 17.26C33.0333 17.46 33.4533 17.74 33.8 18.1C34.16 18.4467 34.44 18.8667 34.64 19.36C34.84 19.84 34.94 20.3667 34.94 20.94C34.94 21.5133 34.84 22.0067 34.64 22.42C34.44 22.82 34.1267 23.1733 33.7 23.48C35.2333 24.1733 36 25.4467 36 27.3C36 28.02 35.8733 28.6867 35.62 29.3C35.38 29.9 35.04 30.42 34.6 30.86C34.16 31.3 33.6333 31.6467 33.02 31.9C32.42 32.14 31.76 32.26 31.04 32.26C30.3333 32.26 29.6733 32.1467 29.06 31.92C28.46 31.68 27.9333 31.3533 27.48 30.94C27.04 30.5133 26.68 30.0133 26.4 29.44C26.1333 28.8533 25.98 28.2133 25.94 27.52H28.62Z" fill="#467DD0"/>
                                            </g>
                                            <defs>
                                            <filter id="filter0_b_180_24645" x="-100" y="-100" width="250" height="250" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="50"/>
                                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_180_24645"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_180_24645" result="shape"/>
                                            </filter>
                                            </defs>
                                        </svg>
                                            
                                        <img class="service__img" src="<?php echo get_template_directory_uri() .'/src/img/main/3_img.png'; ?>" alt="1-img">
                                    </div>
                                    <p class="service__title">Работа «под ключ»</p>
                                    <p class="service__text">Полный пакет услуг от подбора и покупки, до таможенного оформления и доставки в любой город России</p>
                                </div>
                                <div class="rounded-3xl border p-6 service__card">
                                    <div class="flex justify-between">
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_b_180_24653)">
                                            <rect x="0.5" y="0.5" width="49" height="49" rx="24.5" stroke="#467DD0"/>
                                            <path d="M15.0286 22.04C15.0286 21.2533 15.1419 20.5467 15.3686 19.92C15.6086 19.2933 15.9419 18.76 16.3686 18.32C16.7953 17.88 17.3153 17.5467 17.9286 17.32C18.5419 17.08 19.2286 16.96 19.9886 16.96C20.7353 16.96 21.4153 17.08 22.0286 17.32C22.6419 17.5467 23.1619 17.8733 23.5886 18.3C24.0153 18.7267 24.3419 19.2467 24.5686 19.86C24.8086 20.4733 24.9286 21.1533 24.9286 21.9V27.06C24.9286 28.7133 24.5086 29.9933 23.6686 30.9C22.8286 31.8067 21.6419 32.26 20.1086 32.26C18.5219 32.26 17.2753 31.8 16.3686 30.88C15.4753 29.96 15.0286 28.6867 15.0286 27.06V22.04ZM17.6886 26.98C17.6886 27.9 17.8886 28.6067 18.2886 29.1C18.6886 29.58 19.2686 29.82 20.0286 29.82C21.5219 29.82 22.2686 28.8933 22.2686 27.04V22.04C22.2686 21.1867 22.0686 20.5333 21.6686 20.08C21.2819 19.6267 20.7286 19.4 20.0086 19.4C19.2886 19.4 18.7219 19.6333 18.3086 20.1C17.8953 20.5667 17.6886 21.2133 17.6886 22.04V26.98ZM25.7 27.62L32.5 17.22H34.74V27.4H36.3V29.78H34.74V32H32.08V29.78H25.7V27.62ZM32.08 27.4V21.7L28.4 27.4H32.08Z" fill="#467DD0"/>
                                            </g>
                                            <defs>
                                            <filter id="filter0_b_180_24653" x="-100" y="-100" width="250" height="250" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="50"/>
                                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_180_24653"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_180_24653" result="shape"/>
                                            </filter>
                                            </defs>
                                        </svg>
                                            
                                        <img class="service__img" src="<?php echo get_template_directory_uri() .'/src/img/main/4_img.png'; ?>" alt="1-img">
                                    </div>
                                    <p class="service__title">Поддержка 24/7</p>
                                    <p class="service__text">Присылаем фото и видео подтверждение на каждом этапе. Вы можете позвонить нам в любое время, если у вас возникнут вопросы</p>
                                </div>
                            </div>
                       </div>              
                   </div>
            </section>
            
            <!-- Информационный блок -->
            <section id="auc" class="md:pt-[120px] pt-[60px] h-screen relative" data-scroll>
                <div class="container relative">
                       

                    <div class="clip_box top left">
                        <img class="clip md:w-[350px] w-[200px]" src="<?php echo get_template_directory_uri() .'/src/img/icons/logo__black.svg'; ?>" alt="">
                    </div>   
                    <img class="md:block hidden clip -z-10 rounded-2xl absolute parallax__img__first" src="<?php echo get_template_directory_uri() . '/src/img/main/auc.webp'; ?>" alt="">
                    <img style="width: -webkit-fill-available;" class="auc__img md:max-h-[600px] object-cover block md:hidden clip -z-10 rounded-2xl" src="<?php echo get_template_directory_uri() . '/src/img/main/auc_s.png'; ?>" alt="">
                    <div class="auc__container absolute md:top-auto top-[5%] md:left-auto -left-[5%]">
                        <div class="blur-pattern--auc">
                            <img src="<?php echo get_template_directory_uri() .'/src/img/icons/points.svg"'; ?> alt="">
                            <p> 
                                <span class="font-semibold">С 2005 года </span> мы помогаем автолюбителям осуществить мечту о собственном автомобиле. Надежность, оперативность и качество – главные ценности нашей компании.
                            </p>
                            <p> 
                                У нас <span class="font-semibold">более 300 автомобилей</span> в наличии на собственной стоянке в Японии.
                            </p>
                            <p> 
                                Мы накопили огромный опыт и широкую партнерскую сеть со странами Азии: Японией, Китаем и Южной Кореей. С нами удобно сотрудничать, так как специалисты учитывают все пожелания клиента, дают профессиональные консультации по подбору и заказу техники.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Схема работы с нами -->
            <section id="works_with_us" class="md:pt-[120px] pt-[60px]" data-scroll>
                <div class="container relative">
                    <div class="md:pb-[40px] pb-[30px] md:pt-[0x] pt-[30px]">
                        <h2 class="text-black">Схема работы с нами </h2>
                    </div>

                    <div class="grid md:grid-cols-3 grid-cols-1 gap-5 relative">
                        <svg class="md:hidden block absolute top-[80px]" width="26.000000" height="799.000000" viewBox="0 0 26 799" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs/>
                            <path id="Vector 49" d="M13 29.07L13 787.54" stroke="#DFE5F0" stroke-opacity="1.000000" stroke-width="4.000000"/>
                            <path id="Vector 50" d="M13 11.45L13 325.06" stroke="#467DD0" stroke-opacity="1.000000" stroke-width="4.000000"/>
                            <circle id="Ellipse 3" cx="13.000000" cy="13.000000" r="13.000000" fill="#467DD0" fill-opacity="1.000000"/>
                            <circle id="Ellipse 2" cx="13.000000" cy="12.999916" r="5.352941" fill="#FFFFFF" fill-opacity="1.000000"/>
                            <circle id="Ellipse 3" cx="13.000000" cy="167.600098" r="13.000000" fill="#467DD0" fill-opacity="1.000000"/>
                            <circle id="Ellipse 2" cx="13.000000" cy="167.600006" r="5.352941" fill="#FFFFFF" fill-opacity="1.000000"/>
                            <circle id="Ellipse 3" cx="13.000000" cy="322.200195" r="13.000000" fill="#467DD0" fill-opacity="1.000000"/>
                            <circle id="Ellipse 2" cx="13.000000" cy="322.200104" r="5.352941" fill="#FFFFFF" fill-opacity="1.000000"/>
                            <circle id="Ellipse 3" cx="13.000000" cy="476.799805" r="13.000000" fill="#DFE5F0" fill-opacity="1.000000"/>
                            <circle id="Ellipse 2" cx="13.000000" cy="476.800232" r="5.352941" fill="#FFFFFF" fill-opacity="1.000000"/>
                            <circle id="Ellipse 3" cx="13.000000" cy="631.399902" r="13.000000" fill="#DFE5F0" fill-opacity="1.000000"/>
                            <circle id="Ellipse 2" cx="13.000000" cy="631.399841" r="5.352941" fill="#FFFFFF" fill-opacity="1.000000"/>
                            <circle id="Ellipse 3" cx="13.000000" cy="786.000000" r="13.000000" fill="#DFE5F0" fill-opacity="1.000000"/>
                            <circle id="Ellipse 2" cx="13.000000" cy="785.999939" r="5.352941" fill="#FFFFFF" fill-opacity="1.000000"/>
                        </svg>
                        


                        <ul class="flex flex-col md:gap-12 gap-3 animate md:pl-[0px] pl-[50px]">
                            <li style="min-height: 132px; max-height: 132px;" class="border-light-gray rounded-[30px] border p-5 point">
                                <div class="flex gap-6">
                                <!-- <svg width="97.205566" height="60.253906" viewBox="0 0 97.0337 60.2539" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs/>
                                    <path id="01" d="M46.97 29.94C46.95 49.12 38.12 60.25 23.47 60.25C8.82 60.23 -0.06 49.06 0 29.94C0.02 10.87 8.88 0 23.47 0C38.06 0 47.01 10.91 46.97 29.94ZM69.47 0.8L81.03 0.8L81.03 58.98L68.74 58.98L68.74 12.48L68.39 12.48L55.07 20.83L55.07 9.92L69.47 0.8ZM12.52 29.94C12.5 43.35 16.81 50.05 23.47 50.05C30.13 50.05 34.45 43.35 34.41 29.94C34.41 16.73 30.09 10.09 23.47 10.09C16.83 10.09 12.53 16.73 12.52 29.94Z" fill="#467DD0" fill-opacity="1.000000" fill-rule="evenodd"/>
                                </svg> -->
                                <img class="img__count" src="<?php echo get_template_directory_uri() . '/src/img/icons/01.png'; ?>" />

                                    
                                        
                                    <div>
                                        <p class="font-bold pb-2">
                                            Оставляете заявку
                                        </p>
                                        <p class="font-normal text-gray pb-2 md:text-base text-xs">
                                            Вы делаете заявку на сайте или по телефону
                                        </p>
                                        <a href="#" class="text-blue underline font-bold">Оставить заявку</a>
                                    </div>
                                </div>
                                
                            </li>
                            <li style="min-height: 132px; max-height: 132px;" class="border-light-gray rounded-[30px] border p-5 point">
                                <div class="flex gap-6">
                                    <!-- <svg class="h-[60px] w-[140px]" width="97.205566" height="60.253906" viewBox="0 0 97.2056 60.2539" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <desc>
                                                Created with Pixso.
                                        </desc>
                                        <defs/>
                                        <path id="02" d="M46.97 29.94C46.95 49.12 38.12 60.25 23.47 60.25C8.82 60.23 -0.06 49.06 0 29.94C0.02 10.87 8.88 0 23.47 0C38.06 0 47.01 10.91 46.97 29.94ZM97.2 58.98L55.72 58.98L55.72 50.11L76.44 30.93C81.71 25.85 84.56 22.67 84.56 18.04C84.56 12.92 80.76 9.74 75.64 9.74C70.33 9.74 66.81 13.16 66.83 18.73L55.15 18.73C55.13 7.3 63.51 0 75.72 0C88.2 0 96.44 7.12 96.44 17.22C96.44 23.84 93.22 29.29 81.26 40.21L72.77 48.53L72.77 48.92L97.2 48.92L97.2 58.98ZM12.52 29.94C12.5 43.35 16.81 50.05 23.47 50.05C30.13 50.05 34.45 43.35 34.41 29.94C34.41 16.73 30.09 10.09 23.47 10.09C16.83 10.09 12.53 16.73 12.52 29.94Z" fill="#467DD0" fill-opacity="1.000000" fill-rule="evenodd"/>
                                    </svg> -->

                                    <img class="img__count" src="<?php echo get_template_directory_uri() . '/src//img/icons/02.png'; ?>" />
                                    
                                    <div>
                                        <p class="font-bold pb-2">
                                            Договор
                                        </p>
                                        <p class="font-normal text-gray md:text-base text-xs">
                                            Мы заключаем договор, в котором прописываем нашу ответственность 
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li style="min-height: 132px; max-height: 132px;" class="border-light-gray rounded-[30px] border p-5">
                                <div class="flex gap-6">
                                    <!-- <svg class="h-[60px] w-[140px]" width="99.627441" height="60.253906" viewBox="0 0 99.6274 60.2539" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs/>
                                        <path id="03" d="M46.97 29.94C46.95 49.12 38.12 60.25 23.47 60.25C8.82 60.23 -0.06 49.06 0 29.94C0.02 10.87 8.88 0 23.47 0C38.06 0 47.01 10.91 46.97 29.94ZM99.62 42.65C99.64 52.59 90.31 59.78 77.24 59.78C64.45 59.78 55.36 52.71 55.15 42.53L67.55 42.53C67.77 46.79 71.83 49.62 77.26 49.62C82.88 49.62 86.87 46.46 86.83 41.81C86.87 37.12 82.75 33.84 76.15 33.84L70.72 33.84L70.72 24.8L76.15 24.8C81.75 24.8 85.64 21.71 85.62 17.12C85.64 12.75 82.32 9.74 77.34 9.74C72.32 9.74 68.26 12.61 68.12 17.05L56.32 17.05C56.5 6.99 65.46 0 77.4 0C89.45 0 97.49 7.22 97.45 16.4C97.49 22.92 93 27.53 86.5 28.69L86.5 29.16C95.05 30.23 99.64 35.41 99.62 42.65ZM12.52 29.94C12.5 43.35 16.81 50.05 23.47 50.05C30.13 50.05 34.45 43.35 34.41 29.94C34.41 16.73 30.09 10.09 23.47 10.09C16.83 10.09 12.53 16.73 12.52 29.94Z" fill="#467DD0" fill-opacity="1.000000" fill-rule="evenodd"/>
                                    </svg> -->
                                    <img class="img__count" src="<?php echo get_template_directory_uri() . '/src/img/icons/03.png'; ?>" />
                                    
                                    
                                    <div>
                                        <p class="font-bold pb-2">
                                            Депозит
                                        </p>
                                        <p class="font-normal text-gray md:text-base text-xs">
                                            Вносите депозит в размере 50 000 рублей (входит в конечную стоимость авто)
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="md:flex justify-center hidden">
                            <svg width="26.000000" height="499.000000" viewBox="0 0 26 499" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs/>
                                <path id="Vector 49" d="M13 18L14 484" stroke="#DFE5F0" stroke-opacity="1.000000" stroke-width="4.000000"/>
                                <path id="Vector 50" d="M13 18L13 203" stroke="#467DD0" stroke-opacity="1.000000" stroke-width="4.000000"/>
                                <circle id="Ellipse 3" cx="13.000000" cy="13.000000" r="13.000000" fill="#467DD0" fill-opacity="1.000000"/>
                                <circle id="Ellipse 2" cx="13.000000" cy="12.999912" r="5.352941" fill="#FFFFFF" fill-opacity="1.000000"/>
                                <circle id="Ellipse 3" cx="13.000000" cy="107.600098" r="13.000000" fill="#467DD0" fill-opacity="1.000000"/>
                                <circle id="Ellipse 2" cx="13.000000" cy="107.600006" r="5.352941" fill="#FFFFFF" fill-opacity="1.000000"/>
                                <circle id="Ellipse 3" cx="13.000000" cy="202.200195" r="13.000000" fill="#467DD0" fill-opacity="1.000000"/>
                                <circle id="Ellipse 2" cx="13.000000" cy="202.200104" r="5.352941" fill="#FFFFFF" fill-opacity="1.000000"/>
                                <circle id="Ellipse 3" cx="13.000000" cy="296.799805" r="13.000000" fill="#DFE5F0" fill-opacity="1.000000"/>
                                <circle id="Ellipse 2" cx="13.000000" cy="296.800201" r="5.352941" fill="#FFFFFF" fill-opacity="1.000000"/>
                                <circle id="Ellipse 3" cx="13.000000" cy="391.399902" r="13.000000" fill="#DFE5F0" fill-opacity="1.000000"/>
                                <circle id="Ellipse 2" cx="13.000000" cy="391.399811" r="5.352941" fill="#FFFFFF" fill-opacity="1.000000"/>
                                <circle id="Ellipse 3" cx="13.000000" cy="486.000000" r="13.000000" fill="#DFE5F0" fill-opacity="1.000000"/>
                                <circle id="Ellipse 2" cx="13.000000" cy="485.999908" r="5.352941" fill="#FFFFFF" fill-opacity="1.000000"/>
                            </svg>
                        </div>

                        

                        <ul class="flex flex-col md:gap-12 gap-3 md:pl-[0px] pl-[50px]">
                            <li style="min-height: 132px; max-height: 162px;" class="border-light-gray rounded-[30px] border p-5">
                                <div class="flex gap-6">
                                    <!-- <svg class="h-[60px] w-[140px]" width="86" height="63" viewBox="0 0 86 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.88 21.16C0.88 18.0133 1.33333 15.1867 2.24 12.68C3.2 10.1733 4.53333 8.04 6.24 6.28C7.94667 4.52 10.0267 3.18667 12.48 2.28C14.9333 1.32 17.68 0.839997 20.72 0.839997C23.7067 0.839997 26.4267 1.32 28.88 2.28C31.3333 3.18667 33.4133 4.49333 35.12 6.2C36.8267 7.90666 38.1333 9.98666 39.04 12.44C40 14.8933 40.48 17.6133 40.48 20.6V41.24C40.48 47.8533 38.8 52.9733 35.44 56.6C32.08 60.2267 27.3333 62.04 21.2 62.04C14.8533 62.04 9.86667 60.2 6.24 56.52C2.66667 52.84 0.88 47.7467 0.88 41.24V21.16ZM11.52 40.92C11.52 44.6 12.32 47.4267 13.92 49.4C15.52 51.32 17.84 52.28 20.88 52.28C26.8533 52.28 29.84 48.5733 29.84 41.16V21.16C29.84 17.7467 29.04 15.1333 27.44 13.32C25.8933 11.5067 23.68 10.6 20.8 10.6C17.92 10.6 15.6533 11.5333 14 13.4C12.3467 15.2667 11.52 17.8533 11.52 21.16V40.92ZM43.5656 43.48L70.7656 1.88H79.7256V42.6H85.9656V52.12H79.7256V61H69.0856V52.12H43.5656V43.48ZM69.0856 42.6V19.8L54.3656 42.6H69.0856Z" fill="#DFE5F0"/>
                                    </svg> -->
                                    <img class="img__count" src="<?php echo get_template_directory_uri() . '/src/img/icons/04.png'; ?>" />
                                    
                                    <div>
                                        <p class="font-bold pb-2">
                                            Поиск и покупка автомобиля
                                        </p>
                                        <p class="font-normal text-gray md:text-base text-xs">
                                            Подбираем варианты на аукционах Японии или рынках Южной Кореи, Китая и покупаем его
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li style="min-height: 132px; max-height: 132px;" class="border-light-gray rounded-[30px] border p-5">
                                <div class="flex gap-6">
                                    <!-- <svg class="h-[60px] w-[140px]" width="86" height="63" viewBox="0 0 86 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.88 21.16C0.88 18.0133 1.33333 15.1867 2.24 12.68C3.2 10.1733 4.53333 8.04 6.24 6.28C7.94667 4.52 10.0267 3.18667 12.48 2.28C14.9333 1.32 17.68 0.839997 20.72 0.839997C23.7067 0.839997 26.4267 1.32 28.88 2.28C31.3333 3.18667 33.4133 4.49333 35.12 6.2C36.8267 7.90666 38.1333 9.98666 39.04 12.44C40 14.8933 40.48 17.6133 40.48 20.6V41.24C40.48 47.8533 38.8 52.9733 35.44 56.6C32.08 60.2267 27.3333 62.04 21.2 62.04C14.8533 62.04 9.86667 60.2 6.24 56.52C2.66667 52.84 0.88 47.7467 0.88 41.24V21.16ZM11.52 40.92C11.52 44.6 12.32 47.4267 13.92 49.4C15.52 51.32 17.84 52.28 20.88 52.28C26.8533 52.28 29.84 48.5733 29.84 41.16V21.16C29.84 17.7467 29.04 15.1333 27.44 13.32C25.8933 11.5067 23.68 10.6 20.8 10.6C17.92 10.6 15.6533 11.5333 14 13.4C12.3467 15.2667 11.52 17.8533 11.52 21.16V40.92ZM55.0856 43.32C55.6723 46.2 56.7656 48.4133 58.3656 49.96C60.019 51.5067 62.1256 52.28 64.6856 52.28C67.5656 52.28 69.9123 51.2667 71.7256 49.24C73.539 47.2133 74.4456 44.6 74.4456 41.4C74.4456 39.9067 74.2056 38.52 73.7256 37.24C73.2456 35.96 72.579 34.84 71.7256 33.88C70.8723 32.92 69.859 32.1733 68.6856 31.64C67.5123 31.1067 66.2323 30.84 64.8456 30.84C63.139 30.84 61.6723 31.1867 60.4456 31.88C59.219 32.52 57.939 33.6667 56.6056 35.32L47.1656 32.76L52.6856 1.88H79.4056V11.88H60.6856L58.7656 22.76C60.3123 22.12 61.619 21.6933 62.6856 21.48C63.7523 21.2133 64.979 21.08 66.3656 21.08C69.0856 21.08 71.5656 21.5867 73.8056 22.6C76.099 23.6133 78.0723 25.0267 79.7256 26.84C81.4323 28.6 82.739 30.7333 83.6456 33.24C84.6056 35.6933 85.0856 38.36 85.0856 41.24C85.0856 44.2267 84.579 47 83.5656 49.56C82.5523 52.0667 81.139 54.2533 79.3256 56.12C77.5656 57.9867 75.459 59.4533 73.0056 60.52C70.5523 61.5333 67.8856 62.04 65.0056 62.04C62.2323 62.04 59.619 61.56 57.1656 60.6C54.7656 59.64 52.6323 58.3333 50.7656 56.68C48.9523 54.9733 47.4856 52.9733 46.3656 50.68C45.2456 48.3867 44.6056 45.9333 44.4456 43.32H55.0856Z" fill="#DFE5F0"/>
                                    </svg> -->
                                    <img class="img__count" src="<?php echo get_template_directory_uri() . '/src/img/icons/05.png'; ?>" />
                                    
                                    <div>
                                        <p class="font-bold pb-2">
                                            Оплата и доставка
                                        </p>
                                        <p class="font-normal text-gray md:text-base text-xs">
                                            Оплачиваем и доставляем автомобиль 
                                            в Россию с полным пакетом документов
                                        </div>
                                    </p>
                                </div>
                            </li>
                            <li style="min-height: 132px; max-height: 132px;" class="border-light-gray rounded-[30px] border p-5">
                                <div class="flex gap-6">
                                    <!-- <svg class="h-[60px] w-[140px]" width="86" height="63" viewBox="0 0 86 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.88 21.16C0.88 18.0133 1.33333 15.1867 2.24 12.68C3.2 10.1733 4.53333 8.04 6.24 6.28C7.94667 4.52 10.0267 3.18667 12.48 2.28C14.9333 1.32 17.68 0.839997 20.72 0.839997C23.7067 0.839997 26.4267 1.32 28.88 2.28C31.3333 3.18667 33.4133 4.49333 35.12 6.2C36.8267 7.90666 38.1333 9.98666 39.04 12.44C40 14.8933 40.48 17.6133 40.48 20.6V41.24C40.48 47.8533 38.8 52.9733 35.44 56.6C32.08 60.2267 27.3333 62.04 21.2 62.04C14.8533 62.04 9.86667 60.2 6.24 56.52C2.66667 52.84 0.88 47.7467 0.88 41.24V21.16ZM11.52 40.92C11.52 44.6 12.32 47.4267 13.92 49.4C15.52 51.32 17.84 52.28 20.88 52.28C26.8533 52.28 29.84 48.5733 29.84 41.16V21.16C29.84 17.7467 29.04 15.1333 27.44 13.32C25.8933 11.5067 23.68 10.6 20.8 10.6C17.92 10.6 15.6533 11.5333 14 13.4C12.3467 15.2667 11.52 17.8533 11.52 21.16V40.92ZM78.6856 1.88L64.5256 22.92C65.4323 22.6 66.2056 22.3867 66.8456 22.28C67.539 22.1733 68.3656 22.12 69.3256 22.12C71.6723 22.12 73.8323 22.6 75.8056 23.56C77.8323 24.4667 79.5656 25.7467 81.0056 27.4C82.4456 29.0533 83.5656 31.0267 84.3656 33.32C85.219 35.6133 85.6456 38.12 85.6456 40.84C85.6456 43.9333 85.139 46.7867 84.1256 49.4C83.1656 51.96 81.779 54.2 79.9656 56.12C78.1523 57.9867 76.019 59.4533 73.5656 60.52C71.1123 61.5333 68.3923 62.04 65.4056 62.04C62.419 62.04 59.6456 61.5333 57.0856 60.52C54.579 59.5067 52.3923 58.0933 50.5256 56.28C48.7123 54.4667 47.2723 52.3067 46.2056 49.8C45.1923 47.2933 44.6856 44.5733 44.6856 41.64C44.6856 40.2 44.7923 38.84 45.0056 37.56C45.219 36.2267 45.539 34.92 45.9656 33.64C46.4456 32.3067 47.059 30.9467 47.8056 29.56C48.5523 28.1733 49.459 26.68 50.5256 25.08L65.9656 1.88H78.6856ZM65.4856 52.28C68.3123 52.28 70.6056 51.32 72.3656 49.4C74.1256 47.48 75.0056 44.9733 75.0056 41.88C75.0056 38.7867 74.0723 36.28 72.2056 34.36C70.3923 32.3867 67.9656 31.4 64.9256 31.4C63.539 31.4 62.259 31.6667 61.0856 32.2C59.9123 32.7333 58.899 33.4533 58.0456 34.36C57.1923 35.2667 56.5256 36.36 56.0456 37.64C55.5656 38.92 55.3256 40.3333 55.3256 41.88C55.3256 43.3733 55.5656 44.76 56.0456 46.04C56.579 47.32 57.2723 48.44 58.1256 49.4C59.0323 50.3067 60.099 51.0267 61.3256 51.56C62.6056 52.04 63.9923 52.28 65.4856 52.28Z" fill="#DFE5F0"/>
                                    </svg> -->
                                    <img class="img__count" src="<?php echo get_template_directory_uri() . '/src/img/icons/06.png'; ?>" />
                                    
                                    <div>
                                        <p class="font-bold pb-2">
                                            Получение
                                        </p>
                                        <p class="font-normal text-gray md:text-base text-xs">
                                            Вместе мы завершаем процедуру получения автомобиля, его регистрации и передаем вам
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                     </div>

                </div>
            </section> 

            <!-- Контактная форма -->
            <section id="form" class="md:pt-[120px] pt-[60px] md:mb-auto mb-[80px] h-screen p-5" data-scroll>
                <div class="container bg-blue rounded-[30px] md:p-[85px] p-[25px] relative md:h-auto h-screen">
                    <div class="md:w-2/3 w-full">
                        <h2 class="text-white">Подберем идеальный автомобиль для вас</h2>
                    </div>

                    <div class="md:w-2/3 w-full flex gap-3 flex-col md:pt-5 pt-2">
                        <p class="white-circle-text text-white font-semibold md:text-2xl text-base">И не только, также можем доставить спецтехнику под заказ</p>
                        <p style="color: #9BA5B4;" class=" md:text-xl text-base opacity-10">
                            Оставьте свои контакты, наш специалист свяжется с вами и проконсультирует <br> по всем вопросам, если не хотите ждать <a href="#" class="font-bold text-white underline">напишите на WhatsApp </a>
                        </p>
                    </div>

                    <div class="bg-white rounded-[20px] md:p-[40px] p-[10px] mt-5 md:w-2/3 w-full">
                        <form action="" class="flex gap-10 flex-wrap md:p-2 p-5">
                            <div class="flex gap-5 w-full md:flex-row flex-col">
                                <input type="text" placeholder="Введите имя" class="w-full bg-light-gray p-4 rounded-lg">
                                <input type="text" placeholder="Ваш номер" class="w-full bg-light-gray p-4 rounded-lg">
                            </div>
                            <div class="flex gap-5 md:flex-row flex-col">
                                <button class="button__blue__to__dark__blue__to__gray w-full py-2 text-light rounded-lg up">Отправить</button>
                                <p class="text-xs text-gray">* Нажимая кнопку “Отправить” вы даете согласие на обработку персональных данных *</p>
                            </div>

                            
                        </form>
                    </div>
                        
                    <img style="right: -15px;" class="parallax__img__first scale-100 contact__img md:-top-20 top-auto md:bottom-auto -bottom-10  -rotate-[5deg]  md:z-0 z-0 wow fadeInRight"  data-wow-delay="0.1s" src="<?php echo get_template_directory_uri() . '/src/img/icons/flower.svg'; ?>" alt="" >
                    <img class="parallax__img__first scale-100 contact__img md:top-20  top-auto md:bottom-auto bottom-0 -right-[0px] z-0 wow fadeInRight"  data-wow-delay="0.6s" src="<?php echo get_template_directory_uri() . '/src/img/main/car_catalog_1.webp'; ?>" alt="" >
                    <img class="parallax__img__first scale-100 contact__img md:top-56 top-auto md:bottom-auto -bottom-[40px] -right-[0px] z-10 wow fadeInRight"  data-wow-delay="0.6s" src="<?php echo get_template_directory_uri() . '/src/img/main/car_catalog_2.webp'; ?>" alt="" >
                </div>
            </section>

            <!-- Секция отзывы -->
            <section id="reviews" class="p-5"data-scroll>
                    <div class="container relative">

                        <div class="flex items-center justify-between">
                            <div class="">
                                <h2 class="text-black pb-10">Дорожим репутацией,<br> гордимся результатами </h2>
                            </div>
                        </div>
                        <!-- <iframe src="https://swdgts.ru/55935bcb351676f98a0c58acffd978e7" width="100%" height="400" frameborder="0"></iframe>  -->
                            
                    </div>
            </section> 

            <!-- Подписывайтесь -->
            <section id="socials" class="p-5" data-scroll>
                <div class="container bg-light-gray rounded-[30px] md:p-[40px] p-[25px] relative">
                    <div class="md:w-2/3 w-full">
                        <h3 class="text-black md:text-[40px] text-[20px] pb-4">#Подписывайтесь <br class="block md:hidden"> на нас в <span class="text-blue">соцсетях</span></h3>
                        <p class="text-gray md:text-xl text-sm">Где мы рассказываем о всей процедуре приобретения, <br> оформлении и доставке авто, а также публикуем видео-отзывы реальных клиентов</p>
                    </div>
                
                    <div class="clip_box top right ">
                        <div class="clip flex gap-5">
                            <a id="tg" class="bg-blue md:p-5 p-2 rounded-full socials__btns" href="https://t.me/japanauto_125">
                                <svg width="30" height="30" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.07882 14.2211L8.70662 19.8749C9.23913 19.8749 9.46976 19.6278 9.74633 19.3312L12.243 16.7544L17.4162 20.8459C18.365 21.4169 19.0334 21.1162 19.2894 19.9032L22.6851 2.71916L22.686 2.71815C22.987 1.20346 22.1788 0.611149 21.2544 0.982735L1.29457 9.23558C-0.0676534 9.80663 -0.0470279 10.6267 1.063 10.9983L6.16593 12.7125L18.019 4.70264C18.5769 4.30372 19.0841 4.52444 18.6669 4.92337L9.07882 14.2211Z" fill="white"/>
                                </svg>
                            </a>
                            <a id="inst" class="bg-blue md:p-5 p-2 rounded-full socials__btns" href="https://www.instagram.com/japanauto125/">
                                <svg width="30" height="30" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.875 11.2083C0.875 6.33715 0.875 3.90157 2.38828 2.38828C3.90157 0.875 6.33715 0.875 11.2083 0.875H13.7917C18.6628 0.875 21.0985 0.875 22.6117 2.38828C24.125 3.90157 24.125 6.33715 24.125 11.2083V13.7917C24.125 18.6628 24.125 21.0985 22.6117 22.6117C21.0985 24.125 18.6628 24.125 13.7917 24.125H11.2083C6.33715 24.125 3.90157 24.125 2.38828 22.6117C0.875 21.0985 0.875 18.6628 0.875 13.7917V11.2083ZM20.25 6.6875C20.25 7.75756 19.3825 8.625 18.3125 8.625C17.2425 8.625 16.375 7.75756 16.375 6.6875C16.375 5.61744 17.2425 4.75 18.3125 4.75C19.3825 4.75 20.25 5.61744 20.25 6.6875ZM15.0833 13.7917C15.0833 15.2184 13.9268 16.375 12.5 16.375C11.0732 16.375 9.91667 15.2184 9.91667 13.7917C9.91667 12.3649 11.0732 11.2083 12.5 11.2083C13.9268 11.2083 15.0833 12.3649 15.0833 13.7917ZM17.6667 13.7917C17.6667 16.6451 15.3534 18.9583 12.5 18.9583C9.64653 18.9583 7.33333 16.6451 7.33333 13.7917C7.33333 10.9382 9.64653 8.625 12.5 8.625C15.3534 8.625 17.6667 10.9382 17.6667 13.7917Z" fill="white"/>
                                </svg>  
                            </a>
                        </div>
                    </div>

                    <div class="grid-container parallax__img__first">
                        <img class="grid-item " src="<?php echo get_template_directory_uri() . '/src/img/main/social_placeholder_1.png'; ?>" alt="">
                        <img class="grid-item " src="<?php echo get_template_directory_uri() . '/src/img/main/social_placeholder_2.png'; ?>" alt="">
                        <img class="grid-item " src="<?php echo get_template_directory_uri() . '/src/img/main/social_placeholder_3.png'; ?>" alt="">
                    </div>
                </div>
            </section>

            <!-- Новости -->
            <section id="last__news" class="md:pt-[120px] pt-[60px] md:pb-[0px] pb-[30px]" data-scroll>
                <div class="container rounded-[30px] relative">
                    <div class="flex justify-between items-center">
                        <div class="md:w-2/3 w-full">
                            <h2 class="text-black md:text-[40px] text-[20px] pb-4">Последние новости и обзоры<h2>
                        </div>
                        <div class="md:flex gap-2 items-center hidden">
                            <a href="https://japanauto125.ru/?page_id=10/" class="text-gray">Все новости</a>
                            <svg width="19.003906" height="13.322266" viewBox="0 0 19.0039 13.3223" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs/>
                                <path id="Vector 45" d="M15.58 5.66L11.63 1.71C11.24 1.31 11.24 0.69 11.63 0.29C12.03 -0.1 12.65 -0.1 13.05 0.29L18.7 5.95C19.1 6.35 19.1 6.97 18.7 7.36L13.05 13.02C12.65 13.42 12.03 13.42 11.63 13.02C11.24 12.62 11.24 12 11.63 11.61L15.58 7.66L0 7.66L0 5.66L15.58 5.66Z" fill="rgb(155, 165, 180)" fill-opacity="1.000000" fill-rule="evenodd"/>
                            </svg>
                            
                        </div>
                    </div>

                    <div>
                        <ul class="grid md:grid-cols-2 grid-cols-1 gap-5">

                            <?php
                                $news = get_posts(array(
                                    'numberposts' => 2,
                                    'order' => 'title',
                                    'orderby' => 'rand',
                                    'post_type' => 'news',
                                    'category_name' => 'news',
                                    'suppress_filters' => true

                                  
                                ));

                                foreach ($news as $post) :
                                    echo '<li class="rounded-[30px] flex gap-5 border border-light-gray md:flex-row flex-col">';
                                    echo '  <div class="relative">';
                                    echo '      <img style="width: -webkit-fill-available; max-width: 350px;" class="rounded-[30px]" src="'. get_field('photo__news') .'" alt="">';
                                    echo '  </div>';
                                    echo '  <div class="flex gap-5 flex-col flow-wraw p-4">';
                                    echo '     <a href="'. get_permalink() .'" class="text-blue underline font-semibold hover:text-dark-blue transition-all">'. get_field('name_news') .'</a>';
                                    echo '      <p class="text-gray">'. get_field('text_news') .'</p>'; 
                                    echo '       <div class="flex justify-between items-center flex-">';
                                    echo '         <date class="text-gray">'. get_field('date_news') .'</date> '; 
                                    echo '          <div class="flex justify-between items-center gap-2">';
                                    echo '              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M8.49919 0.585205C4.14502 0.585205 0.58252 4.1477 0.58252 8.50187C0.58252 12.856 4.14502 16.4185 8.49919 16.4185C12.8534 16.4185 16.4159 12.856 16.4159 8.50187C16.4159 4.1477 12.8534 0.585205 8.49919 0.585205ZM11.8242 11.8269L7.70752 9.29354V4.54354H8.89502V8.6602L12.4575 10.7977L11.8242 11.8269Z" fill="#9BA5B4"/>
                                                                                </svg>';
                                    echo '              <p class="text-gray">'. get_field('count_watches') .' минуты</p>';
                                    echo '         </div>';
                                    echo '      </div>
                                                    </div>
                                                    </li>                                              
                                                
                                            ';
                            endforeach;
                            wp_reset_postdata(); 
                            ?>
                        </ul>
                    </div>

                    <div class="md:hidden gap-2 items-center flex justify-center py-5">
                        <a href="#" class="text-gray">Все новости</a>
                        <svg width="19.003906" height="13.322266" viewBox="0 0 19.0039 13.3223" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs/>
                            <path id="Vector 45" d="M15.58 5.66L11.63 1.71C11.24 1.31 11.24 0.69 11.63 0.29C12.03 -0.1 12.65 -0.1 13.05 0.29L18.7 5.95C19.1 6.35 19.1 6.97 18.7 7.36L13.05 13.02C12.65 13.42 12.03 13.42 11.63 13.02C11.24 12.62 11.24 12 11.63 11.61L15.58 7.66L0 7.66L0 5.66L15.58 5.66Z" fill="rgb(155, 165, 180)" fill-opacity="1.000000" fill-rule="evenodd"/>
                        </svg>
                        
                    </div>
                </div>
            </section>
    
               <!-- Карта -->
            <section id="section__map" class="section__map" data-scroll>
                <div class="container">
                    <h2 class="text-black md:text-[40px] text-[20px] pb-4">Контакты<h2>

                    <div class="flex md:max-h-10 max-h-[13.5rem] justify-between md:flex-row flex-col gap-10">
                        <ul class="grid md:grid-cols-2 grid-cols-1 gap-5">
                            <li class="flex gap-2 items-center">
                                <svg class="bg-light-gray rounded-full" width="18.000000" height="17.000000" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs/>
                                    <path id="Vector" d="M12.55 10.9L12.1 11.35C12.1 11.35 11.01 12.43 8.06 9.49C5.1 6.55 6.19 5.48 6.19 5.48L6.47 5.19C7.18 4.49 7.25 3.36 6.63 2.54L5.37 0.85C4.61 -0.17 3.13 -0.3 2.26 0.57L0.69 2.13C0.25 2.56 -0.04 3.12 0 3.74C0.09 5.33 0.81 8.74 4.81 12.72C9.06 16.94 13.04 17.11 14.67 16.96C15.19 16.91 15.64 16.65 16 16.29L17.42 14.88C18.38 13.92 18.11 12.29 16.88 11.62L14.97 10.58C14.16 10.15 13.18 10.28 12.55 10.9Z" fill="#467DD0" fill-opacity="1.000000" fill-rule="nonzero"/>
                                </svg>
                                <a href="tel:+74232692080" class="text-base font-bold text-black" style="text-wrap: nowrap;">+7 (423) 269-20-80</a> 
                            </li>
                            <li class="flex gap-2 items-center">
                                <svg class="bg-light-gray rounded-full" width="16.500000" height="22.000000" viewBox="0 0 16.5 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs/>
                                    <path id="Vector" d="M8.25 0C3.69 0 0 3.69 0 8.25C0 10.04 0.58 11.69 1.56 13.03C1.58 13.07 1.58 13.1 1.6 13.13L7.1 21.38C7.36 21.77 7.79 22 8.25 22C8.7 22 9.13 21.77 9.39 21.38L14.89 13.13C14.91 13.1 14.91 13.07 14.93 13.03C15.91 11.69 16.5 10.04 16.5 8.25C16.5 3.69 12.8 0 8.25 0ZM8.25 11C6.73 11 5.5 9.76 5.5 8.25C5.5 6.73 6.73 5.5 8.25 5.5C9.76 5.5 11 6.73 11 8.25C11 9.76 9.76 11 8.25 11Z" fill="#467DD0" fill-opacity="1.000000" fill-rule="nonzero"/>
                                </svg>
                                
                                    
                                <article class="text-base font-semibold text-black">г.  Уссурийск, Тургенева 1-й переулок, 5</article> 
                            </li>
                            <li class="flex gap-2 items-center">
                                <svg class="bg-light-gray rounded-full" width="21.000000" height="15.428223" viewBox="0 0 21 15.4282" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs/>
                                    <path id="Vector" d="M18.08 0L2.91 0C1.3 0 0 1.3 0 2.91L0 12.51C0 14.12 1.3 15.42 2.91 15.42L18.08 15.42C19.69 15.42 21 14.12 21 12.51L21 2.91C21 1.3 19.69 0 18.08 0ZM7.3 10.4L3.22 13.89C2.93 14.13 2.5 14.1 2.25 13.81C2.01 13.52 2.04 13.09 2.33 12.84L6.41 9.36C6.7 9.12 7.13 9.15 7.38 9.44C7.62 9.73 7.59 10.16 7.3 10.4ZM10.5 9.08C9.95 9.08 9.42 8.9 9.01 8.54L9.01 8.54L9 8.54C9.01 8.54 9.01 8.54 9.01 8.54L2.74 3.1C2.45 2.85 2.42 2.42 2.67 2.14C2.92 1.85 3.35 1.82 3.64 2.07L9.91 7.51C10.04 7.62 10.26 7.71 10.5 7.71C10.73 7.71 10.95 7.63 11.09 7.5L11.09 7.5L17.35 2.07C17.64 1.82 18.07 1.85 18.32 2.14C18.57 2.42 18.54 2.85 18.25 3.1L11.98 8.54C11.57 8.9 11.04 9.08 10.5 9.08ZM18.74 13.81C18.49 14.1 18.06 14.13 17.77 13.89L13.69 10.4C13.4 10.16 13.37 9.73 13.61 9.44C13.86 9.15 14.29 9.12 14.58 9.36L18.66 12.84C18.95 13.09 18.98 13.52 18.74 13.81Z" fill="#467DD0" fill-opacity="1.000000" fill-rule="nonzero"/>
                                </svg>
                                <a href="mailto:japanauto_125@mail.ru" class="text-base font-semibold text-black">japanauto_125@mail.ru</a> 
                            </li>
                            <li class="flex gap-2 items-center">
                                <svg width="21.000000" height="21.000000" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs/>
                                    <path id="Vector" d="M12.11 10.87L14.8 12.43C15.07 12.58 15.15 12.93 15 13.18C14.85 13.45 14.52 13.54 14.25 13.39L11.51 11.81C11.23 12.02 10.88 12.15 10.5 12.15C9.58 12.15 8.84 11.41 8.84 10.5C8.84 9.77 9.3 9.16 9.94 8.93L9.94 3.87C9.94 3.56 10.2 3.31 10.5 3.31C10.8 3.31 11.05 3.57 11.05 3.87L11.05 8.93C11.69 9.16 12.15 9.77 12.15 10.5C12.15 10.63 12.14 10.75 12.11 10.87ZM10.5 21C16.29 21 21 16.29 21 10.5C21 4.7 16.29 0 10.5 0C4.7 0 0 4.7 0 10.5C0 16.29 4.7 21 10.5 21Z" fill="#467DD0" fill-opacity="1.000000" fill-rule="evenodd"/>
                                </svg>
                                
                                
                                    
                                <p class="text-base font-semibold text-black">Ежедневно <br><span class="text-gray">  с 08:00 до 20:00</span></p> 
                            </li>
                        </ul>
                        <ul class="flex gap-2">
                            <div class="w-max button__blue__to__dark__blue__to__gray text-sm p-2 up md:px-[40px] px-[10px]">
                                <a href="#popup1" class="popup-link">
                                    Подобрать автомобиль
                                </a>
                            </div>
                            
                            <a id="sap" class="bg-black p-2 rounded-full socials__btns w-max" href="https://api.whatsapp.com/send/?phone=79247388855&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%21%0A%0A%D0%9F%D0%B8%D1%88%D1%83+%D0%B8%D0%B7+%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F+2%D0%93%D0%98%D0%A1.%0A%0A&type=phone_number&app_absent=0">
                                <svg width="25" height="25" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.5028 0.75H11.4972C5.29422 0.75 0.25 5.79562 0.25 12C0.25 14.4609 1.04313 16.7419 2.39172 18.5939L0.989688 22.7733L5.31391 21.3909C7.09281 22.5694 9.21484 23.25 11.5028 23.25C17.7058 23.25 22.75 18.203 22.75 12C22.75 5.79703 17.7058 0.75 11.5028 0.75ZM18.0489 16.6364C17.7775 17.4028 16.7003 18.0384 15.8411 18.2241C15.2533 18.3492 14.4855 18.4491 11.9008 17.3775C8.59469 16.0078 6.46563 12.6483 6.29969 12.4303C6.14078 12.2123 4.96375 10.6514 4.96375 9.03703C4.96375 7.42266 5.78359 6.63656 6.11406 6.29906C6.38547 6.02203 6.83406 5.89547 7.26437 5.89547C7.40359 5.89547 7.52875 5.9025 7.64125 5.90812C7.97172 5.92219 8.13766 5.94188 8.35563 6.46359C8.62703 7.1175 9.28797 8.73188 9.36672 8.89781C9.44687 9.06375 9.52703 9.28875 9.41453 9.50672C9.30906 9.73172 9.21625 9.83156 9.05031 10.0228C8.88437 10.2141 8.72687 10.3603 8.56094 10.5656C8.40906 10.7442 8.2375 10.9355 8.42875 11.2659C8.62 11.5894 9.28094 12.668 10.2541 13.5342C11.5098 14.6522 12.528 15.0094 12.8922 15.1613C13.1636 15.2738 13.487 15.247 13.6853 15.0361C13.937 14.7647 14.2478 14.3147 14.5642 13.8717C14.7892 13.5539 15.0733 13.5145 15.3714 13.627C15.6752 13.7325 17.2825 14.527 17.613 14.6916C17.9434 14.8575 18.1614 14.9363 18.2416 15.0755C18.3203 15.2147 18.3203 15.8686 18.0489 16.6364Z" fill="white"/>
                                </svg>
                            </a>
                            <a id="tg" class="bg-black p-2 rounded-full socials__btns w-max" href="https://t.me/japanauto_125">
                                <svg width="25" height="25" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.07882 14.2211L8.70662 19.8749C9.23913 19.8749 9.46976 19.6278 9.74633 19.3312L12.243 16.7544L17.4162 20.8459C18.365 21.4169 19.0334 21.1162 19.2894 19.9032L22.6851 2.71916L22.686 2.71815C22.987 1.20346 22.1788 0.611149 21.2544 0.982735L1.29457 9.23558C-0.0676534 9.80663 -0.0470279 10.6267 1.063 10.9983L6.16593 12.7125L18.019 4.70264C18.5769 4.30372 19.0841 4.52444 18.6669 4.92337L9.07882 14.2211Z" fill="white"/>
                                </svg>
                            </a>
                            <a id="inst" class="bg-black p-2 rounded-full socials__btns w-max" href="https://www.instagram.com/japanauto125/">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.875 11.2083C0.875 6.33715 0.875 3.90157 2.38828 2.38828C3.90157 0.875 6.33715 0.875 11.2083 0.875H13.7917C18.6628 0.875 21.0985 0.875 22.6117 2.38828C24.125 3.90157 24.125 6.33715 24.125 11.2083V13.7917C24.125 18.6628 24.125 21.0985 22.6117 22.6117C21.0985 24.125 18.6628 24.125 13.7917 24.125H11.2083C6.33715 24.125 3.90157 24.125 2.38828 22.6117C0.875 21.0985 0.875 18.6628 0.875 13.7917V11.2083ZM20.25 6.6875C20.25 7.75756 19.3825 8.625 18.3125 8.625C17.2425 8.625 16.375 7.75756 16.375 6.6875C16.375 5.61744 17.2425 4.75 18.3125 4.75C19.3825 4.75 20.25 5.61744 20.25 6.6875ZM15.0833 13.7917C15.0833 15.2184 13.9268 16.375 12.5 16.375C11.0732 16.375 9.91667 15.2184 9.91667 13.7917C9.91667 12.3649 11.0732 11.2083 12.5 11.2083C13.9268 11.2083 15.0833 12.3649 15.0833 13.7917ZM17.6667 13.7917C17.6667 16.6451 15.3534 18.9583 12.5 18.9583C9.64653 18.9583 7.33333 16.6451 7.33333 13.7917C7.33333 10.9382 9.64653 8.625 12.5 8.625C15.3534 8.625 17.6667 10.9382 17.6667 13.7917Z" fill="white"/>
                                </svg>  
                            </a>
                        
                        </ul>
                    </div>

                    <div class="pt-20 w-full">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A37c2d7c946f9126e76a477e7ca815d42b6a8bd14b0bc56b5900f59c99e6aa228&amp;width=1440&amp;height=624&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                        
                        
                    </div>
            </section>
            
        </main>




<?php get_footer(); ?>