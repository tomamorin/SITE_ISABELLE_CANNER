<?php
// Ajouter Image à la Une sur les articles
add_theme_support('post-thumbnails');

// Ajouter un menu
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Principal', 'Menu principal' ),
) );
register_nav_menu('footer', 'Menu du bas');

add_theme_support( 'post-thumbnails' );

add_action('init', 'my_custom_init');

function my_custom_init() {
    register_post_type(
        'accueil',
        array(
            'label' => 'Page Accueil',
            'labels' => array(
                'name' => 'Page Accueil',
                'singular_name' => 'Page Accueil',
                'all_items' => 'Tous les projets',
                'add_new_item' => 'Ajouter un projet',
                'edit_item' => 'Éditer le projet',
                'new_item' => 'Nouveau projet',
                'view_item' => 'Voir le projet',
                'search_items' => 'Rechercher parmi les projets',
                'not_found' => 'Pas de projet trouvé',
                'not_found_in_trash'=> 'Pas de projet dans la corbeille'
            ),
            'public' => true,
            'capability_type' => 'post',
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ),
            'has_archive' => true
        )
    );
    register_post_type('Page Contact',
        array(
            'labels' => array(
                'name' => 'Page Contact',
                'singular_name' => 'Page Contact'
            ),
            'public' => true,
            'supports' => array('editor', 'title')
        )
    );

    register_post_type('enneagramme',
        array(
            'labels' => array(
                'name' => 'Page Enneagramme',
                'singular_name' => 'Page Enneagramme'
            ),
            'public' => true,
            'capability_type' => 'post',
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ),
            'has_archive' => true
        )
    );
    register_post_type('inscription',
        array(
            'labels' => array(
                'name' => 'inscription',
                'singular_name' => 'inscription'
            ),
            'public' => true,
            'capability_type' => 'post',
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ),
            'has_archive' => true
        )
    );
    register_post_type('coaching',
        array(
            'labels' => array(
                'name' => 'Page Coaching',
                'singular_name' => 'Page Coaching'
            ),
            'public' => true,
            'capability_type' => 'post',
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ),
            'has_archive' => true
        )
    );
}


/* ADD YOUR CUSTOM FUNCTIONS BELOW */