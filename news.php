<?php
    /*
        Template name: news
    */

?>

<?php get_header(2); ?>


<main>
            <h1 class="visually-hidden">Скрытый заголовок</h1>   
            
            <!-- Хлебные крошки -->
            <section id="popular" class="md:pt-[40px] pt-[0px] md:pb-[0px] pb-[20px]" data-scroll>      
                <div class="container">
                    <div class="breadcrumb">
                        <ul class="breadcrumb__list flex items-center justify-start gap-2">
                            <li class="breadcrumb__item text-bg-black opacity-60 ">
                                <a href="/" class="font-medium">
                                    Главная
                                </a>
                            </li>
                            <li class="opacity-60 text-bg-black">
                                /
                            </li>
                            <li class="breadcrumb__item">
                                <span class="opacity-60 text-bg-black">Новости</span>
                            </li>
                            <li class="opacity-60 text-bg-black">
                                /
                            </li>
                        </ul>
                    </div>
                </div>
            </section>  


            <!-- Новости -->
            <section id="news" class="p-5" data-scroll>
                <div class="container md:p-[40px] p-[25px] relative">
                    <div class="md:w-2/3 w-full">
                        <h2 class="text-black md:text-[40px] text-[20px] pb-4"> Новости и обзоры</h2>
                    </div>
            
                    <ul class="grid-container">    
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
                                echo '  <li class="grid-item">';
                                echo '      <img src="'. get_field('photo__news') .'" alt="">';
                                echo '      <div class="wrapper-content">';
                                echo '          <p class="wrapper-content__text">';
                                echo '              '. get_field('text_news') .'';
                                echo '          </p>';
                                echo '          <a href="'. get_permalink() .'" class="wrapper-content__link">'. get_field('name_news') .'</a>';
                                echo '          <div class="wrapper-content__date">';
                                echo '              <date class="text-gray">'. get_field('date_news') .'</date> '; 
                                echo '              <div class="flex justify-between items-center gap-2">';
                                echo '                  <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.49919 0.585205C4.14502 0.585205 0.58252 4.1477 0.58252 8.50187C0.58252 12.856 4.14502 16.4185 8.49919 16.4185C12.8534 16.4185 16.4159 12.856 16.4159 8.50187C16.4159 4.1477 12.8534 0.585205 8.49919 0.585205ZM11.8242 11.8269L7.70752 9.29354V4.54354H8.89502V8.6602L12.4575 10.7977L11.8242 11.8269Z" fill="#9BA5B4"/>
                                                        </svg>';
                                echo '                  <p class="text-gray">'. get_field('count_watches') .' минуты</p>';
                                echo '              </div>';
                                echo '          </div>
                                            </div>
                                        </li>                                              
                                            
                                    ';
                        endforeach;
                        wp_reset_postdata(); 
                        ?>          
                    </ul>
                </div>
            </section>

            
            <!-- Подписывайтесь -->
            <section id="socials" class="p-5 md:pt-[120px] pt-[60px]" data-scroll>
                <div class="container bg-light-gray rounded-[30px] md:p-[40px] p-[25px] relative md:h-auto h-screen">
                    <div class="md:w-2/3 w-full">
                        <h3 class="text-black md:text-[40px] text-[20px] pb-4">#Подписывайтесь <br class="block md:hidden"> на нас в <span class="text-blue">соцсетях</span></h3>
                        <p class="text-gray md:text-xl text-sm">Где мы рассказываем о всей процедуре приобретения, оформлении и доставке авто, а также публикуем видео-отзывы реальных клиентов</p>
                    </div>
                
                    <div class="clip_box top right">
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

                    <div class="grid-container">
                        <img class="grid-item" src="<?php echo get_template_directory_uri() . '/src/img/main/social_placeholder_1.png'; ?>" alt="">
                        <img class="grid-item" src="<?php echo get_template_directory_uri() . '/src/img/main/social_placeholder_2.png'; ?>" alt="">
                        <img class="grid-item" src="<?php echo get_template_directory_uri() . '/src/img/main/social_placeholder_3.png'; ?>" alt="">
                    </div>
                </div>
            </section>
        
        </main>


<?php get_footer(); ?>