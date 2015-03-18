<?php

return [
    'console'   => [], //routing configuration for CLI modules
    'router'    => [
        'routes' => [
            'market' => [
                'type'      => 'Literal',
                'options'   => [
                    'route'     => '/market',
                    'defaults'  => [
                        'controller'    => 'BazaarMarket\Controller\Index',
                        'action'        => 'index'
                    ]
                ]
            ]
        ]
    ]
];