<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

// Benchmark start //
if(!defined('BENCHMARK_JSON_CONFIG_PATH')) {define('BENCHMARK_JSON_CONFIG_PATH', __DIR__ . '/../_benchmark_config.json'); }
include_once __DIR__ . '/../../benchmark_src/start.php';
// Benchmark end block //

require __DIR__ . '/../vendor/autoload.php';

$_ENV['SLIM_MODE'] = 'production';

$app = AppFactory::create();

$app->get('/slim/public_html/index/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Slim index file");
    return $response;
});

$app->get('/slim/public_html/', function(Request $request, Response $response, $args) {
    return (new App\Controller\HelloController())->index($response);
});


$app->run();

