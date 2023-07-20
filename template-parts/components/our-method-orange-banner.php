<section class="md:w-full w-[92%] mx-auto mt-80 lg:mt-[172px] my-[172px] mb-0">
  <div class="max-w-normal w-full md:max-h-[226px] flex bg-orange mx-auto py-11 rounded-5 shadow-little-box flex-col lg:flex-row items-center lg:items-start px-2.5">
    <div class="lg:w-1/3 w-full relative h-fill">
      <img class="test-level-image absolute h-[291px] w-[291px] object-cover rounded-[50%] lg:-top-20 lg:bottom-auto md:bottom-[20px]  bottom-[20px] left-1/2 transform -translate-x-1/2 lg:translate-y-0" src="<?= ASSETS . '/images/girl-with-headphones.png' ?>" alt="">      
    </div>

    <div class="h-full flex flex-col items-center md:w-2/3 w-full md:mr-[71px]">
      <div class="max-w-[700px] text-white text-center text-xl font-bold">
        <?= __( 'Do you have any questions that we haven’t answered yet?', 'meridian' ) ?>
      </div>
      <div class="mt-7">
        <a href="<?= get_field( 'advisor_link', 'option' ) ? get_field( 'advisor_link', 'option' ) : __( '/contact', 'meridian' ); ?>">
          <button class="button-primary text-xl font-bold bg-white text-blue border-blue hover:text-orange hover:border-orange">
            <?= __( 'Talk to educational advisor', 'meridian' ) ?>
          </button>
        </a>
      </div>
    </div>
  </div>
</section>