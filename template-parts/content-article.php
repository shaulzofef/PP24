<!-- Content for Single Posts -->

<a href="<?php the_permalink(); ?>">
	<h3><?php the_title() ;?></h3>
</a>
<?php include "details.php"; ?>
<div class="single-content">
	<?php the_content(); ?>
</div>
<div class="seperator"></div>

<!-- Gallery of Recent Posts -->
<div id="recents">
	<?php
	$args = array( 'numberposts' => 6, 'order'=> 'ASC', 'orderby' => 'title', 'post__not_in' => array( get_the_ID() ));
	$postslist = get_posts( $args );
	foreach ($postslist as $post) :  setup_postdata($post); ?> 
		<div>
			<a href="<?php the_permalink() ?>" class="recents-item">
				<div class="recents-title">
					<?php the_title(); ?>
				</div>
				<img src="<?php the_post_thumbnail_url(); ?>" class="thumbnail" alt="<?php the_title_attribute(); ?>">
			</a>
		</div>
	<?php endforeach; ?>
</div>
