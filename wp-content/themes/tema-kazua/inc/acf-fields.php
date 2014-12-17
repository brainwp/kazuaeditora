<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_blog',
		'title' => 'Blog',
		'fields' => array (
			array (
				'key' => 'field_548f1219fe09b',
				'label' => 'Destacar post na home do blog? (DESTAQUE PRINCIPAL)',
				'name' => 'destaque_blog_field_principal',
				'type' => 'radio',
				'choices' => array (
					'true' => 'Sim',
					'false' => 'Não',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'false',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_5491e6abcc26f',
				'label' => 'Destacar post na home do blog? (DESTAQUE MENOR)',
				'name' => 'destaque_blog_field_menor',
				'type' => 'radio',
				'choices' => array (
					'true' => 'Sim',
					'false' => 'Não',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'false',
				'layout' => 'horizontal',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
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
?>