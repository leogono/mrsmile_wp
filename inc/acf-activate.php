<?php
define( 'ACF_LITE' , true );
include_once('acf/advanced-custom-fields/acf.php');
include_once('acf/addons/acf-repeater/acf-repeater.php');
// include_once('acf/add-ons/acf-gallery/acf-gallery.php');
// include_once('add-ons/acf-flexible-content/acf-flexible-content.php');
include_once( 'acf/addons/acf-options-page/acf-options-page.php' );

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_option',
		'title' => 'Option',
		'fields' => array (
			array (
				'key' => 'field_5294e6a6fc589',
				'label' => 'Front Page',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5294e6bdfc58a',
				'label' => 'Home Box',
				'name' => 'home_box',
				'type' => 'repeater',
				'instructions' => 'Click "Add Home Box" to add new box.',
				'sub_fields' => array (
					array (
						'key' => 'field_5294e705fc58b',
						'label' => 'Box width',
						'name' => 'box_width',
						'type' => 'radio',
						'column_width' => '',
						'choices' => array (
							'col-lg-4' => '1/3',
							'col-lg-8' => '2/3',
							'col-lg-12' => '3/3',
						),
						'other_choice' => 0,
						'save_other_choice' => 0,
						'default_value' => 'col-lg-4 : 1/3',
						'layout' => 'horizontal',
					),
					array (
						'key' => 'field_5294e7c51231b',
						'label' => 'Box URL',
						'name' => 'box_url',
						'type' => 'text',
						'instructions' => 'Enter where should the box point to',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'Enter URL here',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_5294e78512319',
						'label' => 'Box Title',
						'name' => 'box_title',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'Enter Title Here',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_5294e7f51231c',
						'label' => 'Box Title Color',
						'name' => 'box_title_color',
						'type' => 'color_picker',
						'column_width' => '',
						'default_value' => '#ffffff',
					),
					array (
						'key' => 'field_5294e79c1231a',
						'label' => 'Box Image',
						'name' => 'box_image',
						'type' => 'image',
						'instructions' => 'Please update images with more than 295px by 250px dimensions.',
						'column_width' => '',
						'save_format' => 'ID',
						'preview_size' => 'home-box',
						'library' => 'uploadedTo',
					),
					array (
						'key' => 'field_5294e8a72cb90',
						'label' => 'Content Box',
						'name' => 'content_box',
						'type' => 'true_false',
						'column_width' => '',
						'message' => '',
						'default_value' => 0,
					),
					array (
						'key' => 'field_5294e8d32cb92',
						'label' => 'Content',
						'name' => 'content',
						'type' => 'wysiwyg',
						'column_width' => '',
						'default_value' => '',
						'toolbar' => 'full',
						'media_upload' => 'no',
					),
				),
				'row_min' => 1,
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Home Box',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
