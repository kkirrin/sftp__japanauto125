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
                    


                    <?php
                       $country = isset($_GET['country']) ? $_GET['country'] : '';

                       if ($country == 'japan') {
                           echo '<div class="tabs-container__btns">
                               <a href="https://japanauto125.ru/catalog/?country=japan" class="_tabs-item__link md:text-lg text-xs _active font-semibold">Автомобили из Японии</a>
                               <a href="https://japanauto125.ru/catalog/?country=korea" class="_tabs-item__link md:text-lg text-xs font-semibold">Автомобили из Кореи</a>
                               <a href="https://japanauto125.ru/catalog/?country=china" class="_tabs-item__link md:text-lg text-xs font-semibold">Автомобили из Китая</a>
                           </div>';
                       } elseif ($country == 'korea') {
                           echo '<div class="tabs-container__btns">
                               <a href="https://japanauto125.ru/catalog/?country=japan" class="_tabs-item__link md:text-lg text-xs font-semibold">Автомобили из Японии</a>
                               <a href="https://japanauto125.ru/catalog/?country=korea" class="_tabs-item__link md:text-lg text-xs _active font-semibold">Автомобили из Кореи</a>
                               <a href="https://japanauto125.ru/catalog/?country=china" class="_tabs-item__link md:text-lg text-xs font-semibold">Автомобили из Китая</a>
                           </div>';
                       } elseif ($country == 'china') {
                           echo '<div class="tabs-container__btns">
                               <a href="https://japanauto125.ru/catalog/?country=japan" class="_tabs-item__link md:text-lg text-xs font-semibold">Автомобили из Японии</a>
                               <a href="https://japanauto125.ru/catalog/?country=korea" class="_tabs-item__link md:text-lg text-xs font-semibold">Автомобили из Кореи</a>
                               <a href="https://japanauto125.ru/catalog/?country=china" class="_tabs-item__link md:text-lg text-xs _active font-semibold">Автомобили из Китая</a>
                           </div>';
                       } else {
                           echo '<div class="tabs-container__btns">
                               <a href="https://japanauto125.ru/catalog/?country=japan" class="_tabs-item__link md:text-lg text-xs _active font-semibold">Автомобили из Японии</a>
                               <a href="https://japanauto125.ru/catalog/?country=korea" class="_tabs-item__link md:text-lg text-xs font-semibold">Автомобили из Кореи</a>
                               <a href="https://japanauto125.ru/catalog/?country=china" class="_tabs-item__link md:text-lg text-xs font-semibold">Автомобили из Китая</a>
                           </div>';
                       }
                        
                    ?>
                   
    
                    <div class="p-4 pb-10 bg-gray bg-opacity-10 rounded-2xl">
                        <div class=" pt-8 flex items-center justify-between flex-wrap gap-5">
                            <h3 class="text-start font-bold md:text-3xl text-base">
                                Подберите  автомобиль 
                            </h3>

                            <div class="flex gap-5">
                                <div class="flex flex-row gap-2">
                                    <input type="checkbox" id="customCheckbox" class="hidden-checkbox">
                                    <label for="customCheckbox" class="customCheckboxLabel"></label>
                                    <label class="font-medium">В наличии</label>
                                </div>
                                <div class="flex flex-row gap-2">
                                    <input type="checkbox" id="customCheckbox" class="hidden-checkbox">
                                    <label for="customCheckbox" class="customCheckboxLabel"></label>
                                    <label class="font-medium">В пути</label>
                                </div>
                                <div class="flex flex-row gap-2">
                                    <input type="checkbox" id="customCheckbox" class="hidden-checkbox">
                                    <label for="customCheckbox" class="customCheckboxLabel"></label>
                                    <label class="font-medium">Под заказ</label>
                                </div>
                            </div>

                        </div>    
                    
                        <div class="w-full rounded-xl">
                            <form id="formForMain" class="pt-10 pb-10 grid grid-cols-1 md:grid-cols-4 gap-4 uppercase">
                                <div class="mb-4">
                                    <label class="block text-black text-sm mb-2 font-semibold" for="make">
                                        Марка
                                    </label>
                                    <select name="brand" id="brand" class="w-full px-4 py-2 pr-8 rounded-lg text-gray">
                                        <option class="text-opacity-10">Выберите марку</option>
                                        <option class="text-opacity-10"></option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-black text-sm mb-2 font-semibold" for="make">
                                        Модель
                                    </label>
                                    <select id="model" name="make" class="w-full px-4 py-2 pr-8 rounded-lg text-gray">
                                        <option class="text-opacity-10">Выберите модель</option>
                                        <option class="text-opacity-10"></option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-black text-sm mb-2 font-semibold" for="make">
                                        Поколение
                                    </label>
                                    <select id="fuel" name="make" class="w-full px-4 py-2 pr-8 rounded-lg text-gray">
                                        <option class="text-gray">Бензин</option>
                                        <option class="text-gray">Дизель</option>
                                        <option class="text-gray">Газ</option>
                                        <option class="text-gray">Электричество</option>
                                        <option class="text-gray">Гибрид</option>

                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-black text-sm mb-2 font-semibold" for="make">
                                        Топливо
                                    </label>
                                    <select id="drive" name="make" class="w-full px-4 py-2 pr-8 rounded-lg text-gray">
                                        <option>Привод</option>
                                        <option>4WD</option>
                                        <option>Задний</option>
                                        <option>Передний</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-black text-sm mb-2 font-semibold " for="make">
                                        КПП
                                    </label>
                                    <select id="transmition" name="make" class="w-full px-4 py-2 pr-8 rounded-lg text-gray">
                                        <option>Трансмиссия</option>
                                        <option>АКПП</option>
                                        <option>Робот</option>
                                        <option>Вариантор</option>
                                        <option>Механика</option>

                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-black text-sm mb-2 font-semibold" for="make">
                                        Привод
                                    </label>
                                    <select id="transmition" name="make" class="w-full px-4 py-2 pr-8 rounded-lg text-gray">
                                        <option>Трансмиссия</option>
                                        <option>АКПП</option>
                                        <option>Робот</option>
                                        <option>Вариантор</option>
                                        <option>Механика</option>

                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="block text-black text-sm mb-2 font-semibold" for="make">
                                        Тип кузова
                                    </label>
                                    <select id="transmition" name="make" class="w-full px-4 py-2 pr-8 rounded-lg text-gray">
                                        <option>Трансмиссия</option>
                                        <option>АКПП</option>
                                        <option>Робот</option>
                                        <option>Вариантор</option>
                                        <option>Механика</option>

                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="block text-black text-sm mb-2 font-semibold" for="make">
                                        Объем 
                                    </label>
                                    <div class="flex gap-10">
                                        <div class="w-full">
                                            <select id="value_from" name="make" class="select input block appearance-none w-full text-gray  px-4 py-2 pr-8 rounded">
                                                <option>от</option>
                                                <option>600</option>
                                                <option>700</option>
                                                <option>800</option>
                                                <option>900</option>
                                                <option>1000</option>
                                                <option>1100</option>
                                                <option>1200</option>
                                                <option>1300</option>
                                                <option>1400</option>
                                                <option>1500</option>
                                                <option>1600</option>
                                                <option>1700</option>
                                                <option>1800</option>
                                                <option>1900</option>
                                                <option>2000</option>
                                                <option>2100</option>
                                                <option>2200</option>
                                                <option>2300</option>
                                                <option>2400</option>
                                                <option>2500</option>
                                                <option>2600</option>
                                                <option>2700</option>
                                                <option>2800</option>
                                                <option>2900</option>
                                                <option>3000</option>
                                                <option>3100</option>
                                                <option>3200</option>
                                                <option>3200</option>
                                                <option>3300</option>
                                                <option>3400</option>
                                                <option>3500</option>
                                                <option>3600</option>
                                                <option>3700</option>
                                                <option>3800</option>
                                                <option>3900</option>
                                                <option>4000</option>
                                                <option>4100</option>
                                                <option>4200</option>
                                                <option>4300</option>
                                                <option>4400</option>
                                                <option>4500</option>
                                                <option>4600</option>
                                                <option>4700</option>
                                                <option>4800</option>
                                                <option>4900</option>
                                                <option>5000</option>
                                                <option>5200</option>
                                                <option>5300</option>
                                                <option>5400</option>
                                                <option>5500</option>
                                                <option>5600</option>
                                                <option>5700</option>
                                                <option>5800</option>
                                                <option>5900</option>
                                                <option>6000</option>
                                            </select>
                                        </div>
                                        <div class="w-full custom-select">
                                            <select id="value_to" name="make" class="select text-gray input block appearance-none w-full px-4 py-2 pr-8 rounded" > 
                                                <option>до</option>
                                                <option>600</option>
                                                <option>700</option>
                                                <option>800</option>
                                                <option>900</option>
                                                <option>1000</option>
                                                <option>1100</option>
                                                <option>1200</option>
                                                <option>1300</option>
                                                <option>1400</option>
                                                <option>1500</option>
                                                <option>1600</option>
                                                <option>1700</option>
                                                <option>1800</option>
                                                <option>1900</option>
                                                <option>2000</option>
                                                <option>2100</option>
                                                <option>2200</option>
                                                <option>2300</option>
                                                <option>2400</option>
                                                <option>2500</option>
                                                <option>2600</option>
                                                <option>2700</option>
                                                <option>2800</option>
                                                <option>2900</option>
                                                <option>3000</option>
                                                <option>3100</option>
                                                <option>3200</option>
                                                <option>3200</option>
                                                <option>3300</option>
                                                <option>3400</option>
                                                <option>3500</option>
                                                <option>3600</option>
                                                <option>3700</option>
                                                <option>3800</option>
                                                <option>3900</option>
                                                <option>4000</option>
                                                <option>4100</option>
                                                <option>4200</option>
                                                <option>4300</option>
                                                <option>4400</option>
                                                <option>4500</option>
                                                <option>4600</option>
                                                <option>4700</option>
                                                <option>4800</option>
                                                <option>4900</option>
                                                <option>5000</option>
                                                <option>5200</option>
                                                <option>5300</option>
                                                <option>5400</option>
                                                <option>5500</option>
                                                <option>5600</option>
                                                <option>5700</option>
                                                <option>5800</option>
                                                <option>5900</option>
                                                <option>6000</option>
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
                                            <select id="year_from" name="make" class="text-gray w-full px-4 py-2 pr-8 rounded-lg">
                                                <option>от</option>
                                                <option>2001</option>
                                                <option>2002</option>
                                                <option>2003</option>
                                                <option>2004</option>
                                                <option>2005</option>
                                                <option>2006</option>
                                                <option>2007</option>
                                                <option>2008</option>
                                                <option>2009</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                                <option>2015</option>
                                                <option>2016</option>
                                                <option>2017</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                                <option>2020</option>
                                                <option>2021</option>
                                                <option>2022</option>
                                                <option>2023</option>
                                            </select>
                                        </div>
                                        <div class="w-full">
                                            <select id="year_to" name="make" class=" text-gray w-full px-4 py-2 pr-8 rounded-lg" > 
                                                <option>до</option>
                                                <option>2001</option>
                                                <option>2002</option>
                                                <option>2003</option>
                                                <option>2004</option>
                                                <option>2005</option>
                                                <option>2006</option>
                                                <option>2007</option>
                                                <option>2008</option>
                                                <option>2009</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                                <option>2015</option>
                                                <option>2016</option>
                                                <option>2017</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                                <option>2020</option>
                                                <option>2021</option>
                                                <option>2022</option>
                                                <option>2023</option>
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
                                        <select id="price_from" name="make" class="w-full px-4 py-2 pr-8 rounded-lg text-gray">
                                            <option>от</option>
                                            <option>100 000</option>
                                            <option>250 000</option>
                                            <option>500 000</option>
                                            <option>750 000</option>
                                            <option>1 000 000</option>
                                            <option>1 500 000</option>
                                            <option>2 000 000</option>
                                            <option>2 500 000</option>
                                            <option>3 000 000</option>
                                            <option>3 500 000</option>
                                            <option>4 500 000</option>
                                            <option>5 000 000</option>
                                            <option>5 500 000</option>
                                            <option>6 000 000</option>
                                            <option>6 500 000</option>
                                            <option>7 000 000</option>
                                            <option>8 000 000</option>
                                        </select>
                                    </div>
                                    <div class="w-full">
                                        <select id="price_to" name="make" class="w-full px-4 py-2 pr-8 rounded-lg text-gray" > 
                                            <option>до</option>
                                            <option>100 000</option>
                                            <option>250 000</option>
                                            <option>500 000</option>
                                            <option>750 000</option>
                                            <option>1 000 000</option>
                                            <option>1 500 000</option>
                                            <option>2 000 000</option>
                                            <option>2 500 000</option>
                                            <option>3 000 000</option>
                                            <option>3 500 000</option>
                                            <option>4 500 000</option>
                                            <option>5 000 000</option>
                                            <option>5 500 000</option>
                                            <option>6 000 000</option>
                                            <option>6 500 000</option>
                                            <option>7 000 000</option>
                                            <option>8 000 000</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                            
                                
                                
                                <div class="flex items-center justify-end pt-2 ">
                                    <a class="up bg-blue rounded-[15px] text-white button py-3 px-5 capitalize w-[287px] text-center" href="#popup3">
                                        Показать
                                    </a>
                                    <button class=" text-yellow py-2 px-10 underline text-gray" type="reset">
                                        Сбросить
                                    </button>
                                </div>
                            </form>
                        </div>         
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4  overflow-hidden pt-12 md:pt-32 gap-10">
                        <div class=" rounded-xl relative bg-light-gray">
                            <p class=" clip_box top left text-white"><span class="clip bg-blue rounded-full py-2 px-6">В наличии</span></p>
                            <a href="#">
                                    <img class="clip" src="<?php echo get_template_directory_uri() . '/src/img/main/car.webp'; ?>" alt="car">
                            </a> 
                                <div class="p-5">
                                    <p class="font-bold text-black py-4"> Kia K5</p>
                                    <div class="card__list">
                                        <ul>
                                            <li class="pb-2">Год выпуска</li>
                                            <li class="pb-2">Пробег</li>
                                            <li class="pb-2">Двигатель</li>
                                        </ul>
                                        <ul>
                                            <li class="pb-2 font-semibold">2014</li>
                                            <li class="pb-2 font-semibold">128 379 км</li>
                                            <li class="pb-2 font-semibold">ГБО, 1 999 см^3</li>
                                        </ul>
                                    </div>
                                    <p class="py-2">*Точную стоимость авто уточняйте у менеджера</p>
                        
                                    <div class="flex gap-2 justify-between items-center">
                                        <a href="#popup2" class="bg-blue text-white py-2 px-16 rounded-lg popup-link hover:bg-dark-blue transition-all">
                                            Заказать
                                        </a>
                                        <svg class="next new__items__next" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="25" cy="25" r="24" stroke="#467dd0" stroke-width="2"/>
                                            <path d="M16 24H15V26H16V24ZM34.7071 25.7071C35.0976 25.3166 35.0976 24.6834 34.7071 24.2929L28.3431 17.9289C27.9526 17.5384 27.3195 17.5384 26.9289 17.9289C26.5384 18.3195 26.5384 18.9526 26.9289 19.3431L32.5858 25L26.9289 30.6569C26.5384 31.0474 26.5384 31.6805 26.9289 32.0711C27.3195 32.4616 27.9526 32.4616 28.3431 32.0711L34.7071 25.7071ZM16 26L34 26V24L16 24V26Z" fill="#467dd0"/>
                                        </svg>
                                    </div>                             
                                </div>
                        </div>                    
                        <div class=" rounded-xl relative bg-light-gray">
                            <p class=" clip_box top left text-white"><span class="clip bg-blue rounded-full py-2 px-6">В наличии</span></p>
                            <a href="#">
                                    <img class="clip" src="<?php echo get_template_directory_uri() . '/src/img/main/car.webp'; ?>" alt="car">
                            </a> 
                                <div class="p-5">
                                    <p class="font-bold text-black py-4"> Kia K5</p>
                                    <div class="card__list">
                                        <ul>
                                            <li class="pb-2">Год выпуска</li>
                                            <li class="pb-2">Пробег</li>
                                            <li class="pb-2">Двигатель</li>
                                        </ul>
                                        <ul>
                                            <li class="pb-2 font-semibold">2014</li>
                                            <li class="pb-2 font-semibold">128 379 км</li>
                                            <li class="pb-2 font-semibold">ГБО, 1 999 см^3</li>
                                        </ul>
                                    </div>
                                    <p class="py-2">*Точную стоимость авто уточняйте у менеджера</p>
                        
                                    <div class="flex gap-2 justify-between items-center">
                                        <a href="#popup2" class="bg-blue text-white py-2 px-16 rounded-lg popup-link hover:bg-dark-blue transition-all">
                                            Заказать
                                        </a>
                                        <svg class="next new__items__next" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="25" cy="25" r="24" stroke="#467dd0" stroke-width="2"/>
                                            <path d="M16 24H15V26H16V24ZM34.7071 25.7071C35.0976 25.3166 35.0976 24.6834 34.7071 24.2929L28.3431 17.9289C27.9526 17.5384 27.3195 17.5384 26.9289 17.9289C26.5384 18.3195 26.5384 18.9526 26.9289 19.3431L32.5858 25L26.9289 30.6569C26.5384 31.0474 26.5384 31.6805 26.9289 32.0711C27.3195 32.4616 27.9526 32.4616 28.3431 32.0711L34.7071 25.7071ZM16 26L34 26V24L16 24V26Z" fill="#467dd0"/>
                                        </svg>
                                    </div>                             
                                </div>
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