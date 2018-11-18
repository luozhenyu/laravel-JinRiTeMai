<?php

return [
    'appKey' => env('JINRITEMAI_APPKEY'),
    'appSecret' => env('JINRITEMAI_APPSECRET'),
    'userConfig' => [
        'app' => [
            'version' => '1',
        ],
        'request' => [
            'timeout' => 30.0,
            'base_uri' => 'https://openapi.jinritemai.com',
        ],
    ],
];
