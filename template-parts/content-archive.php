<!-- Content for Archive Pages -->

<a href="<?php the_permalink(); ?>"><h3><?php the_title() ;?></h3></a>
<?php include "details.php"; ?>
  <div class="flex-container archive">
	<div class="post-excerpt">
	<div class="excerpt-content" id="excerpt-content">
		<p class="excerpt-text"><?php echo get_the_excerpt(); ?></p>
		<!-- Include full article content here -->
		<div class="full-article-content" style="display: none;">
		<?php the_content(); ?>
		</div>
		<a class="read-more-button button read-more" href="#" data-id="<?php the_ID(); ?>">+</a>
	</div>
  </div>

  <a href="<?php the_permalink(); ?>">
    <img src="<?php the_post_thumbnail_url(); ?>" class="feature" alt="<?php the_title_attribute(); ?>">
  </a>
</div>
<div class="seperator"></div>
 