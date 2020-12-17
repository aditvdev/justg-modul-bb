<?php

/**
 * @class justgslideshow
 */
class justgslideshow extends FLBuilderModule {

	/**
	 * @method __construct
	 */
	public function __construct()
	{
		parent::__construct(array(
			'name'          	=> __('JustG Slideshow', 'fl-builder'),
			'description'   	=> __('', 'fl-builder'),
			'category'      	=> __('JustG Modules', 'fl-builder'),
			'partial_refresh'	=> true
		));
	}

}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('justgslideshow', array(
	'columns'      => array(
		'title'         => __('List Slideshow', 'fl-builder'),
		'sections'      => array(
			'general'       => array(
				'title'         => '',
				'fields'        => array(
					'slider_columns'     => array(
						'type'         => 'form',
						'label'        => __('Slideshow', 'fl-builder'),
						'form'         => 'slider_column_form',
						'preview_text' => 'title',
						'multiple'     => true
					),
                    'transition'   => array(
                        'type'          => 'select',
                        'label'         => __('Transition', 'fl-builder'),
                        'default'       => 'slide',
                        'options'       => array(
                            'slide'       => __('Slide', 'fl-builder'),
                            'fade'        => __('Fade', 'fl-builder'),
                        )
                    ),
                    'control'   => array(
                        'type'          => 'select',
                        'label'         => __('Control', 'fl-builder'),
                        'default'       => 'yes',
                        'options'       => array(
                            'yes'       => __('Yes', 'fl-builder'),
                            'no'        => __('No', 'fl-builder'),
                        )
                    ),
                    'indicators'   => array(
                        'type'          => 'select',
                        'label'         => __('Indicators', 'fl-builder'),
                        'default'       => 'yes',
                        'options'       => array(
                            'yes'       => __('Yes', 'fl-builder'),
                            'no'        => __('No', 'fl-builder'),
                        )
                    ),
				)
			)
		)
	),
));

FLBuilder::register_settings_form('slider_column_form', array(
	'title' => __( 'Add Image', 'fl-builder' ),
	'tabs'  => array(
		'general'      => array(
			'title'         => __('General', 'fl-builder'),
			'sections'      => array(
				'title'       => array(
					'title'         => __( 'Title', 'fl-builder' ),
					'fields'        => array(
                        'img'    => array(
                            'type'          => 'photo',
                            'label'         => __('Image', 'fl-builder')
                        ),
						'link'          => array(
							'type'          => 'link',
							'label'         => __('Link', 'fl-builder'),
						),
                        'caption' => array(
                            'type'          => 'editor',
                            'label'         => __('Caption', 'fl-builder'),
                            'default'       => '',
                            'placeholder'   => __('', 'fl-builder'),
                            'rows'          => '10',
                            'max'           => '300',
                            'preview'         => array(
                                'type'             => 'text',
                                'selector'         => '.justg-caption'  
                            )
                        ),
					),
				),
			)
		),
	)
));
