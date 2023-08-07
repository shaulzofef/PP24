<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Daily Apple news and tips since 1995">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta name="theme-color" content="#011e2d">
  <link rel="icon" href="/wp-content/themes/PP24/assets//wp-content/themes/PP24/assets/favicon/favicon.svg">
  <link rel="mask-icon" href="/wp-content/themes/PP24/assets/favicon/mask-icon.svg" color="#011e2d">
  <link rel="apple-touch-icon" href="/wp-content/themes/PP24/assets/favicon/apple-touch-icon.png">
  <link rel="manifest" href="/wp-content/themes/PP24/assets/favicon/site.webmanifest.json">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@300&family=Gantari:wght@200&family=Outfit&family=Teko:wght@300&display=swap" rel="stylesheet">

  <?php wp_head();?>
</head>

<body>
	<header>
	  <a href="<?php echo home_url(); ?>" id="home">
		<svg>
		  <use xlink:href="#logo"></use>
		</svg>
		<h1><?php echo get_bloginfo('name'); ?></h1>
	  </a>
	  <h2><?php echo get_bloginfo('description'); ?></h2>
	 <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
	 <label for="openSidebarMenu" class="sidebarIconToggle">
	   <div class="spinner diagonal part-1"></div>
	   <div class="spinner horizontal"></div>
	   <div class="spinner diagonal part-2"></div>
	 </label>
	 <div id="sidebarMenu">
	 	<?php
		 wp_nav_menu(
			 array(
				'menu' => 'primary',
				'container' => '',
				'theme_location' => 'primary',
				'items_wrap' => '<ul class="sidebarMenuInner">%3$s</ul>'
			 )
		 );
		 ?>
	 </div>
	</header>