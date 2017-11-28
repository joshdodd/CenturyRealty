<?php /*
 * Template Name: Fullwidth
 */
?>

<?php get_header('new'); ?>
<?php //get_template_part( 'subheader'); ?>

<div class="container page_content f_bg"> 
	
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
 

	<div class="twelve columns content">
		 <div class="page_title_container">
				<h1><?php if(is_404()){echo "OOPS!";} else {the_title();} ?></h1>
		</div> 
		<?php the_content(); ?>
	</div>
		  	
<?php endwhile; ?>

</div><!-- End of Container -->







<?php get_footer(); ?>