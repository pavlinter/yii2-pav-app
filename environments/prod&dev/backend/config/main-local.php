<?php
return [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
            // unique CSRF cookie parameter for backend
            'csrfParam' => '_backendCsrf',
        ],
        // unique identity cookie parameter for backend
        'user' => [
            'identityCookie' => [
                'name' => '_backendUser', // unique for backend
                'path' => '/backend' // set it to correct path for backend app.
            ]
        ]
    ],
];
