<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Подберем автомобиль по вашему бюджету на аукционах Японии и доставим в любую точку России. Купите автомобиль мечты и сэкономьте до 50% по сравнению со вторичным рынком">
    <title>JapanAuto125</title>

    <?php wp_head(); ?>
</head>

<body class="wrapper">
    
    <div>
        <header class="z-10 w-full md-28 transition-colors py-4">
            <div class="container md:gap-5 items-center justify-between flex md:pt-2">
                    <div class="relative w-full z-10 flex justify-center items-center gap-5">
                        <!-- Меню кнопка -->
                        <div class="btn__menu md:flex hidden clip_box top left w-[180px] h-full">
                            <div class="clip w-[180px] flex items-center">
                                <div class="bg__btn flex items-center border border-blue rounded-xl p-2">
                                    <button class="flex items-center gap-2 bg-red pl-10 pr-2 py-1 rounded">
                                        <svg class="h-6 w-6" viewBox="0 0 64 48">
                                            <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                                            <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                                             <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                                        </svg>
                                    </button>        
                                    <span class="text-blue font-semibold">Меню</span>
                                </div>
                            </div>
                        </div>
                                              
                        <div class="menu overflow-hidden ">
                            <ul class="flex flex-col text-white">
                                <li class="px-4 mb-4"><a
                                        href="https://japanauto125.ru/?page_id=8">Все автомобили</a>
                                </li>
                                <li class="px-4 mb-4"><a href="https://japanauto125.ru/?page_id=8?country=japan">Автомобили из Японии</a></li>
                                <li class="px-4 mb-4"><a href="https://japanauto125.ru/?page_id=8/?country=korea">Автомобили из Кореи</a></li>
                                <li class="px-4 mb-4"><a href="https://japanauto125.ru/?page_id=8/?country=china">Автомобили из Китая</a></li>
                                <li class="px-4 mb-4"><a href="https://japanauto125.ru/?page_id=10">Новости</a></li>
                                <li class="px-4 mb-4"><a href="https://japanauto125.ru/?page_id=63">Образец договора</a></li>

                                <li class="px-4 mb-4">г. Уссурийск, Тургенева 1-й переулок, 5</li>
                               
                            </ul>
                        </div>


                        <!-- Мобильная кнопка -->
                         <div class="clip_box top left pt-[18px]">
                             <div class="btn__menu--mobile items-center gap-10 md:hidden flex clip">
                                    <button class="flex items-center gap-2 pl-10 pr-2 py-1">
                                        <svg class="h-3 w-3" viewBox="0 0 64 48">
                                            <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                                            <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                                            <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                                        </svg>
                                    </button>   
                                </div>
                        </div>

                        <a href="/">
                            <img class="m-auto md:hidden block md:w-[200px] sm:w-[128px] w-[120px] pt-5" width="204" src="<?php echo get_template_directory_uri() .'/src/img/logo.svg'; ?>" >
                        </a>


                        <div class="mobile-menu w-full">
                            <div class="container flex md:justify-between justify-evenly md:flex-nowrap flex-wrap text-white ">
                                <div>
                                    <ul class="text-gray md:text-base text-xs">

                                        <li class="pb-8 font-bold text-gray text-base">
                                            <a href="https://japanauto125.ru/?page_id=8">Все автомобили</a>
                                        </li>  
                                        <li class="pb-8 font-bold text-gray text-base">
                                            <a href="https://japanauto125.ru/?page_id=8?country=japan">Автомобили из Японии</a>
                                        </li>  
                                        <li class="pb-8 font-bold text-gray text-base">
                                            <a href="https://japanauto125.ru/?page_id=8/?country=korea">Автомобили из Кореи</a>
                                        </li>  
                                        <li class="pb-8 font-bold text-gray text-base">
                                            <a href="https://japanauto125.ru/?page_id=8/?country=china">Автомобили из Китая</a>
                                        </li>  
                                        <li class="pb-8 font-bold text-gray text-base">
                                            <a href="https://japanauto125.ru/?page_id=10">Новости</a>
                                        </li>   
                                        <li class="pb-8 font-bold text-gray text-base">
                                            <a href="https://japanauto125.ru/?page_id=63">Образец договора</a>
                                        </li>  
                                        <a href="tel:+79247388555" class="text-black font-bold text-base pb-8">+7 (924) 738‒85‒55</a>
                                        <li class="pb-8 font-bold text-black text-base"><p>г. Уссурийск, Тургенева 1-й переулок, 5</p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    
                        <ul class="hidden md:flex gap-5 justify-center items-center pt-4 z-100">
                            <li class="mr-1">
                                <a href="/"> 
                                    <img class="m-auto md:w-52 w-44" width="204" src="<?php echo get_template_directory_uri() .'/src/img/logo.svg'; ?>" >
                                </a>
                            </li>
                            <li class="mr-1"><a class="text-white hover:text-blue transition-all active:text-gray" href="https://japanauto125.ru/?page_id=8">Каталог</a></li>
                            <li class="mr-1"><a class="text-white hover:text-blue transition-all active:text-gray" href="https://japanauto125.ru/?page_id=63">Образец договора</a></li>
                            <li class="mr-1"><p class="text-white">г. Уссурийск, Тургенева 1-й переулок, 5</p></li>
                            <li class="mr-1"><a class="text-white hover:text-blue transition-all active:text-gray" href="tel:+79247388555">+7 (924) 738-85-55</a></li>
                        </ul>

                        <ul class="flex gap-4 md:hidden pt-5">
                            <a id="sap" class="bg-blue p-2 rounded-full socials__btns" href="https://api.whatsapp.com/send/?phone=79247388855&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%21%0A%0A%D0%9F%D0%B8%D1%88%D1%83+%D0%B8%D0%B7+%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F+2%D0%93%D0%98%D0%A1.%0A%0A&type=phone_number&app_absent=0">
                                <svg width="16" height="16" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.5028 0.75H11.4972C5.29422 0.75 0.25 5.79562 0.25 12C0.25 14.4609 1.04313 16.7419 2.39172 18.5939L0.989688 22.7733L5.31391 21.3909C7.09281 22.5694 9.21484 23.25 11.5028 23.25C17.7058 23.25 22.75 18.203 22.75 12C22.75 5.79703 17.7058 0.75 11.5028 0.75ZM18.0489 16.6364C17.7775 17.4028 16.7003 18.0384 15.8411 18.2241C15.2533 18.3492 14.4855 18.4491 11.9008 17.3775C8.59469 16.0078 6.46563 12.6483 6.29969 12.4303C6.14078 12.2123 4.96375 10.6514 4.96375 9.03703C4.96375 7.42266 5.78359 6.63656 6.11406 6.29906C6.38547 6.02203 6.83406 5.89547 7.26437 5.89547C7.40359 5.89547 7.52875 5.9025 7.64125 5.90812C7.97172 5.92219 8.13766 5.94188 8.35563 6.46359C8.62703 7.1175 9.28797 8.73188 9.36672 8.89781C9.44687 9.06375 9.52703 9.28875 9.41453 9.50672C9.30906 9.73172 9.21625 9.83156 9.05031 10.0228C8.88437 10.2141 8.72687 10.3603 8.56094 10.5656C8.40906 10.7442 8.2375 10.9355 8.42875 11.2659C8.62 11.5894 9.28094 12.668 10.2541 13.5342C11.5098 14.6522 12.528 15.0094 12.8922 15.1613C13.1636 15.2738 13.487 15.247 13.6853 15.0361C13.937 14.7647 14.2478 14.3147 14.5642 13.8717C14.7892 13.5539 15.0733 13.5145 15.3714 13.627C15.6752 13.7325 17.2825 14.527 17.613 14.6916C17.9434 14.8575 18.1614 14.9363 18.2416 15.0755C18.3203 15.2147 18.3203 15.8686 18.0489 16.6364Z" fill="white"/>
                                </svg>
                            </a>
                            <a id="tg" class="bg-blue p-2 rounded-full socials__btns" href="https://t.me/japanauto_125">
                                <svg width="16" height="16" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.07882 14.2211L8.70662 19.8749C9.23913 19.8749 9.46976 19.6278 9.74633 19.3312L12.243 16.7544L17.4162 20.8459C18.365 21.4169 19.0334 21.1162 19.2894 19.9032L22.6851 2.71916L22.686 2.71815C22.987 1.20346 22.1788 0.611149 21.2544 0.982735L1.29457 9.23558C-0.0676534 9.80663 -0.0470279 10.6267 1.063 10.9983L6.16593 12.7125L18.019 4.70264C18.5769 4.30372 19.0841 4.52444 18.6669 4.92337L9.07882 14.2211Z" fill="white"/>
                                </svg>
                            </a>
                        </ul>

                        <div class="clip_box top right md:hidden flex pt-[20px]">
                            <div class="clip">
                                <a id="inst" class="bg-blue p-2 rounded-full socials__btns md:hidden block" href="https://www.instagram.com/japanauto125/">
                                    <svg width="16" height="16" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.875 11.2083C0.875 6.33715 0.875 3.90157 2.38828 2.38828C3.90157 0.875 6.33715 0.875 11.2083 0.875H13.7917C18.6628 0.875 21.0985 0.875 22.6117 2.38828C24.125 3.90157 24.125 6.33715 24.125 11.2083V13.7917C24.125 18.6628 24.125 21.0985 22.6117 22.6117C21.0985 24.125 18.6628 24.125 13.7917 24.125H11.2083C6.33715 24.125 3.90157 24.125 2.38828 22.6117C0.875 21.0985 0.875 18.6628 0.875 13.7917V11.2083ZM20.25 6.6875C20.25 7.75756 19.3825 8.625 18.3125 8.625C17.2425 8.625 16.375 7.75756 16.375 6.6875C16.375 5.61744 17.2425 4.75 18.3125 4.75C19.3825 4.75 20.25 5.61744 20.25 6.6875ZM15.0833 13.7917C15.0833 15.2184 13.9268 16.375 12.5 16.375C11.0732 16.375 9.91667 15.2184 9.91667 13.7917C9.91667 12.3649 11.0732 11.2083 12.5 11.2083C13.9268 11.2083 15.0833 12.3649 15.0833 13.7917ZM17.6667 13.7917C17.6667 16.6451 15.3534 18.9583 12.5 18.9583C9.64653 18.9583 7.33333 16.6451 7.33333 13.7917C7.33333 10.9382 9.64653 8.625 12.5 8.625C15.3534 8.625 17.6667 10.9382 17.6667 13.7917Z" fill="white"/>
                                    </svg>  
                                </a>
                            </div>
                        </div>

                        <div class="md:flex hidden clip_box top right">
                            <div class="clip w-[180px] flex">
                                <ul class="flex gap-4 clip ">
                                    <a id="sap" class="bg-blue p-2 rounded-full socials__btns" href="https://api.whatsapp.com/send/?phone=79247388855&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%21%0A%0A%D0%9F%D0%B8%D1%88%D1%83+%D0%B8%D0%B7+%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F+2%D0%93%D0%98%D0%A1.%0A%0A&type=phone_number&app_absent=0">
                                        <svg width="25" height="25" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.5028 0.75H11.4972C5.29422 0.75 0.25 5.79562 0.25 12C0.25 14.4609 1.04313 16.7419 2.39172 18.5939L0.989688 22.7733L5.31391 21.3909C7.09281 22.5694 9.21484 23.25 11.5028 23.25C17.7058 23.25 22.75 18.203 22.75 12C22.75 5.79703 17.7058 0.75 11.5028 0.75ZM18.0489 16.6364C17.7775 17.4028 16.7003 18.0384 15.8411 18.2241C15.2533 18.3492 14.4855 18.4491 11.9008 17.3775C8.59469 16.0078 6.46563 12.6483 6.29969 12.4303C6.14078 12.2123 4.96375 10.6514 4.96375 9.03703C4.96375 7.42266 5.78359 6.63656 6.11406 6.29906C6.38547 6.02203 6.83406 5.89547 7.26437 5.89547C7.40359 5.89547 7.52875 5.9025 7.64125 5.90812C7.97172 5.92219 8.13766 5.94188 8.35563 6.46359C8.62703 7.1175 9.28797 8.73188 9.36672 8.89781C9.44687 9.06375 9.52703 9.28875 9.41453 9.50672C9.30906 9.73172 9.21625 9.83156 9.05031 10.0228C8.88437 10.2141 8.72687 10.3603 8.56094 10.5656C8.40906 10.7442 8.2375 10.9355 8.42875 11.2659C8.62 11.5894 9.28094 12.668 10.2541 13.5342C11.5098 14.6522 12.528 15.0094 12.8922 15.1613C13.1636 15.2738 13.487 15.247 13.6853 15.0361C13.937 14.7647 14.2478 14.3147 14.5642 13.8717C14.7892 13.5539 15.0733 13.5145 15.3714 13.627C15.6752 13.7325 17.2825 14.527 17.613 14.6916C17.9434 14.8575 18.1614 14.9363 18.2416 15.0755C18.3203 15.2147 18.3203 15.8686 18.0489 16.6364Z" fill="white"/>
                                        </svg>
                                    </a>
                                    <a id="tg" class="bg-blue p-2 rounded-full socials__btns" href="https://t.me/japanauto_125">
                                        <svg width="25" height="25" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.07882 14.2211L8.70662 19.8749C9.23913 19.8749 9.46976 19.6278 9.74633 19.3312L12.243 16.7544L17.4162 20.8459C18.365 21.4169 19.0334 21.1162 19.2894 19.9032L22.6851 2.71916L22.686 2.71815C22.987 1.20346 22.1788 0.611149 21.2544 0.982735L1.29457 9.23558C-0.0676534 9.80663 -0.0470279 10.6267 1.063 10.9983L6.16593 12.7125L18.019 4.70264C18.5769 4.30372 19.0841 4.52444 18.6669 4.92337L9.07882 14.2211Z" fill="white"/>
                                        </svg>
                                    </a>
                                    <a id="inst" class="bg-blue p-2 rounded-full socials__btns" href="https://www.instagram.com/japanauto125/">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.875 11.2083C0.875 6.33715 0.875 3.90157 2.38828 2.38828C3.90157 0.875 6.33715 0.875 11.2083 0.875H13.7917C18.6628 0.875 21.0985 0.875 22.6117 2.38828C24.125 3.90157 24.125 6.33715 24.125 11.2083V13.7917C24.125 18.6628 24.125 21.0985 22.6117 22.6117C21.0985 24.125 18.6628 24.125 13.7917 24.125H11.2083C6.33715 24.125 3.90157 24.125 2.38828 22.6117C0.875 21.0985 0.875 18.6628 0.875 13.7917V11.2083ZM20.25 6.6875C20.25 7.75756 19.3825 8.625 18.3125 8.625C17.2425 8.625 16.375 7.75756 16.375 6.6875C16.375 5.61744 17.2425 4.75 18.3125 4.75C19.3825 4.75 20.25 5.61744 20.25 6.6875ZM15.0833 13.7917C15.0833 15.2184 13.9268 16.375 12.5 16.375C11.0732 16.375 9.91667 15.2184 9.91667 13.7917C9.91667 12.3649 11.0732 11.2083 12.5 11.2083C13.9268 11.2083 15.0833 12.3649 15.0833 13.7917ZM17.6667 13.7917C17.6667 16.6451 15.3534 18.9583 12.5 18.9583C9.64653 18.9583 7.33333 16.6451 7.33333 13.7917C7.33333 10.9382 9.64653 8.625 12.5 8.625C15.3534 8.625 17.6667 10.9382 17.6667 13.7917Z" fill="white"/>
                                        </svg>  
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>

            </div>
                
             
            <img class="md:hidden block bg-bg-gray p-2 rounded-md" src="<?php echo get_template_directory_uri() . '/src/img/icons/sap.svg'; ?>" alt="" ></a></li>
        </header>