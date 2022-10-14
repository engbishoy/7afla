<?php

return [
    'name' => 'Service',
    'menus' => [
        'back_menus' => [ // support many menus per module
            'service' => [
                'title_en' => 'Services',
                'title_ar' => 'الخدمات',
                'icon' => 'fas fa-user-shield',
                'order' => 2,
                'route' => 'service.index',
            ]
        ]
    ],

    'permissions' => [
        'resources' => [
            'service' => [
                'actions' => [
                    'view','add','edit','delete','export','view_trash','restore','hard_delete'
                ],
            ],
        ]
    ]
];