<?php
/**
 * The template for displaying all single posts.
 *
 * @package flaton
 */

get_header(); ?>

	
<div class="content" id="slider-bottom">
  <div class="container box">   
   
   <div class="col-sm-12">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php flaton_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</div><!-- #main -->
	</div><!-- #primary -->
 </div>


<?php get_footer(); ?>