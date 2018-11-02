<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShUrRe
 */

?>
	<div class="col s9">
		<article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
			<header class="card-content">
				<div class="card-image">
					<?php shurre_post_thumbnail(); ?>
				</div>
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="card-title">', '</h1>' );
				else :
					the_title( '<h2 class="card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php shurre_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
				endif; ?>
			</header><!-- .entry-header -->
			<div class="card-content">
				<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'shurre' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shurre' ),
						'after'  => '</div>',
					) );

					shurre_tags_post_list();
				?>
			</div><!-- .entry-content -->

			<footer class="card-action">
				<?php
					//shurre_entry_footer();
					$shurre_post = get_post();
					$shurre_id_post = (!empty( $post ) ? $post->ID : -1);
					echo "<a href='http://localhost/ShuRre/?p=$shurre_id_post'>IR A LA RECETA</a>";
				 ?>
			</footer><!-- .entry-footer -->
		</article><!-- #post-<?php the_ID(); ?> -->
	</div>
