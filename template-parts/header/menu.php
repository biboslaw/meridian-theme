<nav id="site-navigation relative" class="main-navigation w-auto ">
  <img class="xl:hidden navbar-burger" src="<?= ASSETS . '/images/menu_hamburger.png' ?>" alt="">
  <div class="hidden xl:block relative z-[150]">
    <?php
      wp_nav_menu(
        array(
          'theme_location' => 'menu-1',
          'menu_id'        => 'primary-menu',
          'menu_class'		 => 'main-menu'
        )
      );
    ?>
  </div>
</nav><!-- #site-navigation -->
<?php get_template_part( 'template-parts/header/menu', 'mobile' ); ?>