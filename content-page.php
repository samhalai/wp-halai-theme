<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( ! is_front_page() ) { ?>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->
		<?php } else { ?>
			<p></p>
		<?php } ?>
		
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-contents -->
	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-metasssss -->
</article><!-- #post-<?php the_ID(); ?> -->
