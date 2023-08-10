<h3><?php the_title() ;?></h3>
<?php include "details.php"; ?>
<div class="single-content">
	<?php the_content(); ?>
</div>
<div class="seperator"></div>
<div id="recents">
	<?php
	$next_post = get_next_post();
	$prev_post = get_previous_post();
	 
	if ( $next_post || $prev_post ) : ?>
		<div>
			<?php if ( ! empty( $next_post ) ) : ?>
				<a href="<?php echo get_permalink( $next_post ); ?>">
					<?php echo get_the_post_thumbnail( $next_post); ?>
					<span class="recent-title"><?php echo get_the_title( $next_post ); ?></span>
				</a>
			<?php endif; ?>
		</div>
		<div>
			<?php if ( ! empty( $prev_post ) ) : ?>
				<a href="<?php echo get_permalink( $prev_post ); ?>">
					<?php echo get_the_post_thumbnail( $prev_post); ?>
					<span class="recent-title"><?php echo get_the_title( $prev_post ); ?></span>
				</a>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</div>