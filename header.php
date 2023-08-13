<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <?php
  // Set meta description based on page type
  if (is_home() || is_front_page()) {
	  $custom_home_description = 'Daily Apple news and tips since 1995';
	  echo '<meta name="description" content="' . esc_attr($custom_home_description) . '">';
  } elseif (is_singular()) {
	  echo '<meta name="description" content="' . esc_attr(get_the_excerpt()) . '">';
  } else {
	  echo '<meta name="description" content="' . esc_attr('Daily Apple news and tips since 1995') . '">';
  }
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Google Ads -->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1967531003556587"
   crossorigin="anonymous"></script>
  
  <!-- Theme Color and Icons -->
  <meta name="theme-color" content="#011e2d">
  <link rel="icon" href="/wp-content/themes/PP24/assets//wp-content/themes/PP24/assets/favicon/favicon.svg">
  <link rel="mask-icon" href="/wp-content/themes/PP24/assets/favicon/mask-icon.svg" color="#011e2d">
  <link rel="apple-touch-icon" href="/wp-content/themes/PP24/assets/favicon/apple-touch-icon.png">
  <link rel="manifest" href="/wp-content/themes/PP24/assets/favicon/site.webmanifest.json">
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@300&family=Gantari:wght@200&family=Outfit&family=Teko:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

  <?php wp_head();?>
</head>

<body>
	<header>
		<!-- Main Header Area -->
		<div id="header-container">
			<div id="menu-container">
				<div class="menu-button" id="menu-button">
				 	<i class="fa-solid fa-bars fa-xl"></i>
			 	</div>
		 	</div>
			<a id="home" href="<?php echo home_url(); ?>" >
				<svg>
	  				<use xlink:href="#logo"></use>
				</svg>
				<h1><?php echo get_bloginfo('name'); ?></h1>
  				<h2><?php echo get_bloginfo('description'); ?></h2>
	  		</a>
 			<div class="search-button" id="search-button">
	 			<i class="fa-solid fa-magnifying-glass fa-xl"></i>
 			</div>
		</div>
		
		<!-- Menu and Search Bar -->
		<div id="popup-container">
			<div id="menu" class="menu">
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
			<form role="search" method="get" id="search-bar" class="search-bar" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
				<button type="submit" class="search-submit">GO</button>
			</form>
		</div>
	</header>
	