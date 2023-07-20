<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Meridian
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php $current_language = apply_filters( 'wpml_current_language', null ); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- old code -->

	<meta name="google-site-verification" content="1lWq4yYGJzvY7y6a0PMUwcECTIbLmg2U0rFMbkrQEUU" />

	<!--SmartCat connection-->
	<!-- <script id='sc-script' src="https://cdn.smartcat-proxy.com/48e26c773d644bf187818ed98f0abb06/script-v1/__translator.js?hash=080732bb47e193cb7c333b57a0931e26"></script> -->


	<!-- Page Sense zoho-->
	<script src="https://cdn.pagesense.io/js/tellusgroup/e049450857424dff997fd11222d6929a.js"></script>
	<!--End  Page Sense zoho-->

	<link href="<?php bloginfo('template_url'); ?>/resources/icons/favicon.ico" rel="shortcut icon" type="image/x-icon" />

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

	<!-- Facebook Pixel Code -->

	<?php 
	/*483829299750593*/
	/*$facebookPixelCode = "539029953993523";*/
	$facebookPixelCode = "483829299750593";
	if(strtolower($current_language) == "gr")
	{
		$facebookPixelCode = "684306906125216";
	}
	elseif(strtolower($current_language) == "th")
	{
		$facebookPixelCode = "668259614216885";
	}
	elseif(strtolower($current_language) == "cs")
	{
		$facebookPixelCode = "1338928696867270";
	}

    ?>

    <script>
        !function(f,b,e,v,n,t,s){
        if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?php echo $facebookPixelCode;?>');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1"src="https://www.facebook.com/tr?id=<?php echo $facebookPixelCode;?>&ev=PageView&noscript=1"/>
    </noscript>

	<script>
        (function(h,e,a,t,m,p) {
        m=e.createElement(a);m.async=!0;m.src=t;
        p=e.getElementsByTagName(a)[0];p.parentNode.insertBefore(m,p);
        })(window,document,'script','https://u.heatmap.it/log.js');
    </script>

    <meta name="facebook-domain-verification" content="vkh58h0ls5mgw71wk9923s5ay46upn" />

	<!-- old code end -->

	<!-- Meta Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s){
		if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window,document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1519627261893637');
		fbq('track', 'PageView');
	</script>

	<noscript>
		<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1519627261893637&ev=PageView&noscript=1" />
	</noscript>
	<!-- End Meta Pixel Code -->

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<script>
        var _languageWeb = <?php echo '"' . strtolower($current_language) . '"'?>     
                     
    </script>

	<?php
		if( $current_language === 'cs' ){
			?>
				<!-- Google Tag Manager -->
				<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
				new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
				j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
				'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
				})(window,document,'script','dataLayer','GTM-MTTJS6N');</script>
				<!-- End Google Tag Manager -->
			<?php
		} else {
			?>

				<!-- Google Tag Manager -->
				<script>
					(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
					new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
					j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
					'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
					})(window,document,'script','dataLayer','GTM-K54X7JB');
				</script>
				<!-- End Google Tag Manager -->

				<!-- Google Tag Manager (noscript) -->
				<noscript>
					<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K54X7JB"
					height="0" width="0" style="display:none;visibility:hidden"></iframe>
				</noscript>
				<!-- End Google Tag Manager (noscript) -->

				<!-- Global site tag (gtag.js) - Google Analytics -->
				<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-8223520-12"></script>
				<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'UA-8223520-12');
				</script> -->
				
				
				<!-- Google Tag Manager -->
			<?php
		}
	?>
	<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-DLC9TDEPGH"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());    gtag('config', 'G-DLC9TDEPGH'); </script>

</head>

<body <?php body_class(); ?>>
<?php
	if( $current_language === 'cs' ){
		?>
			<!-- Google Tag Manager (noscript) -->
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTTJS6N"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
			<!-- End Google Tag Manager (noscript) -->
		<?php
	}
?>
<?php wp_body_open(); ?>
<?php
	if( $current_language === 'cs' && is_page( 'akce-3lekce-za-99kc' ) ) {
		?>
		<div id="myModalLeave" class="hidden fixed top-0 left-0 right-0 z-[3247483649] w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-full max-h-full justify-center items-center shadow bg-black bg-opacity-50 text-white">
			<div class="modal-content relative max-w-[600px] w-full bg-[#DDDDDD] rounded-[20px]">
				<div class="bg-[url('/src/assets/images/modal-bacground.svg')] h-[157px] flex flex-col items-center justify-center">
					<h3 class="text-[30px] text-white">
						<?php echo __( 'Chcete vědět více?', 'meridian' ) ?>
					</h3>
					<p class="text-white">
					<?php echo __( 'Zanechte svůj email a my se vám ozveme.', 'meridian' ) ?>
					</p>
				</div>
				<div class="flex justify-center items-center">
					<?php echo do_shortcode('[wpforms id="10516" title="false"]') ?>
					<?php echo do_shortcode('[wpforms id="10702"]') ?>
				</div>
				<span class="wow-close absolute right-[0.8rem] top-[0.1rem] text-2xl cursor-pointer">&times;</span>
			</div>
		</div>
	<?php
	}
