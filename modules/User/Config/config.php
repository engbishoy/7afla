<?php

use Illuminate\Support\Facades\Lang;

return [
    'name' => 'User',
    'menus' => [
        'back_menus' => [ // support many menus per module
            'user' => [
                'title_en' => 'Users',
                'title_ar' => 'المشرفين',
                'icon' => 'fas fa-user-shield',
                'order' => 12,
                'route' => 'users.index',
            ]
        ]
    ],
    'permissions' => [
        'resources' => [
            'user' => [
                'actions' => [
                    'view','add','edit','delete','export','view_trash','restore','hard_delete'
                ],
            ],
        ]
    ]

];
