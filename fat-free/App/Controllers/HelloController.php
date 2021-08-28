<?php

class HelloController
{
   public function index() {
       echo \Template::instance()
           ->render('/template.php');
   }
}