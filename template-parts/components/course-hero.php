<section class="w-full flex justify-between flex-wrap mx-auto">
  <div class="flex justify-start items-start md:w-1/2 w-full">
    <img src="<?= get_field( 'hero_image' ) ? get_field( 'hero_image' ) : ASSETS . '/images/hero-5-6yo.png' ?>" alt="">
  </div>
  <div class="flex flex-col items-center md:w-1/2 w-full justify-center mt-6 md:mt-0  md:px-0 px-[4%] text-center">
    <h1 class="max-w-[700px] text-orange md:text-[40px] text-3xl text-center font-bold mb-11">
      <?= __( get_field( 'hero_header' ), 'meridian' ) ?>
    </h1>
    <div class="max-w-[700px] text-black text-2xl hero-description">
      <?= __( get_field( 'hero_description' ), 'meridian' ) ?>
    </div>
  </div>
</section>