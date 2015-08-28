<?php

/**
 * Hide ACF menu item from the admin menu
 */

function remove_acf_menu(){
	remove_menu_page('edit.php?post_type=acf');
}
add_action( 'admin_menu', 'remove_acf_menu', 999 );

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_homepage-settings',
		'title' => 'Homepage Settings',
		'fields' => array (
			array (
				'key' => 'field_55e0afe7401f6',
				'label' => 'Background Image Message',
				'name' => '',
				'type' => 'message',
				'message' => 'Use the featured image section in the right hand sidebar to upload the hero background image.',
			),
			array (
				'key' => 'field_55e0ba6c727bc',
				'label' => 'Hero Image',
				'name' => 'hero_image',
				'type' => 'image',
				'instructions' => 'Upload an image to use in the homepage hero. This will appear above the hero content.',
				'save_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
			),
			array (
				'key' => 'field_55e0aa4e27feb',
				'label' => 'Hero Content',
				'name' => 'hero_content',
				'type' => 'wysiwyg',
				'default_value' => '<h1>Short description of Product</h1>
	<p>A few reasons why this product is worth using, who it\'s for and why they need it.</p>',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_55e0bbf47e47a',
				'label' => 'Bullet 1',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_55e0baf4727bd',
				'label' => 'Bullet 1 Image',
				'name' => 'bullet_1_image',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
			),
			array (
				'key' => 'field_55e0bb32727be',
				'label' => 'Bullet 1 Color',
				'name' => 'bullet_1_color',
				'type' => 'color_picker',
				'instructions' => 'Background color for the bullet image',
				'default_value' => '#477dca',
			),
			array (
				'key' => 'field_55e0bb74ef120',
				'label' => 'Bullet 1 Content',
				'name' => 'bullet_1_content',
				'type' => 'wysiwyg',
				'instructions' => '						',
				'default_value' => '<h2>This Bullet Title</h2>
	<p>Lorem dolor sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum impedit. Odit officia autem.</p>',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_55e0bc3f4fccc',
				'label' => 'Bullet 2',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_55e0bc4b4fccd',
				'label' => 'Bullet 2 Image',
				'name' => 'bullet_2_image',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
			),
			array (
				'key' => 'field_55e0bc604fcce',
				'label' => 'Bullet 2 Color',
				'name' => 'bullet_2_color',
				'type' => 'color_picker',
				'instructions' => 'Background color for the bullet image',
				'default_value' => '#47caaa',
			),
			array (
				'key' => 'field_55e0bc754fccf',
				'label' => 'Bullet 2 Content',
				'name' => 'bullet_2_content',
				'type' => 'wysiwyg',
				'instructions' => '						',
				'default_value' => '<h2>This Bullet Title</h2>
	<p>Lorem dolor sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum impedit. Odit officia autem.</p>',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_55e0c6930e2b2',
				'label' => 'Bullet 3',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_55e0c69e0e2b3',
				'label' => 'Bullet 3 Image ',
				'name' => 'bullet_3_image',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
			),
			array (
				'key' => 'field_55e0c6b10e2b4',
				'label' => 'Bullet 3 Color',
				'name' => 'bullet_3_color',
				'type' => 'color_picker',
				'instructions' => 'Background color for the bullet image',
				'default_value' => '#a9ca47',
			),
			array (
				'key' => 'field_55e0c6c30e2b5',
				'label' => 'Bullet 3 Content',
				'name' => 'bullet_3_content',
				'type' => 'wysiwyg',
				'instructions' => '						',
				'default_value' => '<h2>This Bullet Title</h2>
	<p>Lorem dolor sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum impedit. Odit officia autem.</p>',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'templates/template-homepage.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
