<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
	
	'facebook' => [
		'client_id' => '648064742589494',
		'client_secret' => '6ea1cbf813e01f5b3148a4a2ab56cfc3',
		'redirect' => 'https://homestead.app/callback/facebook',
	],
	
	'google' => [
        'client_id' => '817920195907-p9gsatof6q6d4gvklgn7gmrbqhe42e16.apps.googleusercontent.com',
        'client_secret' => 'Dv-ngI3H1opQvfEz9Hz0vD-L',
        'redirect' => 'https://homestead.app/callback/google',
    ],
];
