<?php
/**
 * The Template for displaying all single project posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

							<?php if ( 'project' == get_post_type() ) : ?>
								<div class="entry-meta">
									<?php twentyeleven_posted_on(); ?>
									</div><!-- .entry-meta -->
							<?php endif; ?>
							
							<div class="post_thumbnail"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to', 'portfoliopress'); ?> <?php the_title_attribute(); ?>" class="thumb"><?php the_post_thumbnail('portfolio-thumbnail'); ?></a></div>
							
							<div class="entry-content">
								<?php the_content(); ?>
							</div><!-- .entry-contents -->
							<footer class="entry-meta">
								<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
							</footer><!-- .entry-metasssss -->
						</article><!-- #post-<?php the_ID(); ?> -->

				<?php endwhile; // end of the loop. ?>


			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>