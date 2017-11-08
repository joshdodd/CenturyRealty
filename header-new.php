<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

 
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
	<style type="text/css">
	/*.contact-us{position: absolute; top: 10px; right: 10px;} .contact-us a:hover{color: white;}
	.top-bar{text-align:right;}
		.top-links{background:#98a6b9; margin-bottom:7px; padding:.7em .7em .5em 0;}
		.top-links a:hover, .top-links a:active, .top-links a:focus{opacity:.8;}*/
	</style>

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

	<?php if(is_page_template('template-homepage-new.php')){ ?>
	<div id="header-new" class="home-header">
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
						<h2>Specializing in advising clients with honesty and integrity</h2>

						<form class="home-form" action="#">  
						       
						   <div class="field-group">
						    	<label for="text1" class="label">City</label>
						    	<input name="text1" id="text1"  type="text"  value="" placeholder="City, State or Zip" required>
						    	 
						   </div>
						   <div class="field-group">
						    	<label for="text2" class="label">Property Type</label>
						    	<input name="text1" id="text2"  type="text"  value="" placeholder="&#9660; Property Type" required>
						    	 
						   </div>
						   <div class="field-group">
						    	<label for="text2" class="label">Rent or Lease</label>
						    	<input name="text1" id="text3"  type="text"  value="" placeholder="&#9660; Rent or Lease" required>
						    	 
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
	?>

	<div id="header-new" class="interior-header">
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





