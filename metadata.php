<?php
/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @copyright (c) Proud Sourcing GmbH | 2017
 * @link www.proudcommerce.com
 * @package psHelloWorld
 * @version 1.0.0
 **/

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id' => 'pshelloworld',
    'title' => 'psHelloWorld',
    'description' => [
        'de' => 'Überschreibt den Titel der Startseite.',
        'en' => '',
    ],
    'thumbnail' => 'ps-logo.jpg',
    'version' => '1.0.0',
    'author' => 'Proud Sourcing GmbH',
    'url' => 'https://www.proudcommerce.com/',
    'email' => 'support@proudcommerce.com',
    'extend' => [
        \OxidEsales\Eshop\Application\Controller\StartController::class => \ProudSourcing\HelloWorld\Controller\StartController::class,
    ],
    'controllers' => [],
    'events' => [],
    'templates' => [],
    'blocks' => [],
    'settings' => [],
];