<?php

$terms = get_terms( [
  'taxonomy' => 'subjects',
  'hide_empty' => 'true'
] );

$terms_array = wp_list_pluck($terms, 'slug');

$terms_array = array_values($terms_array);

$args_without_term = [
  'post_per_page' => -1,
  'post_type' => 'faq',
  'tax_query' => [
    [
      'taxonomy' => 'subjects',
      'terms' => $terms_array,      
      'field' => 'slug',
      'operator' => 'NOT IN'
    ]
  ]
];

$the_query_without_term = new WP_Query( $args_without_term );   

?>

<section class="md:w-full w-[92%] mx-auto">
    <div class="container max-w-[840px] pt-[72px] mx-auto faq-container">
        <h1 class="md:text-[50px] text-3xl font-black uppercase text-center text-gray-text mb-10">
          <?= __( 'Frequently asked questions', 'meridian' ) ?>
        </h1>
        <?php

        // posts without terms 

        if ( $the_query_without_term->have_posts() ) {

          while ( $the_query_without_term->have_posts() ) {

            $the_query_without_term->the_post();
            ?>

          <div class="rounded-4xl shadow-video-box faq-item overflow-hidden bg-white mt-8">
            <button class="group flex items-center justify-between w-full p-6">
              <h3 class="group-hover:text-blue font-semibold text-gray-text text-left md:text-xl text-lg">
                <?= get_field( 'question' ) ? get_field( 'question' ) : ''; ?>
              </h3>

              <svg class="min-w-[93px]" xmlns="http://www.w3.org/2000/svg" width="22.212" height="13.532" viewBox="0 0 22.212 13.532">
                <path id="Path_1039" data-name="Path 1039" d="M1096.342,874l8.123,8.7,8.434-8.7" transform="translate(-1093.515 -871.172)" fill="none" stroke="#41b6e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
              </svg>
            </button>
            <p class="text-left">
              <?= get_field( 'answer' ) ? get_field( 'answer' ) : ''; ?>
            </p>
          </div>

            <?php
          }
        }

        wp_reset_postdata();

        // posts with terms
        foreach( $terms as $term ) {

          $args = [
            'post_per_page' => -1,
            'post_type' => 'faq',
            'tax_query' => [
              [
                'taxonomy' => 'subjects',
                'field' => 'id',
                'terms' => $term->term_id
              ]
            ]
          ];

          $the_query = new WP_Query( $args );   

          if ( $the_query->have_posts() ) {

            ?>

              <h2 class="text-[34px] pb-2 border-b-8 border-b-orange inline-block ml-4 my-7">
                <?= __( $term->name, 'meridian' ) ?>
              </h2>

            <?php

            while ( $the_query->have_posts() ) {

              $the_query->the_post();
              ?>

            <div class="rounded-4xl shadow-video-box faq-item bg-white mt-8">
              <button class="group flex items-center justify-between w-full p-6 ">
                <h3 class="group-hover:text-blue font-semibold text-gray-text text-left md:text-xl text-lg">
                  <?= get_field( 'question' ) ? get_field( 'question' ) : ''; ?>
                </h3>

                <svg class="min-w-[93px]" xmlns="http://www.w3.org/2000/svg" width="22.212" height="13.532" viewBox="0 0 22.212 13.532">
                  <path id="Path_1039" data-name="Path 1039" d="M1096.342,874l8.123,8.7,8.434-8.7" transform="translate(-1093.515 -871.172)" fill="none" stroke="#41b6e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                </svg>
              </button>
              <p class="text-left">
                <?= get_field( 'answer' ) ? get_field( 'answer' ) : ''; ?>
              </p>
            </div>

              <?php
            }
          }

          wp_reset_postdata();

        }
      ?>

    </div>
    <div class="max-w-[1200px] w-full mx-auto bg-orange rounded-5 shadow-little-box py-10 flex flex-col items-center mt-[165px] mb-[120px] md:px-0 px-[4%]">
      <h3 class="text-white text-2xl font-black mb-16 text-center">
        <?= __( 'For further questions, click the link below to search:', 'meridian' ) ?>
      </h3>
      <a href="https://meridianenglish.zohodesk.com/portal/en/home">
        <button class="button-secondary text-xl font-bold hover:bg-blue">
          <?= __( 'Meridian School of English | Home (zohodesk.com)', 'meridian' ) ?>
        </button>
      </a>
    </div>
</section>