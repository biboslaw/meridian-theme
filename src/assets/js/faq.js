document.addEventListener('DOMContentLoaded', () => {
  const faqContainer = document.querySelectorAll( '.faq-item' );
  
  if( faqContainer ) {
    faqContainer.forEach( (item) => {

      item.querySelector('button').addEventListener( 'click', e => {

        if( item.classList.contains( 'faq-active' ) ) {
          item.classList.remove( 'faq-active' );
        } else {
          document.querySelector('.faq-active') ? document.querySelector('.faq-active').classList.remove('faq-active') : '';
          item.classList.add( 'faq-active' );
        }
      }, true )
    } )
  }
});