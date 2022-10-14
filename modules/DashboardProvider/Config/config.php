<?php

use Illuminate\Support\Facades\Lang;

return [
    'name' => 'DashboardProvider',
    'menus' => [
        'front_menus' => [ // support many menus per module
            'profile' => [
                'title_en' => 'Business Profiles',
                'title_ar' => 'معرض الاعمال',
                'icon' => 'fas fa-user',
                'order' => 1,
                'route' => 'dashboard.provider.services',
            ],
            'package' => [
                'title_en' => 'Packages',
                'title_ar' => 'الباقات',
                'icon' => 'fas fa-box',
                'order' => 2,
                'route' => 'dashboard.provider.package.index',
            ],

            'gallary' => [
                'title_en' => 'Gallary',
                'title_ar' => 'معرض الصور',
                'icon' => 'fas fa-images',
                'order' => 3,
                'route' => 'dashboard.provider.gallary.index',
            ]
        ]
    ],


];