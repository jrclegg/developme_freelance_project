<div class="col-md-8 profile-fields">
	<?php

	if (get_the_title()){
   			echo '<h2 class="student-name">'.get_the_title().'</h2>';
		}
	if (get_field('role_transition')){
			echo '<h2 class="role-transition">'.get_field('role_transition').'</h2>';	
		} 
	if (get_the_post_thumbnail()){
			echo '<h2 class="student-image">'.get_the_post_thumbnail().'</h2>';	
		} 
	if (get_field('student_quote')){
			echo '<h2 class="student-quote">'.get_field('student_quote').'</h2>';	
		} 
	if (get_field('graduated')){
			echo '<h2 class="graduation-date">'.get_field('graduated').'</h2>';	
		}
	if (get_field('previous_role')){
			echo '<h2 class="previous-role">'.get_field('previous_role').'</h2>';
		} 
	if (get_field('current_role')){
			echo '<h2 class="current-role">'.get_field('current_role').'</h2>';
		} 


		?>


	<div class= "col-md-8 col-xs-12 project-links">
		<?php

    if (get_field('project_links')){
			echo '<h2 class="project-links-title">'.get_field('project_links').'</h2>';
		}

		?>
	</div>

	<div class="col-md-8 col-xs-12 social-networks">
		<?php

		if (get_field('social_profiles_title')){
				echo '<h2 class="social-profiles-title">'.get_field('social_profiles_title').'</h2>';
		 } 
		if( have_rows('student_social_networks') ){
    		while (have_rows('student_social_networks') ) { the_row();
             echo '<a class="student-social-networks" href="'.get_sub_field('social_network_url').'">'. get_sub_field('social_network_name').'</a>';
    		}
		}
		?>
	</div>

	<div class="contact-button-link">
		<?php
			if (get_field('contact_button_link')){
				echo '<a href="'.get_field('contact_button_link').'"class="btn btn-default contact-button">Contact</a>';
			} 
		?>
	</div>

	<?php 
		if (get_field('course_reviews_title')){
				echo '<h2 class="course-reviews-title">'.get_field('course_reviews_title').'</h2>';
		} 

		if( have_rows('course_reviews') ){
    		while (have_rows('course_reviews') ) { the_row();

             echo '<a class="course-reviews" href="'.get_sub_field('course_review_link').'">'.'<img src="'.get_stylesheet_directory_uri();

             $select = get_sub_field('course_review_select');
				switch ($select) {
					 case "Google":
					 echo '/images/google-logo.png';
					 break;
					 case "Course Report":
					 echo '/images/course-report-logo.png';
					 break;	 
				} 
				echo '"/></a>';
         	}
    	}
	?>
</div>
