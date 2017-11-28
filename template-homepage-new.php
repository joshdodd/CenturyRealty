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
					<h3><?php echo get_field('main_callout')?></h3>
					<a href="<?php echo get_field('callout_link_page')?>" class="button"> <?php echo get_field('callout_link_text')?></a>
				</div>
 
		</div>
		
		<div class="twelve columns home_line"> </div>  

		<div class="six columns home-column-new">
			<!-- Comment out for now -->
			<h2> <a href="<?php echo get_field('featured_property_link')?>" title="<?php echo get_field('featured_property_title')?>">Featured Property </a></h2> 
			
			<?php $prop_image = get_field('featured_property_image');
				  $prop_image_url = $prop_image['sizes']['large']; ?>
			
			<img src="<?php echo $prop_image_url;?>" alt="<?php echo $prop_image['alt']?>">	
			
			<h3><?php echo get_field('featured_property_title')?></h3>	
			<p><?php echo get_field('featured_property_description')?></p>
			 <a class="more" href="<?php echo get_field('featured_property_link')?>" title="<?php echo get_field('featured_property_title')?>">read more ></a> 
		</div>

		<div class="six columns home-column-new twitter">
			<h2> <a href="https://twitter.com/Century_Realty" target="_blank" title="Twitter">Follow Us on Twitter</a></h2> 
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