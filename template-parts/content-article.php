<h3><?php the_title() ;?></h3>
<div class="details">
  <svg><use xlink:href="#author"></use></svg><?php echo get_the_author(); ?>
  <svg><use xlink:href="#date"></use></svg>&nbsp;<?php the_time('F jS') ?>
</div>
<?php the_content(); ?>
<div class="seperator"></div>
<div id="recents">
	<?php
	$current_post_id = get_the_ID();
	$args = array( 'numberposts' => 5, 'order'=> 'ASC', 'orderby' => 'title' );
	$postslist = get_posts( $args );
	foreach ($postslist as $post) :  setup_postdata($post);
		// Check if the post has been marked as read
		$read_status = get_post_meta( $post->ID, 'read_status', true );
		// Skip posts that have been marked as read
		if ( $read_status === 'read' ) {
			continue;
		}
		// Check if the post is the current post, and skip it
		if ( $post->ID === $current_post_id ) {
			continue;
		}
		?>
		<div>
			<a href="<?php the_permalink() ?>" class="recents-item">
				<div class="recents-title">
					<?php the_title(); ?>
				</div>
				<img src="<?php the_post_thumbnail_url(); ?>" class="thumbnail" alt="Feature Image">
			</a>
		</div>
	<?php endforeach; ?>
</div>
<a class="button home" onclick="history.back(-1)">
	Back Home
</a>