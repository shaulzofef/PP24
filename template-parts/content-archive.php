 <a href="<?php the_permalink(); ?>"><h3><?php the_title() ;?></h3></a>
	<div class="details">
	  <div><i class="fa-regular fa-user fa-xl"></i><?php echo get_the_author(); ?></div>
	  <div><i class="fa-regular fa-calendar fa-xl"></i><?php the_time('F jS') ?></div>
	</div>
	<div class="flex-container archive">
		<div>
			<?php the_excerpt(); ?>
  			<a class="button" href="<?php the_permalink(); ?>">Read</a>
		</div>
	  	<a href="<?php the_permalink(); ?>">
			<img src="<?php the_post_thumbnail_url(); ?>" class="feature" alt="Feature Image">
	  	</a>
	</div>
  <div class="seperator"></div>