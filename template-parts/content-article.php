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
	
	$args = array(
		'posts_per_page' => 5,
		'order' => 'DESC',
		'orderby' => 'date',
	);
	
	// Get an array of IDs for read posts
	$read_post_ids = array();
	$read_posts_query = new WP_Query(array(
		'meta_key' => 'read_status',
		'meta_value' => 'read',
		'fields' => 'ids',
	));
	if ($read_posts_query->have_posts()) {
		$read_post_ids = $read_posts_query->posts;
	}
	
	// Exclude current post and read posts from the query
	$args['post__not_in'] = array_merge(array($current_post_id), $read_post_ids);
	
	$postslist = get_posts($args);
	
	foreach ($postslist as $post) :  setup_postdata($post);
		?>
		<div>
			<a href="<?php the_permalink() ?>" class="recents-item">
				<div class="recents-title">
					<?php the_title(); ?>
				</div>
				<img src="<?php the_post_thumbnail_url(); ?>" class="thumbnail" alt="Feature Image">
			</a>
		</div>
	<?php endforeach;
	wp_reset_postdata(); ?>
</div>
<a class="button home" onclick="history.back(-1)">
	Back Home
</a>