<?php 
    /* 
    Template name: card__car__item
    Template Post Type: post
    */
?>

<?php get_header(2); ?>

<main>
            <h1 class="visually-hidden">Скрытый заголовок</h1>   
            
            <!-- Хлебные крошки -->
            <section id="popular" class="md:pt-[40px] pt-[20pxsw]" data-scroll>      
                <div class="container">
                    <div class="breadcrumb">
                        <ul class="breadcrumb__list flex items-center justify-start gap-2">
                            <li class="breadcrumb__item text-bg-black opacity-60 ">
                                <a href="/" class="font-medium">
                                    Главная
                                </a>
                            </li>
                            <li class="opacity-60 text-bg-black">
                                -
                            </li>
                            <li class="breadcrumb__item text-bg-black opacity-60 ">
                                <a href="https://japanauto125.ru/?page_id=8" class="font-medium">
                                    Каталог
                                </a>
                            </li>
                            <li class="opacity-60 text-bg-black">
                                -
                            </li>
                            <li class="breadcrumb__item">
                                <span class="font-bold text-bg-black"> <?php the_field('marka'); ?> <?php the_field('model'); ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>  


            <section class="pt-12 md:pt-14">
                <div class="container">
                    <h2 class="text-start text-4xl lg:text-5xl font-extrabold relative pb-5 text-black">
                         <?php the_field('marka'); ?> <?php the_field('model'); ?>
                             
                    </h2>
                      
                    <div class="md:hidden justify-start items-center gap-4 pb-7 flex">
                        <p class="text-xs md:text-sm py-2 px-6 bg-yellow rounded-3xl bg-blue text-white">
                            <?php the_field('status'); ?>
                        </p>
                </div>

                    <div class="flex flex-col md:flex-row gap-10 ">
                        <section class="section product__item w-full md:w-2/3">
                            <div class="container">
                                <div class="section__wrapper">
                                <div class="card card--product pt-10">
                                    <div class="slider card__slider relative">
                                        <div class="swiper slider__slider">
                                            <div class="swiper-wrapper gallery-wrapper">
                                               
                                            <?php
                                                $photos = get_field('gallery_auto');
                                                if ($photos) {
                                                    foreach ($photos as $photo) {
                                                       echo '<div class="swiper-slide">'; 
                                                       echo '<a href="' . esc_url($photo['url']) . '">';
                                                        echo    '<img class="img_car md:w-[600px] md:h-[500px] w-[335px] h-[290px] object-cover" src="' . esc_url($photo['url']) . '" alt="" data-caption="Image caption">';
                                                        echo '</a>';
                                                    echo    '</div>';
                                                    }
                                                } else {
                                                    echo 'No photos found.'; 
                                                }
                                            ?>

                                            </div>
                                       
                                        </div>
        
                                        <div class="swiper slider__thumb md:w-full w-80 md:relative absolute">
                                            <div class="swiper-wrapper">
                                            <?php
                                                $photos = get_field('gallery_auto');
                                                if ($photos) {
                                                    foreach ($photos as $photo) {
                                                        echo '<div class="swiper-slide">';
                                                        echo '<img class="img_car md:w-[120px] md:h-[100px] w-[60px] h-[60px]" src="' . esc_url($photo['url']) . '" alt="">';
                                                        echo '</div>';
                                                    }
                                                } else {
                                                    echo 'No photos found.'; 
                                                }
                                            ?>         
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </section>
        
                        <div class="md:pt-0 pt-20 w-full md:w-1/3">
                            <div class="flex justify-between items-center pt-10">
                                <ul>
                                    <li class="md:text-base text-xs text-gray pb-5">
                                    <div class="md:flex justify-start items-center gap-4 pb-7 hidden">
                                        <p class="text-xs md:text-sm py-2 px-6 bg-yellow rounded-3xl bg-blue text-white">
                                            <?php the_field('status'); ?>
                                        </p>
                                    </div>
                                        Бренд
                                    </li>
                                    <li class="md:text-base text-xs text-gray pb-5">
                                        Модель
                                    </li>
                                    <li class="md:text-base text-xs text-gray pb-5">
                                        Год выпуска
                                    </li>
                                    <li class="md:text-base text-xs text-gray pb-5">
                                        Тип кузова
                                    </li>
                                    <li class="md:text-base text-xs text-gray pb-5">
                                        Тип двигателя
                                    </li>
                                    <li class="md:text-base text-xs text-gray pb-5">
                                        Объем двигателя
                                    </li>
                                    <li class="md:text-base text-xs text-gray pb-5">
                                        Привод
                                    </li>
                                     <li class="md:text-base text-xs text-gray pb-5">
                                        Пробег
                                    </li>
                                </ul>
                                <ul>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php the_field('marka'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php the_field('model'); ?>
                                    
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php the_field('year'); ?>
                                        
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php the_field('kuzov'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php the_field('engine_v'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php the_field('privod'); ?> 
                                    </li>
                                     <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php the_field('milleage'); ?>
                                    </li>
                                </ul>
                               
                                
                            </div>

                            <p class="text-sm text-gray pb-5">*Точную стоимость авто уточняйте у менеджера</p>
                            
                            <a class="up bg-blue flex popup-link text-white justify-center py-4 px-5 rounded-2xl"
                            href="#popup3"
                            >Рассчитать стоимость
                        </a>
                        </div>
                   </div>
                </div>
            </section>
                
            <!-- Контактная форма -->
            <section id="form" class="md:pt-[120px] pt-[60px] md:mb-auto mb-[80px] md:p-5 p-0" data-scroll>
                <div class="container rounded-[30px] relative">
                    <img class="md:block hidden rounded-[20px] parallax__img__first" src="<?php echo get_template_directory_uri() . '/src/img/main/card_bg.webp'; ?>" alt="">
                    <img class="block md:hidden rounded-[20px] h-screen w-full" src="<?php echo get_template_directory_uri() . '/src/img/main/card_s.webp'; ?>" alt="">
                        <div class="absolute z-10 md:top-[50px] top-[20px] md:left-[100px] left-0 md:w-2/3 w-full md:p-[0] p-[50px]">
                            <div class="md:w-2/3 w-full">
                                <h2 class="text-white"> Не нашли нужный <br> автомобиль?</h2>
                            </div>
                                
                            <div class="md:w-2/3 w-full flex gap-3 flex-col md:pt-5 pt-2">
                                <p class="text-light-gray md:text-xl text-base blue-circle-text">
                                    Оставьте контакты и наш менеджер поможет вам с поиском
                                </p>
                        
                                <p class="text-white">Если не хотите ждать <a href="https://api.whatsapp.com/send/?phone=79247388855&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%21%0A%0A%D0%9F%D0%B8%D1%88%D1%83+%D0%B8%D0%B7+%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F+2%D0%93%D0%98%D0%A1.%0A%0A&type=phone_number&app_absent=0" class="font-bold text-blue underline">напишите на WhatsApp </a>
                                </p>
                        
                    
                                <div class="blur-pattern--auc rounded-[20px] md:p-[40px] p-[10px] mt-5 md:h-auto h-[40vh]">
                                    <form action="" class="flex gap-5 flex-wrap md:p-2 p-5">
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
                            </div>
                        </div>
                        <img class="scale-100 absolute md:-top-20 top-auto md:bottom-auto -bottom-10  -rotate-[5deg] right-0 md:z-0 z-0 wow fadeInRight parallax__img__first"  data-wow-delay="0.1s" src="<?php echo get_template_directory_uri() . '/src/img/icons/flower_black.svg'; ?>" alt="" >

                </div>
            </section>

        
        </main>



<?php get_footer(); ?>