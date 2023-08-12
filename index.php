<?php get_header();?>
	<main>
	  	<section>
	  		<!-- Main Loop -->
			<?php
			if( have_posts() ){
				while( have_posts() ){
					the_post();
					get_template_part( 'template-parts/content', 'archive');
				}
			}
			?>
			<!-- Pagination -->
			<?php the_posts_pagination( array(
					'mid_size'  => 2,
					'prev_text' => __( 'Previous' ),
					'next_text' => __( 'Next' ),
			) ); ?> 
	  	</section>
	</main>
<?php get_footer();?>