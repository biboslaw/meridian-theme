<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'single' );

				if ( is_singular( 'attachment' ) ) {
					// Parent post navigation.
					the_post_navigation(
						array(
							/* translators: %s: Parent post link. */
							'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentynineteen' ), '%title' ),
						)
					);
				} elseif ( is_singular( 'post' ) ) {
					// Previous/next post navigation.
					/*the_post_navigation(
						array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'twentynineteen' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'twentynineteen' ) . '</span> <br/>' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'twentynineteen' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'twentynineteen' ) . '</span> <br/>' .
								'<span class="post-title">%title</span>',
						)
					);*/
            ?>


					<?php
                        $category = "educacion";
                        $post_categories = get_the_category($post->ID);
                        if(count($post_categories) > 0):
                            $category = $post_categories[0]->name;

                            if($category == "Uncategorized"){
                                $category = "educacion";
                            }
                        endif;

                        error_log($category);
                        
                        $argsCategory = array(
                            'posts_per_page' => 3, /* how many post you need to display */
                            /*'offset' => 0,*/
                            'orderby' => 'post_date',
                            'order' => 'DESC',
                            'post_type' => 'post', /* your post type name */
                            /*'post_status' => 'publish',*/
                            'category_name' => $category,
                            'paged'          => $paged,
                            'nopaging'  => false
                        );


                        $queryPostsCategory = new WP_Query($argsCategory);

                        if($queryPostsCategory->have_posts() ):?>

                            <div class="containerBlogArticlesCategory flex justify-center">
                                <div class="container max-w-normal py-1">
                
                                    <div class="row containerMoreRecents">
                                        <div class="w-full max-w-normal">
                                            <h5><?= __( 'RELATED POSTS', 'meridian' ) ?></h5>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <?php

                                        while ( $queryPostsCategory->have_posts() ) {

                                            $queryPostsCategory->the_post();

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

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h3><?php the_title(); ?></h3>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span class="spanDescription"><?php the_excerpt(); ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="row flex-grow-1 align-items-end">
                                                        <div class="col-12 containerBtnMoreLearn">
                                                            <a href="<?php the_permalink(); ?>" class="btn btnMoreLearn"><?= __( 'Read more', 'meridian' ) ?></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        <?php
                                        } ?>
                                    </div>

                                </div>
                            </div>

                        <?php endif;?>    
			<?php }?>





            
            <?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();?>
