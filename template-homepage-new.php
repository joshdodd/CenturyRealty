<?php /*
 * Template Name: Homepage New Template
 */
?>

	<?php get_header('new'); ?>

	<?php while ( have_posts() ) { the_post(); ?>





 

	<div class="container home">

		<div class="twelve columns home_line"> </div>  

		<div class="ten columns offset-by-one ">
			 
				<div class="service-callout">
					<h3>Century Realty specializes in advising clients in office, retail, land, industrial, and hospitality opportunities. We provide effective and ethical representation to our clients and assist throughout the decision-making process. Our unique background in acquisitions, dispositions, and development provides our clients with the tools to navigate commercial real estate transactions with confidence and surety.</h3>
					<a href="#" class="button"> Our Services </a>
				</div>
 
		</div>
		
		<div class="twelve columns home_line"> </div>  

		<div class="six columns home-column-new">
			<!-- Comment out for now -->
			<h2> <a href="<?php echo get_field('left_box_link')?>" title="<?php echo get_field('left_box_title')?>">Featured Property </a></h2> 
			<img src="<?php echo bloginfo('template_url' );?>/images/property.jpg" alt="">	
			<h3>45 20th St Wheeling, WV</h3>	
			<p>-54,720 SF of Office Space -Former Corporate Headquarters -Four Floors Available - Minimum of 10,000 SF -Premier signage opportunity available for anchor tenant -Modern Office Layout with High Ceilings -Located Near Downtown Wheeling Amenities -Situated just 38 Miles Southwest of Southpointe/Pittsburgh along Interstate 70 -Located in the Heart of the Marcellus and Utica Gas Shale</p>
			 	<?php//echo get_field('left_box_content')?>
			 <a class="more" href="<?php echo get_field('left_box_link')?>" title="<?php echo get_field('left_box_title')?>">read more ></a> 
		</div>

		<div class="six columns home-column-new twitter">
			<h2> <a href="<?php echo get_field('left_box_link')?>" title="<?php echo get_field('left_box_title')?>">Follow Us on Twitter</a></h2> 
			<a class="twitter-timeline" data-height="620" href="https://twitter.com/Century_Realty?ref_src=twsrc%5Etfw">Tweets by Century_Realty</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			
		</div>

		<div class="twelve columns home_line"> </div>  

		<div class="twelve columns home-column-new center">
			<h2>Contact Us</h2>
		</div>
		<div class="six columns contact-block pittsburgh">
			<h3>Pittsburgh</h3>
			<p>
				960 Penn Avenue, Suite 1001<br>
				Pittsburgh, PA 15222<br>
				Phone: (412) 235-7233 <br>
			</p>
		</div>
		<div class="six columns contact-block wheeling">
			<h3>Wheeling</h3>
			<p>
				Century Centre<br>
				1233 Main Street, Suite 1500<br>
				Wheeling, WV 26003<br>
				Phone: (304) 232-5411<br>
			</p>
		</div>

 
 
				
			
		 
	</div><!-- End of Container -->





	<?php } ?>

	<?php get_footer(); ?>