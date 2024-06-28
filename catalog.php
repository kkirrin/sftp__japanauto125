<?php
    /*
        Template name: catalog
    */

?>

<?php get_header(2); ?>
<main>
            <h1 class="visually-hidden">Скрытый заголовок</h1>   
            
            <!-- Хлебные крошки -->
            <section id="popular" data-scroll>      
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
                            <li class="breadcrumb__item">
                                <span class="font-bold text-bg-black">Каталог</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>  

            <!-- Каталог -->
            <section class="pt-12 filter-swiper">
                <div class="container relative">
                    <h2 class="text-black pb-12">Каталог автомобилей </h2>

                    <div class="tabs-container__btns">
                        <button name="filter-name" value="2" class="filter_country md:text-lg text-xs _active">Автомобили из Японии</button>
                        <button name="filter-name" value="3" class="filter_country md:text-lg text-xs">Автомобили из Кореи</button>
                        <button name="filter-name" value="4" class="filter_country md:text-lg text-xs">Автомобили из Китая</button>
                    </div>
        
    
                    <div style="background-color: #F0F3F9; border-radius: 30px; padding-left: 45px; padding-right: 45px; padding-top: 30px;" class=" pb-10">
                        <div class=" pt-8 flex items-center justify-between flex-wrap gap-5">
                            <h3 class="text-start font-bold md:text-3xl text-base">
                                Подберите  автомобиль 
                            </h3>

                            <div class="flex gap-5 checkbox__container">
                                <div class="flex flex-row gap-2">
                                    <input name="filter_checkbox" type="radio" id="customCheckbox_1" class="hidden-checkbox" value="В наличии">
                                    <label for="customCheckbox_1" class="customCheckboxLabel"></label>
                                    <label class="font-medium">В наличии</label>
                                </div>
                                <div class="flex flex-row gap-2">
                                    <input name="filter_checkbox" type="radio" id="customCheckbox_2" class="hidden-checkbox" value="В пути">
                                    <label for="customCheckbox_2" class="customCheckboxLabel"></label>
                                    <label class="font-medium">В пути</label>
                                </div>
                                <div class="flex flex-row gap-2">
                                    <input name="filter_checkbox" type="radio" id="customCheckbox_3" class="hidden-checkbox" value="Под заказ">
                                    <label for="customCheckbox_3" class="customCheckboxLabel"></label>
                                    <label class="font-medium">Под заказ</label>
                                </div>
                            </div>

                        </div>    
                    
                        <div class="w-full rounded-xl">
                            <form id="formForMain" class="pt-10 pb-10 grid grid-cols-1 md:grid-cols-4 gap-4">
                                <div class="mb-4">
                                    <label class="block text-black text-sm mb-2 font-semibold" for="make">
                                        Марка
                                    </label>
                                    <select name="marka" id="marka" class="w-full px-4 py-2 pr-8 rounded-lg text-gray">
                                        <option class="text-opacity-10">Выберите марку</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-black text-sm mb-2 font-semibold" for="make">
                                        Модель
                                    </label>
                                    <select id="model" name="model" class="w-full px-4 py-2 pr-8 rounded-lg text-gray">
                                        <option class="text-opacity-10">Выберите модель</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-black text-sm mb-2 font-semibold" for="make">
                                        Топливо
                                    </label>
                                    <select id="fuel" name="fuel" class="w-full px-4 py-2 pr-8 rounded-lg text-gray">
                                        <option class="text-opacity-10">Выберите топливо</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-black text-sm mb-2 font-semibold " for="make">
                                        КПП
                                    </label>
                                    <select id="privod" name="privod" class="w-full px-4 py-2 pr-8 rounded-lg text-gray">
                                        <option class="text-opacity-10">Выберите трансмиссию</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="block text-black text-sm mb-2 font-semibold" for="make">
                                        Объем 
                                    </label>
                                    <div class="flex gap-10">
                                        <div class="w-full">
                                            <select id="volume_from" name="volume_from" class="select input block appearance-none w-full text-gray  px-4 py-2 pr-8 rounded">
                                                <option value=''>от</option>
                                                <?php 
                                                    for($i = 600; $i <= 6000; $i += 100) {
                                                        echo '<option value="'. $i .'">'.$i.'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="w-full custom-select">
                                            <select id="volume_to" name="volume_to" class="select text-gray input block appearance-none w-full px-4 py-2 pr-8 rounded" > 
                                                <option value="">до</option>
                                                <?php 
                                                    for($i = 600; $i <= 6000; $i += 100) {
                                                        echo '<option value="'. $i .'">'.$i.'</option>';
                                                    }
                                                ?>
                                            </select>   
                                        
                                        </div>
                                    
                                    </div>
                                </div>
                            
                                <div class="mb-4">
                                    <label class="block text-black text-sm mb-2 font-semibold" for="make">
                                        Год 
                                    </label>
                                    <div class="flex gap-10">
                                        <div class="w-full">
                                            <select id="year_from" name="year_from" class="text-gray w-full px-4 py-2 pr-8 rounded-lg">
                                                <option value="">от</option>
                                                <?php 
                                                    for($i = (int) date('Y'); $i > 1999; $i--) {
                                                        echo '<option value="'. $i .'">'.$i.'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="w-full">
                                            <select id="year_to" name="year_to" class=" text-gray w-full px-4 py-2 pr-8 rounded-lg" > 
                                                <option value="">до</option>
                                                <?php 
                                                    for($i = (int) date('Y'); $i > 1999; $i--) {
                                                        echo '<option value="'. $i .'">'.$i.'</option>';
                                                        var_dump($i);
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <label class="block text-black text-sm mb-2 font-semibold" for="make">
                                        Цена 
                                    </label>
                                    <div class="flex gap-10">
                                    <div class="w-full">
                                        <input type="number" id="price_from" name="price_from" class="w-full px-4 py-2 pr-8 rounded-lg text-gray" />
                                    </div>
                                    <div class="w-full">
                                        <input type="number" id="price_to" name="price_to" class="w-full px-4 py-2 pr-8 rounded-lg text-gray" />
                                    </div>
                                    </div>
                                </div>

                                
                                
                                <div class="flex items-center justify-end pt-2 ">
                                    <button id="send_form" class="up bg-blue rounded-[15px] text-white button py-3 px-5 capitalize w-[287px] text-center">
                                        Показать
                                    </button>
                                    <button class=" text-yellow py-2 px-10 underline text-gray" type="reset">
                                        Сбросить
                                    </button>
                                </div>
                            </form>
                        </div>         
                    </div>

                    <div id="catalog_page" class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4  overflow-hidden pt-12 md:pt-32 gap-10">
                        
                    </div>                      
    
                        
                </div>
            </section>

            <!-- Контактная форма -->
            <section id="form" class="md:pt-[120px] pt-[60px] md:mb-auto mb-[80px] md:p-5 p-0" data-scroll>
                <div class="container rounded-[30px] relative">
                    <img class="md:block hidden rounded-[20px] parallax__img__first" src="<?php echo get_template_directory_uri() . '/src/img/main/catalog_bg.webp'; ?>" alt="">
                    <img class="block md:hidden rounded-[20px] h-screen w-full" src="<?php echo get_template_directory_uri() . '/src/img/main/catalog_s.webp'; ?>" alt="">
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
                        
                        
                        <img class="catalog_pattern_img scale-90 absolute md:-top-20 top-auto md:bottom-auto -bottom-10  -rotate-[5deg] md:z-0 z-0 wow fadeInRight parallax__img__first"  data-wow-delay="0.1s" src="<?php echo get_template_directory_uri() . '/src/img/icons/flower_black.svg'; ?>" alt="" >
                    </div>
            </section>
          
            
        </main>
       




<?php get_footer(); ?>