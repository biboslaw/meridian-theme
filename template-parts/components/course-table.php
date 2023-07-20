<section class="md:w-full w-[92%] mt-12 flex flex-col items-center md:mx-0 mx-[4%]">
  <h2 class="mx-auto md:text-[34px] text-3xl inline text-center">
    <?= __( get_field( 'table_title' ), 'meridian' ) ?>
  </h2>
  <!-- <div class=""> -->

    <?php

    if( have_rows( 'table' ) ) {

      while( have_rows( 'table' ) ) {

        the_row();

        $color = get_sub_field( 'table_color' );

        ?>
          <div class="sm:w-[1200px] wrapper w-full overflow-x-auto pb-5">
            <table class="w-full mx-auto course-table border rounded-5 shadow-little-box mt-[69px]" style="border-color:<?= $color ?>;">
              <tbody>
                <tr>
                  <td rowspan="2" class="course-table-content" style="border-color:<?= $color ?>">
                    <div class="w-full h-full flex flex-col items-center">
                      <img class="max-w-[168px] max-h-[204px] pt-8 px-4" src="<?= get_sub_field( 'image' ) ?>" alt="">
                      <? if( get_sub_field( 'units' ) ) : ?>
                        <span class="pt-5" style="color:<?= $color ?>;"> 
                          <?= __( get_sub_field( 'units' ), 'meridian' ) ?>
                        </span>
                      <? endif; ?>
                    </div>
                  </td>
                  <td style="background-color:<?= $color ?>;" rowspan="2" class="course-title w-[166px] p-2 min-w-[150px]">
                    <?= htmlspecialchars_decode( get_sub_field( 'course_title' ) ); ?>
                  </td>
                  <td style="border-color:<?= $color ?>;" class="w-[207px] p-2 text-center font-bold text-gray-text border-b border-r min-w-[150px]">
                    <?= __( 'Core Themes', 'meridian' ) ?>
                  </td>
                  <td style="border-color:<?= $color ?>;" class="w-[207px] p-2 text-center font-bold text-gray-text border-b border-r min-w-[150px]">
                    <?= __( 'Core Vocabulary', 'meridian' ) ?>
                  </td>
                  <td style="border-color:<?= $color ?>;" class="w-[207px] p-2 text-center font-bold text-gray-text border-b border-r min-w-[150px]">
                    <?= __( 'Core Grammar', 'meridian' ) ?>
                  </td>
                  <td style="border-color:<?= $color ?>;" class="w-[207px] p-2 text-center font-bold text-gray-text border-b min-w-[150px]">
                    <?= __( 'Core Pronunciation', 'meridian' ) ?>
                  </td>
                </tr>
                <tr>
                  <!-- <td></td>
                  <td></td> -->
                  <td style="border-color:<?= $color ?>;" class="course-table-content px-2.5 py-3.5 border-r">
                    <?= htmlspecialchars_decode( get_sub_field( 'core_themes' ) ); ?>
                  </td>
                  <td style="border-color:<?= $color ?>;" class="course-table-content px-2.5 py-3.5 border-r">
                    <?= htmlspecialchars_decode( get_sub_field( 'core_vocabulary' ) ); ?>
                  </td>
                  <td style="border-color:<?= $color ?>;" class="course-table-content px-2.5 py-3.5 border-r">
                    <?= htmlspecialchars_decode( get_sub_field( 'core_grammar' ) ); ?>
                  </td>
                  <td class="course-table-content px-2.5 py-3.5">
                    <?= htmlspecialchars_decode( get_sub_field( 'core_pronunciation' ) ); ?>
                  </td>
                </tr>         
              </tbody>

        </table>
      </div>
        <?php
      }
    }
    ?>
  <!-- </div> -->
</section>
