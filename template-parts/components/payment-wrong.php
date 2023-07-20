<section class="flex justify-center items-center w-[92%] px-[4%] mx-auto">
    <div class="rounded-5 shadow-little-box bg-white flex flex-col items-center my-14 max-w-normal mx-auto w-full py-8 px-[4%] ">
        <div class="max-w-[680px] flex flex-col items-center">
            <img class="max-w-[147px]" src="<?= ASSETS . '/images/yellow-triangle.png' ?>" alt="">

            <h1 class="md:text-4xl text-2xl text-[#256BA2] font-cassanet py-8">
                <?= __( 'PAYMENT ERROR', 'meridian' ) ?>

            </h1>
            <p class="font-black md:text-2xl text-xl">
                <?= __( 'Something went wrong during the transaction.', 'meridian' ) ?>
            </p>
            <p class="text-base my-7">
                <?= __( 'We’ll check what happened internally and contact you soon. Please don’t try making the payment again, it may have gone through already.', 'meridian' ) ?>
            </p>
            <p class="text-base ">
                <?= __( 'Many thanks and sorry for the inconvenience.', 'meridian' ) ?>
            </p>
            <p class="text-base italic mb-7">
                <?= __( 'Meridian Team', 'meridian' ) ?>

            </p>
            <a href="/" class="flex items-center">
                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18.631" height="8.701" viewBox="0 0 18.631 8.701">
                    <g id="Group_330" data-name="Group 330" transform="translate(-629.5 -832)">
                        <line id="Line_27" data-name="Line 27" x2="18.135" transform="translate(629.996 836.351)" fill="none" stroke="#707070" stroke-width="1"/>
                        <g id="Polygon_16" data-name="Polygon 16" transform="translate(629.5 840.701) rotate(-90)" fill="#707070">
                        <path d="M 7.863465785980225 7.57057523727417 L 0.8375467658042908 7.57057523727417 L 4.35050630569458 1.053725481033325 L 7.863465785980225 7.57057523727417 Z" stroke="none"/>
                        <path d="M 4.35050630569458 2.107446670532227 L 1.675092697143555 7.070575714111328 L 7.025919914245605 7.070575714111328 L 4.35050630569458 2.107446670532227 M 4.35050630569458 -4.76837158203125e-06 L 8.701016426086426 8.070575714111328 L -3.814697265625e-06 8.070575714111328 L 4.35050630569458 -4.76837158203125e-06 Z" stroke="none" fill="#707070"/>
                        </g>
                    </g>
                </svg>
                <span class=" text-gray-text">
                    <?= __( 'Go back to home page', 'meridian' ) ?>
                </span>
</a>            
        </div>

    </div>
</section>