<?php

return [
    'name' => 'Subscription',
    'menus' => [
        'back_menus' => [ // support many menus per module
            'subscription' => [
                'title_en' => 'Subscription packages',
                'title_ar' => 'باقات الاشتراكات',
                'icon' => 'fas fa-user-shield',
                'order' => 2,
                'route' => 'subscription.index',
            ]
        ]
    ],

    'permissions' => [
        'resources' => [
            'subscription' => [
                'actions' => [
                    'view','add','edit','delete','export'
                ],
            ],
        ]
    ]
];