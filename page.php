<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test-theme
 */

get_header();
?>

	<main id="primary" class="site-main" style="padding:2rem">
<h1 style="margin-top:2rem;line-height:1.3">
	This web project is a work-in-progress.<br>Check back later for updates.
</h1><br>
		<a href="/" class="btn">Go Home</a>
<!-- 		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

		<div style="position: absolute;bottom: 0;width: 100%;left: 0;">
<?php
// get_sidebar();
get_footer();
			?></div>