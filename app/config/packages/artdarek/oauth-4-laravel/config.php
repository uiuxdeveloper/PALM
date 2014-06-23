<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Facebook' => array(
            'client_id'     => '',
            'client_secret' => '',
            'scope'         => array(),
        ),	
		/**
		 * Google
		 */
        'Google' => array(
			'client_id'     => '33452976962-tip5ivo9ubm21jplim6dkjhu1oedknrr.apps.googleusercontent.com',
			'client_secret' => 'sw3bT_CrNBePQNRX7U3_K0t6',
			'scope'         => array('userinfo_email', 'userinfo_profile'),
		),  	

	)

);