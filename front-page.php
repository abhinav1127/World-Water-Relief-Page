<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package FLATON
 */
if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else {
		get_header(); 

		if( isset($flaton) ) {
					if( isset($flaton['homepage_blocks']['enabled']['slider']) && isset($flaton['slides']) ) {
						$slides = $flaton['slides'];
						$output = '';
						if( count($slides) > 1) {

							$output .= '<div class="flex-container">';
							$output .= '<div class="flexslider">';
							$output .= '<ul class="slides">';

							foreach($slides as $slide) {
								$output .= '<li>';
								$output .= '<div class="flex-image"><img src="' . $slide['url'] . '" alt="" ></div>';
								if ( $slide['description'] != '' ) {
									$output .= '<div class="flex-caption">' . $slide['description'] . '</div>';
								}
								$output .= '</li>';
							}

							$output .= '</ul>';
							$output .= '</div><!-- .flexslider -->';
							$output .= '</div><!-- .flex-container -->';

						} else {
							$output = '';
							$output .= '<div class="flex-container">';
							$output .= '<div class="flexslider">';
							$output .= '<ul class="slides">';
								$output .= '<li>';
									$output .= '<div class="flex-image"><img src="' . $flaton_home['slide1'] . '" alt="" ></div>';
									$output .= '<div class="flex-caption">' . $flaton_home['caption1'] . '</div>';
								$output .= '</li>';
								$output .= '<li>';
									$output .= '<div class="flex-image"><img src="' . $flaton_home['slide2'] . '" alt="" ></div>';
									$output .= '<div class="flex-caption">' . $flaton_home['caption2'] . '</div>';
								$output .= '</li>';

							$output .= '</ul>';
							$output .= '</div><!-- .flexslider -->';
							$output .= '</div><!-- .flex-container -->';

						}

						echo $output;
						
					}
         ?> 

</header>

<section id="features" class="row">
 <div class="container">
    <div class="row">
      <div class="col-sm-12" >
        <h1 class="arrow" style="font-size:4rem; font-weight:bold;">What We Do</h1>
      </div>
     </div>
   <div class="row">
      <div class="col-sm-12 feature-content" style="padding-left:22% !important; padding-right:22% !important;">
        <p>At World Water Relief our mission is to provide safe, filtered water and WASH (water, sanitation & hygiene) education to the students and communities at each of our project schools in the Dominican Republic and Haiti.</p>
        <p>World Water Relief serves the southwestern region of the Dominican Republic, near the city of Barahona, and the central and southern areas of Haiti. These areas are often overlooked or ignored by governments due to their distance from major cities or marginalized because of their demographics.</p>
        <p>We focus on children, since they are especially vulnerable to the impacts of poor sanitation, water and hygiene. When they are unhealthy, they often miss school, fall behind, and lack a proper education.</p>
        <p>Not only do we raise the money for our projects, but do the installation, weekly maintenance and repairs ourselves, using our local native staff along with our leadership team.</p>
		</div>

	</div>
  
  </div>
 <div class="container">
    <div class="row">
      <div class="col-sm-12" >
        <h1 class="arrow">Who We Are</h1>
      </div>
     </div>
   <div class="row">
      <div class="col-sm-4 feature-content"   data-scroll-reveal="enter left over 1s and move 300px after 0.3s">
        <div class="video">
          <div class="fluid-width-video-wrapper">
            <object width="300" height="156" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0">
              <param name="src" value="http://www.cbsnews.com/common/video/cbsnews_player.swf" />
              <param name="scale" value="noscale" />
              <param name="salign" value="lt" />
              <param name="background" value="#000000" />
              <param name="allowfullscreen" value="true" />
              <param name="allowscriptaccess" value="always" />
              <param name="flashvars" value="pType=embed&amp;si=254&amp;pid=t9QQsh_kG1IL&amp;url=http://www.cbsnews.com/videos/young-haitian-fighting-cholera-epidemic-one-water-filter-at-a-time" />
              <embed width="300" height="156" type="application/x-shockwave-flash" src="http://www.cbsnews.com/common/video/cbsnews_player.swf" scale="noscale" salign="lt" background="#000000" allowfullscreen="true" allowscriptaccess="always" flashvars="pType=embed&amp;si=254&amp;pid=t9QQsh_kG1IL&amp;url=http://www.cbsnews.com/videos/young-haitian-fighting-cholera-epidemic-one-water-filter-at-a-time/" />
            </object>
          </div>
        </div>
        <h3>WWR on CBS News</h3>
        <p>In November 2013, WWR hosted the CBS Evening News team as they reported on student ambassador Samuel Marseille’s efforts to spread the word of clean water and hygiene to his peers in the schools of Mirebalais.
Read about Samuel’s incredible journey here!</p>
        <a href="http://www.cbsnews.com/news/relief-group-fighting-deadly-spread-of-cholera-in-haiti/" target="_blank" class="btn_link" title="">Read More <span class=""> > </span></a> </div>
      <div class="col-sm-4  feature-content"   data-scroll-reveal="enter left over 1s and move 300px after 0.3s">
        <div class="video">
          <div class="fluid-width-video-wrapper">
            <iframe src='http://player.vimeo.com/video/16661397?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=0&amp;loop=0' width='300' height='156' frameborder='0'></iframe>
          </div>
        </div>
        <h3>Program Overview Video</h3>
        <p>Atlanta independent filmmaker David Bruckner generously used his considerable talent to tell the story of our work in Haiti in 2010.   Our Haitian team has been working hard to make life better in their country through the provision of potable water in schools. Watch this panoramic documentary to learn more about WWR’s work in schools!</p>
        <!-- <a href="" class="btn_link" title="">Read More <span class=""> > </span></a> --> </div>
      <div class="col-sm-4  feature-content"   data-scroll-reveal="enter left over 1s and move 300px after 0.3s">
        <div class="video">
          <div class="fluid-width-video-wrapper">
            <iframe src="http://player.vimeo.com/video/87513425?title=0&amp;byline=0&amp;portrait=0&amp;color=f0f3f5" width="300" height="156" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
          </div>
        </div>
        <h3>One Town Makes A Difference</h3>
        <p>The video above is an inspiring story of how a group of committed individuals in Georgia came together to bring clean water to those in need.  The trip to Haiti took place in January 2014 and was the start of a community-wide initiative to support WWR. The story shows just how one small community can change the world.  </p>
        <!-- <a href="" class="btn_link" title="">Read More <span class=""> > </span></a> --> </div></div>
  
  </div>
    </section>


<!-- <div id="donations" class="parallax-section" style="background-position: 50% 125px;">
		<div class="padding-top padding-bottom container">
			<div class="row">
				<div class="col-sm-5">
					<div class="donations">
						<h1>Donations</h1>
						<p class="lead">Building Stronger Kids with Better Water</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						<a href="<?php echo get_site_url(); ?>/you-can-help/donate" class="btn btn-primary">Donate/pay in your money</a>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="text-center overall-process">
						<div class="cycle-image">
							<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/cycle.png" alt="">
						</div>						
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/cycle-line.png" alt="">
						<div class="round-progress">
							<div class="progress">
								<div class="progress-bar progress-bar-striped active six-sec-ease-in-out" role="progressbar" data-transition="26" style="width: 26%;"></div>
							</div>
						</div>						
						<div class="progress-info">
							<p>Overall Process</p>
							<span class="lead"><i class="fa fa-thumbs-o-up"></i> Raised $ 9800</span>							
							<span class="lead"><i class="fa fa-flag-o"></i> Goal $ 98,000</span>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>  --> 
           
           
           
<?php 
         
         
					if( isset( $flaton['homepage_blocks']['enabled']['services'] ) ) {
						$output = '';
							$output = '<div class="services">';
							$output .= '<div class="container">';
							$output .= '<div class="row">';
								if( isset( $flaton['service-main-title'] ) ) {
									$output .= '<h2 class="service-title">' . $flaton['service-main-title'] . '</h2>';
								}
								if( isset( $flaton['service-sub-title'] ) ) {
									$output .= '<h3 class="service-subtitle">' . $flaton['service-sub-title'] . '</h3>';
								}
								$output .= '<div id="service-tabs">';
								$output .= '<ul>';
								if( isset( $flaton['service-title-1'] ) ) {
									$output .= '<li><a href="#service-tab-1">' . $flaton['service-title-1'] . '</a></li>';
								}
								if( isset( $flaton['service-title-2'] ) ) {
									$output .= '<li><a href="#service-tab-2">' . $flaton['service-title-2'] . '</a></li>';
								}
								if( isset( $flaton['service-title-3'] ) ) {
									$output .= '<li><a href="#service-tab-3">' . $flaton['service-title-3'] . '</a></li>';
								}
								if( isset( $flaton['service-title-4'] ) ) {
									$output .= '<li><a href="#service-tab-4">' . $flaton['service-title-4'] . '</a></li>';
								}
								if( isset( $flaton['service-title-5'] ) ) {
									$output .= '<li><a href="#service-tab-5">' . $flaton['service-title-5'] . '</a></li>';
								}
								$output .= '</ul><br class="clear"/>';
								if( isset( $flaton['service-icon-1'] ) && isset( $flaton['service-description-1'] ) ) {
									$output .= '<div id="service-tab-1">';
									$output .= '<div class="four columns"><div class="tab-icon"><i class="' . $flaton['service-icon-1'] . '"></i></div></div>';
									$output .= '<div class="service-desc twelve columns">' . '<h3 class="tabs-title">' . $flaton['service-title-1'] . '</h3>' . $flaton['service-description-1'] . '</div><br class="clear"/>';
									$output .= '</div><!-- #service-tab-1 -->';
								}

								if( isset( $flaton['service-icon-2'] ) && isset( $flaton['service-description-2'] ) ) {
									$output .= '<div id="service-tab-2">';
									$output .= '<div class="four columns"><div class="tab-icon"><i class="' . $flaton['service-icon-2'] . '"></i></div></div>';
									$output .= '<div class="service-desc twelve columns">' . '<h3 class="tabs-title">' . $flaton['service-title-2'] . '</h3>' . $flaton['service-description-2'] . '</div><br class="clear"/>';
									$output .= '</div><!-- #service-tab-2 -->';
								}

								if( isset( $flaton['service-icon-3'] ) && isset( $flaton['service-description-3'] ) ) {
									$output .= '<div id="service-tab-3">';
									$output .= '<div class="four columns"><div class="tab-icon"><i class="' . $flaton['service-icon-3'] . '"></i></div></div>';
									$output .= '<div class="service-desc twelve columns">' . '<h3 class="tabs-title">' . $flaton['service-title-3'] . '</h3>' . $flaton['service-description-3'] . '</div><br class="clear"/>';
									$output .= '</div><!-- #service-tab-3 -->';
								}

								if( isset( $flaton['service-icon-4'] ) && isset( $flaton['service-description-4'] ) ) {
									$output .= '<div id="service-tab-4">';
									$output .= '<div class="four columns"><div class="tab-icon"><i class="' . $flaton['service-icon-4'] . '"></i></div></div>';
									$output .= '<div class="service-desc twelve columns">' . '<h3 class="tabs-title">' . $flaton['service-title-4'] . '</h3>' . $flaton['service-description-4'] . '</div><br class="clear"/>';
									$output .= '</div><!-- #service-tab-4 -->';
								}

								if( isset( $flaton['service-icon-5'] ) && isset( $flaton['service-description-5'] ) ) {
									$output .= '<div id="service-tab-5">';
									$output .= '<div class="four columns"><div class="tab-icon"><i class="' . $flaton['service-icon-5'] . '"></i></div></div>';
									$output .= '<div class="service-desc twelve columns">' . '<h3 class="tabs-title">' . $flaton['service-title-5'] .'</h3>' . $flaton['service-description-5'] . '</div><br class="clear"/>';
									$output .= '</div><!-- #service-tab-5 -->';
								}
							$output .= '</div> <!-- #services-tabs -->';
							$output .= '</div> <!-- .row -->';
							$output .= '</div> <!-- .container -->';
							$output .= '</div> <!-- .services -->';

						echo $output;
					}
		?>
		<div id="content" class="site-content">
				
				<div id="primary" class="content-area">
					<main id="main" class="site-main container" role="main">

					<?php if( isset( $flaton['homepage_blocks']['enabled']['team'] )) : ?>
						<div class="row">
							<h2 class="service-title"><div>Meet The Team</div></h2><div class="team-content"><div class="innercol"><?php echo $flaton['team']; ?><br class="clear"/></div></div>
						</div>
					<?php endif; ?>

					<?php if( isset( $flaton['homepage_blocks']['enabled']['extra-info'] )) : ?>
						<div class="row">
							<div class="sixteen columns"><div id="add-info"><?php echo $flaton['extra-info']; ?><br class="clear"/></div></div>
						</div>
					<?php endif; ?>

					<?php if( isset( $flaton['homepage_blocks']['enabled']['features'] )) : ?>
						<div class="row">
							<div class="feature-wrap">

							<div class="eight columns" id="whyus">
								<div class="feature2">
									<?php echo isset( $flaton['features'] ) ? $flaton['features'] : '' ?>
								</div>
							</div>

							<div class="eight columns" id="skills">
								<?php
									$output = '';
									if ( isset( $flaton['skill-heading'] ) ) {
										$output .= '<h2>' . $flaton['skill-heading'] . '</h2>';
									}

									for ($i=1;$i<6;$i++) {
										$skill = "skill-{$i}";
										$percentage = "percentage-{$i}";
										$icon = "skill-icon-{$i}";
										if( isset( $skill ) && isset( $flaton[$icon] ) && isset( $flaton[$percentage] ) && isset( $flaton[$skill] ) ) {
											$output .= '<div class="skill-container"><i class="' . $flaton[$icon] . '"></i>';
											$output .= '<div class="skill">';
											$output .= '<div class="skill-percentage percent' . $flaton[$percentage] .' start"><span class="circle"></span></div>';
											$output .= '<div class="skill-content">'  . $flaton[$skill] .'<span> ' . $flaton[$percentage] . '%</span></div>';
											$output .= '</div>';
											$output .= '</div>';
										}
									}

									echo $output;
								?>
							</div> <!-- .eight columns skills -->
							<br class="clear"/>
							</div>

						</div> <!-- .row -->
								
					<?php endif; ?>

					<?php if( isset( $flaton['homepage_blocks']['enabled']['recent_posts'] )) : ?>
						<div class="row">
							<div class="sixteen columns">
								<h2>Recent Work</h2>
								<?php flaton_recent_posts(); ?>
							</div><!-- .sixteen columns -->
						</div><!-- .row -->
					<?php endif;  ?>

					<?php if( isset( $flaton['homepage_blocks']['enabled']['default'] )) : 
							while ( have_posts() ) : the_post();
								the_content();
							endwhile;
						endif; 

				} else {
					if( isset( $flaton_home ) ) {
						$output = '';
							$output .= '<div class="flex-container">';
							$output .= '<div class="flexslider">';
							$output .= '<ul class="slides">';
								$output .= '<li>';
									$output .= '<div class="flex-image"><img src="' . $flaton_home['slide1'] . '" alt="" ></div>';
									$output .= '<div class="flex-caption">' . $flaton_home['caption1'] . '</div>';
								$output .= '</li>';
								$output .= '<li>';
									$output .= '<div class="flex-image"><img src="' . $flaton_home['slide2'] . '" alt="" ></div>';
									$output .= '<div class="flex-caption">' . $flaton_home['caption2'] . '</div>';
								$output .= '</li>';

							$output .= '</ul>';
							$output .= '</div><!-- .flexslider -->';
							$output .= '</div><!-- .flex-container -->';

							$output .= '<div class="services">';
							$output .= '<div class="container">';
							$output .= '<div class="row">';
								if( isset( $flaton_home['service-main-title'] ) ) {
									$output .= '<h2 class="service-title">' . $flaton_home['service-main-title'] . '</h2>';
								}
								if( isset( $flaton_home['service-sub-title'] ) ) {
									$output .= '<h3 class="service-subtitle">' . $flaton_home['service-sub-title'] . '</h3>';
								}
								$output .= '<div id="service-tabs">';
								$output .= '<ul>';
								if( isset( $flaton_home['service-title-1'] ) ) {
									$output .= '<li><a href="#service-tab-1">' . $flaton_home['service-title-1'] . '</a></li>';
								}
								if( isset( $flaton_home['service-title-2'] ) ) {
									$output .= '<li><a href="#service-tab-2">' . $flaton_home['service-title-2'] . '</a></li>';
								}
								if( isset( $flaton_home['service-title-3'] ) ) {
									$output .= '<li><a href="#service-tab-3">' . $flaton_home['service-title-3'] . '</a></li>';
								}
								if( isset( $flaton_home['service-title-4'] ) ) {
									$output .= '<li><a href="#service-tab-4">' . $flaton_home['service-title-4'] . '</a></li>';
								}
								if( isset( $flaton_home['service-title-5'] ) ) {
									$output .= '<li><a href="#service-tab-5">' . $flaton_home['service-title-5'] . '</a></li>';
								}
								$output .= '</ul><br class="clear"/>';
								if( isset( $flaton_home['service-icon-1'] ) && isset( $flaton_home['service-description-1'] ) ) {
									$output .= '<div id="service-tab-1">';
									$output .= '<div class="four columns"><div class="tab-icon"><i class="' . $flaton_home['service-icon-1'] . '"></i></div></div>';
									$output .= '<div class="service-desc twelve columns">' . '<h3 class="tabs-title">' . $flaton_home['service-title-1'] . '</h3>' . $flaton_home['service-description-1'] . '</div><br class="clear"/>';
									$output .= '</div><!-- #service-tab-1 -->';
								}

								if( isset( $flaton_home['service-icon-2'] ) && isset( $flaton_home['service-description-2'] ) ) {
									$output .= '<div id="service-tab-2">';
									$output .= '<div class="four columns"><div class="tab-icon"><i class="' . $flaton_home['service-icon-2'] . '"></i></div></div>';
									$output .= '<div class="service-desc twelve columns">' . '<h3 class="tabs-title">' . $flaton_home['service-title-2'] . '</h3>' . $flaton_home['service-description-2'] . '</div><br class="clear"/>';
									$output .= '</div><!-- #service-tab-2 -->';
								}

								if( isset( $flaton_home['service-icon-3'] ) && isset( $flaton_home['service-description-3'] ) ) {
									$output .= '<div id="service-tab-3">';
									$output .= '<div class="four columns"><div class="tab-icon"><i class="' . $flaton_home['service-icon-3'] . '"></i></div></div>';
									$output .= '<div class="service-desc twelve columns">' . '<h3 class="tabs-title">' . $flaton_home['service-title-3'] . '</h3>' . $flaton_home['service-description-3'] . '</div><br class="clear"/>';
									$output .= '</div><!-- #service-tab-3 -->';
								}

								if( isset( $flaton_home['service-icon-4'] ) && isset( $flaton_home['service-description-4'] ) ) {
									$output .= '<div id="service-tab-4">';
									$output .= '<div class="four columns"><div class="tab-icon"><i class="' . $flaton_home['service-icon-4'] . '"></i></div></div>';
									$output .= '<div class="service-desc twelve columns">' . '<h3 class="tabs-title">' . $flaton_home['service-title-4'] . '</h3>' . $flaton_home['service-description-4'] . '</div><br class="clear"/>';
									$output .= '</div><!-- #service-tab-4 -->';
								}

								if( isset( $flaton_home['service-icon-5'] ) && isset( $flaton_home['service-description-5'] ) ) {
									$output .= '<div id="service-tab-5">';
									$output .= '<div class="four columns"><div class="tab-icon"><i class="' . $flaton_home['service-icon-5'] . '"></i></div></div>';
									$output .= '<div class="service-desc twelve columns">' . '<h3 class="tabs-title">' . $flaton_home['service-title-5'] .'</h3>' . $flaton_home['service-description-5'] . '</div><br class="clear"/>';
									$output .= '</div><!-- #service-tab-5 -->';
								}
							$output .= '</div> <!-- #services-tabs -->';
							$output .= '</div> <!-- .row -->';
							$output .= '</div> <!-- .container -->';
							$output .= '</div> <!-- .services -->';

						echo $output;
					}
		?>
		<div id="content" class="site-content">
				
				<div id="primary" class="content-area">
					<main id="main" class="site-main container" role="main">
		<?php
					if( isset( $flaton_home )) { ?>
							<hr/>
							<div class="row">
								<h2 class="service-title"><div>Meet The Team</div></h2><div class="team-content"><div class="innercol"><?php echo $flaton_home['team']; ?><br class="clear"/></div></div>
							</div>
							<hr/>
							<div class="row">
								<div class="sixteen columns"><div id="add-info"><?php echo $flaton_home['extra-info']; ?><br class="clear"/></div></div>
							</div>
							<hr/>
							<div class="row">
								<div class="feature-wrap">

								<div class="eight columns" id="whyus">
									<div class="feature2">
										<?php echo isset( $flaton_home['features'] ) ? $flaton_home['features'] : '' ?>
									</div>
								</div>

								<div class="eight columns" id="skills">
									<?php
										$output = '';
										if ( isset( $flaton_home['skill-heading'] ) ) {
											$output .= '<h2>' . $flaton_home['skill-heading'] . '</h2>';
										}

										for ($i=1;$i<6;$i++) {
											$skill = "skill-{$i}";
											$percentage = "percentage-{$i}";
											$icon = "skill-icon-{$i}";
											if( isset( $skill ) && isset( $flaton_home[$icon] ) && isset( $flaton_home[$percentage] ) && isset( $flaton_home[$skill] ) ) {
												$output .= '<div class="skill-container"><i class="' . $flaton_home[$icon] . '"></i>';
												$output .= '<div class="skill">';
												$output .= '<div class="skill-percentage percent' . $flaton_home[$percentage] .' start"><span class="circle"></span></div>';
												$output .= '<div class="skill-content">'  . $flaton_home[$skill] .'<span> ' . $flaton_home[$percentage] . '%</span></div>';
												$output .= '</div>';
												$output .= '</div>';
											}
										}

										echo $output;
									?>
								</div> <!-- .eight columns skills -->
								<br class="clear"/>
								</div>

							</div> <!-- .row -->
							<hr/>
							<div class="row">
								<div class="sixteen columns">
									<h2>Recent Work</h2>
									<?php flaton_recent_posts(); ?>
								</div><!-- .sixteen columns -->
							</div><!-- .row -->
							<?php
								while ( have_posts() ) : the_post();
									the_content();
								endwhile;
							}
						}
				?>
			
			</main><!-- #main -->  
		</div><!-- #primary -->
         
       
<?php 
		get_footer(); 
}
?>