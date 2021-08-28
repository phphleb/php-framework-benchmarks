<?php

// Benchmark start //
if(!defined('BENCHMARK_JSON_CONFIG_PATH')) {define('BENCHMARK_JSON_CONFIG_PATH', __DIR__ . '/../_benchmark_config.json'); }
include_once __DIR__ . '/../../benchmark_src/start.php';
// Benchmark end block //

// comment out the following two lines when deployed to production
 defined('YII_DEBUG') or define('YII_DEBUG', true);
 defined('YII_ENV') or define('YII_ENV', 'dev');


require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();

