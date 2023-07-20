<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class FAQPostType {

  const POST_TYPE = 'faq';

  public function __construct() {
    add_action( 'init', [$this, 'register_custom_post_type'] );
  }

  public function register_custom_post_type() {
      // adding translatable labes
      $labels = [
        'name'                => _x( 'Faq', 'Post Type General Name', 'meridian' ),
        'singular_name'       => _x( 'Faq', 'Post Type Singular Name', 'meridian' ),
        'menu_name'           => __( 'Faq', 'meridian' ),
        'all_items'           => __( 'All Faq', 'meridian' ),
        'view_item'           => __( 'View Faq', 'meridian' ),
        'add_new_item'        => __( 'Add New Faq', 'meridian' ),
        'add_new'             => __( 'Add New', 'meridian' ),
        'edit_item'           => __( 'Edit Faq', 'meridian' ),
        'update_item'         => __( 'Update Faq', 'meridian' ),
        'search_items'        => __( 'Search Faq', 'meridian' ),
        'not_found'           => __( 'Not Found', 'meridian' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'meridian' ),
      ];

      // ading cpt arguments
      $args = [
          'label'               => __( 'Faq', 'meridian' ),
          'description'         => __( 'Faq', 'meridian' ),
          'labels'              => $labels,
          'supports'            => [ 'title', 'author', 'thumbnail' ],
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'menu_position'       => 3,
          'exclude_from_search' => false,
          'show_in_rest' => true,
      ];
      
    // registerin cpt
    register_post_type( SELF::POST_TYPE, $args );
  }

}