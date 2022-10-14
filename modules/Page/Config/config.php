<?php

return [
    'name' => 'Page',
    'menus' => [
        'back_menus' => [ // support many menus per module
            'page' => [
                'title_en' => 'Static Pages',
                'title_ar' => 'الصفحات الثابتة',
                'icon' => 'fas fa-book',
                'order' => 4,
                'route'=>'page.index',

            ]
        ]
    ],

];
