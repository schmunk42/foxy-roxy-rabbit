<?php

// Prepare environment
$rootPath = realpath(__DIR__.'/..');
require($rootPath.'/vendor/autoload.php');
###require($rootPath.'/src/config/env.php');

// Define framework & application constants
defined('YII_DEBUG') or define('YII_DEBUG', (boolean)getenv('YII_DEBUG'));
defined('YII_ENV') or define('YII_ENV', getenv('YII_ENV'));
defined('APP_TYPE') or define('APP_TYPE', 'web');

// Load framework
require($rootPath.'/vendor/yiisoft/yii2-dev/framework/Yii.php');

// Codeception testing
if (file_exists($rootPath.'/tests/codeception/c3.php')) {
    define(
        'C3_CODECOVERAGE_ERROR_LOG_FILE',
        '/app/runtime/c3_error.log'
    );
    define(
        'C3_CODECEPTION_CONFIG_PATH',
        '/app/tests'
    );
    require_once $rootPath.'/tests/codeception/c3.php';
}

// Run application
Yii::info('Application starting...');
(new yii\web\Application(require($rootPath.'/config/main.php')))->run();
