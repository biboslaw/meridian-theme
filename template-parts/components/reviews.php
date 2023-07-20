<div id="reviews"></div>
<section class="w-full mt-34-5 mx-auto">
  <div class="max-w-normal relative xl:mx-auto mx-[4%]">

    <button class="hidden md:block">
      <svg xmlns="http://www.w3.org/2000/svg" width="18.467" height="30.716" viewBox="0 0 18.467 30.716" class="review-arrow-left absolute">
        <g id="Component_178_3" data-name="Component 178 – 3" transform="translate(14.932 27.181) rotate(180)">
          <path id="Path_2263" data-name="Path 2263" d="M0,0,11.6,12.432,23.648,0" transform="translate(0 23.648) rotate(-90)" fill="none" stroke="#c1c1c1" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/>
        </g>
      </svg>  
    </button>

    <div id="reviews-slider" class="flex mx-auto justify-center gap-x-8">
    <?php        
    $args = [
      'post_per_page' => -1,
      'post_type' => 'reviews'
    ];

    $the_query = new WP_Query( $args );
    ?>
    
    <?php
      if ( $the_query->have_posts() ) {
    ?>
      <?php
        while ( $the_query->have_posts() ) {
          $the_query->the_post();

          ?>

            <div class="single-review rounded-4xl bg-white shadow-little-box py-8 px-10 md:max-w-[540px] xl:max-h-[347px] lg:max-h-[447px] w-1/2 h-full">
              <div class="flex pb-14">
                <div class="w-[47px] h-[47px] rounded-[50px] bg-[#3984DD] flex justify-center items-center text-[20px] text-lg font-black text-white">
                  <?=  substr( get_the_title(), 0, 1 )  ?> 
                </div>
                <div class="h-[47px] text-lg text-black font-bold pl-2">
                  <?= get_the_title() ?>
                  <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.473" height="18.807" viewBox="0 0 19.473 18.807">
                      <path id="Union_1" data-name="Union 1" d="M9.9,14.808,4.009,18.653,5.95,12.06,0,7.808l7.114-.691L9.707,0,12.32,7.178l7.153.078-5.755,4.937,1.463,6.614Z" fill="#fbb03b"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.473" height="18.807" viewBox="0 0 19.473 18.807">
                      <path id="Union_1" data-name="Union 1" d="M9.9,14.808,4.009,18.653,5.95,12.06,0,7.808l7.114-.691L9.707,0,12.32,7.178l7.153.078-5.755,4.937,1.463,6.614Z" fill="#fbb03b"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.473" height="18.807" viewBox="0 0 19.473 18.807">
                      <path id="Union_1" data-name="Union 1" d="M9.9,14.808,4.009,18.653,5.95,12.06,0,7.808l7.114-.691L9.707,0,12.32,7.178l7.153.078-5.755,4.937,1.463,6.614Z" fill="#fbb03b"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.473" height="18.807" viewBox="0 0 19.473 18.807">
                      <path id="Union_1" data-name="Union 1" d="M9.9,14.808,4.009,18.653,5.95,12.06,0,7.808l7.114-.691L9.707,0,12.32,7.178l7.153.078-5.755,4.937,1.463,6.614Z" fill="#fbb03b"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.473" height="18.807" viewBox="0 0 19.473 18.807">
                      <path id="Union_1" data-name="Union 1" d="M9.9,14.808,4.009,18.653,5.95,12.06,0,7.808l7.114-.691L9.707,0,12.32,7.178l7.153.078-5.755,4.937,1.463,6.614Z" fill="#fbb03b"/>
                    </svg>
                  </div>
                </div>
              </div>
              <div class="w-full text-black text-[14px] pb-7">
                <?= wp_strip_all_tags( get_the_content( ) ); ?>
              </div>
              <div class="w-full text-[#A0A0A0] text-[14px]">
                <?= get_field( 'english_transcription' ); ?>
              </div>
            </div>

          <?php
        }
      ?>
        </div>
      <?php
        }
        wp_reset_postdata();
      ?>  

    <button class="hidden md:block">
      <svg xmlns="http://www.w3.org/2000/svg" width="18.467" height="30.716" viewBox="0 0 18.467 30.716" class="review-arrow-right absolute">
        <g id="Component_178_2" data-name="Component 178 – 2" transform="translate(3.535 3.535)">
          <path id="Path_2263" data-name="Path 2263" d="M0,0,11.6,12.432,23.648,0" transform="translate(0 23.648) rotate(-90)" fill="none" stroke="#c1c1c1" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/>
        </g>
      </svg>        
    </button>

  </div>
  <div class="max-w-normal mx-auto mt-12 md:block flex justify-center">
    <a class="text-[#256BA2] text-lg md:pl-10 text-center mt-5 visited:text-[#256BA2]" href="https://www.google.com/maps/place/Meridian+School+of+English/51.0241665,-3.2052701,8.63z/data=!4m11!1m2!2m1!1sMeridian+School+of+English!3m7!1s0x486ceccbeef760bb:0xea2d76f5692b7428!8m2!3d50.3834093!4d-4.1347369!9m1!1b1!15sChpNZXJpZGlhbiBTY2hvb2wgb2YgRW5nbGlzaCIDiAEBWhwiGm1lcmlkaWFuIHNjaG9vbCBvZiBlbmdsaXNokgEPbGFuZ3VhZ2Vfc2Nob29s">
      <?= __( 'Read more reviews on Google Reviews', 'meridian' ) ?>
    </a>
  </div>

</section>