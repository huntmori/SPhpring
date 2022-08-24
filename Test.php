<?php
require_once "vendor/autoload.php";

use Sphpring\App\Index\Controller\IndexController;

try {
    $controller = new IndexController();
//    var_dump($controller);
    $reflactor = new ReflectionClass($controller);
    echo 'attribute';
    var_dump($reflactor->getAttributes()[0]->getName());
} catch (ReflectionException $e) {
    var_dump($e->getTraceAsString());
}