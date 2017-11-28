<?php /*
 * Template Name: Properties
 */
?>

<?php get_header('new'); ?>
 
<div class="container page_content f_bg"> 
	
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
 

	<div class="twelve columns content">
		 <div class="page_title_container">
				<h1><?php  the_title();  ?></h1>
		</div> 
		<?php 
			$city = $_GET['city'];
			$type = $_GET['property_type'];
			$sale_lease = $_GET['sale_lease'];

			if($sale_lease || $type || $city){ ?>
				<iframe src="http://looplink.century-realty.com/SearchResults?SearchType=<?php echo $sale_lease; ?>&QryRadioCity=<?php echo $city; ?>&QryRadioPropertyType=<?php echo $type; ?>" width="100%" height="1200px"></iframe>
			<?php } else{ ?>
				<iframe src="http://looplink.century-realty.com/SearchResults" width="100%" height="1200px"></iframe>
			<?php }?>

			

			





 
	</div>
		  	
<?php endwhile; ?>

</div><!-- End of Container -->







<?php get_footer(); ?>