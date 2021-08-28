<?php

// Benchmark start //
if(!defined('BENCHMARK_JSON_CONFIG_PATH')) {define('BENCHMARK_JSON_CONFIG_PATH', __DIR__ . '/../_benchmark_config.json'); }
include_once __DIR__ . '/../../benchmark_src/start.php';
// Benchmark end block //

require __DIR__ . '/../vendor/autoload.php';
$f3 = \Base::instance();
$f3->set('DEBUG',0);
$f3->concat('UI', ';/');
$f3->set('AUTOLOAD','App/Controllers');
$f3->route('GET /','IndexController->index');
$f3->route('GET /hello','HelloController->index');
$f3->run();

