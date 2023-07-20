<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Meridian
 */

?>
	<footer id="colophon" class="site-footer w-full bg-[#BCBCBC] pb-[60px] md:pb-0">
		<div class="bg-[#D8D8D8] w-full desktop:px-0 px-[4%] hidden md:block">
			<div class="site-info  max-w-normal flex justify-center mx-auto flex-wrap relative">
				<img class="absolute bottom-8 left-0" src="<?= get_field('footer_logo', 'option') ?>" alt="">
				<img src="<?= ASSETS . '/images/map.png' ?>" alt="" class="w-1/2 my-4">
				<div class="w-1/4 flex flex-col items-start justify-center text-white pl-7 text-">
					<h4 class="font-bold">
						<?= __( 'Online English for Children', 'meridian' ) ?>
					</h4>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'secondary-menu',
								'menu_class'		 => 'secondary-menu'
							)
						);
					?>
				</div>
				<div class="w-1/4 flex flex-col items-start justify-center text-white pl-7" >
					<h4 class="font-bold">
						<?= __( 'Meridian School of English', 'meridian' ) ?>
					</h4>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-3',
								'menu_id'        => 'third-menu',
								'menu_class'		 => 'third-menu'
							)
						);
					?>
				</div>
			</div>
		</div>
		<div class="bg-[#BCBCBC] w-full border-t border-t-[#707070] desktop:px-0 px-[4%]">
			<div class="max-w-normal flex-col md:flex-row flex mx-auto py-8 items-center">
				<img class="md:hidden bottom-8 left-0 max-w-[164px]" src="<?= get_field('footer_logo', 'option') ?>" alt="">
				<div class="md:w-[19%] md:flex flex-col items-start justify-center hidden ">
					<a href="<?= __( '/our-method/#student_portal', 'meridian' ); ?>">
						<img src="<?= ASSETS . '/images/login-white.png' ?>" alt="">					
					</a>
				</div>
				<div class="md:w-[27%] flex flex-col md:items-start items-center justify-center">
					<a href="<?= get_field('terms_and_conditions', 'option') ? the_field('terms_and_conditions', 'option') : '#'; ?>" class="text-white mt-4 md:mt-0 visited:text-white"><?= __( 'Terms & Conditions', 'meridian' ) ?></a>
					<a href="<?= get_field('student_code_of_conduct', 'option') ? the_field('student_code_of_conduct', 'option') : '#'; ?>" class="text-white mt-4 visited:text-white"><?= __( 'Student Code of Conduct', 'meridian' ) ?></a>
				</div>
				<div class="md:w-[27%] flex flex-col md:items-start items-center justify-center md:pl-7">
					<a href="<?= get_field('child_safety_and_safeguarding_policy', 'option') ? the_field('child_safety_and_safeguarding_policy', 'option') : '#'; ?>" class="text-white mt-4 md:mt-0 visited:text-white"><?= __( 'Child Safety and Safeguarding Policy', 'meridian' ) ?></a>
					<a href="<?= get_field('children_privacy_policy', 'option') ? the_field('children_privacy_policy', 'option') : '#'; ?>" class="text-white mt-4 visited:text-white"><?= __( 'Children Privacy Policy', 'meridian' ) ?></a>
				</div>
				<div class="md:w-[27%] flex flex-col md:items-start items-center justify-center md:pl-7">
					<a href="<?= get_field('meridian_calendar', 'option') ? the_field('meridian_calendar', 'option') : '#'; ?>" class="text-white mt-4 md:mt-0 visited:text-white"><?= __( 'Meridian Calendar', 'meridian' ) ?></a>
					<a class="text-white mt-4 visited:text-white" href="mailto:support@meridianenglish.com"><?= __( 'support@meridianenglish.com', 'meridian' ) ?></a>
	
				</div>
			</div>
		</div>
		<div class="bg-[#BCBCBC] w-full border-t border-t-[#707070] desktop:px-0 md:px-[4%]">
			<div class="md:max-w-normal flex flex-col md:flex-row mx-auto py-4 max-w-[400px]">
				<div class="md:w-[19%] w-full flex flex-col md:items-start items-center justify-center">
					<img src="<?= ASSETS . '/images/point.png' ?>" alt="">
				</div>
				<div class="md:w-[81%] w-full flex flex-col items-start justify-center mt-5 px-[4%] md:p-0">
					<span class="text-white"><?= __( 'Meridian School of English is a trading name of Tellus Education Group Ltd. Company number 03029969', 'meridian' ) ?></span>
					<span class="text-white md:mt-1 mt-8 md:mb-0 mb-8"><?= __( 'Tellus Education Group Ltd Ocean Studios | Royal William Yard | Plymouth | PL1 3RP | UK', 'meridian' ) ?></span>
					<span class="text-white mt-1"><?= __( 'Registered Ofﬁce: Tellus Education Group Ltd C/O Francis Clark Llp | Melville Building East | Royal William Yard | Plymouth | PL1 3RP | UK' ) ?></span>
				</div>
			</div>
		</div>
		<div class="bg-[#BCBCBC] w-full border-t border-t-[#707070] desktop:px-0 px-[4%] hidden md:block">
			<div class="md:max-w-normal flex mx-auto py-4 max-w-[300px] flex-wrap">
				<span class="text-white md:w-2/4 w-full order-1 md:order-none"><?= __( '© Tellus Education Group 2021. All rights reserved', 'meridian' ) ?></span>
				<a href="<?= get_field('privacy_policy', 'option') ? the_field('privacy_policy', 'option') : '#'; ?>" class="text-white md:w-1/4 w-1/2 md:pl-7 visited:text-white"><?= __( 'Policy privacy', 'meridian' ) ?></a>
				<a href="<?= get_field('cookies_policy', 'option') ? the_field('cookies_policy', 'option') : '#'; ?>" class="text-white md:w-1/4 w-1/2 md:pl-7 visited:text-white"><?= __( 'Cookies Policy', 'meridian' ) ?></a>
			</div>
		</div>
		<div class="block md:hidden fixed z-50 bottom-0 bg-white w-full px-2 py-5">
			<a href="<?= __( '/booking', 'meridian' ); ?>">
				<button class="button-primary xl:px-[40px] px-3 xl:text-xl text-xl mr-9 hover:bg-orange">
					<?= __( 'Book your Course', 'meridian' ); ?>
				</button>
			</a>
		</div>
	</footer>
<script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "8a7660d5574fcf3fb3f2689af7c8e146a4b574c84dfaddabbff49071805cf9d34140147c634d22371ca6e8b6c308c36f", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);
</script> 

<!-- #colophon -->
</div><!-- #page -->
<?php
	include( 'template-parts/components/modal.php' );
?>

<?php wp_footer(); ?>

</body>
</html>
