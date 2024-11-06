<?php

// правильный способ подключить стили и скрипты темы
add_action('wp_enqueue_scripts', 'theme_add_scripts');

add_filter('use_block_editor_for_post_type', '__return_false', 10);

add_theme_support('custom-templates');


// добавляет возможность выбрать img у записи(post) из админки
add_theme_support('post-thumbnails', array('post'));


show_admin_bar(false);

function theme_add_scripts()
{


    // Подключаем файл baguetteBox.min.css
    wp_enqueue_style('baguetteBox', get_template_directory_uri() . '/css/baguetteBox.min.css');

    // Подключаем файл baguetteBox.min.css
    wp_enqueue_style('baguetteBox', get_template_directory_uri() . '/css/baguetteBox.min.css');

    // Подключаем файл animate.css
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');

    // Подключаем файл main.css
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');

    // Подключаем файл main.css
    wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css');


    // Подключаем js файл swiper-bundle.min.js
    wp_enqueue_script('swiper-bundle.min', get_template_directory_uri() . '/js/swiper-bundle.min.js');
    //  Для картинок 
    wp_enqueue_script('baguettebox', get_template_directory_uri() . '/js/baguettebox.js');
    // Для параллакса
    wp_enqueue_script('simpleParallax', get_template_directory_uri() . '/js/simpleParallax.js');
    // Для wow
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.js');
    // Для скролла
    wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js');

    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');


    wp_enqueue_script('jquery', 'http://code.jquery.com/jquery-latest.min.js');



    function my_scripts()
    {
        wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '2.0', true);
    }

    add_action('wp_enqueue_scripts', 'my_scripts');
}


