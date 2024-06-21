<?php 
    /* 
    Template name: card__news__item
    Template Post Type: post
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
                            <li class="breadcrumb__item">
                                <span class="font-bold text-bg-black md:text-base text-sm">Аукцион, дилеры или вторичка? Где лучше купить авто</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>  


            <!-- Новости -->
            <section id="last__news--card" data-scroll>
                <div class="container rounded-[30px] relative md:p-[50px] p-[20px]">
                    <div class="rounded-[30px] flex gap-5 md:flex-row flex-col">
                        <img style="width: -webkit-fill-available;" class="rounded-[30px] object-cover max-h-[500px] max-w-[500px]" src="<?php echo get_template_directory_uri() . '/src/img/main/news_1.webp'; ?>" alt="">
                        <div class="flex flex-col flow-wraw p-4 md:w-1/2 w-full justify-between">
                            <p class="text-black md:text-[40px] text-[20px] font-bold">Аукцион, дилеры или вторичка? Где лучше купить авто </p>
                            <p class="text-gray">
                                Вы собрались купить автомобиль, собрали бюджет, на ваш взгляд вполне себе неплохой… И что дальше? Местные рынки, поддержанные авто Некоторые отправятся на рынок вторички — за б/у авто. Поверили на слово сколько было владельцев, осмотрели авто. Вроде все в порядке, берем. Но, увы, владельцев по факту оказалось в три раза больше, ездила явно не девушка.
                                
                                
                            </p>

                            <a href="#" class="text-blue underline font-semibold">Вы собрались купить автомобиль, собрали бюджет, на ваш взгляд вполне себе неплохой… И что дальше? </a>

                            <div class="flex justify-between items-center flex-">
                                <date class="text-gray">12.04.2024</date>
                                <div class="flex justify-between items-center gap-2">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.49919 0.585205C4.14502 0.585205 0.58252 4.1477 0.58252 8.50187C0.58252 12.856 4.14502 16.4185 8.49919 16.4185C12.8534 16.4185 16.4159 12.856 16.4159 8.50187C16.4159 4.1477 12.8534 0.585205 8.49919 0.585205ZM11.8242 11.8269L7.70752 9.29354V4.54354H8.89502V8.6602L12.4575 10.7977L11.8242 11.8269Z" fill="#9BA5B4"/>
                                    </svg>
                                    <p class="text-gray">2 минуты</p>
                                </div>
                                    
                            </div>
                        </div>
                    </div>           
    
                    <div class="rounded-[30px] flex gap-5 md:pt-[40px] pt-[0px]">
                        <div class="flex flex-col flow-wraw p-4">
                            <p class="text-black md:text-[40px] text-[20px] font-bold">Дилеры </p>

                            <p class="text-gray">
                                Тойота центр во Владивостоке
                            </p>

                            <p class="text-black">    
                                К черту рынок поддержанных авто. Вы хотите новую, не ездившую ни по каким дорогам, со скрипящим кожаным салоном, который еще в заводской пленке.
                                Вы приходите в салон, вам называют цену за машину. По бюджету подходит. Вы соглашаетесь на заказ новенькой машинки.
                                Из плюсов отметим гарантию на авто и сервис. А далее о минусах.
                                Дилер приглашает вас через какое-то время в салон — машина на месте, забирайте. Только есть несколько НО… Цена совсем «чуть-чуть» выше, чем заявленная (вам явно не хватает денег) поскольку на авто поставили доп. оборудование и снять его уже никак нельзя, комплектация слегка не та, ну и что? А если нужна та самая, ну подождите еще «немного» (долгие месяцы), привезем заново без допов (но не факт).
                            </p>
                        </div>
                    </div>   

                    <div class="rounded-[30px] flex gap-5 md:pt-[40px] pt-[0px]">
                        <div class="flex flex-col flow-wraw p-4">
                            <p class="text-black md:text-[40px] text-[20px] font-bold">Дилеры </p>

                            <p class="text-gray">
                                Тойота центр во Владивостоке
                            </p>

                            <p class="text-black">    
                                К черту рынок поддержанных авто. Вы хотите новую, не ездившую ни по каким дорогам, со скрипящим кожаным салоном, который еще в заводской пленке.
                                Вы приходите в салон, вам называют цену за машину. По бюджету подходит. Вы соглашаетесь на заказ новенькой машинки.
                                Из плюсов отметим гарантию на авто и сервис. А далее о минусах.
                                Дилер приглашает вас через какое-то время в салон — машина на месте, забирайте. Только есть несколько НО… Цена совсем «чуть-чуть» выше, чем заявленная (вам явно не хватает денег) поскольку на авто поставили доп. оборудование и снять его уже никак нельзя, комплектация слегка не та, ну и что? А если нужна та самая, ну подождите еще «немного» (долгие месяцы), привезем заново без допов (но не факт).
                            </p>
                        </div>
                    </div>           


                    <!-- Контактная форма -->
                    <div id="form" class="md:pt-[120px] pt-[60px] md:mb-auto mb-[80px] h-screen p-5" data-scroll>
                        <div class=" bg-blue rounded-[30px] md:p-[85px] p-[25px] relative md:h-auto h-screen">
                            <div class="md:w-2/3 w-full">
                                <h2 class="text-white">Подберем идеальный автомобиль для вас</h2>
                            </div>

                            <div class="md:w-2/3 w-full flex gap-3 flex-col md:pt-5 pt-2">
                                <p class="white-circle-text text-white font-semibold md:text-2xl text-base">И не только, также можем доставить спецтехнику под заказ</p>
                                <p class="text-light-gray md:text-xl text-base">
                                    Оставьте свои контакты, наш специалист свяжется с вами и проконсультирует по всем вопросам, если не хотите ждать <a href="#" class="font-bold text-white underline">напишите на WhatsApp </a>
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
                                
                            <img class="scale-100 absolute md:-top-20 top-auto md:bottom-auto -bottom-10  -rotate-[5deg] right-0 md:z-0 z-0 wow fadeInRight"  data-wow-delay="0.1s" src="<?php echo get_template_directory_uri() . '/src/img/icons/flower.svg'; ?>" alt="" >
                            <img class="scale-100 absolute md:top-20  top-auto md:bottom-auto bottom-0 right-0 z-0 wow fadeInRight"  data-wow-delay="0.6s" src="<?php echo get_template_directory_uri() . '/src/img/main/car_catalog_1.webp'; ?>" alt="" >
                            <img class="scale-100 absolute md:top-56 top-auto md:bottom-auto -bottom-[40px] right-0 z-10 wow fadeInRight"  data-wow-delay="0.6s" src="<?php echo get_template_directory_uri() . '/src/img/main/car_catalog_2.webp'; ?>" alt="" >
                        </div>
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
                            <a href="#" class="text-gray">Все новости</a>
                            <svg width="19.003906" height="13.322266" viewBox="0 0 19.0039 13.3223" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs/>
                                <path id="Vector 45" d="M15.58 5.66L11.63 1.71C11.24 1.31 11.24 0.69 11.63 0.29C12.03 -0.1 12.65 -0.1 13.05 0.29L18.7 5.95C19.1 6.35 19.1 6.97 18.7 7.36L13.05 13.02C12.65 13.42 12.03 13.42 11.63 13.02C11.24 12.62 11.24 12 11.63 11.61L15.58 7.66L0 7.66L0 5.66L15.58 5.66Z" fill="rgb(155, 165, 180)" fill-opacity="1.000000" fill-rule="evenodd"/>
                            </svg>
                            
                        </div>
                    </div>
    
                    <div>
                      <ul class="grid md:grid-cols-2 grid-cols-1 gap-5">
                        <li class="rounded-[30px] flex gap-5 border border-light-gray md:flex-row flex-col">
                            <img style="width: -webkit-fill-available;" class="hover:scale-105 transition-all rounded-[30px] w-[250px] object-cover md:h-[250px] h-[170px]" src="<?php echo get_template_directory_uri() . '/src/img/main/news_1.webp'; ?>" alt="">
                            <div class="flex gap-5 flex-col flow-wraw p-4">
                                <a href="#" class="text-blue underline font-semibold">Аукцион, дилеры или вторичка? Где лучше купить авто </a>
                                <p class="text-gray">
                                    Японские машины, как и японский тюнинг, вызывают у российских автолюбителей неоднозначные эмоции. При этом, если авто просто ассоциируются с вполне...
                                </p>
                                <div class="flex justify-between items-center flex-">
                                    <date class="text-gray">12.04.2024</date>
                                    <div class="flex justify-between items-center gap-2">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.49919 0.585205C4.14502 0.585205 0.58252 4.1477 0.58252 8.50187C0.58252 12.856 4.14502 16.4185 8.49919 16.4185C12.8534 16.4185 16.4159 12.856 16.4159 8.50187C16.4159 4.1477 12.8534 0.585205 8.49919 0.585205ZM11.8242 11.8269L7.70752 9.29354V4.54354H8.89502V8.6602L12.4575 10.7977L11.8242 11.8269Z" fill="#9BA5B4"/>
                                        </svg>
                                        <p class="text-gray">2 минуты</p>
                                    </div>
                                        
                                </div>
                            </div>
                        </li>           
                        <li class="rounded-[30px] flex gap-5 border border-light-gray md:flex-row flex-col">
                            <img style="width: -webkit-fill-available;" class="hover:scale-105 transition-all rounded-[30px] w-[250px] object-cover md:h-[250px] h-[170px]" src="<?php echo get_template_directory_uri() . '/src/img/main/news_1.webp'; ?>" alt="">
                            <div class="flex gap-5 flex-col flow-wraw p-4">
                                <a href="#" class="text-blue underline font-semibold">Аукцион, дилеры или вторичка? Где лучше купить авто </a>
                                <p class="text-gray">
                                    Японские машины, как и японский тюнинг, вызывают у российских автолюбителей неоднозначные эмоции. При этом, если авто просто ассоциируются с вполне...
                                </p>
                                <div class="flex justify-between items-center flex-">
                                    <date class="text-gray">12.04.2024</date>
                                    <div class="flex justify-between items-center gap-2">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.49919 0.585205C4.14502 0.585205 0.58252 4.1477 0.58252 8.50187C0.58252 12.856 4.14502 16.4185 8.49919 16.4185C12.8534 16.4185 16.4159 12.856 16.4159 8.50187C16.4159 4.1477 12.8534 0.585205 8.49919 0.585205ZM11.8242 11.8269L7.70752 9.29354V4.54354H8.89502V8.6602L12.4575 10.7977L11.8242 11.8269Z" fill="#9BA5B4"/>
                                        </svg>
                                        <p class="text-gray">2 минуты</p>
                                    </div>
                                        
                                </div>
                            </div>
                        </li>           
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