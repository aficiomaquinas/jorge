<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <meta charset="utf-8">
	<!--[if lt IE 7]><html class="no-js ie6" <?php language_attributes(); ?>><![endif]-->
	<!--[if IE 7]><html class="no-js ie7" <?php language_attributes(); ?>><![endif]-->
	<!--[if IE 8]><html class="no-js ie8" <?php language_attributes(); ?>><![endif]-->
	<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
	
	<!-- Nicholas Gallagher "bubble up" conditional comments method  -->
	<!-- http://nicolasgallagher.com/better-conditional-classnames-for-hack-free-css/ -->

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
	<link rel="stylesheet/less" type="text/css" href="<?php echo HOME; ?>/css/main.less">

	<?php wp_head(); ?>
	
	<script>
	/* <![CDATA[ */
	theme_info = {
		url: "<?php echo HOME; ?>",
		ajax: "<?php echo admin_url( 'admin-ajax.php' ); ?>"
	}
	/* ]]> */
	</script>
	
	<?php /* <link href="<?php echo HOME; ?>/css/main.css" rel=stylesheet type="text/css" /> */ ?>
	<script async onload="try{Typekit.load()}catch(e){}" src="http://use.typekit.com/fzu1dhj.js"></script>
	<script src="<?php echo HOME; ?>/js/libs/modernizr-2.0.6.js"></script>
	<script src="<?php echo HOME; ?>/js/scripts.js"></script>
</head>

<body <?php $page_slug = $post->post_name; body_class($page_slug); ?>>

	<?php roots_wrap_before(); ?>
	<div id="wrap" class="container" role="document">
	<?php roots_header_before(); ?>
		<header id="banner" class="<?php global $roots_options; echo $roots_options['container_class']; ?>" role="banner">
			<?php roots_header_inside(); ?>
			<div class="container">
			
				<div class="logo_wrapper">
					<a id="logo" href="<?php echo home_url(); ?>/">
						<img src="<?php echo HOME; ?>/img/logo.png" 
							<?php if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod')) { ?>
								width="150" height="143" 
							<?php } else { ?>
								width="300" height="286" 
							<?php } ?>
						alt="<?php bloginfo('name'); ?>">
					</a>
				</div>
				
				<?php if ($roots_options['clean_menu']) { ?>
					<nav id="nav-main" role="navigation">
						<?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new roots_nav_walker())); ?>
					</nav>
					<?php 					
						$utility_nav = wp_get_nav_menu_object('Utility Navigation');
						$utility_nav_term_id = (int) $utility_nav->term_id;
						$menu_items = wp_get_nav_menu_items($utility_nav_term_id);					
						if ($menu_items || !empty($menu_items)) {
					?>
					<nav id="nav-utility">
						<?php wp_nav_menu(array('theme_location' => 'utility_navigation', 'walker' => new roots_nav_walker())); ?>
					</nav>
					<?php } ?>		
				<?php } else { ?>
					<nav id="nav-main" role="navigation">
						<?php wp_nav_menu(array('theme_location' => 'primary_navigation')); ?>
					</nav>
					<?php 					
						$utility_nav = wp_get_nav_menu_object('Utility Navigation');
						$utility_nav_term_id = (int) $utility_nav->term_id;
						$menu_items = wp_get_nav_menu_items($utility_nav_term_id);					
						if ($menu_items || !empty($menu_items)) {
					?>
					<nav id="nav-utility">
						<?php wp_nav_menu(array('theme_location' => 'utility_navigation')); ?>
					</nav>
					<?php } ?>								
				<?php } ?>
			
			</div>
		</header>
	<?php roots_header_after(); ?>
