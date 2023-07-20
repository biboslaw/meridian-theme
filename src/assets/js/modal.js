document.addEventListener("DOMContentLoaded", (evnt) => {

    const postGridBtn = document.querySelector( '.show-modal-post-grid-btn' );
    const heroBtn = document.querySelector( '.hero-video-btn' );
    const closeBtn = document.querySelector( '.close-modal-btn' );
    console.log(closeBtn)

        closeBtn.addEventListener( 'click', (evt) => {
            document.querySelector( '.modal-box' ).style.dysplay = 'none';
        }, true )


    if( postGridBtn ) {
        postGridBtn.addEventListener( 'click', (ev) => {
            ev.preventDefault();
            
            const videoUrl = ev.target.parentElement.parentElement.querySelector( '.post-grid-video' ).getAttribute('src');
            const modal = document.querySelector( '.modal-box' );
            console.log(videoUrl)
            modal.style.display = 'flex';
            modal.querySelector( '.modal-box__content video' ).src = videoUrl;
            
        }, true )
    }
    console.log(closeBtn)


    const showModal = (button) => {

    }

});