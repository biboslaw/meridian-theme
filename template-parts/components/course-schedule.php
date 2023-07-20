<div id="schedule"></div>
<section class="w-full bg-blue-light py-20 flex justify-center mt-20 mx-0 md:px-0 px-[4%]">
  <div class="max-w-normal flex flex-col items-center">
    <h2 class="md:text-5xl text-4xl border-b-8 border-b-orange pb-3 mb-11">
      <?= __( 'Schedule', 'meridian' ) ?>
    </h2>
    <p class="text-lg">
      <?= __( 'Courses start every Monday. You have to book a course at least 2 weeks before your preferred course starting date. Each course booking is calculated as a fixed number of sessions. At the booking stage you will see your official course start and finish dates that take any public holidays or school closures in to account.<br> Below we present sample class times. Time changes happen according to UK Daylight saving system. We’ll notify you in advance if it affects your child’s class time. (Class time change will only happen in some countries).', 'meridian' ) ?>
    </p>

    <?php

      if( have_rows( 'add_calendar' ) ) {
        ?>
          <div class="flex justify-between w-full mt-11 flex-wrap">
        <?php
        while( have_rows( 'add_calendar' ) ) {

          the_row();

          ?>
            <div class="flex flex-col items-center md:mb-0 mb-4">
              <h3 class="pb-6">
                <?= get_sub_field( 'title' ); ?>
              </h3>
              <img src="<?= get_sub_field( 'calendar_image' ) ?>" alt="">
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