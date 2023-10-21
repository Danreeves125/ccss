<?php
// if (($_SERVER["HTTPS"] != "on") && ($_SERVER['REMOTE_ADDR'] != NULL)) {
//     header('HTTP/1.1 301 Moved Permanently');
//     header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
//     exit();
// }

$globalOptions = array(
    'page_title' => 'Website Global Settings',
    'menu_title' => 'Website Global Settings',
    'position' => false,
    'icon_url' => 'dashicons-admin-site',
    'update_button'        => __('Update', 'acf'),
    'updated_message'    => __("Options Updated", 'acf'),
);

$websiteUsps = array(
    'page_title' => 'CCSS Usps',
    'menu_title' => 'CCSS Usps',
    'position' => false,
    'icon_url' => 'dashicons-admin-site',
    'update_button'        => __('Update', 'acf'),
    'updated_message'    => __("Options Updated", 'acf'),
);

if (function_exists('acf_add_options_page')) {
    acf_add_options_page($globalOptions);
    acf_add_options_page($websiteUsps);
}

add_theme_support('title-tag');
add_theme_support('menus');

add_theme_support('post-thumbnails');

register_nav_menus(array(
    'main_navigation'   => 'Display this menu in header',
    'mobile-menu'   => 'Display this menu in mobile nav',
    'footer'   => 'Display this menu in footer',
    'about-ccss'   => 'Display this menu About CCSS',
));

function bgColour($option) {
    switch($option) {
        case 1 :
            return $bg = '#fff';
            break;
        case 2 :
            return $bg = '#EDEDED';
            break;
        case 3 :
            return $bg = 'linear-gradient(180deg, rgba(240,240,240,1) 0%, rgba(255,255,255,1) 100%)';
            break;
        
    }
}


// class AWP_Menu_Walker extends Walker_Nav_Menu
// {

//     function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
//     {


//         $output .= "<li class='mobile__list-item'>";

//         if ($item->menu_item_parent == 0) {
//             $atts['class'] = 'your-class-name';
//         }

//         if ($item->url && $item->url != '#') {
//             $output .= '<a href="' . $item->url . '">';
//         } else {
//             $output .= '<span>';
//         }

//         $output .= $item->title;

//         if ($item->url && $item->url != '#') {
//             $output .= '</a>';
//         } else {
//             $output .= '</span>';
//         }
//     }

// function start_lvl(&$output, $depth)
// {
//     $indent = str_repeat("\t", $depth);
//     $output .= "\n$indent<div class=\"drilldown\">\n";
//     $output .= "\n$indent<ul class=\"mobile__drilldown\">\n";
// }
// }

function add_classname_to_parent_nav_link($atts, $item)
{

    // add class only on parent
    if ($item->menu_item_parent == 0) {
        $atts['class'] = 'your-class-name';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_classname_to_parent_nav_link', 10, 2);

/*Custom post type for people*/

/*function create_post_type() {
  register_post_type( 'volunteers',
    array(
      'labels' => array(
        'name' => __( 'Volunteers' ),
        'singular_name' => __( 'Volunteers' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );

function add_excerpt_support_for_pages() {
    $supports = ["author", "thumbnail", "revisions"];
	add_post_type_support( 'volunteers', $supports );
}
add_action( 'init', 'add_excerpt_support_for_pages' );

add_action( 'init', 'add_taxonomies_to_courses' );
function add_taxonomies_to_courses() {
	register_taxonomy_for_object_type( 'category', 'volunteers' );
}*/

function my_breadcrumb_filter_function($crumbs)
{
    foreach ($crumbs as $i => $crumb) {
        if ($crumb['id'] != 183) {
            $new_crumbs[] = $crumbs[$i];
        }
    }
    return $new_crumbs;
}

add_image_size('patron-image', 585, 524, array('center', 'center'));
add_image_size('image-text-image', 423, 338, array('center', 'center'));
add_image_size('team-image', 384, 391, array('center', 'center'));
