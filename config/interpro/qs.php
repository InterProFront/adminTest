<?php

return [

    'solo_widgets' => [
        'string'    => ['string_1'],
        'text'      => ['text_1','text_2'],
        'float'     => ['float_1'],
        'int'       => ['int_1'],
        'bool'      => ['bool_1'],
        'country'   => ['countr'],
        'image'     => ['image_1'],
        'file'      => ['test'],
        'groups'    => [
            'items' =>[
            ]
        ]
    ],


    'group_for_links' => [
        'groups' => [
            'country'=> [
                'string'    =>  ['country_name']
            ],
            'city'  => [
                'string' => ['city_name'],
                'country' => ['superior']
            ],
        ]
    ],
    'group_widget' => [
        'groups' => [
            'table_group' => [
                'string'    => ['row_name'],
                'text'      => ['row_text'],
                'float'     => ['row_area'],
                'int'       => ['row_int'],
                'bool'      => ['row_bool'],
                'image'     => ['row_image'],

                'country'    => ['county_n'],
            ],
            'flat_group'  => [
                'string'    => ['box_string'],
                'city'      => ['from'],
                'image'     => ['box_image']
            ]
        ]
    ],
    'image_widget'  => [
        'imageset'  => ['slider' => 'slide'],

        'groups'    => [
            'images_group'  => [
                'imageset'  => ['new_slider' => 'new_slide']
            ]
        ]
    ],

    //==================================================================================================================
    'textfield_block' => [
        'imageset' => ['default_imageset' => 'image_item']
    ]
];
