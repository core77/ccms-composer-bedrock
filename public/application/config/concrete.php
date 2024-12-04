<?php

return [
    // Composer based installation

    'updates' => [
        // Skip the automatic check of new concrete5 versions availability
        'skip_core' => true,
    ],
    'debug' => [
        'hide_keys' => [
            // Hide database password and hostname in whoops output if supported
            '_ENV' => ['DB_PASSWORD', 'DB_HOSTNAME'],
            '_SERVER' => ['DB_PASSWORD', 'DB_HOSTNAME'],
        ]
    ],

    // Site specific
    'locale' => 'de_DE',
    'external' => [
        'intelligent_search_help' => false,
    ],
    'file_manager' => [
        'restrict_max_width' => 2000,
        'restrict_max_height' => 2000,
    ],
    'i18n' => [
        'choose_language_login' => null,
    ],
    'misc' => [
        'default_jpeg_image_compression' => 90,
        'default_png_image_compression' => 9,
    ],
    'security' => [
        'trusted_proxies' => [
            'headers' => 0,
            'ips' => [
            ],
        ],
    ],
    'seo' => [
        'redirect_to_canonical_url' => false,
        'url_rewriting' => true,
    ],
    'user' => [
        'password' => [
            'minimum' => 8,
            'maximum' => 128,
            'required_special_characters' => 1,
            'required_upper_case' => 1,
            'required_lower_case' => 1,
        ],
        'registration' => [
            'enabled' => false,
            'type' => 'disabled',
            // Login with email and password
            'email_registration' => true,
            'display_username_field' => true,
            'display_confirm_password_field' => true,
            'captcha' => false,
        ],
        'edit_profile' => [
            'display_username_field' => true,
        ],
    ],
    'white_label' => [
        # 'logo' => '/application/images/my-image.svg',
        'name' => 'powered by Concrete CMS',
    ],
];
