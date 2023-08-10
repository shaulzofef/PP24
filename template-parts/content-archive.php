 <a href="<?php the_permalink(); ?>"><h3><?php the_title() ;?></h3></a>
	<?php include "details.php"; ?>
	<div class="flex-container archive">
		<div>
			<?php the_excerpt(); ?>
  			<a class="button" href="<?php the_permalink(); ?>">Read</a>
		</div>
	  	<a href="<?php the_permalink(); ?>">
			<img src="<?php the_post_thumbnail_url(); ?>" class="feature" alt="<?php the_title_attribute(); ?>">
	  	</a>
	</div>
  <div class="seperator"></div>