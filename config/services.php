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

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],
    'vkontakte' => [
        'client_id' => env('VKONTAKTE_CLIENT_ID'),
        'client_secret' => env('VKONTAKTE_CLIENT_SECRET'),
        'redirect' => env('VKONTAKTE_REDIRECT_URI')
    ],

    'odnoklassniki' => [
        'client_id' => env('ODNOKLASSNIKI_CLIENT_ID'),
        'client_public' => env('ODNOKLASSNIKI_CLIENT_PUBLIC'),
        'client_secret' => env('ODNOKLASSNIKI_CLIENT_SECRET'),
        'redirect' => env('ODNOKLASSNIKI_REDIRECT_URI')
    ],

    'mailru' => [
        'client_id' => env('MAILRU_CLIENT_ID'),
        'client_secret' => env('MAILRU_CLIENT_SECRET'),
        'redirect' => env('MAILRU_REDIRECT_URI')
    ],

    'yandex' => [
        'client_id' => env('YANDEX_CLIENT_ID'),
        'client_secret' => env('YANDEX_CLIENT_SECRET'),
        'redirect' => env('YANDEX_REDIRECT_URI')
    ],

];
