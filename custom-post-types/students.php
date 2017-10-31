<?php
// custom post and category
add_action('init', 'create_custom_post_type_student'); // define students custom post type
add_action('init','create_custom_post_type_taxonomy_students', 0 ); // define taxonomy (core skills) for that post type

function create_custom_post_type_student(){
	$labels = array(
		'name' => _x('Student Profiles', 'post type general name'),
		'singular_name' => _x('Student', 'post type singular name'),
		'add_new' => _x('Add New', 'students'),
		'add_new_item' => __('Add New Student'),
		'edit_item' => __('Edit Student'),
		'new_item' => __('New Student'),
		'view_item' => __('View Student'),
		'search_items' => __('Search Students'),
		'not_found' =>  __('No students found'),
		'not_found_in_trash' => __('No students found in Trash'),
		'parent_item_colon' => '',
	);

	$args = array(
		'label' => __('Student Profiles'),
		'labels' => $labels,
		'public' => true,
		'can_export' => true,
		'show_ui' => true,
		'_builtin' => false,
		'capability_type' => 'post',
		'menu_icon' => 'dashicons-welcome-learn-more',
		'hierarchical' => false,
		'rewrite' => array( "slug" => "students" ),
		'supports'=> array('title', 'thumbnail') ,
		'show_in_nav_menus' => true,
		'has_archive' => true,
		'taxonomies' => array( 'tf_student_category')
	);

	register_post_type('students', $args);

}

function create_custom_post_type_taxonomy_students(){

	$labels = array(
		'name' => _x( 'Core Skills', 'taxonomy general name' ),
		'singular_name' => _x( 'Skill', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Core Skills' ),
		'popular_items' => __( 'Popular Core Skills' ),
		'all_items' => __( 'All Core Skills' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Core Skill' ),
		'update_item' => __( 'Update Core Skill' ),
		'add_new_item' => __( 'Add New Core Skill' ),
		'new_item_name' => __( 'New Core Skill Name' ),
		'separate_items_with_commas' => __( 'Separate core skills with commas' ),
		'add_or_remove_items' => __( 'Add or remove core skills' ),
		'choose_from_most_used' => __( 'Choose from the most used core skills' ),
	);

	register_taxonomy('tf_student_category','tf_students', array(
		'label' => __('Student Core Skill'),
		'labels' => $labels,
		'hierarchical' => false,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'student-core-skill' ),
	));
}

?>
