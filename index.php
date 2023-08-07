<?php get_header();?>
	<main>
	  <section>
	  		<?php
			  if( have_posts() ){
				  while( have_posts() ){
					  the_post();
					  get_template_part( 'template-parts/content', 'archive');
				  }
			  }
			?>
			<?php the_posts_pagination( array(
				  'mid_size'  => 2,
				  'prev_text' => __( 'Previous', 'textdomain' ),
				  'next_text' => __( 'Next', 'textdomain' ),
			  ) ); ?> 
	  </section>
	</main>
<?php get_footer();?>