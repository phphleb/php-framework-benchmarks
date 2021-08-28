<?php

    use Phalcon\Mvc\Controller;

    class IndexController extends Controller {

        public function indexAction() {
            $this->view->pick('index/initial');
        }
    }