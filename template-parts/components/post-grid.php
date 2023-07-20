<section class="wrapper max-w-normal flex flex-col justify-center items-center pt-[40px] pb-[77px] px-[73px] bg-white rounded-4xl shadow-little-box mt-19  mx-auto md:w-auto w-[92%]">
  <h2 class="pb-[40px] text-center">
    <?= __('More than just English lessons', 'meridian'); ?>
  </h2>
  <div class="grid overflow-hidden [ lg:grid-cols-3 lg:grid-rows-2 ] [ md:grid-cols-2 md:grid-rows-3 ] [ grid-cols-1 grid-rows-6 ] gap-24">
    <?php        
      if( have_rows( 'posts' ) ) {

        while( have_rows( 'posts' ) ) {

          the_row();

          ?>

            <div class="flex flex-col items-center justify-between h-[353px]">
              <div class="w-[270px] h-[192px] rounded-4xl">
                <?php
                  if( get_sub_field( 'video' ) ) {
                    
                    ?>
                    <video controls class="post-grid-video w-full rounded-4xl  h-full object-cover" src="<?= get_sub_field( 'video' ) ?>">
                      
                    </video>
                    <?php
                  } else {
                    ?>
                      <img class="attachment-post-thumbnail size-post-thumbnail wp-post-image rounded-4xl w-full h-full object-cover" src="<?= get_sub_field( 'image' ) ? get_sub_field( 'image' ) : ''; ?>" alt="" loading="lazy">
                    <?php
                  }
                ?>                
              </div>

              <h3 class="text-center text-lg px-2.5">
                <?= get_sub_field( 'item_title' ) ? __( get_sub_field( 'item_title' ), 'meridian' ) : ''; ?>
              </h3>
              <a class="post-grid-video-btn" href="<?= get_sub_field( 'button_options' )['url'] ? get_sub_field( 'button_options' )['url'] : '#'; ?>">
                <button class="<?= get_sub_field( 'video' ) ? 'show-modal-post-grid-btn' : '' ?> button-primary text-xl"><?= get_sub_field( 'button_options' )['title'] ? __( get_sub_field( 'button_options' )['title'], 'meridian' ) : _e( 'Read more', 'meridian' ); ?></button>                  
              </a>

            </div>

          <?php
        }
      }
    ?>    
  </div>

    </section>