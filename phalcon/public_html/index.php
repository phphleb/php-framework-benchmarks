<?php
if(!class_exists('Phalcon\Loader')) {
  die('<b style="font-size: 16px;font-family: Verdana, Arial, serif">Phalcon</b><br><br><div style="background-color: #ffdbc6; padding: 5px;">Since Phalcon is compiled as a PHP extension, its installation is somewhat different than any other traditional PHP framework. Phalcon needs to be installed and loaded as a module on your web server.</div>');
}

// Benchmark start //
if(!defined('BENCHMARK_JSON_CONFIG_PATH')) {define('BENCHMARK_JSON_CONFIG_PATH', __DIR__ . '/../_benchmark_config.json'); }
include_once __DIR__ . '/../../benchmark_src/start.php';
// Benchmark end block //

    use Phalcon\Loader;
    use Phalcon\Mvc\View;
    use Phalcon\Mvc\Application;
    use Phalcon\Di\FactoryDefault;
    use Phalcon\Mvc\Router;

    define('BASE_PATH', dirname(__DIR__));
    define('APP_PATH', BASE_PATH . '/app');

    $loader = new Loader();

    $loader->registerDirs(
        [
            APP_PATH . '/controllers/',
            APP_PATH . '/models/',
        ]
    );

    $loader->register();

    $di = new FactoryDefault();

    $di->set(
        'view',
        function () {
            $view = new View();
            $view->setViewsDir(APP_PATH . '/views/');
            return $view;
        }
    );

    $di->set('router', function(){
        $router = new Phalcon\Mvc\Router(false);
        $router->add(
            "/phalcon/public_html/hello",
            [
                "controller" => "hello",
                "action"     => "show",
            ]
        );
        $router->add(
            "/",
            [
                "controller" => "index",
                "action"     => "index",
            ]
        );
        $router->handle();
        return $router;
    });

    $application = new Application($di);

    try {
        $response = $application->handle();

        $response->send();
    } catch (\Exception $e) {
        echo 'Exception: ', $e->getMessage();
    }

