<?php

return [
    'super_admin' => [
        'name' => env('SUPER_ADMIN_NAME', 'Super Admin'),
        'email' => env('SUPER_ADMIN_EMAIL', 'super-admin@fontech.com.tw'),
        'password' => env('SUPER_ADMIN_PASSWORD', 'super-admin@fontech.com.tw'),
    ],
    'admin' => [
        'name' => env('ADMIN_NAME', 'Admin'),
        'email' => env('ADMIN_EMAIL', 'admin@fontech.com.tw'),
        'password' => env('ADMIN_PASSWORD', 'admin@fontech.com.tw'),
    ],
    'fontech' => [
        'name' => env('FONTECH_NAME', 'Fontech'),
        'email' => env('FONTECH_EMAIL', 'service@fontech.com.tw'),
        'password' => env('FONTECH_PASSWORD', 'service@fontech.com.tw'),
    ],
];
