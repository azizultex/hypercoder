<?php 
/*
Title: Social Media Setting
Order: 20
Tab: Social
Flow: Hypercoder Workflow
Setting: hypercoder_setting
*/

piklist('field', array(
    'type' => 'group'
    ,'field' => 'social_media'
    ,'columns' => 12
    ,'add_more' => true
    ,'fields' => array(
	
          array(
			'type' => 'select'
			,'field' => 'icon_class'
			,'value' => 'social_facebook'
		    ,'columns' => 4
			,'choices' => array(
			  'facebook' => 'Facebook'
			  ,'twitter' => 'Twitter'
			  ,'linkedin' => 'LinkedIn'
			  ,'google-plus' => 'Google Plus'
			  ,'pinterest' => 'Pinterest'
			  ,'github' => 'Github'
			  ,'vimeo' => 'Vidmeo'
			  ,'skype' => 'Skype'
			  ,'dropbox' => 'Dropbox'
			  ,'picasa' => 'Picasa'
			  ,'spotify' => 'Spotify'
			  ,'jolicloud' => 'Jolicloud'
			  ,'wordpress' => 'Wordpress'
			  ,'xing' => 'Xing'
			  ,'rss' => 'RSS'
			)
			)
          ,array(
            'type' => 'url'
            ,'field' => 'link'
            ,'columns' => 8
            ,'attributes' => array(
              'placeholder' => 'https://www.facebook.com/Your_ID'
            )
          ),
    )
  ));	