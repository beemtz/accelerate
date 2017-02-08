<?php

 get_header(); ?>

<section class="about-page">

      <div class="about-hero">
        <?php while ( have_posts() ) : the_post(); ?>
   				<?php the_content(); ?>
        </div>

      <?php endwhile; // end of the loop. ?>


</section> <!-- aboutpage -->

<div class="about-description">
      <h4>Our Services</h4>
          <p>We take pride in our clients and the content we create for them.<br>Here's a brief overview of our offered services.</p>
</div>

<!-- custom query -->

<div class="services-query">
    			<?php query_posts('post_type=services');?>
      			<?php while ( have_posts() ) : the_post();
            $icon = get_field('icon'); ?>
    						<h2><?php the_title(); ?></h2>
    	       		<?php the_content(); ?>
    	       		<?php echo wp_get_attachment_image($icon, "full"); ?>
      			<?php endwhile; ?>
    			<?php wp_reset_query(); ?>
</div>

<!-- /custom query -->

      <div class="pre-footer">
          <h3>Interested in working with us?</h3> <a class="pf-button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
      </div>

</div><!-- #primary -->

 <?php get_footer(); ?>
