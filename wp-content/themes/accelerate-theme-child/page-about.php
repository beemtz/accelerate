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

<div class="site-content"><!-- will make use of existing styles that will center and contain this part of the page -->

<!-- custom query -->

<div class="services-query">

    			<?php query_posts('post_type=services');?>
      			<?php while ( have_posts() ) : the_post();
            $icon = get_field('icon'); ?>

            <div class="service">

              <div class="service-description">
    						<h2><?php the_title(); ?></h2>
    	       		<?php the_content(); ?>
              </div>

          <figure class="services-icon">
    	       		<?php echo wp_get_attachment_image($icon, "full"); ?>
          </figure>

        </div>
      			<?php endwhile; ?>
    			<?php wp_reset_query(); ?>
</div>
<!-- /custom query -->

      <div class="pre-footer">
          <div class="pf-text-box">
          <h3>Interested in working with us?</h3>
          </div>
      <div class="pf-button-box">
          <a class="pf-button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
          </div>

      </div>

      </div><!-- .site-content -->
</div><!-- #primary -->

 <?php get_footer(); ?>
