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
	  </section>
	</main>
<?php get_footer();?>