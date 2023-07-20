<section id="levels" class="w-full mt-20 py-12 bg-blue mx-0">
  <div class="max-w-wide flex flex-col items-center mx-auto md:px-0 px-[4%]">
      <h2 class="text-white uppercase font-bold text-center">
        <?= __( 'What will your child learn at thE levelS?', 'meridian' ) ?>
      </h2>
      <?php

        if( have_rows( 'levels' ) ) {
          $row_numbers = count(get_field('levels'));
          $level_width = 'w-1/' . $row_numbers;
          ?>
            <div class="flex w-full justify-center gap-x-12 mt-4 md:flex-row flex-col items-start">
          <?php
          while( have_rows( 'levels' ) ) {

            the_row();

            ?>
              <div class="flex mx-auto flex-col items-center justify-start max-w-[400px] md:<?= $level_width ?> w-full md:px-0 px-[4%]">
                <img src="<?= get_sub_field( 'level_image' ) ? get_sub_field( 'level_image' ) : ''; ?>" alt="">
                <div class="level-description text-left text-lg text-white">
                  <?= get_sub_field( 'level_description' ) ? get_sub_field( 'level_description' ) : ''; ?>
                </div>
              </div>
            <?php
          }
          ?>
            </div>
          <?php
        }
      ?>
  </div>
</section>