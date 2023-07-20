<div id="our-courses"></div>
<section class="age-level mt-19 flex flex-col items-center md:w-full w-[92%] mx-auto">
  <div class="wrapper max-w-[1184px] flex flex-col items-center">
    <h2 class="pb-[40px] text-center">
      <?= __('Banded by age and level', 'meridian'); ?>
    </h2>
    <p>
      <?= __( 'Our teaching department is in charge of carefully grouping the classes so that children can learn English with peers from different countries of their age and level, and with the most appropriate teacher for the stage they are.', 'meridian' ); ?>
    </p>
    <p class="mt-5">
    <?= __( 'We have a study plan developed specifically and adapted to each age group. Below you can see the structure of each course depending on your child’s age:', 'meridian' ); ?>
    </p>
  </div>
  <div class="max-w-318-75">
    <div class="flex md:justify-between gap-x-6 mt-19 flex-wrap md:flex-nowrap justify-center">
      <a href="<?= __( '/5-6-years-old', 'meridian' ); ?>" class="mb-6 md:mb-0 group">
        <div class="rounded-5 max-w-75 shadow-little-box">
          <img src="<?= ASSETS . '/images/5-6year.png' ?>" alt="">
          <div class="flex flex-col items-center bg-blue rounded-b-5 group-hover:bg-white">
            <span class="text-white text-xl pt-2.5 uppercase text-center group-hover:text-blue transition-all">
              <?= __( 'English Courses for children', 'meridian' ); ?>
            </span>
            <span class="text-white xl:text-3xl lg:text-2xl text-xl pb-3.5 uppercase text-center font-bold pt-2 group-hover:text-blue transition-all">
              <?= __( '5–6 years old', 'meridian' ); ?>
            </span>
          </div>
        </div>       
      </a>        
      <a href="<?= __( '/7-9-years-old', 'meridian' ); ?>" class="group mb-6 md:mb-0">
        <div class="rounded-5 max-w-75 shadow-little-box">
          <img src="<?= ASSETS . '/images/7-9year.png' ?>" alt="">
          <div class="flex flex-col items-center bg-blue rounded-b-5 group-hover:bg-white">
            <span class="text-white text-xl pt-2.5 uppercase text-center group-hover:text-blue transition-all">
              <?= __( 'English Courses for children', 'meridian' ); ?>
            </span>
            <span class="text-white xl:text-3xl lg:text-2xl text-xl pb-3.5 uppercase text-center font-bold pt-2 group-hover:text-blue transition-all">
              <?= __( '7–9 years old', 'meridian' ); ?>
            </span>
          </div>
        </div>       
      </a>        
      <a href="<?= __( '/10-12-years-old', 'meridian' ); ?>" class="mb-6 md:mb-0 group">
        <div class="rounded-5 max-w-75 shadow-little-box">
          <img src="<?= ASSETS . '/images/10-12year.png' ?>" alt="">
          <div class="flex flex-col items-center bg-blue rounded-b-5 group-hover:bg-white">
            <span class="text-white text-xl pt-2.5 uppercase text-center group-hover:text-blue transition-all">
              <?= __( 'English Courses for children', 'meridian' ); ?>
            </span>
            <span class="text-white xl:text-3xl lg:text-2xl text-xl pb-3.5 uppercase text-center font-bold pt-2 group-hover:text-blue transition-all">
              <?= __( '10–12 years old', 'meridian' ); ?>
            </span>
          </div>
        </div>       
      </a>        
      <a href="<?= __( '/13-15-years-old', 'meridian' ); ?>" class="group">
        <div class="rounded-5 max-w-75 shadow-little-box">
          <img src="<?= ASSETS . '/images/13-15year.png' ?>" alt="">
          <div class="flex flex-col items-center bg-blue rounded-b-5 group-hover:bg-white">
            <span class="text-white text-xl pt-2.5 uppercase text-center group-hover:text-blue transition-all">
              <?= __( 'English Courses for children', 'meridian' ); ?>
            </span>
            <span class="text-white xl:text-3xl lg:text-2xl text-xl pb-3.5 uppercase text-center font-bold pt-2 group-hover:text-blue transition-all">
              <?= __( '13–15 years old', 'meridian' ); ?>
            </span>
          </div>
        </div>       
      </a>        
    </div>
  </div>
  <div class="max-w-normal">
    <div class="flex mt-34-5 justify-between md:flex-row flex-col">
      <div class="md:w-auto w-full">
        <h3 class="max-w-[630px] pb-8">
          <?= __( 'OUR PASSION IS YOUR CHILD’S LEARNING TO MEET THE CHALLENGES OF TOMORROW', 'meridian' ); ?>
        </h3>
        <span class="font-bold pb-8 text-gray-text text-2xl">
          <?= __( 'Why our system works', 'meridian' ); ?>
        </span>
        <ul class="list-disc text-xl pl-5 max-w-125 px-8">
          <li class="py-8 text-gray-text">
            <?= __( 'We focus on improving all core skills: reading, writing, speaking, and listening', 'meridian' ); ?>
          </li>
          <li class="pb-8 text-gray-text">
            <?= __( 'We develop positive learning habits', 'meridian' ); ?>
          </li>
          <li class="pb-8 text-gray-text">
            <?= __( 'We encourage interaction between students to build natural pronunciation skills', 'meridian' ); ?>
          </li>
          <li class="pb-8 text-gray-text">
            <?= __( 'We create repeated exposure which helps the students retain information', 'meridian' ); ?>
          </li>
        </ul>
      </div>  
      <div class="bg-blue flex flex-col items-center pb-12 rounded-5 shadow-video-box md:w-auto w-full max-w-[422px]">
        <span class="py-8 text-white font-bold text-lg inline-block text-center px-4">
          <?= __( 'WHAT OUR STUDENTS SAY ABOUT US', 'meridian' ); ?>
        </span>
        <?php

          if( have_rows( 'student_videos' ) ) {

            while( have_rows( 'student_videos' ) ) {

              the_row();

              $video = get_sub_field( 'student_video' );

              if( $video ) {
                ?>
                  <div class="w-full">
                    <video class="md:mx-20 mx-auto w-full max-w-[262px] h-auto" poster="<?= ASSETS . '/images/student_video.png' ?>" controls>
                      <source src="<?= $video ?>"> 
                    </video>
                  </div>
                <?php        
              }

            }
          }

        ?>
      </div>
    </div>
    <div class="flex mt-34-5 justify-between md:flex-row flex-col">
      <div class="bg-blue flex flex-col items-center pb-12 rounded-5 shadow-video-box md:w-auto w-full md:order-1 order-2 max-w-[422px]">
        <span class="py-8 text-white font-bold text-lg inline-block text-center px-4">
          <?= __( 'HOW TEACHERS EXPLAIN OUR METHOD', 'meridian' ); ?>
        </span>
        <?php

          if( have_rows( 'teacher_videos' ) ) {

            while( have_rows( 'teacher_videos' ) ) {

              the_row();

              $video = get_sub_field( 'teacher_video' );

              if( $video ) {
                ?>
                <div class="w-full">
                  <video class="md:mx-20 mx-auto w-full max-w-[262px] h-auto" poster="<?= ASSETS . '/images/teacher_video.jpg' ?>" controls>
                    <source src="<?= $video ?>"> 
                  </video>
                </div>

                <?php        
              }

            }
          }
        ?>
      </div>
      <div class="parents-students xl:ml-34-5 md:ml-8 md:w-auto w-full mt-6 md:mt-0 md:order-2 order-1">
        <span class="font-black pb-8 text-gray-text text-3xl">
          <?= __( 'Why parents and students love our classes', 'meridian' ); ?>
        </span>
        <ul class="list-disc text-xl pl-5 max-w-125 px-8">
          <li class="py-8 text-gray-text">
            <?= __( 'We create an environment in which children are happy and feel comfortable', 'meridian' ); ?>
          </li>
          <li class="pb-8 text-gray-text">
            <?= __( 'Our teachers increase children’s confidence by improving their skills', 'meridian' ); ?>
          </li>
          <li class="pb-8 text-gray-text">
            <?= __( 'Our digital platform and materials are designed exclusively for learning English', 'meridian' ); ?>
          </li>
          <li class="pb-8 text-gray-text">
            <?= __( 'Our group classes help children make new international friends and develop social skills', 'meridian' ); ?>
          </li>
          <li class="pb-8 text-gray-text">
            <?= __( 'We have a system that makes children learn real and functional language to use every day', 'meridian' ); ?>
          </li>
        </ul>
      </div>  

    </div>
  </div>

</section>