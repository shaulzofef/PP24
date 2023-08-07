 <a href="<?php the_permalink(); ?>"><h3><?php the_title() ;?></h3></a>
	<div class="details">
	  <svg><use xlink:href="#author"></use></svg><?php echo get_the_author(); ?>
	  <svg><use xlink:href="#date"></use></svg>&nbsp;<?php the_time('F jS') ?>
	</div>
	<div class="flex-container archive">
		<div>
			<?php the_excerpt(); ?>
  			<a class="button" href="<?php the_permalink(); ?>">Read</a>
		</div>
	  	<a href="">
			<img src="<?php the_post_thumbnail_url(); ?>" class="feature" alt="Feature Image">
	  	</a>
	</div>
  <div class="seperator"></div>