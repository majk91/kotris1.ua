<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'option_tab' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Tabs', 'fw' ),
		'popup-title'   => __( 'Add/Edit Tab', 'fw' ),
		'desc'          => __( 'Create your tabs', 'fw' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
			'tab_title' => array(
				'type'  => 'text',
				'label' => __('Title', 'fw')
			),
			'tab_content_title' => array(
				'type'  => 'textarea',
				'label' => __('Заголовок контента', 'fw')
			),
			'tab_content' => array(
				'type'  => 'textarea',
				'label' => __('Content', 'fw')
			),
			'image'     => array(
				'type'  => 'upload',
				'label' => __( 'Задать фото', 'fw' ),
				'desc'  => __( 'Вы можете загрузить новую или выбрать картинку из ранее загруженных', 'fw' )
			),
		),
	)
);
/*
$options = array(
	'tab_worker' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Tabs', 'fw' ),
		'popup-title'   => __( 'Add/Edit Tab', 'fw' ),
		'desc'          => __( 'Create your tabs', 'fw' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
			'tab_title' => array(
				'type'  => 'text',
				'label' => __('Title', 'fw')
			),
			'tab_content' => array(
				'type'  => 'textarea',
				'label' => __('Content', 'fw')
			)
		),
	)
);


$options = array(
	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Табы сотрудников', 'fw' ),
		'popup-title'   => __( 'Add/Edit Tab', 'fw' ),
		'desc'          => __( 'Create your tabs', 'fw' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
			'tab_title' => array(
				'type'  => 'text',
				'label' => __('Title', 'fw')
			),
			'tab_content' => array(
				'type'  => 'textarea',
				'label' => __('Content', 'fw')
			),
			'image'     => array(
				'type'  => 'upload',
				'label' => __( 'Задать фото', 'fw' ),
				'desc'  => __( 'Вы можете загрузить новую или выбрать картинку из ранее загруженных', 'fw' )
			),
		),
	)
);