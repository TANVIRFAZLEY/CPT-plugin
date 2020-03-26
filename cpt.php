<?php
/**
 * Plugin Name:       CPT
 * Plugin URI:
 * Description:       Custom Post Type
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Tanvir
 * Author URI:        https://tanvirfazley.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       cpt
 * Domain Path:       /languages
 */

// Register Custom Post Type
function cpt_custom_post_type() {

	$labels = array(
		'name' => _x('Books', 'Post Type General Name', 'cpt'),
		'singular_name' => _x('Book', 'Post Type Singular Name', 'cpt'),
		'menu_name' => __('Books', 'cpt'),
		'name_admin_bar' => __('Book', 'cpt'),
		'archives' => __('Item Archives', 'cpt'),
		'attributes' => __('Item Attributes', 'cpt'),
		'parent_item_colon' => __('Parent Item:', 'cpt'),
		'all_items' => __('All Items', 'cpt'),
		'add_new_item' => __('Add New Item', 'cpt'),
		'add_new' => __('Add New', 'cpt'),
		'new_item' => __('New Item', 'cpt'),
		'edit_item' => __('Edit Item', 'cpt'),
		'update_item' => __('Update Item', 'cpt'),
		'view_item' => __('View Item', 'cpt'),
		'view_items' => __('View Items', 'cpt'),
		'search_items' => __('Search Item', 'cpt'),
		'not_found' => __('Not found', 'cpt'),
		'not_found_in_trash' => __('Not found in Trash', 'cpt'),
		'featured_image' => __('Featured Image', 'cpt'),
		'set_featured_image' => __('Set featured image', 'cpt'),
		'remove_featured_image' => __('Remove featured image', 'cpt'),
		'use_featured_image' => __('Use as featured image', 'cpt'),
		'insert_into_item' => __('Insert into item', 'cpt'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'cpt'),
		'items_list' => __('Items list', 'cpt'),
		'items_list_navigation' => __('Items list navigation', 'cpt'),
		'filter_items_list' => __('Filter items list', 'cpt'),
	);
	$args = array(
		'label' => __('Book', 'cpt'),
		'labels' => $labels,
		'supports' => array('title', 'editor', 'thumbnail'),
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => array(
			'slug' => 'books',
			'with_front' => false,
		),
	);
	register_post_type('book', $args);

	//Chapter
	register_post_type('Chapters',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Chapters'),
				'singular_name' => __('chapter'),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'chapter',
				'with_front' => false,
			),
			'show_in_rest' => true,

		)
	);

}
add_action('init', 'cpt_custom_post_type', 0);