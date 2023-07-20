document.addEventListener("DOMContentLoaded", () => {

    const triggerButtons = document.querySelectorAll('.navbar-burger');
    const mobileMenu = document.querySelector('.mobile-menu');

    //if (mobileMenu) {

        triggerButtons.forEach((trigger) => {

            /* Toggle menu */
            trigger.addEventListener( 'click', (e) => {
                e.preventDefault();
                mobileMenu.classList.toggle('hidden');
                document.body.classList.toggle('overflow-hidden');
            });

            /* Close menu */
            mobileMenu.querySelector( '.navbar-close' ).addEventListener( 'click', (e) => {
                e.preventDefault();
                mobileMenu.classList.add('hidden');
                document.body.classList.toggle('overflow-hidden');
            });
        });

    //}

});
