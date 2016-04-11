<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package drento
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
	<div id="comments" class="comments-area">

		<?php // You can start editing here -- including this comment! ?>

		<?php if ( have_comments() ) : ?>
			<h2 class="comments-title">
				<?php
					printf(
						esc_html( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'drento' ) ),
						number_format_i18n( get_comments_number() )
					);
				?>
			</h2>

			<ol class="comment-list">
				<?php
					wp_list_comments( array(
						'style'      => 'ol',
						'short_ping' => true,
						'avatar_size' => '70',
						'reply_text'        =>  '<span>' .esc_html__( 'Reply'  , 'drento' ) . '<i class="fa fa-reply spaceLeft"></i></span>',
					) );
				?>
			</ol><!-- .comment-list -->

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
				<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'drento' ); ?></h2>
				<div class="nav-links">

					<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'drento' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'drento' ) ); ?></div>

				</div><!-- .nav-links -->
			</nav><!-- #comment-nav-below -->
			<?php endif; // Check for comment navigation. ?>

		<?php endif; // Check for have_comments(). ?>

		<?php
			// If comments are closed and there are comments, let's leave a little note, shall we?
			if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'drento' ); ?></p>
		<?php endif; ?>
		
			<?php
				$commenter = wp_get_current_commenter();
				$req = get_option( 'require_name_email' );
				$aria_req = ( $req ? " aria-required='true'" : '' );

				$fields =  array(
					'author' => '<p class="comment-form-author"><label for="author"><span class="screen-reader-text">' . __( 'Name *'  , 'drento' ) . '</span></label><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' placeholder="' . __( 'Name *'  , 'drento' ) . '"/></p>',
					'email'  => '<p class="comment-form-email"><label for="email"><span class="screen-reader-text">' . __( 'Email *'  , 'drento' ) . '</span></label><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' placeholder="' . __( 'Email *'  , 'drento' ) . '"/></p>',
					'url'    => '<p class="comment-form-url"><label for="url"><span class="screen-reader-text">' . __( 'Website *'  , 'drento' ) . '</span></label><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder="' . __( 'Website'  , 'drento' ) . '"/></p>',
				);
				$required_text = esc_html__(' Required fields are marked ', 'drento').' <span class="required">*</span>';
				?>
				<?php comment_form( array(
					'fields' => apply_filters( 'comment_form_default_fields', $fields ),
					'must_log_in' => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' , 'drento' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
					'logged_in_as' => '<p class="logged-in-as smallPart">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>'  , 'drento' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
					'comment_notes_before' => '<p class="comment-notes smallPart">' . __( 'Your email address will not be published.'  , 'drento' ) . ( $req ? $required_text : '' ) . '</p>',
					'title_reply' => __( 'Leave a Reply'  , 'drento' ),
					'title_reply_to' => __( 'Leave a Reply to %s'  , 'drento' ),
					'cancel_reply_link' => __( 'Cancel reply'  , 'drento' ) . '<i class="fa fa-times spaceLeft"></i>',
					'label_submit' => __( 'Post Comment'  , 'drento' ),
					'comment_field' => '<p class="comment-form-comment"><label for="comment"><span class="screen-reader-text">' . __( 'Comment *'  , 'drento' ) . '</span></label><textarea id="comment" name="comment" rows="8" aria-required="true" placeholder="' . __( 'Comment *'  , 'drento' ) . '"></textarea></p>',
				));
			?>
	</div><!-- #comments -->