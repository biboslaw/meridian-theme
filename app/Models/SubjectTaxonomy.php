<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class SubjectTaxonomy {

  const TAXONOMY = 'subjects';

  public function __construct() {
    add_action( 'init', [$this, 'register_custom_taxonomy'] );
  }

  public function register_custom_taxonomy() {
      // adding translatable labes
      $labels = [
        'name' => _x( 'Subjects', 'taxonomy general name' ),
        'singular_name' => _x( 'Subject', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Subjects' ),
        'all_items' => __( 'All Subjects' ),
        'parent_item' => __( 'Parent Subject' ),
        'parent_item_colon' => __( 'Parent Subject:' ),
        'edit_item' => __( 'Edit Subject' ), 
        'update_item' => __( 'Update Subject' ),
        'add_new_item' => __( 'Add New Subject' ),
        'new_item_name' => __( 'New Subject Name' ),
        'menu_name' => __( 'Subjects' ),
      ];

      // ading cpt arguments
      $args = [
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'subject' ),
      ];
      
    // registerin cpt
    register_taxonomy( SELF::TAXONOMY, ['faq'], $args );
  }

}