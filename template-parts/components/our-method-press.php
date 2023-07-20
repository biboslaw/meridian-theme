<section id="press"></section>
<section class="md:w-full w-[92%] mx-auto mt-34-5 ">
    <h2 class="uppercase text-center text-gray-text md:text-[40px] text-3xl font-black mb-11 pb-5">
      <?= __( 'Oxford University Press Materials', 'meridian' ) ?>
    </h2>
  <div class="flex md:flex-row flex-col w-full">
    <div class="flex flex-col md:items-end items-center md:w-1/2 w-full justify-start">
      <div class="md:block flex items-center flex-col">
        <h2 class="max-w-[560px] inline-block text-gray-text md:text-3xl text-2xl font-black mb-11 border-b-8 border-b-orange pb-5 ">
          <?= __( 'What do we teach?', 'meridian' ) ?>
        </h2>

        <p class="max-w-[560px] text-xl md:text-left text-center ">
          <?= __( 'We exclusively use <strong>Oxford University Press</strong> materials for our core content as we want our teachers and students to have access to the best tools for success. Our courses are mapped against the <strong>Common European Framework of Reference (CEFR)</strong>, a transparent framework of outcomes through all levels of English. Our materials are high quality in terms of both content and aesthetics, providing a fun, colourful and engaging platform for learning to take place.', 'meridian' ) ?>
        </p>        
      </div>

    </div>
    <div class="md:w-1/2 w-full md:pl-[120px] md:mt-0 mt-12">
      <div id="press-slider" class="w-full rounded-l-5 shadow-little-box">
        <?php
          if( have_rows( 'press_images' ) ) {

            while( have_rows( 'press_images' ) ) {

              the_row();

              $image = get_sub_field( 'image' );

              ?>
                <div class=" max-h-[515px] w-full h-full">
                  <img class="object-cover w-full h-full" src="<?= $image ?>" alt="" loading="lazy">            
                </div>
              <?php        
            }
          }
        ?>      
      </div>
    </div>
  </div>

</section>