?>
<div id="page" class="site  ">
	<div class="w-full sticky top-0 z-40 shadow-little-box">

		<div class="bg-[#FFF2DD] w-full px-[2%]">
			<div class="flex justify-between <?php echo strtolower($current_language) == "cs" ? ' sm:h-12 h-20' : 'h-12' ?> items-center max-w-wide mx-auto flex-wrap">
				<span class="text-xl font-light hidden md:inline-block">
					<? 
						$contact_details = get_field( 'email', 'option' ) ? get_field( 'email', 'option' ) : 'hello@meridianenglish.com';
						$contact_details .= get_field( 'phone', 'option' ) ? 'I ' . get_field( 'phone', 'option' ) : '';
						echo $contact_details;
					?>
				</span>
				<div class="md:hidden flex justify-between items-center">
					<a class="" href="<?= get_field( 'facebook', 'option' ) ? get_field( 'facebook', 'option' ) : '#' ?>">
						<img src="<?= ASSETS . '/images/fb-mobile.png' ?>" alt="">
					</a>
					<a class="px-9" href="<?= get_field( 'instagram', 'option' ) ? get_field( 'instagram', 'option' ) : '#' ?>">
						<img src="<?= ASSETS . '/images/insta-mobile.png' ?>" alt="">
					</a>
					<a class="pr-9" href="<?= get_field( 'you_tube', 'option' ) ? get_field( 'you_tube', 'option' ) : '#' ?>">
						<img src="<?= ASSETS . '/images/yt-mobile.png' ?>" alt="">
					</a>
					<a href="<?= get_field( 'linkedin', 'option' ) ? get_field( 'linkedin', 'option' ) : '#' ?>">
						<img src="<?= ASSETS . '/images/in-mobile.png' ?>" alt="">
					</a>
				</div>
				<div class="flex items-center">
					<div class="language-selector mr-3 z-[151] hidden md:block">
						<?php
							echo do_shortcode( '[wpml_language_selector_widget]' );
						?>
					</div>

					<a href="<?= get_field( 'portal_link', 'option' ) ? get_field( 'portal_link', 'option' ) : 'https://calculator.tellus.co.uk:8447/en/Login' ?>" class="text-xl">
						<?= __('Login', 'meridian') ?>
						<img class="inline-block pl-2" src="<?= ASSETS . '/images/login.png' ?>" alt="">
					</a>
				</div>
			</div>
		</div>

		<div class="w-full bg-white py-3 px-[2%]">
			<header id="masthead" class="site-header max-w-wide mx-auto flex justify-between items-center desktop-xl:px-0">
				<div class="site-branding ">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$meridian_description = get_bloginfo( 'description', 'display' );
						?>
				</div><!-- .site-branding -->

				<div class="hidden lg:flex ">
					<a href="<?= __( '/booking', 'meridian' ); ?>" class="">
						<button class="book-your-course button-primary 2xl:px-[40px] px-2 xl:text-xl text-xl mr-9 hover:bg-orange">
							<?= __( 'Book your Course', 'meridian' ); ?>
						</button>
					</a>
					<a href="<?= __( '/contact', 'meridian' ); ?>">
						<button class="button-secondary xl:px-[40px] px-2 xl:text-xl text-lg ">
							<?= __( 'Get more info', 'meridian' ); ?>
						</button>						
					</a>
				</div>

				<?php get_template_part( 'template-parts/header/menu' ); 
				error_log(get_field( 'you_tube', 'option' )) ;?>
			</header><!-- #masthead -->		
			<div class="hidden fixed top-1/3 left-0 px-2 py-8 md:flex flex-col justify-between rounded-r-5  shadow-video-box bg-white items-center">
				<a target="_blank" class="" href="<?= get_field( 'facebook', 'option' ) ? get_field( 'facebook', 'option' ) : '#' ?>">
					<img src="<?= ASSETS . '/images/fb.png' ?>" alt="">
				</a>
				<a target="_blank" class="py-9" href="<?= get_field( 'instagram', 'option' ) ? get_field( 'instagram', 'option' ) : '#' ?>">
					<img src="<?= ASSETS . '/images/insta.png' ?>" alt="">
				</a>
				<a target="_blank" class="pb-9" href="<?= get_field( 'you_tube', 'option' ) ? get_field( 'you_tube', 'option' ) : '#' ?>">
					<img src="<?= ASSETS . '/images/yt.png' ?>" alt="">
				</a>
				<a target="_blank" href="<?= get_field( 'linkedin', 'option' ) ? get_field( 'linkedin', 'option' ) : '#' ?>">
					<img src="<?= ASSETS . '/images/in.png' ?>" alt="">
				</a>
			</div>
		</div>
	</div>