// Добавляет вкладку Новости для меню Wordpress
add_action('init', 'create_post_type');
function create_post_type()
{

    register_post_type(
        'news',
        array(
            'public' => true,
            'has_archive' => true,
            'exclude_from_search' => true,
            'rewrite' => array(
                'slug' => 'news',
                'with_front' => false,
            ),
            'labels' => array(
                'name' => 'Новости',
                'singular_name' => 'Новость',
                'menu_name' => 'Новости',
                'all_items' => 'Все новости',
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
            'taxonomies' => array('category')
        )
    );
}




// фильтры
add_action('wp_ajax_get_filter', 'filterCatalog');
add_action('wp_ajax_nopriv_get_filter', 'filterCatalog');

// вывести машины в каталог сразу
add_filter('wp_ajax_get_catalog', 'showCatalog');
add_filter('wp_ajax_nopriv_get_catalog', 'showCatalog');

function filterCatalog()
{
    $options = $_POST['filter_options'];

    $meta_value = $options['where']['value'];
    // $meta_value = 'Kia';

    global $wpdb;

    $query = "SELECT " . $options['select'] . " FROM " . $options['from'] . " WHERE meta_key = '" . $options['filterName'] . "'";


    if ($meta_value != '') {
        $query .= " AND meta_value = '" . $meta_value . "'";
    }

    $query .= " GROUP BY meta_value ORDER BY meta_value ASC";
    $query_result = $wpdb->get_results($query, OBJECT);

    echo json_encode(array(
        'query_result' => $query_result,
        'query' => $query,
        'meta_value' => $meta_value
    ), JSON_UNESCAPED_UNICODE);
    die;
}


function showCatalog()
{
    $options = $_POST['filter_options'];
    $meta_data = array();
    if ($options['where']['marka'] != '') {
        $meta_data[] = array(
            'key' => 'marka',
            'value' => $options['where']['marka'],
        );
    }
    if ($options['where']['model'] != '') {
        $meta_data[] = array(
            'key' => 'model',
            'value' => $options['where']['model'],
        );
    }
    if ($options['where']['fuel'] != '') {
        $meta_data[] = array(
            'key' => 'fuel',
            'value' => $options['where']['fuel'],
        );
    }
    if ($options['where']['privod'] != '') {
        $meta_data[] = array(
            'key' => 'privod',
            'value' => $options['where']['privod'],
        );
    }


    if ($options['where']['status'] != '') {
        $meta_data[] = array(
            'key' => 'status',
            'value' => $options['where']['status'],
        );
    }


    if ($options['where']['price_from'] != '') {
        $meta_data[] = array(
            'key' => 'price',
            'value' => $options['where']['price_from'],
            'meta_compare' => '>='
        );
    }
    if ($options['where']['price_to'] != '') {
        $meta_data[] = array(
            'key' => 'price',
            'value' => $options['where']['price_to'],
            'meta_compare' => '<='
        );
    }



    if ($options['where']['volume_from'] != '') {
        $meta_data[] = array(
            'key' => 'engine_v',
            'value' => $options['where']['volume_from'],
            'meta_compare' => '>='
        );
    }
    if ($options['where']['volume_to'] != '') {
        $meta_data[] = array(
            'key' => 'engine_v',
            'value' => $options['where']['volume_to'],
            'meta_compare' => '<='
        );
    }



    if ($options['where']['year_from'] != '') {
        $meta_data[] = array(
            'key' => 'year',
            'value' => $options['where']['year_from'],
            'meta_compare' => '>='

        );
    }
    if ($options['where']['year_to'] != '') {
        $meta_data[] = array(
            'key' => 'year',
            'value' => $options['where']['year_to'],
            'meta_compare' => '<='
        );
    }


    $query_args = array(
        'post_type' => 'post',
        'category' => $options['category_id'],
        'numberposts' => -1,
        'order' => 'title',
        'orderby' => 'asc',
        'meta_query' => $meta_data
    );

    $query_result = get_posts($query_args);



    $products = array();

    foreach ($query_result as $result) {
        $meta_values = get_post_meta($result->ID);
        $photo_id = get_post_thumbnail_id($result->ID);
        $photo_url = wp_get_attachment_image_src($photo_id, 'full')[0];
        $product_link = get_permalink($result->ID);

        $product_data = array(
            'id' => $result->ID,
            'title' => $result->post_title,
            'meta_data' => array(),
            'photo' => $photo_url,
            'product_link' => $product_link,
        );

        foreach ($meta_values as $key => $value) {
            $product_data['meta_data'][$key] = implode(', ', $value);
        }

        $products[] = $product_data;
    }

    echo json_encode(array(
        'products' => $products,
        'status' => '-_-',
    ), JSON_UNESCAPED_UNICODE);
    die;
}

// Добавляем поддержку шорткодов в текстовых виджетах
add_filter('widget_text', 'do_shortcode');

// Добавляем поддержку шорткодов в тексте записей и страниц
add_filter('the_content', 'do_shortcode');
add_filter('widget_text_content', 'do_shortcode');

add_filter('redirect_canonical', 'my_redirect_canonical_filter', 10, 2);


add_action('admin_menu', 'remove_default_menus');

function remove_default_menus()
{
    remove_menu_page('index.php');                  // Консоль
    remove_menu_page('upload.php');                 // Медиафайлы
    remove_menu_page('edit.php?post_type=page');    // Страницы
    remove_menu_page('edit-comments.php');          // Комментарии
    remove_menu_page('themes.php');                 // Внешний вид
    // remove_menu_page('plugins.php');                // Плагины
    // remove_menu_page('users.php');                  // Пользователи
    remove_menu_page('tools.php');                  // Инструменты 
    // remove_menu_page('options-general.php');        // Настройки
    remove_menu_page('wpcf7');   // Contact form 7
    remove_menu_page('aiowpsec');   // wp security
    // remove_menu_page('edit.php?post_type=acf-field-group');   // ACF Field Group
}




if (function_exists('acf_add_options_page')) {

    acf_add_options_page(
        array(
            'page_title' => 'Редактирование информации и телефонов',
            'menu_title' => 'Контактная информация',
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false
        )
    );
}
