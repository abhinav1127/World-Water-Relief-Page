<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package flaton
 */
?>


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
 


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 

 

 
 		
<div class="content" id="slider-bottom">
  <div class="container box">   
   
   <div class="col-sm-12"> 
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'flaton' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'flaton' ), '<span class="edit-link"><i class="fa fa-edit"></i>', '</span>' ); ?>
	</footer><!-- .entry-footer -->
    
   </div>
 </div>
 </div>
 
</article><!-- #post-## -->
