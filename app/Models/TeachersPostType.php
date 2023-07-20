<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class TeachersPostType {

  const POST_TYPE = 'Teachers';

  public function __construct() {
    add_action( 'init', [$this, 'register_custom_post_type'] );
  }

  public function register_custom_post_type() {
      // adding translatable labes
      $labels = [
        'name'                => _x( 'Teachers', 'Post Type General Name', 'meridian' ),
        'singular_name'       => _x( 'Teacher', 'Post Type Singular Name', 'meridian' ),
        'menu_name'           => __( 'Teachers', 'meridian' ),
        'all_items'           => __( 'All Teachers', 'meridian' ),
        'view_item'           => __( 'View Teacher', 'meridian' ),
        'add_new_item'        => __( 'Add New Teacher', 'meridian' ),
        'add_new'             => __( 'Add New', 'meridian' ),
        'edit_item'           => __( 'Edit Teacher', 'meridian' ),
        'update_item'         => __( 'Update Teacher', 'meridian' ),
        'search_items'        => __( 'Search Teacher', 'meridian' ),
        'not_found'           => __( 'Not Found', 'meridian' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'meridian' ),
      ];

      // aading cpt arguments
      $args = [
          'label'               => __( 'Teachers', 'meridian' ),
          'description'         => __( 'Teachers', 'meridian' ),
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