<h3><?php the_title() ;?></h3>
<div class="details">
  <div><i class="fa-regular fa-user fa-xl"></i><?php echo get_the_author(); ?></div>
  <div><i class="fa-regular fa-calendar fa-xl"></i><?php the_time('F jS') ?></div>
</div>
<div class="single-content">
	<?php the_content(); ?>
</div>
<div class="seperator"></div>
<div id="recents">
	<?php
	$next_post = get_next_post();
	$prev_post = get_previous_post();
	 
	if ( $next_post || $prev_post ) : ?>
		<div class="next">
			<?php if ( ! empty( $next_post ) ) : ?>
				<a href="<?php echo get_permalink( $next_post ); ?>">
					<?php echo get_the_post_thumbnail( $next_post); ?>
					<span class="recent-title"><?php echo get_the_title( $next_post ); ?></span>
				</a>
			<?php endif; ?>
		</div>
		<div class="previous">
			<?php if ( ! empty( $prev_post ) ) : ?>
				<a href="<?php echo get_permalink( $prev_post ); ?>">
					<?php echo get_the_post_thumbnail( $prev_post); ?>
					<span class="recent-title"><?php echo get_the_title( $prev_post ); ?></span>
				</a>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</div>
<a class="button home" onclick="history.back(-1)">
	Home
</a>