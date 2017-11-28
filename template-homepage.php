<?php /*
 * Template Name: Homepage Template
 */
?>

	<?php get_header(); ?>

	<?php while ( have_posts() ) { the_post(); ?>
	<!-- HOMEPAGE SLIDER -->
	<div class="slides">
		<ul class="rslides rslides1">
							<li id="rslides1_s0" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 1000ms ease-in-out;">
					<img src="https://web.archive.org/web/20170928094237im_/https://century-realty.com/wp-content/uploads/2015/07/crealty1.jpg" alt="" title="">
					<!--<div class="container">
						<div class="home_quote_container">
							 <div class="home_quote">
								<p>This website is currently under construction</p>
							</div>
						</div>
					</div>-->
				</li>
 
								<li id="rslides1_s1" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; transition: opacity 1000ms ease-in-out;" class="">
					<img src="https://web.archive.org/web/20170928094237im_/https://century-realty.com/wp-content/uploads/2015/07/crealty2.jpg" alt="" title="">
					<!--<div class="container">
						<div class="home_quote_container">
							 <div class="home_quote">
								<p>This website is currently under construction</p>
							</div>
						</div>
					</div>-->
				</li>
 
								<li id="rslides1_s2" style="float: left; position: relative; opacity: 1; z-index: 2; display: list-item; transition: opacity 1000ms ease-in-out;" class="rslides1_on">
					<img src="https://web.archive.org/web/20170928094237im_/https://century-realty.com/wp-content/uploads/2015/07/crealty3.jpg" alt="" title="">
					<!--<div class="container">
						<div class="home_quote_container">
							 <div class="home_quote">
								<p>This website is currently under construction</p>
							</div>
						</div>
					</div>-->
				</li>
 
						 
		</ul>
	</div>

	<div class="container home">
		
		<div class="six columns ">
			<div class="border_box">
				<div class="home_callout">
					<h2><a href="https://web.archive.org/web/20170928094237/https://century-realty.com/about-us/">About Us</a></h2>
				</div>
			</div>	
		</div>	
		<div class="six columns ">
			<div class="border_box callout">
				<div class="home_callout">
					<h2><a href="https://web.archive.org/web/20170928094237/https://century-realty.com/our-team/">Our Team</a></h2>
				</div>
			</div>	
		</div>
		
		<!-- <div class="twelve columns home_line"> </div> -->

		<div class="twelve columns home_column">
			<!-- Comment out for now -->
			<!--<h2> <a href="https://century-realty.com/about-us/" title="About Us">About Us</a></h2> -->			<p>Century Realty specializes in advising clients in office, retail, land, industrial, and hospitality opportunities. We provide effective and ethical representation to our clients and assist throughout the decision-making process. Our unique background in acquisitions, dispositions, and development provides our clients with the tools to navigate commercial real estate transactions with confidence and surety.</p>
			<!-- <a class="more" href="https://century-realty.com/about-us/" title="About Us">read more ></a>-->
		</div>

		<!-- Comment out for now  __ More link should remain commmented-->
		<!-- <div class="four columns home_column">
			
			<h2><a href="https://century-realty.com/our-team/" title="OUR TEAM">OUR TEAM</a></h2>
						 <a class="more" href="https://century-realty.com/our-team/" title="OUR TEAM">read more ></a>
		</div>-->

		<!-- Comment out for now  __ More link should remain commmented-->
		<!-- <div class="four columns home_column">
			<h2><a href="https://century-realty.com/contact-us/" title="CONTACT US">CONTACT US</a></h2>
						<a class="more" href="https://century-realty.com/contact-us/" title="CONTACT US">read more ></a>
		</div> -->
 
				
					 
	</div><!-- End of Container -->





	<?php } ?>

	<?php get_footer(); ?>