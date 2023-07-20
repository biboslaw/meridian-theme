<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class ReviewsPostType {

  const POST_TYPE = 'Reviews';

  public function __construct() {
    add_action( 'init', [$this, 'register_custom_post_type'] );
  }

  public function register_custom_post_type() {
      // adding translatable labes
      $labels = [
        'name'                => _x( 'Reviews', 'Post Type General Name', 'meridian' ),
        'singular_name'       => _x( 'Review', 'Post Type Singular Name', 'meridian' ),
        'menu_name'           => __( 'Reviews', 'meridian' ),
        'all_items'           => __( 'All Reviews', 'meridian' ),
        'view_item'           => __( 'View Review', 'meridian' ),
        'add_new_item'        => __( 'Add New Review', 'meridian' ),
        'add_new'             => __( 'Add New', 'meridian' ),
        'edit_item'           => __( 'Edit Review', 'meridian' ),
        'update_item'         => __( 'Update Review', 'meridian' ),
        'search_items'        => __( 'Search Review', 'meridian' ),
        'not_found'           => __( 'Not Found', 'meridian' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'meridian' ),
      ];

      // aading cpt arguments
      $args = [
          'label'               => __( 'Reviews', 'meridian' ),
          'description'         => __( 'Reviews', 'meridian' ),
          'labels'              => $labels,
          'supports'            => [ 'title', 'editor', 'author', 'thumbnail' ],
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