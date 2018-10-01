<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package flaton
 */
?>

	</div><!-- #content -->
</div>
<footer id="footer">
  <div class="footer-links">
    <div class="container">
      <div class="row">
       
       
       
       
	<?php
		global $flaton;
		if( $flaton['footer-widgets'] ) : ?>
		
					<?php get_template_part('footer','widgets'); ?>
       
       <?php endif; ?>
				</div>
			</div>
		</div>
	
		       
       
       <div class="privacy">
    <div class="container">
      <div class="row">
        <div class="col-sm-12" data-scroll-reveal="enter bottom">
          <p class="text-center"> &copy; 2014 <a href="" title="">World Water Relief</a>. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </div>
       
       
       
       
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
