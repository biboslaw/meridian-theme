<section class="wrapper bg-blue h-[85px] flex items-center lg:gap-x-36 gap-x-8 justify-center full-width px-2">

<?php

  if( have_rows( 'company' ) ) {

    while( have_rows( 'company' ) ) {

      the_row();

      $company_image = get_sub_field( 'image' );
      $company_url = get_sub_field( 'url' );

      if( $company_image ) {
        ?>
          <a class="" href="<?= $company_url ? $company_url : '#'; ?>">
            <img class="attachment-post-thumbnail size-post-thumbnail wp-post-image max-h-[75px" src="<?= $company_image ?>" alt="" loading="lazy">
          </a>
        <?php        
      }

    }
  }

?>

</section>