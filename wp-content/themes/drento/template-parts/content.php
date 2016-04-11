<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package drento
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="drentoContentBox">
		<?php
			if ( '' != get_the_post_thumbnail() ) {
				echo '<div class="entry-featuredImg"><a href="' .esc_url(get_permalink()). '">';
				the_post_thumbnail('drento-little-post');
				echo '</a><figcaption></figcaption></div>';
			}
		?>
		<div class="drentoContentText">
			<header class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				<div class="drentoSpace"></div>

				<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php drento_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
			
				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
			
			
			<footer class="entry-footer">
				<span class="read-more"><a href="<?php echo esc_url(get_permalink()); ?>"><?php esc_html_e('Read More', 'drento') ?></a><i class="fa spaceLeft fa-caret-right"></i></span>
				<?php
					edit_post_link(
						sprintf(
							/* translators: %s: Name of current post */
							esc_html__( 'Edit %s', 'drento' ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						),
						'<span class="edit-link"><i class="fa fa-wrench spaceLeftRight"></i>',
						'</span>'
					);
				?>
			</footer><!-- .entry-footer -->
		</div><!-- .drentoContentText -->
	</div><!-- .drentoContentBox -->
</article><!-- #post-## -->
<div class="drentoDiv"></div>
