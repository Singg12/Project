<?php
/**
 * Template part for content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shadow Themes
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'hentry' ); ?>>
	<?php 
	$page_img_enable = get_theme_mod( 'ideal_blog_enable_single_page_image', true );
	if ( $page_img_enable && has_post_thumbnail() ) : ?>
		<div class="featured-image">
	        <?php the_post_thumbnail( 'full', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
		</div><!-- .featured-post-image -->
	<?php endif; ?>

	<?php 
	$page_author_enable = get_theme_mod( 'ideal_blog_enable_single_page_author', false );
	if ( $page_author_enable ) {
		ideal_blog_post_author(); 
	}
	?>


	<div class="shadow-entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ideal-blog' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ideal-blog' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .shadow-entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
