<?php

/*
Title: General Settings
Order: 10
Flow: Hypercoder Workflow
Tab: General
Default: true
Setting: hypercoder_setting
*/

/* Favicon upload */

piklist('field', array(
  'type' => 'file'
  ,'field' => 'favicon'
  ,'label' => __( 'Upload Favicon', 'hypercoder' )
  ,'options' => array( 
		'button' => __('Add favicon', 'hypercoder')
		,'button' => 'Add favicon'
		,'save' => 'url'
  )
  ,'validate' => array(
	  array(
		'type' => 'limit'
		,'options' => array(
		  'min' => 1
		  ,'max' => 1
		 )
		,'message' => __('Dude, You can upload one image only', 'hypercoder')

		)
		)

	)

);


/* Logo upload */

piklist('field', array(
  'type' => 'file'
  ,'field' => 'ppm_logo'
  ,'label' => __( 'Upload Logo', 'hypercoder' )
  ,'options' => array( 
	'button' => __('Add logo', 'hypercoder')
	,'button' => 'Add logo'
	,'save' => 'url'
  )
  ,'validate' => array(
	  array(
		'type' => 'limit'
		,'options' => array(
		  'min' => 1
		  ,'max' => 1
		 )
		,'message' => __('Dude, You can upload one logo only', 'hypercoder')
		)
		)
	)
);

 /* Top Phone */

piklist('field', array(
	'type' => 'text'
	,'field' => 'top_phone'
	,'columns' => 6
	,'label' => __( 'Top Right Phone number', 'hypercoder')
	,'attributes' => array(
	'rows' => 5
	,'cols' => 12
	)

 ));

 /* Copyright */

piklist('field', array(
	'type' => 'textarea'
	,'field' => 'copyright_text'
	,'label' => __( 'Copyright', 'hypercoder')
	,'attributes' => array(
	'rows' => 5
	,'cols' => 60
	)

 ));