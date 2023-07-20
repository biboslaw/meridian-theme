<?php

if ( ! defined( 'ABSPATH' ) ) exit;

Class Shortcodes {

    public function __construct()
    {
        add_shortcode( 'blog_socials', [ $this, 'blogSocialsShortcode' ] );
    }

    public function blogSocialsShortcode() {

        $post_permalink = get_permalink();
        $post_title = get_the_title();
    
        ob_start();
    
        ?>
            <div style="float: left;">
                <button class="btn wow-dropdown-toggle" type="button" id="sharedSocialMediaPlugin1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa-solid fa-share"></i>&nbsp; share      </button>
                <div id="wowSharedSocialMediaMenuPlugin1" class="wow-hide" aria-labelledby="sharedSocialMediaPuglin1">
    
                    <a id="sharedSocialMediaFacebookPlugin1" class="dropdown-item" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_permalink ?>"><i class="fa-brands fa-facebook"></i></a>
    
                    <a id="sharedSocialMediaTwitterPlugin1" class="dropdown-item" href="https://twitter.com/intent/tweet?text=title&amp;url=<?php echo $post_permalink ?>&amp;via=creativedevs"><i class="fa-brands fa-twitter"></i></a>
    
                    <a id="sharedSocialMediaLinkedinPlugin1" class="dropdown-item" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $post_permalink ?>&amp;title=<?php echo $post_title ?>&amp;source=<?php echo $post_permalink ?>/"><i class="fa-brands fa-linkedin"></i></a>
                    <a id="sharedSocialMediaWhatsAppPlugin1" class="dropdown-item" href="https://api.whatsapp.com/send?text=<?php echo $post_permalink ?>" data-action="share/whatsapp/share"><i class="fa-brands fa-whatsapp"></i></a>
    
                </div>
            </div>
        <?php
    
        return ob_get_clean();
    }
}