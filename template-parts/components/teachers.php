<?php

  $args = [
    'post_per_page' => -1,
    'post_type' => 'teachers'
  ];

  $the_query = new WP_Query( $args );

?>
<div id="teachers"></div>
<section class="w-full mt-34-5 full-width">
  <div class=" wrapper max-w-normal flex flex-col justify-center items-center pt-[40px] pb-[77px] lg:px-[53px] px-6 bg-white rounded-4xl shadow-little-box desktop:mx-auto mx-[4%]">
    <h2 class="uppercase text-center">
      <?= __( 'MEET OUR TEACHERS', 'meridian' ); ?>
    </h2>
    <h3 class="uppercase text-center">
      <?= __( 'BRITISH QUALIFIED AND EXPERIENCED', 'meridian' ); ?>
    </h3>
    <p class="text-xl pt-10">
      <?= __( 'Meridian School of English is the only online English school where all our teachers are British qualified and are certified by quality institutions such as Cambridge University or Trinity College London. ', 'meridian' ); ?>
    </p>
    <p class="text-xl py-8">
      <?= __( 'The teachers that work with us have extensive experience and training in delivering high quality English Language lessons to young learners online. As they are all British citizens or residents of the United Kingdom, they can transmit the most appropriate vocabulary and pronunciation to your children. In addition, we follow selection processes that ensure our teachers are committed to supporting their students and engaging in personal development. Below we present a sample of our teachers. ', 'meridian' ); ?>
    </p>


    <?php
      if ( $the_query->have_posts() ) {
        ?>
        <div class="w-full relative">
          <svg xmlns="http://www.w3.org/2000/svg" width="18.467" height="30.716" viewBox="0 0 18.467 30.716" class="teacher-arrow-left absolute hidden md:block">
            <g id="Component_178_3" data-name="Component 178 – 3" transform="translate(14.932 27.181) rotate(180)">
              <path id="Path_2263" data-name="Path 2263" d="M0,0,11.6,12.432,23.648,0" transform="translate(0 23.648) rotate(-90)" fill="none" stroke="#c1c1c1" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/>
            </g>
          </svg>
          <div id="teacher-slider" class="w-full flex gap-x-9">

          <?php
            while ( $the_query->have_posts() ) {
              $the_query->the_post();
              ?>
              <div class="w-1/3 relative">
                <div class=" flex flex-col items-center group">
                  <div class="max-w-[320px] h-[217px] rounded-5 overflow-hidden">
                    <img src="<?= get_the_post_thumbnail_url( get_the_ID(), 'post-thumbnail' ) ?>" alt="" class=" object-cover">                    
                  </div>

                  <button class="teacher-button button-primary mx-auto mt-7 group-hover:bg-orange transition-all">
                    <?= get_the_title(); ?>
                  </button>                    
                </div>  
  
                <div class="teacher-bio absolute hidden w-[360px] flex-col items-center justify-center z-[9999] bg-blue px-10 py-4 rounded-5 ">
                  <div class="teacher-bio-close cursor-pointer flex justify-center items-center w-5 h-5 self-end pointer-events-none">
                    <img src="<?= ASSETS . '/images/close-btn.png' ?>" alt="">
                  </div>


                  <img src="<?= get_the_post_thumbnail_url( get_the_ID(), 'post-thumbnail' ) ?>" alt="" class="rounded-[50%] h-[166px] w-[166px] object-cover mb-7">
                  <span class="uppercase text-2xl font-bold text-white mb-4">
                    <?= get_the_title(); ?>
                  </span>
                  <div class="flex justify-center items-center mb-6">
                    <img class="w-[33px] h-[33px] object-cover rounded-[50%]" src="<?= get_field( 'country_flag' ) ? get_field( 'country_flag' ) : ''  ?>" alt="">
                    <span class="pl-2 text-base text-white">
                      <?= __( get_field( 'coutry_name' ) ? get_field( 'coutry_name' ) : '' , 'meridian' );  ?>
                    </span>
                  </div>
                  <p class="text-lg text-white">
                    <?= __( get_field( 'bio' ) ? get_field( 'bio' ) : '' , 'meridian' ); ?>
                  </p>
                </div>             
              </div>

              <?php
            }
          ?>
            </div>
          <?php
          ?>
          <svg xmlns="http://www.w3.org/2000/svg" width="18.467" height="30.716" viewBox="0 0 18.467 30.716" class="teacher-arrow-right absolute hidden md:block">
            <g id="Component_178_2" data-name="Component 178 – 2" transform="translate(3.535 3.535)">
              <path id="Path_2263" data-name="Path 2263" d="M0,0,11.6,12.432,23.648,0" transform="translate(0 23.648) rotate(-90)" fill="none" stroke="#c1c1c1" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/>
            </g>
          </svg>
        </div>
          <?php
            }
            wp_reset_postdata();
          ?>  

  </div>
</section>
