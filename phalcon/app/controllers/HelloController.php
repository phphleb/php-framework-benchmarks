<?php

    use Phalcon\Mvc\Controller;

    class HelloController extends Controller {

        public function showAction() {
           $this->view->pick('hello/show');
        }
    }