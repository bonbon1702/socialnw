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
            'client_id'     => '725456127540058',
            'client_secret' => '3a13d601f87cb784b999edbdffd977fc',
            'scope'         => array('email'),
        ),

        /**
         * Google
         */
        'Google' => array(
            'client_id'     => '103178250738-8o22armgdv5ej7ip215l4inmc1kvmqo9.apps.googleusercontent.com',
            'client_secret' => 'IVbk3rHUWIEGqbfLG1KwPbpO',
            'scope'         => array('userinfo_email', 'userinfo_profile'),
        ),

        /**
         * Twitter
         */
        'Twitter' => array(
            'client_id'     => '2518012026-WrP1ptaKi9jS3C84BMjqaqkdyjywX0Mfmpadp8Q',
            'client_secret' => 'veGSNKdyNITMApVeKAwPvkUH76wA9AVzUjqikjFRiG5Eh',
            // No scope - oauth1 doesn't need scope
        ),

    )

);