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

		$read_status = get_post_meta( $post->ID, 'read_status', true );
	
		if ( $read_status === 'read' ) {
			continue;
		}
	
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