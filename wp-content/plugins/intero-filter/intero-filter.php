<?php
/*
Plugin Name: Intero filter
Plugin URI: http://www.designsandcode.com/447/wordpress-search-filter-plugin-for-taxonomies/
Description: Super easy plugin for filtering content
Author: interosite.ru
Author URI: http://www.interosite.ru/
Version: 1.0
Text Domain: interofilter
License: GPLv2
*/

function intrfltr_init() {

    register_post_type( 'afisha',
        array(
            'labels' => array(
                'name' => __( 'Afishas' ),
                'singular_name' => __( 'Afisha' )
            ),
            'public' => true,
            'has_archive' => true,
        )
    );

    register_taxonomy(
        'afisha_city',
        'afisha',
        array(
            'label' => __( 'Afisha city' ),
            'rewrite' => array( 'slug' => 'afisha_city' )
        )
    );

}


add_action('init', 'intrfltr_init');
