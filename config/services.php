<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'User',
		'secret' => '',
	],

	'billing' => [
		'paypal' => [
			'client_id' => env('PAYPAL_CLIENT_ID', null),
			'secret' => env('PAYPAL_SECRET', null),
			'settings' => [
                    'mode' => 'sandbox',
                    'log' => [
                        'enabled' => true,
                        'path' => storage_path().'/logs/Paypal.log',
                        'level' => 'DEBUG'
                    ]
                ]
		]
	]
];
