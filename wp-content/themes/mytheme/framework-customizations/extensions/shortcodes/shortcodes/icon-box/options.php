<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'style'   => array(
		'type'    => 'select',
		'label'   => __('Box Style', 'fw'),
		'choices' => array(
			'fw-iconbox-1' => __('Icon above title', 'fw'),
			'fw-iconbox-2' => __('Icon in line with title', 'fw')
		)
	),
	'icon'    => array(
		'type'  => 'icon',
		'label' => __('Choose an Icon', 'fw'),
	),
	'title'   => array(
		'type'  => 'text',
		'label' => __( 'Title of the Box', 'fw' ),
	),
	'content' => array(
		'type'  => 'textarea',
		'label' => __( 'Content', 'fw' ),
		'desc'  => __( 'Enter the desired content', 'fw' ),
	),
	'animate_type' => array(
		'label'   => __('Тип аимации', 'fw' ),
		'desc'    => __('Виберите тип анимации', 'fw'),
		'type'    => 'select',
		'value'   => 'animate',
		'choices' => array(
			'fadeInLeft'   => __('fadeInLeft', 'fw'),
			'fadeInRight'  => __('fadeInRight', 'fw')
		),
	),
	'animate' => array(
		'type'    => 'switch',
		'label'   => __('Анимация', 'fw'),
//		'left-choice' => array(
//			'value' => 'no',
//			'label' => __('No', 'fw'),
//		),
//		'right-choice' => array(
//			'value' => 'yes',
//			'label' => __('Yes', 'fw'),
//		),
	)
);
