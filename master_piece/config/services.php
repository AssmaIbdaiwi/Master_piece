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


    'google' => [
   'client_id'=> '918823079543-dqto82s8j66bctkl7ssc49d71he8v7nf.apps.googleusercontent.com',
     "client_secret" =>"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",
    'redirect' => 'http://127.0.0.1:8000/google/callback/'
  ], 

// 'google' => [
//         'client_id' => '', //USE FROM Google DEVELOPER ACCOUNT
//         'client_secret' => '', //USE FROM Google DEVELOPER ACCOUNT
//         'redirect' => 'https://0a41-106-212-124-50.ngrok.io/google/callback/'
// ],

    'facebook' => [
        'client_id' => '1482457538896300',
        'client_secret' => 'c74d16cf62e78ee7394df853ce720095',
        'redirect' => 'http://127.0.0.1:8000/auth/facebook/callback',
    ],


];
