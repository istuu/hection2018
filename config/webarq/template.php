<?php
/**
 * Created by PhpStorm
 * Date: 15/02/2017
 * Time: 21:29
 * Author: Daniel Simangunsong
 *
 * Calm seas, never make skill full sailors
 */

return [
        'names' => [
                'home' => [
                        'name' => 'Home',
                        'thumb' => '',
                        'sections' => [
                            'banner',
                            'about',
                            'contest',
                            'prize',
                            'gellery',
                            'register',
                        ]
                ],
        ],
        'sections' => [
                'banner' => [
                        'name' => 'Banner',
                        'raw' => true
                ],
                'about' => [
                        'name' => 'About',
                        'raw' => true
                ],
                'contest' => [
                        'name' => 'Contest',
                        'raw' => true
                ],
                'prize' => [
                        'name' => 'Prize',
                        'raw' => true
                ],
                'gallery' => [
                        'name' => 'Gallery',
                        'raw' => true
                ],
                'register' => [
                        'name' => 'Register',
                        'raw' => true
                ],

        ],
        'modals' => [
                'default' => 'Are you sure you want to do this?',
                'delete' => 'This action will remove selected item from database, and cannot be undone. Do you want to continue ?',
        ]
];
