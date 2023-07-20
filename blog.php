<?php /* Template Name: blog content page */ ?>


<?php get_header();?>

    <div class="containerBlogTitle">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class=" text-[2.5rem] uppercase"><?= __(  the_title(), 'meridian') ?></h1>
            </div>
        </div>
    </div>

    <div class="container max-w-normal mx-auto">

    <?php 
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

      $args = array(
          'posts_per_page' => 6, /* how many post you need to display */
          /*'offset' => 0,*/
          'orderby' => 'post_date',
          'order' => 'DESC',
          'post_type' => 'post', /* your post type name */
          /*'post_status' => 'publish',*/
          /*'category_name' => 'educacion',*/
          'paged'          => $paged,
          'nopaging'  => false
      );

        $cont = 0;
        $srcImage = "";
        $closeContainerArticules = false;

        $queryPosts = new WP_Query($args);
        /*$lengthQueryPosts = $queryPosts->found_posts; */
        $lengthQueryPosts = $queryPosts->post_count;
        error_log(print_r($lengthQueryPosts,true));

        if ($queryPosts->have_posts()) :?>

            <div class="containerBlogArticles">


                <?php 
                    $queryPosts->the_post();
                ?>

                <?php if (has_post_thumbnail( $post->ID ) ): 
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' );
                    $srcImage = $image[0];
                ?>
                <?php else : 
                    $srcImage = "";
                ?>
                <? endif; ?>

                <!--Mostramos el primer registro del blog-->
                <div class="row">
                    <div class="col-12">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo $srcImage; ?>" class="img-fluid"/>
                        </a>
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col-12">
                        <h2 class="text-4xl font-bold font-noto"><?php the_title(); ?></h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <span class="spanDescription font-noto"><?php the_excerpt(); ?></span>
                    </div>
                </div>

                <div class="row pt-2">
                    <div class="col-12">
                        <a href="<?php the_permalink(); ?>" class="btn btnMoreLearn"><h1><?= __(  'Read more', 'meridian') ?></h1></a>
                    </div>
                </div>


                <!--mostrmos los demas registros-->
                <?php if($lengthQueryPosts > 1) :?>

                    <div class="row containerMoreRecents">
                        <div class="col-12">
                            <h5><?= __(  'MOST RECENT ARTICLES', 'meridian') ?></h5>
                        </div>
                    </div>

                    <div class="row">

                        <?php
                            for ($i = 1; $i < $lengthQueryPosts; $i++) {
                                $queryPosts->the_post();

                                if (has_post_thumbnail( $post->ID ) ): 
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' );
                                    $srcImage = $image[0];
                                 else : 
                                     $srcImage = "";
                                endif;

                                /*solo para los articulos grandes*/
                                if($i <= 2):
                                    ?>

                                    <div class="col-12 col-lg-4 containerArticleBlue">
                                        <div class="h-100 d-flex flex-column">
                                            
                                            <div class="row">
                                                    <div class="col-12">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <img src="<?php echo $srcImage; ?>" class="img-fluid"/>
                                                        </a>
                                                    </div>
                                            </div>

                                            <div class="row pb-2">
                                                <div class="col-12">
                                                    <h3 class="text-3xl font-noto"><?php the_title(); ?></h3>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <span class="spanDescription"><?php the_excerpt(); ?></span>
                                                </div>
                                            </div>

                                            <div class="row flex-grow-1 align-items-end pt-2">
                                                <div class="col-12 containerBtnMoreLearn">
                                                    <a href="<?php the_permalink(); ?>" class="btn btnMoreLearn"><?= __(  'Read more', 'meridian') ?></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                <?php else:?>

                                    <!--abrimos el container para los aritulos peque�os-->
                                    <?php if($closeContainerArticules == false): 
                                        $closeContainerArticules = true;
                                    ?>
                                        <div class="col-12 col-lg-4 containerLittlePost">
                                    <?php endif; ?>

                                    <div class="row align-items-center containerArticleBlue">
                                        <div class="col-6">
                                            <a href="<?php the_permalink(); ?>">
                                                <img src="<?php echo $srcImage; ?>" class="img-fluid"/>
                                            </a>
                                        </div>

                                        <div class="col-6">
                                            <a href="<?php the_permalink(); ?>" class="linkTitlePost">
                                                <?php the_title(); ?>
                                            </a>
                                        </div>
                                    </div>


                                <?php endif; ?>

                            <?php
                            }
                        ?>

                        <!--ceramos el container para los aritulos peque�os-->
                        <?php if($closeContainerArticules == true): 
                        ?>
                            </div>
                        <?php endif; ?>

                    </div>

                    

                <?php endif;?>

            </div>


            <nav class="containerBlogArticles_Pagination pb-4">
                <?php 
                    $total_pages = $queryPosts->max_num_pages;

                        if ($total_pages > 1){
                            $current_page = max(1, get_query_var('paged'));

                            echo paginate_links(array(
                                'base' => get_pagenum_link(1) . '%_%',
                                'format' => 'page/%#%',
                                'current' => $current_page,
                                'total' => $total_pages,
                            ));
                        }
                ?>
            </nav>

        <?php endif;
    ?>


    </div>

    <!--articulos por categorias-->

    <?php
        $nameEducationCategory = "educacion";
        $nameEnglishOnlineCategory = "Ingles Online";

        $languageWeb = strtolower(apply_filters( 'wpml_current_language', null ));

        if ($languageWeb == 'en') {
            $nameEducationCategory = "education";
            $nameEnglishOnlineCategory = "english online";
        } elseif ($languageWeb == 'es') {
            $nameEducationCategory = "educacion";
            $nameEnglishOnlineCategory = "Ingles Online";
        }  elseif ($languageWeb == 'fr') {
            $nameEducationCategory = "education-fr";
            $nameEnglishOnlineCategory = "anglais-ligne";
        }  elseif ($languageWeb == 'it') {
            $nameEducationCategory = "formazione-scolastica";
            $nameEnglishOnlineCategory = "inglese-linea";
        }  elseif ($languageWeb == 'pl') {
            $nameEducationCategory = "edukacja";
            $nameEnglishOnlineCategory = "angielski-online";
        } 

        $argsEducacion = array(
            'posts_per_page' => 3, /* how many post you need to display */
            /*'offset' => 0,*/
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post', /* your post type name */
            /*'post_status' => 'publish',*/
            'category_name' => $nameEducationCategory,/*'educacion',*/
            'paged'          => $paged,
            'nopaging'  => false
        );

        $argsInglesOnline = array(
            'posts_per_page' => 3, /* how many post you need to display */
            /*'offset' => 0,*/
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post', /* your post type name */
            /*'post_status' => 'publish',*/
            'category_name' => $nameEnglishOnlineCategory,/*'Ingles Online',*/
            'paged'          => $paged,
            'nopaging'  => false
        );

        $queryPostsEducacion = new WP_Query($argsEducacion);
        $queryPostsInglesOnline = new WP_Query($argsInglesOnline);

        if($queryPostsEducacion->have_posts() or $queryPostsInglesOnline->have_posts()): ?>

            <div class="containerBlogArticlesCategory ">
                <div class="container max-w-normal mx-auto py-1">

                
                <?php if ( $queryPostsEducacion->have_posts() ) {
                ?>

                    <div class="row containerMoreRecents">
                        <div class="col-12">
                            <h5><?= __(  'EDUCATION', 'meridian') ?></h5>
                        </div>
                    </div>

                    <div class="row">
                        <?php

                        while ( $queryPostsEducacion->have_posts() ) {

                            $queryPostsEducacion->the_post();

                            if (has_post_thumbnail( $post->ID ) ): 
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' );
                                $srcImage = $image[0];
                            else : 
                                $srcImage = "";
                            endif; ?>
 
                            <div class="col-12 col-lg-4 containerArticleBlue">
                                <div class="h-100 d-flex flex-column">
                                            
                                    <div class="row">
                                            <div class="col-12">
                                                <a href="<?php the_permalink(); ?>">
                                                    <img src="<?php echo $srcImage; ?>" class="img-fluid"/>
                                                </a>
                                            </div>
                                    </div>

                                    <div class="row pb-2">
                                        <div class="col-12">
                                            <h3 class="font-noto"><?php the_title(); ?></h3>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <span class="spanDescription"><?php the_excerpt(); ?></span>
                                        </div>
                                    </div>

                                    <div class="row flex-grow-1 align-items-end pt-2">
                                        <div class="col-12 containerBtnMoreLearn">
                                            <a href="<?php the_permalink(); ?>" class="btn btnMoreLearn"><?= __(  'Read more', 'meridian') ?></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        <?php
                        } ?>
                    </div>

                <?php
                } ?>


                <?php if ( $queryPostsInglesOnline->have_posts() ) {
                ?>

                    <div class="row containerMoreRecents">
                        <div class="col-12">
                            <h5><?= __(  'ENGLISH ONLINE', 'meridian') ?></h5>
                        </div>
                    </div>

                    <div class="row">

                        <?php

                        while ( $queryPostsInglesOnline->have_posts() ) {

                            $queryPostsInglesOnline->the_post();

                            if (has_post_thumbnail( $post->ID ) ): 
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' );
                                $srcImage = $image[0];
                            else : 
                                $srcImage = "";
                            endif; ?>
 
                            <div class="col-12 col-lg-4 containerArticleBlue">
                                <div class="h-100 d-flex flex-column">
                                            
                                    <div class="row">
                                            <div class="col-12">
                                                <a href="<?php the_permalink(); ?>">
                                                    <img src="<?php echo $srcImage; ?>" class="img-fluid"/>
                                                </a>
                                            </div>
                                    </div>

                                    <div class="row bp-2">
                                        <div class="col-12">
                                            <h3><?php the_title(); ?></h3>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <span class="spanDescription"><?php the_excerpt(); ?></span>
                                        </div>
                                    </div>

                                    <div class="row flex-grow-1 align-items-end pt-2">
                                        <div class="col-12 containerBtnMoreLearn">
                                            <a href="<?php the_permalink(); ?>" class="btn btnMoreLearn"><?= __(  'Read more', 'meridian') ?></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        <?php
                        }?>
                    </div>

                <?php
                } ?>


                </div>
            </div>

        <?php endif;
    ?>    

    

<?php get_footer();?>