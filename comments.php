<?php
/**
 * @package WordPress
 * @subpackage Theme_Compat
 * @deprecated 3.0.0
 *
 * This file is here for backward compatibility with old themes and will be removed in a future version
 */
_deprecated_file(
	/* translators: %s: Template name. */
	sprintf( __( 'Theme without %s' ), basename( __FILE__ ) ),
	'3.0.0',
	null,
	/* translators: %s: Template name. */
	sprintf( __( 'Please include a %s template in your theme.' ), basename( __FILE__ ) )
);

// Do not delete these lines.
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && 'comments.php' === basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die( 'Please do not load this page directly. Thanks!' );
}

if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e( 'This post is password protected. Enter the password to view comments.' ); ?></p>
	<?php
	return;
}
?>

<!-- You can start editing here. -->

<div class="comments-container">

	<?php if ( have_comments() ) : ?>
		<h3 id="comments">
			<?php
			if ( 1 == get_comments_number() ) {
				printf(
					/* translators: %s: Post title. */
					__( 'One response to %s' ),
					'&#8220;' . get_the_title() . '&#8221;'
				);
			} else {
				printf(
					/* translators: 1: Number of comments, 2: Post title. */
					_n( '%1$s response to %2$s', '%1$s responses to %2$s', get_comments_number() ),
					number_format_i18n( get_comments_number() ),
					'&#8220;' . get_the_title() . '&#8221;'
				);
			}
			?>
		</h3>

		<div class="navigation">
			<div class="alignleft"><?php previous_comments_link(); ?></div>
			<div class="alignright"><?php next_comments_link(); ?></div>
		</div>

		<div class="col-12 col-md-7 offset-md-3 text-left">
			<ol class="commentlist">
			<?php wp_list_comments(); ?>
			</ol>
		</div>

		<div class="navigation">
			<div class="alignleft"><?php previous_comments_link(); ?></div>
			<div class="alignright"><?php next_comments_link(); ?></div>
		</div>
	<?php else : // This is displayed if there are no comments so far. ?>

		<?php if ( comments_open() ) : ?>
			<!-- If comments are open, but there are no comments. -->

		<?php else : // Comments are closed. ?>
			<!-- If comments are closed. -->
			<p class="nocomments"><?php _e( 'Comments are closed.' ); ?></p>

		<?php endif; ?>
	<?php endif; ?>

</div>



<?php 


$fields = null;
$fields['author'] = '<div class="row" style="margin-bottom:10px;"><div class="col-12 col-md-6 m-auto max-w-full md:max-w-[50%]"><input id="author" name="author" type="text" value="" size="30" aria-required="true" class="form-control" placeholder="' . __( 'Name') . '*" /></div></div>';
$fields['email']  = '<div class="row" style="margin-bottom:10px;"><div class="col-12 col-md-6 m-auto max-w-full md:max-w-[50%]"><input id="email" name="email" type="email" size="30" aria-required="true" class="form-control" placeholder="' . __( 'Email') . '*" /></div></div>';

$args = array(
    'title_reply' => '<h3 id="reply-title" class="comment-reply-title">' . __( 'Comments', 'meridian' ) . '</h3>',
	'comment_field' => '<div class="" style="margin-bottom:10px;"><div class="m-auto max-w-full md:max-w-[50%]"><textarea id="comment" name="comment" aria-required="true" class="form-control" placeholder="' . _x( 'Comment', 'meridian' ) . '*"></textarea></div></div>',
	'fields' => $fields
);

comment_form($args); 

?>

<!--<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">
			Deja una respuesta 
				<small>
					<a rel="nofollow" id="cancel-comment-reply-link" href="/es/certificada-british-council/#respond" style="display:none;">Cancelar la respuesta</a>
				</small>
		</h3>
		
		<form action="https://www.meridianenglish.com/wp-comments-post.php" method="post" id="commentform" class="comment-form" siq_id="autopick_4393">
			<p class="comment-notes">
				<span id="email-notes">Tu direcci�n de correo electr�nico no ser� publicada.</span> 
				<span class="required-field-message" aria-hidden="true">Los campos obligatorios est�n marcados con <span class="required" aria-hidden="true">*</span></span>
			</p>
			<p class="comment-form-comment">
				<label for="comment">Comentario <span class="required" aria-hidden="true">*</span></label> 
				<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
			</p>
			<p class="comment-form-author"><label for="author">Nombre <span class="required" aria-hidden="true">*</span></label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required"></p>
<p class="comment-form-email"><label for="email">Correo electr�nico <span class="required" aria-hidden="true">*</span></label> <input id="email" name="email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required"></p>
<p class="comment-form-url"><label for="url">Web</label> <input id="url" name="url" type="text" value="" size="30" maxlength="200"></p>
<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label for="wp-comment-cookies-consent">Guarda mi nombre, correo electr�nico y web en este navegador para la pr�xima vez que comente.</label></p>
<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Publicar el comentario"> <input type="hidden" name="comment_post_ID" value="1006" id="comment_post_ID">
<input type="hidden" name="comment_parent" id="comment_parent" value="0">
</p></form>	</div>-->
