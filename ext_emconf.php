<?php

/**
 * (c) Kitodo. Key to digital objects e.V. <contact@kitodo.org>
 *
 * This file is part of the Kitodo and TYPO3 projects.
 *
 * @license GNU General Public License version 3 or later.
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Kitodo.Presentation',
    'description' => 'Base plugins, modules, services and API of the Digital Library Framework. It is part of the community-based Kitodo Digitization Suite.',
    'version' => '3.0.0',
    'category' => 'misc',
    'constraints' => [
        'depends' => [
            'php' => '7.0.0-',
            'typo3' => '8.7.0-8.7.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ],
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => false,
    'author' => 'Sebastian Meyer (Maintainer)',
    'author_email' => 'contact@kitodo.org',
    'author_company' => 'Kitodo. Key to digital objects e. V.',
    'autoload' => [
        'psr-4' => [
            'Kitodo\\Dlf\\' => 'Classes/'
        ],
        'classmap' => [
            'vendor/solarium',
            'vendor/symfony/event-dispatcher'
        ]
    ]
];
