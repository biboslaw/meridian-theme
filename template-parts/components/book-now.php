<section class="w-full mt-34-5 bg-white pt-12 pb-[114px] flex flex-col items-center relative mx-auto">
  <h2 class="mx-auto">
    <?= __( 'BOOK NOW', 'meridian' ) ?>
  </h2>
  <div class="mx-auto overflow-hidden w-full ">
    <iframe scrolling="no" height="934" class="w-full overflow-hidden" id="iFrameCalculator" loading="lazy" src="<?= get_field( 'booking_form_link', 'option' ) ? get_field( 'booking_form_link', 'option' ) : "https://calculator.tellus.co.uk:8447/en/calculator" ?>" ></iframe>
  </div>
  <img class="mt-11 pb-6" src="<?= ASSETS . '/images/two_persons_blue.svg' ?>" alt="">
  <h3 class="mb-11 text-center md:px-0 px-[4%]">
    <?= __( 'Individual classes – 2 students in the class', 'meridian' ) ?>
  </h3>
  <div class="blue-banner xl:mx-auto mx-[4%] max-w-normal md:w-full bg-blue flex md:flex-row flex-col justify-between items-center rounded-4xl">
    <img class="md:rounded-l-4xl rounded-tl-4xl md:rounded-tr-none rounded-tr-4xl md:w-auto w-full" src="<?= ASSETS . '/images/1-to-2-class.png' ?>" alt="">
    <div class="flex flex-col items-center justify-center w-full pb-4 md:pb-0">
      <h2 class="text-xl text-white md:p-auto m-2 text-center md:text-left">
        <?= __( 'Contact us to learn more and get a quote.', 'meridian' ) ?>
      </h2>
      <a href="<?= __( '/contact', 'meridian' ); ?>">
        <button class="button-primary bg-orange mt-5 md:p-auto m-2">
          <?= __( 'Contact us', 'meridian' ) ?>
        </button>      
      </a>

    </div>
  </div>
</section>