<?php
/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2017 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use codemix\streamlog\Target;
use yii\gii\Module;

return [
    'id' => 'app',
    'basePath' => realpath(__DIR__.'/../src'),
    'runtimePath' => realpath(__DIR__.'/../runtime'),
    'aliases' => [
        '@bower' => '/app/node_modules',
        '@yii/gii' => '/app/vendor/yiisoft/yii2-gii',
    ],
    'bootstrap' => [
    ],
    'logger' => [
        'flushInterval' => 1,
        'targets' => [
            [
                'class' => Target::class,
                'url' => 'php://stdout',
                #'levels' => ['error', 'warning'],
                'logVars' => [],
                #'replaceNewline' => ''
            ],
        ],
    ],
    'modules' => [
        'gii' => [
            'class' => Module::class,
            'allowedIPs' => ['*'],
        ],
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'request' => [
            'cookieValidationKey' => 'VERY_SECRET'
        ],
    ],
];