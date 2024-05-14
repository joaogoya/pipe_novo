<?php

/*******************************************************/
/******************* THEME SUPORT **********************/
/*******************************************************/

//Titulo dinamico
add_theme_support('title-tag');

// side bar
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name'            => 'Sidebar',
        'id'            => 'sidebar-1',
        'before_widget'    => '<div class="widget">',
        'after_widget'    => '</div>',
        'before_title'    => '<h3>',
        'after_title'    => '</h3>',
    ));
}

//tamanhos diferentes de imgs na galeria
add_theme_support('post-thumbnails');

//ecerpt pages
add_post_type_support( 'page', 'excerpt' );

// esconde a versao do wp
add_filter('the_generator', 'function_name');
function function_name()
{
    return;
}


/*******************************************************/
/************************ ASSETS ***********************/
/*******************************************************/

function pipe_add_scripts()
{
    wp_enqueue_style('pipe_main_css',  get_stylesheet_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('pipe_main_js', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'pipe_add_scripts');


/*******************************************************/
/************************ DUMP *************************/
/*******************************************************/

function print_var($var)
{
    print("<pre>" . print_r($var, true) . "</pre>");
}

/*******************************************************/
/******************* GET CATEGORIES ********************/
/*******************************************************/

function get_page_categories_by_slug($title, $post_type)
{

    $page = get_page_by_title($title, OBJECT, $post_type);

    return get_the_category($page->ID);
}

/*******************************************************/
/******************* HAS CHILDREN **********************/
/*******************************************************/

function category_has_children($id_post)
{

    $categories = wp_get_post_categories($id_post);

    foreach ($categories as $c) {

        $cat = get_category($c);

        $children =  get_categories(array(
            'orderby' => 'name',
            'parent' => $cat->term_id
        ));

        if (empty($children)) {

            return ($cat->slug);
        }
    }
    return '';
}


/*******************************************************/
/***************** GET ID BY SLUG  *********************/
/*******************************************************/
function get_post_id_by_slug($slug, $post_type){

    $args = array(
        'name'        => $slug,
        'post_type'   => $post_type,
        'post_status' => 'publish',
        'numberposts' => 1
    );
    
    $my_posts = get_posts($args);

    return $my_posts[0]->ID;
}

/*******************************************************/
/**************** GET TITLE BY SLUG  *******************/
/*******************************************************/
function get_post_title_by_slug($slug, $post_type){

    $args = array(
        'name'        => $slug,
        'post_type'   => $post_type,
        'post_status' => 'publish',
        'numberposts' => 1
    );
    
    $my_posts = get_posts($args);

    return $my_posts[0]->post_title;
}

/*******************************************************/
/************* GET PAGE INFORMATIONS *******************/
/*******************************************************/

function get_page_data_by_slug($title, $post_type)
{

    /*
        Busca as informações de uma página específica pelo título
        retorna uma query para ser loopada
    */

    $id = get_post_id_by_slug($title, $post_type);

    $args = array(
        'p'         => $id,
        'post_type' => $post_type
    );

    $my_post = new WP_Query($args);

    wp_reset_postdata();

    return $my_post;
}


/*******************************************************/
/***************** GET PAGE BY TITLE *******************/
/*******************************************************/

function get_page_data_by_title($title, $post_type)
{

    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => 5,
        'orderby' => 'title',
        'title' => $title
    );

    $my_post = new WP_Query($args);

    wp_reset_postdata();

    return $my_post;
}

/*******************************************************/
/******************* SEARCH ONLY POSTS *****************/
/*******************************************************/

/*
    A searchbar traz, por default, posts types, páginas, ...
    Essa function restringe a pesquisa apenas aos posts do blog
*/

function search_filter($query)
{
    if (!is_admin() && $query->is_main_query()) {
        if ($query->is_search) {
            $query->set('post_type', 'post');
        }
    }
}

add_action('pre_get_posts', 'search_filter');
/* Fim search only posts */


require('includes/functions/custom-posts.php');
require('includes/functions/img_handle/index.php');
require('includes/functions/acf_utils.php');
require('includes/functions/menu.php');
