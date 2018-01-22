<?php
$id = Wa::model('banner')->firstOrFail()->id;
return [
        'permalink' => 'helper/form/edit/section/banners/'.$id,
        'type' => 'listing',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'background' => ['modifier' => 'thumb:90%', 'style' => 'width:20%'],
                                'title',
                                'description',
                                'button',
                                'permalink',
                        ]
                ],
        ],
        'actions' => [
                // 'create' => [
                //         'form' => [
                //                 'attributes' => [
                //                         'enctype' => 'multipart/form-data',
                //                 ],
                //                 'section.banners.background' => [
                //                         'info' => 'Please use image in 1500px X 970px dimension, (format file: .png, .jpg, .jpeg | Max: 1MB)',
                //                         'file' => [
                //                                 'type' => 'image',
                //                                 'mimes' => ['jpg', 'jpeg', 'png'],
                //                                 'max' => 1024,
                //                                 'upload-dir' => 'site/uploads/images',
                //                                 'resize' => [
                //                                         'width' => 1920,
                //                                         'height' => 1153,
                //                                 ]
                //                         ],
                //                         'id'=>'bg',
                //                         'container'=>'form.images'
                //                 ],
                //                 'section.banners.title',
                //                 'section.banners.description' => [
                //                         'type' => 'textarea',
                //                         'rows' => 3
                //                 ],
                //                 'section.banners.button',
                //                 'section.banners.permalink'
                //         ]
                // ],

                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.banners.background' => [
                                        'info' => 'Please use image in 1500px X 970px dimension, (format file: .png, .jpg, .jpeg | Max: 1MB)',
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 1024,
                                                'upload-dir' => 'site/uploads/images',
                                                'resize' => [
                                                        'width' => 1920,
                                                        'height' => 1153,
                                                ]
                                        ],
                                        'id'=>'bg',
                                        'container'=>'form.images'
                                ],
                                'section.banners.title',
                                'section.banners.description' => [
                                        'type' => 'textarea',
                                        'rows' => 3
                                ],
                                'section.banners.button',
                                'section.banners.permalink'
                        ]
                ],
                // 'delete'
        ]
];
