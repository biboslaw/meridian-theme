<section class="w-full mt-11 mx-auto">
  <div class="max-w-normal mx-auto">
    <div class="w-full flex justify-between flex-wrap flex-col md:flex-row items-center md:items-start  md:px-0 px-[4%]">
      <a href="#schedule" class="max-w-[257px] w-full">
        <div class="rounded-5 shadow-little-box bg-white pt-1">
          <img class="mx-[88px] my-4" src="<?= ASSETS . '/images/course-schedule-icon.png' ?>" alt="">
          <div class="w-full bg-blue rounded-b-5">
            <span class="text-white text-2xl py-2.5 flex justify-center items-center">
              <?= __( 'Schedule', 'meridian' ) ?>
            </span>
          </div>
        </div>
      </a>
      <a href="#calendar" class="pt-6 md:pt-0 max-w-[257px] w-full">
        <div class="rounded-5 shadow-little-box bg-white pt-1">
          <img class="mx-[88px] my-4" src="<?= ASSETS . '/images/course-calendar-icon.png' ?>" alt="">
          <div class="w-full bg-blue rounded-b-5">
            <span class="text-white text-2xl py-2.5 flex justify-center items-center">
              <?= __( 'Calendar', 'meridian' ) ?>
            </span>
          </div>
        </div>        
      </a>
      <a href="#levels" class="pt-6 md:pt-0 max-w-[257px] w-full">
        <div class="rounded-5 shadow-little-box bg-white pt-1">
          <img class="mx-[88px] my-4" src="<?= ASSETS . '/images/course-syllabus-icon.png' ?>" alt="">
          <div class="w-full bg-blue rounded-b-5">
            <span class="text-white text-2xl py-2.5 flex justify-center items-center">
              <?= __( 'Syllabus', 'meridian' ) ?>
            </span>
          </div>
        </div>        
      </a>
    </div>
    <div class="bg-blue w-full rounded-5 shadow-little-box py-5 flex flex-col items-center justify-center mt-11">
      <p class="max-w-[817px] text-xl text-white font-bold md:px-0 px-[4%]">
        <?= __( 'Class allocation takes both the student’s age and level of English into account. Test your child’s level of English now.', 'meridian' ) ?>
      </p>
      <a class="mt-3" href="https://forms.zohopublic.com/crmuser116/form/WebsiteFreeEnglishLevelTest/formperma/cUn5FveHdRQrw2iEFi773T_7FtfDeaAi7XcPChvXHP8">
        <button class="button-primary md:text-xl text-lg bg-orange">
          <?= __( 'TAKE A FREE LEVEL TEST', 'meridian' ) ?>
        </button>       
      </a>

    </div>
  </div>
</section>