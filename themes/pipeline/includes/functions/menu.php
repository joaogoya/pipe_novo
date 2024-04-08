<?php

//menu principal
add_action('init', 'register_main_menu');

function register_main_menu()
{
    register_nav_menu('main-menu', 'Menu principal do header');
}

function get_custom_menu($id)
{
    $menuLocations = get_nav_menu_locations();
    $menuID = $menuLocations[$id];
    $navbar_items = wp_get_nav_menu_items($menuID);
    $child_items = [];



    foreach ($navbar_items as $key => $item) {
        if ($item->menu_item_parent) {
            array_push($child_items, $item);
            unset($navbar_items[$key]);
        }
    }

    foreach ($navbar_items as $item) {
        foreach ($child_items as $key => $child) {
            if ($child->menu_item_parent == $item->post_name) {
                if (!$item->child_items) {
                    $item->child_items = [];
                }
                array_push($item->child_items, $child);
                unset($child_items[$key]);
            }
        }
    }

    return $navbar_items;
}



// function section_title($item_title)
// {

//     /*
//         Trata id das sections a partir o item->title
//         em EN o item title é em ingles
//         este tratamento deixa pt-br para a home-en slidar
//     */

//     $section_title = '';
//     if (is_portuguese()) {
//         $section_title = $item_title;
//     } else {
//         switch ($item_title) {
//             case 'Offices':
//                 $section_title = 'escritorios';
//                 break;

//             case 'Products':
//                 $section_title = 'produtos';
//                 break;

//             case 'About':
//                 $section_title = 'sobre';
//                 break;

//             case 'home':
//                 $section_title = 'inicio';
//                 break;
//         }
//     }
//     return $section_title;
// }






// function link_botoes($item, $section_title)
// {

//     /*
//         Trata o link dos botoes do menu
//         Se for pg de contato
//             linke recebe a url
//         Se for home
//             Link recebe um # na frente para slidar
//         Se nao for home
//             link recebe home url + # + seção
//             para ir para a home e slidar para a seção clicada
//     */
//     $link = '';
//     if ($item->title == 'Contato' || $item->title == 'Contact') :

//         $link = $item->url;

//     else :

//         if (is_front_page()) :


//             $link = '#' . sanitize_title(strtolower($section_title));

//         else :

//             $link =  get_home_url() . '/#' . sanitize_title(strtolower($section_title));

//         endif;

//     endif;

//     return $link;
// }


// function link_bandeiras($item, $link)
// {
//     /**
//      * Link das bandeiras
//      * Força o direcionamento para a home.
//      */

//     if ($item->post_title == 'Idiomas' || $item->post_title == 'Languages') {

//         if (is_portuguese()) {
//             if ($item->lang == 'en-US') {
//                 $link = get_home_url() . '/en';
//             } else {
//                 $link = get_home_url();
//             }
//         } else {
//             $home = str_replace("/en", "", get_home_url());

//             if ($item->lang == 'en-US') {
//                 $link =  $home . '/en';
//             } else {
//                 $link =  $home;
//             }
//         }
//     };
//     return $link;
// }

// ?>