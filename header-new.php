<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
 
<head>
	<meta charset="utf-8">
	<title><?php wp_title( '|', true, 'right' );  ?>   <?php bloginfo('name'); ?></title>

	<!-- Meta / og: tags -->
	<?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>
	<!-- the default values -->
 

	<!-- if page is content page -->
	<?php if (is_single()) { ?>
	<meta property="og:url" content="<?php the_permalink() ?>"/>
	<meta property="og:title" content="<?php single_post_title(''); ?>" />
	<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:image" content="<?php bloginfo('template_url' );?>/images/century-equities.png" />

	<!-- if page is others -->
	<?php } else { ?>
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?php bloginfo('template_url' );?>/images/century-equities.png" /> <?php } ?>
 

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">

	<!-- CSS 
  ================================================== -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/style.css" />
 

	<!-- Typekit
	================================================== -->
	<script src="https://use.typekit.net/bhg6jxr.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<!-- Favicons
	================================================== -->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
	<!-- <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('url'); ?>/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('url');?>/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('url');?>/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('url');?>/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('url');?>/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('url');?>/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('url');?>/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('url');?>/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('url');?>/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('url');?>/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('url');?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('url');?>/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('url');?>/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('url');?>/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php bloginfo('url');?>/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff"> -->

	<?php wp_head(); ?>
 

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110253506-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110253506-1');
</script>

</head>

<?php 
	if (is_page_template('template-full-background.php')){  //$template == 'page.php'
	 
	 //$background = the_field('top_image', $post->ID);
	 //var_dump($background);

	if(get_field('background_image')){ 
		$background = get_field('background_image');
		//var_dump($background);
		$background_url = $background['sizes']['background-fullscreen'];
		//var_dump($background);
	}
}
	
?>

<body class="<?php body_class(); ?>" style="background-image:url('<?php echo $background_url; ?>')">

	<div class="top-bar">
		<div class="top-links">
			<a href="http://www.centuryequities.com" ><img src="<?php bloginfo('template_url' );?>/images/centuryEquitiesTopLink.png"></a>
			<img src="<?php bloginfo('template_url' );?>/images/linkSeparator.png">
			<a href="http://www.centuryhospitality.net"><img src="<?php bloginfo('template_url' );?>/images/centuryHospitalityTopLink.png"></a>
		</div>
	</div>

	<?php if(is_page_template('template-homepage-new.php')){ 

		if(get_field('rotating_images')){ 

			$image_array = array();

			while( have_rows('rotating_images') ): the_row(); 
				$image = get_sub_field('image');

				$image_url = $image['sizes']['home-bg'];
				$image_url = '"' .$image_url . '"';

				array_push($image_array,$image_url);
			endwhile; 
	 

		}


		?>
	<div id="header-new" class="home-header" data-slides='[<?php echo implode(",", $image_array); ?>]'>


		<div class="container">
 
				<div class="three columns logo-new">
					 <a href="<?php bloginfo( 'url' );?>" title="Century Equities"><img src="<?php bloginfo('template_url' );?>/images/century-realty.png" title="Century Equities, Proven Real Estate Partners" alt="Century Equities, Proven Real Estate Partners"></a>
				</div>

				<div class="nine columns navigation-new">
				 
					<?php wp_nav_menu( array( 'menu_id' => 'nav-new', 'theme_location' => 'primary-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>')); ?>
					 
				</div>
				<div class="clear"></div>


				<!-- HOMEPAGE Callout-->
				<div class="container">
					<div class="twelve columns home-callout">
						<!-- <h2>Specializing in advising clients with honesty and integrity</h2> -->

						<form class="home-form" action="/properties">  
						       
						   <div class="field-group">
						    	<label for="city" class="label">City</label>
						    	<input name="city" id="city"  type="text"  value="" placeholder="City, State or Zip" >
						    	 
						   </div>
						   <div class="field-group select">
						    	<label for="property_type" class="label">Property Type</label>
						    	 
						    	<select name="property_type" id="property_type">
						    		<option value=" ">&#9660; Select Property Type</option>
									<option value="10">Agricultural</option>
									<option value="30">Health Care</option>
									<option value="40">Industrial</option>
									<option value="50">Land</option>
									<option value="60">Hotel &amp; Motel</option>
									<option value="70">Multifamily</option>
									<option value="80">Office</option>
									<option value="90">Retail</option>
									<option value="100">Senior Housing</option>
									<option value="120">Special Purpose</option>
									<option value="130">Sport &amp; Entertainment</option>
									<option value="140">Residential Income</option>
								</select>
						    	 
						   </div>
						   <div class="field-group select">
						    	<label for="sale_lease" class="label">Sale or Lease</label>
						    	 
						    	<select name="sale_lease" id="sale_lease">
						    		<option value="FSFL">&#9660; For Sale or Lease</option>
									<option value="FS">For Sale</option>
									<option value="FL">For Lease</option>
				 
								</select>
						    	 
						   </div>
						   <div class="field-group">
								<button class="submit" id="submit"  > Search Properties</button>
						
						   </div>
						</form>   



					</div>
				</div>


	 
 		</div>
 
	</div><!-- End of Header -->
	<?php } 
	else { 
	
	
		if(get_field('top_image')){ 
			$top_img = get_field('top_image');
			$top_img_url = $top_img['sizes']['home-bg'];
		}

	?>

	<div id="header-new" class="interior-header" <?php if(get_field('top_image')){  ?> style="background-image:url('<?php echo $top_img_url; ?>'); background-color: rgba(12, 38, 73, 0.5);" <?php }?>>
		<div class="container"> 
 
				<div class="three columns logo-new">
					 <a href="<?php bloginfo( 'url' );?>" title="Century Equities"><img src="<?php bloginfo('template_url' );?>/images/century-realty.png" title="Century Equities, Proven Real Estate Partners" alt="Century Equities, Proven Real Estate Partners"></a>
				</div>

				<div class="nine columns navigation-new">
				 
					<?php wp_nav_menu( array( 'menu_id' => 'nav-new', 'theme_location' => 'primary-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>')); ?>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
	 
 		</div>
 
	</div><!-- End of Header -->



	<?php } ?>





