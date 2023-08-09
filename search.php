<?php get_header();?>
	<main>
	  <section>
			  <?php
			  if ( have_posts() ) :
				  while ( have_posts() ) : the_post();
					  get_template_part( 'template-parts/content', 'archive');
				  endwhile;
			  else :
				  get_template_part( '404' );
			  endif;

			?>
			<?php the_posts_pagination( array(
				  'mid_size'  => 2,
				  'prev_text' => __( 'Previous' ),
				  'next_text' => __( 'Next' ),
			  ) ); ?> 
	  </section>
	</main>
<?php get_footer();?>