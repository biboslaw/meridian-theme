<div id="student_portal"></div>
<section class="md:w-full w-[92%] mx-auto mt-[172px]">
  <div class="max-w-normal w-full bg-white rounded-5 shadow-video-box md:px-[120px] px-[4%] py-[66px] mx-auto flex flex-col items-center">
    <h2 class="font-black">
      <?= __( 'STUDENT PORTAL', 'meridian' ) ?>
    </h2>
    <p class="text-xl mt-9">
      <?= __( 'The Meridian Student Portal is a safe and secure digital platform designed especially for our students. Our digital classrooms are joined from the Student Portal, and hosted in Microsoft Teams (you will be asked to download this free software before your first class).', 'meridian' ) ?>
    </p>
    <p class="text-xl mt-9">
      <?= __( 'Our Student Portal offers many useful functionalities; please watch the video below to learn more!', 'meridian' ) ?>
    </p>
    <div class="w-full flex max-w-[826px] flex-wrap mx-auto">
      <div class="md:w-1/3 w-1/2 mt-12 flex justify-center items-center">
        <div class="w-[172px] h-[172px] bg-blue border-2 border-orange flex flex-col items-center justify-center rounded-[50%] shadow-little-box px-3">
          <img src="<?= ASSETS . '/images/hat-white.png' ?>" alt="">
          <span class="text-center text-white text-sm pt-5">
          <?= __( 'communication with teachers', 'meridian' ) ?>
          </span>
        </div>
      </div>
      <div class="md:w-1/3 w-1/2 mt-12 flex justify-center items-center">
        <div class="w-[172px] h-[172px] bg-blue border-2 border-orange flex flex-col items-center justify-center rounded-[50%] shadow-little-box px-3">
          <img src="<?= ASSETS . '/images/computer.png' ?>" alt="">
          <span class="text-center text-white text-sm pt-5">
          <?= __( 'video recordings of each lesson', 'meridian' ) ?>
          </span>
        </div>
      </div>
      <div class="md:w-1/3 w-1/2 mt-12 flex justify-center items-center"> 
        <div class="w-[172px] h-[172px] bg-blue border-2 border-orange flex flex-col items-center justify-center rounded-[50%] shadow-little-box px-3">
          <img src="<?= ASSETS . '/images/file.png' ?>" alt="">
          <span class="text-center text-white text-sm pt-5">
          <?= __( 'booking history and new bookings', 'meridian' ) ?>
          </span>
        </div>
      </div>
      <div class="md:w-1/3 w-1/2 mt-12 flex justify-center items-center">
        <div class="w-[172px] h-[172px] bg-blue border-2 border-orange flex flex-col items-center justify-center rounded-[50%] shadow-little-box px-3">
          <img src="<?= ASSETS . '/images/class.png' ?>" alt="">
          <span class="text-center text-white text-sm pt-5">
          <?= __( 'attendance record', 'meridian' ) ?>
          </span>
        </div>
      </div>
      <div class="md:w-1/3 w-1/2 mt-12 flex justify-center items-center">
        <div class="w-[172px] h-[172px] bg-blue border-2 border-orange flex flex-col items-center justify-center rounded-[50%] shadow-little-box px-3">
          <img src="<?= ASSETS . '/images/laptop.png' ?>" alt="">
          <span class="text-center text-white text-sm pt-5">
          <?= __( 'learning outcomes', 'meridian' ) ?>
          </span>
        </div>
      </div>
      <div class="md:w-1/3 w-1/2 mt-12 flex justify-center items-center">
        <div class="w-[172px] h-[172px] bg-blue border-2 border-orange flex flex-col items-center justify-center rounded-[50%] shadow-little-box px-3">
          <img src="<?= ASSETS . '/images/speaker.png' ?>" alt="">
          <span class="text-center text-white text-sm pt-5">
          <?= __( 'Credit points for referral', 'meridian' ) ?>
          </span>
        </div>
      </div>
    </div>
    <div class="w-full flex flec-col justify-center items-center mt-[70px] mb-10">
      <iframe class="rounded-5" width="560" height="315" src="https://www.youtube.com/embed/lIt-4TMoizI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div id="device_requirements" class="max-w-normal mx-auto rounded-4xl md:px-[76px] px-[4%] py-8 bg-[#256BA2]">
      <p class="text-white text-center text-lg font-bold">
        <?= __( 'Device requirements needed to join our classes:', 'meridian' ) ?>
      </p>

      <p class="text-white text-center text-lg">
        <?= __( ' The recommended device requirements are PC or Laptop with Windows 10 or 11 with a minimum 10“ screen or an iPad with iOS 14 or higher. A webcam is essential, and we recommend using headphones for an optimal experience. <br>
        Minimum hardware requirements are: 1.1 GHz or faster, two core processor; 4.0 GB of RAM; with a 1024 x 768 screen resolution.<br> Whilst you can use other hardware including Android, some features may be impaired or unavailable.<br>Please consult ' , 'meridian' ) ?>
        <a class="decoration-solid underline" href="https://docs.microsoft.com/en-us/microsoftteams/hardware-requirements-for-the-teams-app"><?= __( 'Microsoft Teams hardware requirements.', 'meridian' ) ?></a>
      </p>
    </div>
  </div>
</section>