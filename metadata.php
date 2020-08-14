<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id'          => 'oxacproductcountermodule',
    'title'       => [
        'de' => 'OXAC Produkt Counter Modul',
        'en' => 'OXAC Product Counter Module',
    ],
    'description' => [
        'de' => 'Zeigt einen Banner auf der Startseite an mit der Anzahl der verfügbare Produkten.',
        'en' => 'Displays a banner on the home page showing the number of available products.',
    ],
    'thumbnail'   => '',
    'version'     => '1.0.0',
    'author'      => 'OXID Academy',
    'url'         => 'https://www.oxid-esales.com/',
    'email'       => 'academy@oxid-esales.com',
    'extend' => [
        \OxidEsales\Eshop\Application\Controller\StartController::class => \OxidAcademy\ProductCounterModule\Controller\StartController::class,
    ],
    'controllers' => [
        'product_counter_greeting' => \OxidAcademy\ProductCounterModule\Controller\Admin\GreetingController::class,
    ],
    'blocks' => [
        [
            'template' => 'layout/header.tpl',
            'block'=>'layout_header_bottom',
            'file'=>'/views/blocks/layout_header_bottom.tpl',
        ],
    ],
    'templates' => [
        'greeting_settings.tpl' => 'oxac/product-counter-module/views/admin/tpl/greeting_settings.tpl'
    ],
    'settings' => [
        [
            'group' => 'oxacproductcountermodule_greeting',
            'name' => 'oxacproductcountermodule_greetingactive',
            'type' => 'bool',
            'value' => false,
        ],
    ],
];
