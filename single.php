<?php get_header();?>
	<main>
	  <section id="single">
			  <?php
			  if( have_posts() ){
				  while( have_posts() ){
					  the_post();
					  get_template_part( 'template-parts/content', 'article');
				  }
			  }
			?> 
	  </section>
	</main>
<?php get_footer();?>