 <a href=""><h3><?php the_title() ;?></h3></a>
	<div class="details">
	  <svg><use xlink:href="#author"></use></svg><?php echo get_the_author(); ?>
	  <svg><use xlink:href="#date"></use></svg>&nbsp;<?php the_time('F jS, Y') ?>
	</div>
	<?php the_content(); ?>
	<a class="button" href="<?php echo home_url(); ?>">
		<span class="button-label">Back Home</span>
	</a>