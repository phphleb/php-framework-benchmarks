<?php

namespace App\Controller;

class HelloController
{
    public function index($response) {
        $view = new \Slim\Views\PhpRenderer(__DIR__ . '/../../template');
        $view->render($response, 'hello.php');
        return $response;
    }
}