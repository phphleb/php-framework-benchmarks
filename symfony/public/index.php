<?php

// Benchmark start //
if(!defined('BENCHMARK_JSON_CONFIG_PATH')) {define('BENCHMARK_JSON_CONFIG_PATH', __DIR__ . '/../_benchmark_config.json'); }
include_once __DIR__ . '/../../benchmark_src/start.php';
// Benchmark end block //

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};

