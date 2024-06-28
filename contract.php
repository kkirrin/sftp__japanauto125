<?php
    /*
        Template name: contract
    */
?>

<?php get_header(2); ?>

    <main>
            <h1 class="visually-hidden">Скрытый заголовок</h1>


            <section class="pt-12">
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
                                <span class="font-bold text-bg-black">Договор</span>
                            </li>
                            <li class="breadcrumb__item">
                                <span class="font-bold text-bg-black"><a class="text-start md:text-center md:text-start text-base" style="text-decoration: underline;" href="">Скачать договор</a></span>
                            </li>
                        </ul>
                    </div>
            </section>

            <section class="pt-12 md:pt-14">
                <div class="container relative">
                   <?php echo the_content(); ?>
                </div>
            </section>
        </main>

<?php get_footer(); ?>