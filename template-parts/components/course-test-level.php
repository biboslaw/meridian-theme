<section class="course-test-level lg:w-full w-[92%] my-[172px] mx-auto mt-80 lg:mt-20">
  <?php
    $bacground_color = get_field( 'background_color' );
    $bg_color = 'bg-' . $bacground_color; 
    $btn_color = $bacground_color === 'orange' ? 'bg-blue' : 'bg-orange'; 
    $btn_hover_color = $btn_color === 'bg-orange' ? 'hover:bg-gray-text' : 'hover:bg-orange'; 

    $side = get_field( 'image_position' );
  ?>
  <div class="max-w-normal w-full flex <?= $bg_color ?> mx-auto py-11 rounded-5 shadow-little-box flex-col lg:flex-row items-center lg:items-start">
    <div class="lg:w-1/3 w-full relative <?= $side === 'left' ? 'order-1' : 'order-2' ?> h-fill">
      <img class="test-level-image absolute h-[291px] w-[291px] object-cover rounded-[50%] lg:-top-20 lg:bottom-auto md:bottom-[200px]  bottom-[250px] left-1/2  transform -translate-x-1/2 lg:translate-y-0 <?= $side === 'left' ? '' : ' lg:left-initial' ?>" src="<?= get_field( 'test_image' ) ? get_field( 'test_image' ) : ''; ?>" alt="">      
    </div>

    <div class="h-full flex flex-col items-center lg:w-2/3 w-full<?= $side === 'left' ? 'order-2 lg:mr-[71px]' : 'order-1 lg:ml-[71px]' ?>">
      <div class="max-w-[700px] text-white text-center text-xl font-bold px-4">
        <?= __( 'Not sure of your child’s level of English? Ask them to take our free level test or talk to our educational adviser place them in a suitable class.', 'meridian' ) ?>
      </div>
      <div class="lg:block flex flex-col items-center mt-7">
        <a href="https://forms.zohopublic.com/crmuser116/form/WebsiteFreeEnglishLevelTest/formperma/cUn5FveHdRQrw2iEFi773T_7FtfDeaAi7XcPChvXHP8" class="lg:mr-10">
          <button class="button-primary text-xl font-bold <?= $btn_color ?> <?= $btn_hover_color ?>">
            <?= __( 'Free level test', 'meridian' ) ?>
          </button>
        </a>
        <a href="<?= get_field( 'advisor_link', 'option' ) ? get_field( 'advisor_link', 'option' ) : __( '/contact', 'meridian' ); ?>">
          <button class="lg:mt-0 mt-7 button-primary text-xl font-bold bg-white text-blue border-blue hover:text-orange hover:border-orange">
            <?= __( 'Talk to educational advisor', 'meridian' ) ?>
          </button>
        </a>
      </div>
    </div>
  </div>
</section>