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
		'model'  => 'App\User',
		'key' => '',
		'secret' => '',
	],

	'facebook' => [
    'client_id' => '145565309427952',
    'client_secret' => '7e42a3881812e734a291d847507fee6c',
    'redirect' => 'http://192.168.10.10:8888/handleProviderCallback',
	],

	'github' => [
        'client_id'     => '92b459c7c32d89b31f2d',
        'client_secret' => '04efface7a32a924cdb9ce8267dbe6a101b83311',
        'redirect'      => 'http://192.168.10.10:8888/handleProviderCallback',
	],

	'twitter' => [
    'client_id' => 'umd9TJKlI3FMJLXlOw3GtmoGQ',
    'client_secret' => 'a6qhwN3ur8NjGbSqP3rbxtY0FNxl5CefO9Bk72oFqxOEOKF3yL',
    'redirect' => 'http://192.168.10.10:8888/handleProviderCallback',
	],

	'google' => [
    'client_id' => '563469702801-fa07iglc40k5nrrgqso9p51ffeemhgfd.apps.googleusercontent.com',
    'client_secret' => 'DZ3Hu8T8HcgBlPPB3lUO7sQv',
    'redirect' => 'http://192.168.10.10:8888/handleProviderCallback'
	],

	'linkedin' => [
	'client_id' => '86931003xvdbqv',
	'client_secret' => 'hA17S1poiODYMQ0J',
	'redirect' => 'http://192.168.10.10:8888/handleProviderCallback'
	],

];
