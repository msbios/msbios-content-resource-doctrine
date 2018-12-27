<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Content\Resource\Doctrine;

use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'doctrine' => [
        'driver' => [
            Module::class => [
                'class' => AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    __DIR__ . '/../src/Entity'
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    Entity::class =>
                        Module::class,
                ]
            ]
        ]
    ],
    'form_elements' => [
        'factories' => [
            Form\TextPageForm::class =>
                InvokableFactory::class
        ],
        'aliases' => [
            \MSBios\Content\Resource\Form\TextPageForm::class =>
                Form\TextPageForm::class
        ]
    ]
];
