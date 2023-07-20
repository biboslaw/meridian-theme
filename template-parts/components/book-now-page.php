<section class="w-full bg-white pt-12 py-[114px] flex flex-col items-center relative mx-auto">
  <h2 class="mx-auto">
    <?= __( 'BOOK NOW', 'meridian' ) ?>
  </h2>
  <div class="mx-auto overflow-hidden w-full ">
    <iframe id="booking" scrolling="no" height="934" class="w-full" id="iFrameCalculator" loading="lazy" src="<?= get_field( 'booking_form_link', 'option' ) ? get_field( 'booking_form_link', 'option' ) : "https://calculator.tellus.co.uk:8447/en/calculator" ?>" ></iframe>
  </div>
</section>