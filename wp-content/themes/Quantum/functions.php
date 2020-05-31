<?php

// STYLES AND SCRIPTS
function quantum_files()
{
    // main js
    wp_enqueue_script(
        'main-scripts',
        get_theme_file_uri('/js/scripts-bundled.js'),
        null,
        '1.0',
        true
    );
    // main css
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());

    // inline returned scripts
    wp_localize_script('main-scripts', 'universityData', array(
        'root_url' => get_site_url()
    ));
}
add_action('wp_enqueue_scripts', 'quantum_files');

//  CUSTOM PAGE BANNER
function pageBanner($args = null)
{
    if (!$args['title']) {
        $args['title'] = get_the_title();
    }
    if (!$args['subtitle']) {
        $args['subtitle'] = get_field('page_banner_subtitle');
    }
    if (!$args['photo']) {
        if (get_field('page_banner_background')) {
            $args['photo'] = get_field('page_banner_background')['sizes'][
                'pageBanner'
            ];
        } else {
            $args['photo'] = get_theme_file_uri('/images/small-banner-1.jpg');
        }
    }
    ?>

<div class="banner secondary_banner" style="background-image: url(
    <?php echo $args['photo']; ?>
    );">
  <div class="banner__content">
    <h1><?php echo $args['title']; ?></h1>
    <p><?php echo $args['subtitle']; ?></p>
  </div>
</div>
<?php
}

add_action('init', 'my_custom_init');
function my_custom_init()
{
    register_post_type('book', array(
        'labels' => array(
            'name' => 'Фотографии',
            'singular_name' => 'Фотографии',
            'add_new' => 'Добавить новые фотографии',
            'add_new_item' => 'Добавить новые фотографии',
            'edit_item' => 'Редактировать фотографию',
            'new_item' => 'Новая фотография',
            'view_item' => 'Посмотреть фотографию',
            'search_items' => 'Найти витрфотографиюину',
            'not_found' => 'Фотографий не найдено',
            'not_found_in_trash' => 'В корзине фотографий не найдено',
            'parent_item_colon' => '',
            'menu_name' => 'Фотографии'
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-images-alt',
        'supports' => array('title', 'author', 'thumbnail')
    ));
}

// REMOVE ADMIN BAR
add_action('wp_loaded', 'noSubsAdminBar');
function noSubsAdminBar()
{
    show_admin_bar(false);
}

// FEATURES
function university_features()
{
    add_image_size('pageBanner', 1500, 350, true);
}
add_action('after_setup_theme', 'university_features');

?>