<?php

get_header(); ?>

<main id="main" class="page-contents" role="main">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="jumbotron details">
					<div class="top-content-title-tagline">
					<?php
						
						if (get_field('main_title', 'option')){
								echo '<h2 class = "student-page-title">'.get_field('main_title', 'option').'</h2>';	
						}

						if (get_field('main_title_tagline', 'option')){
								echo '<p class = "student-page-title-tagline">'.get_field('main_title_tagline', 'option').'</p>';
						} 
					?>
					</div>

					<?php
						if (get_field('graduates_backgrounds', 'option')){
								echo '<p class = "graduate-summary">'.get_field('graduates_backgrounds', 'option').'</p>';
						} 

						if (get_field('coding_fellowship_subtitle', 'option')){
								echo '<h2 class = "coding-fellowship-subtitle">'.get_field('coding_fellowship_subtitle', 'option').'</h2>';
						} 
					?>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-8 col-md-offset-2 blog-main">
				<?php
				if ( have_posts() ) :
					// Start the Loop.
					while ( have_posts() ) : the_post();
				
						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'template-parts/content-student', get_post_format() );
				
					endwhile;
					// Previous/next post navigation.
				
				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'template-parts/content-student', 'none' );
				
				endif;
				wp_reset_query(); // reset query so Advanced Custom Fields can continue below
				?>
			</div>
		</div>
	</div><!-- .container -->
</main><!-- .page-contents -->

<?php get_footer(); ?>