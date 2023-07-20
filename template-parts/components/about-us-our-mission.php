<div id="our-mission"></div>
<section class="flex w-full flex-col">
  <section class="w-full flex flex-col items-center mt-[108px] p-[4%]">
    <div class="max-w-normal flex flex-col items-center">
      <h2 class="md:text-[50px] text-4xl font-black">
        <?php _e( 'OUR MISSION', 'meridian' ); ?>      
      </h2>
      <section id="acreditation" class="w-0 h-0"></section>
      <h3 class="md:text-[34px] text-3xl pt-14 md:text-left text-center">
        <?php _e( 'Providing Life Changing Opportunities Through Education & Experience ', 'meridian' ); ?>
      </h3>
    </div>
    
  </section>

  <section class="w-full flex pt-16">
    <div class="flex w-full md:flex-row flex-col"> 
      <div id="acreditation-slider" class="md:w-1/2 w-full">
        <?php
          if( have_rows( 'slider_images' ) ) {

            while( have_rows( 'slider_images' ) ) {

              the_row();

              $image = get_sub_field( 'single_image' );

              ?>
                <div class="max-h-[515px] w-full h-full">
                  <img class="object-cover w-full h-full" src="<?= $image ?>" alt="" loading="lazy">            
                </div>
              <?php        
            }
          }
        ?>      
      </div>
      <div class="flex flex-col items-start md:w-1/2 w-full justify-between md:pl-[100px] md:px-0 px-[4%] md:mt-0 mt-10">
        <div class="w-full max-w-[679px] md:block flex flex-col">
          <h1 class="text-gray-text md:inline-block md:max-w-[700px] md:text-[40px] text-3xl font-black mb-11 md:text-left mx-auto text-center pb-4 border-b-8 border-b-orange self-center">
            <?= __( 'Accreditation', 'meridian' ) ?>
          </h1>
          <p class="max-w-[700px] text-black text-xl text-left">
            <?= __( 'We are a UK Registered Training  Provider and a British Council  Accredited English Language School.  We are regularly inspected to  assure that we meet quality standards in management, resources and environment, teaching, welfare and the care of under 18s. We have been providing English language courses to students from all around the world for over 40 years. ', 'meridian' ) ?>
          </p>      
        </div>
        <div class="flex justify-between items-center w-full max-w-[679px] md:mt-0 mt-10">
          <img src="<?= ASSETS . '/images/uk-member.png' ?>" alt="">
          <img src="<?= ASSETS . '/images/acc-bc.png' ?>" alt="">
          <img src="<?= ASSETS . '/images/trinity.png' ?>" alt="">
        </div>
      </div>    
    </div>

  </section>
  <section class="w-full mt-[187px] px-[4%]">
    <div class="max-w-normal w-full rounded-4xl shadow-little-box py-6 bg-white flex flex-col items-center mx-auto px-[4%]">
      <h3 class="text-[34px] text-center">
        <? _e( 'PART OF SOMETHING BIGGER', 'meridian' ); ?>
      </h3>
      <span class="py-5 text-gray-text text-2xl md:text-left text-center">
        <? _e( 'Meridian School of English is part of Tellus Education Group which incorporates Tellus College.', 'meridian' ); ?>
      </span>
      <div class="flex justify-center items-center w-full gap-x-[93px] mt-5 md:flex-row flex-col flex-wrap">
        <div class="w-[174px] h-[174px] rounded-[50%] bg-orange flex justify-center items-center">
          <img src="<?= ASSETS . '/images/meridian.png' ?>" alt="">
        </div>
        <div class="w-[174px] h-[174px] rounded-[50%] bg-blue flex justify-center items-center md:mt-0 mt-10">
          <img src="<?= ASSETS . '/images/tellus-eg.png' ?>" alt="">
        </div>
        <div class="w-[174px] h-[174px] rounded-[50%] bg-[#256BA2] flex justify-center items-center md:mt-0 mt-10">
          <img src="<?= ASSETS . '/images/tellus-college.png' ?>" alt="">
        </div>
      </div>
    </div>
  </section>  
</section>

