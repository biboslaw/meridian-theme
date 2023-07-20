<div id="calendar"></div>
<section class="w-full mt-20 mx-auto">
  <div class="max-w-normal md:w-full w-[92%] bg-white flex justify-between items-center rounded-5 shadow-little-box md:flex-row flex-col  md:mx-auto mx-[4%]">
    <div class="md:w-1/2 w-full">
      <img class="md:rounded-l-5 md:rounded-r-none rounded-t-5 w-full object-cover items-stretch" src="<?= get_field( 'holidays_calendar_image' ) ? get_field( 'holidays_calendar_image' ) : ASSETS . '/images/english-flags.png'; ?>" alt="">      
    </div>

    <div class="flex flex-col items-center justify-between md:w-1/2 w-full py-[50px] h-full">
      <h2 class="text-[40px] text-black">
        <?= __( 'Calendar', 'meridian' ) ?>
      </h2>
      <p class="text-xl max-w-[455px] my-7 md:px-0 px-[4%]">
        <?= __( 'If your course includes a UK public holiday there is no lesson on that day. You will be notified in advance. Summer Holidays take place in August. Check out our holiday calendar below.', 'meridian' ) ?>
      </p>
      <a href="<?= get_field( 'holidays_calendar_link' ) ? get_field( 'holidays_calendar_link' ) : '#'; ?>">
        <button class="button-primary hover:bg-orange">
          <?= __( 'Download Holiday Calendar', 'meridian' ) ?>
        </button>        
      </a>
    </div>
  </div>
</section>