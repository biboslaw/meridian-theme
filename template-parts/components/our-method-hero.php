<section class="our-method-hero w-full flex flex-col items-center justify-between mx-auto">
  <h1 class="md:text-[55px] text-3xl text-gray-text uppercase font-black my-[65px]">
    <?= __( 'Our Method', 'meridian' ) ?>
  </h1>
  <div class="w-full flex justify-between md:flex-row flex-col">
    <div class="sneak-peak bg-blue md:w-1/2 w-full py-7 px-9 rounded-r-5 shadow-video-box mr-20">
      <h2 class="text-white text-2xl uppercase text-center"><?= __('Watch a Sneak Peek', 'meridian'); ?></h2>
      <div class="pb-[56.25%] h-0 overflow-hidden relative mt-5">
          <iframe class="h-full w-full absolute top-0 left-0" width="560" height="315" src="<?= get_field( 'hero_video' ) ? get_field( 'hero_video' ) : 'https://www.youtube.com/embed/rcIYuoO7Rfk' ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="flex flex-col md:items-start items-center mt-7 md:mt-0 md:w-1/2 w-full justify-center md:px-0 px-[4%]">
      <h1 class="max-w-[700px] text-gray-text text-[40px] font-black mb-11 border-b-8 border-b-orange pb-5">
        <?= __( 'How do we teach', 'meridian' ) ?>
      </h1>

      <ul class="list-disc pl-4 max-w-[741px]">
          <li class="text-xl text-gray-text pb-7"><?= __('We believe that short, regular classes allow students to learn and retain information more effectively, allowing for faster progression of skill', 'meridian'); ?> </li>
          <li class="text-xl text-gray-text pb-7"><?= __('Our qualified teachers prepare lessons according to a child’s individual needs', 'meridian'); ?> </li>
          <li class="text-xl text-gray-text pb-7"><?= __('We create positive learning environments, with praise and encouragement to help children gain confidence', 'meridian'); ?> </li>
          <li class="text-xl text-gray-text pb-7"><?= __('We support and develop learning, through carefully selected materials and activities, offering and setting achievable goals', 'meridian'); ?> </li>
          <li class="text-xl text-gray-text"><?= __('We implement a principled approach to teaching methodologies, employing the most appropriate strategies that take the individual learner into account', 'meridian'); ?> </li>
      </ul>
    </div>
  </div>
  <div id="small-classes"></div>
  <img class="mt-20 mb-4" src="<?= ASSETS . '/images/six-persons-group.png' ?>" alt="">
  <h2 class="font-bold">
    <?= __( 'Small classes', 'meridian' ) ?>
  </h2>
  <p class="w-full max-w-[990px] text-xl mt-5 md:px-0 px-[4%]">
    <?= __( 'Small class size (up to 6 students) facilitates real interaction between students, whilst also allowing the teacher to take individual needs into account. 1-to-1 sessions can become a sterile environment for practicing language as natural opportunities to communicate are difficult to recreate. In small groups, these student-to-student interactions can occur both naturally and be easily facilitated by the teacher.', 'meridian' ) ?>
  </p>
  <img class="mt-20 mb-4" src="<?= ASSETS . '/images/clock.png' ?>" alt="">
  <h2 class="font-bold">
    <?= __( 'Short, regular sessions', 'meridian' ) ?>
  </h2>
  <p class="w-full max-w-[990px] text-xl mt-5 md:px-0 px-[4%]">
    <?= __( 'Becoming a fluent and confident speaker of English doesn’t happen overnight!<br>
We believe that most learners, particularly young children and teens, benefit greatly from shorter, more regular classes. Short 30 minutes sessions taking place 2, 3 or 5 times a week give our teachers the opportunity to engage and maintain student attention for the duration of each class. Regular sessions improve confidence and fluency and promote a positive learning habit.', 'meridian' ) ?>
  </p>

</section>