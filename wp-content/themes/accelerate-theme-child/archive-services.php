<?php
/**
*The template for displaying the services archive page
*
*
* @package WordPress
* @subpackage Accelerate_Theme
* @since Accelerate Theme 1.1
*/

get_header(); ?>

<div id="primary" class="site-content">
	<div id="content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<p>test archive services</p>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->


<?php get_footer(); ?>
