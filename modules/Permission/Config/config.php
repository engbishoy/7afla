<?php

use Illuminate\Support\Facades\Lang;

return [
    'name' => 'Permission',
    'menus' => [
        'back_menus' => [
            'role' => [ // support many menus per module
                'title_en' => 'Roles',
                'title_ar' => 'الادوار',
                'icon' => 'fas fa-pencil',
                'order' => 11,
                'permissions' => ['role.actions.view'], // here you put all sub items permissions
                'route' => 'roles.index',
            ],
        ]
    ],
    'permissions' => [
        'resources' => [
            'role' => [
                'actions' => [
                    'view','add','edit','delete'
                ],
            ],
        ]
    ]
];
