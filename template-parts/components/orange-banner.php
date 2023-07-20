<section class="orange-banner desktop:w-full w-[92%] mt-34-5 mx-auto">
  <div class="mx-auto max-w-345-25 md:h-[195px] bg-orange md:flex-row flex-col flex justify-between items-center rounded-4xl shadow-little-box">
    <img class="lg:w-auto w-full md:h-full md:w-1/2 h-1/2 object-cover lg:object-none md:rounded-l-4xl rounded-tl-4xl md:rounded-tr-none rounded-tr-4xl" src="<?= ASSETS . '/images/banner.png' ?>" alt="">
    <div class="flex flex-col items-center justify-center lg:w-full w-1/2 h-1/2 md:h-auto">
      <h2 class="lg:text-3xl md:text-xl text-lg text-white text-center mt-10">
        <?= __( '3% of our revenue goes to supporting developing countries', 'meridian' );?>
      </h2>
      <a href="<?= __( '/about-us/#social-responsibility', 'meridian' ); ?>">
        <button class="button-primary mt-5 text-xl mb-10">
          <?= __( 'Learn more', 'meridian' ); ?>
        </button>      
      </a>

    </div>
  </div>
</section>