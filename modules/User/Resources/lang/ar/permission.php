<?php // this structure is very important as it influences the results of the autocomplete directly
return[
    'resources' => [
        'user' => [
            'title' => 'المشرفين', // main title in the autocomplete for this module
            'actions' => [
                'title' => 'الاجرائات',
                
                'view' => [
                    'title' => "قراءة",
                    'description' => "تسمح لك قراءة قائمة المشرفين"
                ],
                'add' => [
                    'title' => "اضافة",
                    'description' => "تسمح لك باضافة عميل"
                ],
                'edit' => [
                    'title' => "تعديل",
                    'description' => "تسمح لك باجراء تغيرات على المشرفين"
                ],
                'delete' => [
                    'title' => "مسح",
                    'description' => "تسمح لك بمسح عميل"
                ],
                'export' => [
                    'title' => "تصدير",
                    'description' => "تسمح لك باصدار جدول للمشرف"
                ],

                'view_trash' => [
                    'title' => "قائمة المهملات",
                    'description' => "اتاحة مسح  المشرفين"
                ],
                'restore' => [
                    'title' => "اعادة",
                    'description' => "اتاحة اعادة المشرفين"
                ],

                'hard_delete' => [
                    'title' => "مسح دائم",
                    'description' => "اتاحة مسح دائم للمشرف"
                ],
                

            ],
        ],
    ],
    
];