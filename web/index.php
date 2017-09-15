<?php

// Prepare environment
$rootPath = realpath(__DIR__.'/..');
require($rootPath.'/pkg/vendor/autoload.php');
###require($rootPath.'/src/config/env.php');

// Define framework & application constants
defined('YII_DEBUG') or define('YII_DEBUG', (boolean)getenv('YII_DEBUG'));
defined('YII_ENV') or define('YII_ENV', getenv('YII_ENV'));
defined('APP_TYPE') or define('APP_TYPE', 'web');

// Load framework
require($rootPath.'/pkg/vendor/yiisoft/yii2-dev/framework/Yii.php');

// Codeception testing routes
if (file_exists($rootPath.'/tests/codeception/c3.php')) {
define('C3_CODECOVERAGE_ERROR_LOG_FILE',
'/app/runtime/c3_error.log'); //Optional (if not set the default c3 output dir will be used)
define('C3_CODECEPTION_CONFIG_PATH', '/app/tests'); //Optional (if not set the default c3 output dir will be used)
require_once $rootPath.'/tests/codeception/c3.php';
}

// Run application
Yii::info('Application starting...');
(new yii\web\Application(require($rootPath.'/src/config/main.php')))->run();
