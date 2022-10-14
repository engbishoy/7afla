<?php

use Illuminate\Support\Facades\Lang;

return [
    'name' => 'Provider',
    'menus' => [
        'back_menus' => [ // support many menus per module
            'module_provider' => [
                'title_en' => 'Providers',
                'title_ar' => 'مقدمى الخدمات',
                'icon' => 'fas fa-user-shield',
                'order' => 2,
                'permissions' => ['provider.actions.view'], // here you put all sub items permissions
                'sub_menu' => [
                    'item_1' => [
                        'title_en' => 'Service Providers',
                        'title_ar' => 'مقدمى الخدمات',
                        'route' => 'provider.index',
                        'permissions' => 'provider.actions.view',
                    ],

                    'item_2' => [
                        'title_en' => 'Business profiles',
                        'title_ar' => 'ملفات الاعمال',
                        'route' => 'profile.index',
                        'permissions' => 'profile.actions.view',
                    ],
                    'item_3' => [
                        'title_en' => 'Service Packages',
                        'title_ar' => 'باقات الخدمات',
                        'route' => 'package.index',
                        'permissions' => 'package.actions.view',
                    ]
                ]
            ],
        ]
    ],

    'permissions' => [
        'resources' => [
            'provider' => [
                'actions' => [
                    'view','add','edit','delete','export','view_trash','restore','hard_delete'
                ],
            ],

            'profile' => [
                'actions' => [
                    'view','add','edit','delete','export','view_trash','restore','hard_delete'
                ],
            ],

            'package' => [
                'actions' => [
                    'view','add','edit','delete','export','view_trash','restore','hard_delete'
                ],
            ],
        ]
    ]
];