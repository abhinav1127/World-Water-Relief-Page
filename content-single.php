<?php
/**
 * @package flaton
 */
global $flaton;
?>
 </div>
</div></div>

 <div class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ptn-bg">
        	<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>  
        <ol class="breadcrumb">          
         <?php the_breadcrumb(); ?>
        </ol>
      </div>
    </div>
  </div>
</div>
 

<div class="container box">   
   
   <div class="col-sm-12">

		
		

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="entry-content">
		<?php if( isset( $flaton['single-featured-image'] ) && $flaton['single-featured-image'] ) : ?>
			<?php if( has_post_thumbnail() ) : ?>
				<div class="post-thumb">
					<?php the_post_thumbnail(); ?>
				</div>
			<?php endif; ?>
		<?php endif; ?>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'flaton' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php flaton_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
 </div>
 