<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="theme-color" content="#011e2d">
  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <?php
  wp_head();
  ?>
  
  <meta name="theme-color" content="#003e5f">
  <link rel="icon" href="favicon/favicon.svg">
  <link rel="mask-icon" href="favicon/mask-icon.svg" color="#003e5f">
  <link rel="apple-touch-icon" href="favicon/apple-touch-icon.png">
  <link rel="manifest" href="favicon/site.webmanifest.json">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@300&family=Gantari:wght@200&family=Outfit&family=Teko:wght@300&display=swap" rel="stylesheet">

</head>

<body>
	<header>
	  <a href="index.html" id="home">
		<svg>
		  <use xlink:href="#logo"></use>
		</svg>
		<h1>POWERPAGE</h1>
	  </a>
	  <h2><span id="hide">Daily Apple news and tips</span> since 1995</h2>
	 <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
	 <label for="openSidebarMenu" class="sidebarIconToggle">
	   <div class="spinner diagonal part-1"></div>
	   <div class="spinner horizontal"></div>
	   <div class="spinner diagonal part-2"></div>
	 </label>
	 <div id="sidebarMenu">
	   <ul class="sidebarMenuInner">
		 <li><a href="index.html">Home</a></li>
		 <li><a href="contact.html">Contact</a></li>
		 <li><a href="advertise.html">Advertise</a></li>
		 <li><a href="about.html">About</a></li>
		 <li><a href="https://www.powerpage.org/?feed=rss2" target="_blank">RSS</a></li>
		 <li><a href="https://twitter.com/powerpage" target="_blank">@PowerPage</a></li>
		 <li><a href="https://twitter.com/jasonogrady" target="_blank">@JasonOGrady</a></li>
	   </ul>
	 </div>
	</header>