<?php
require_once "vendor/autoload.php";

use Sphpring\App\Index\Controller\IndexController;
ini_set('memory_limit','-1');
try {
    /*$controller = new IndexController();
//    var_dump($controller);
    $reflactor = new ReflectionClass(IndexController::class);
    echo 'attribute';
    var_dump($reflactor->getAttributes()[0]->getName());

    $test = factoryTest(IndexController::class, null);
    var_dump($test);
    var_dump($test->getProperties());*/
    $classes = get_declared_classes();
    var_dump($classes);
} catch (ReflectionException $e) {
    var_dump($e->getTraceAsString());
}

function factoryTest($className, $instance): object{
    var_dump($className);
    $reflect = new ReflectionClass($className);
    $instance = $reflect->newInstanceWithoutConstructor();
    $attributes = $reflect->getAttributes();
    foreach($attributes as $attribute) {
        if($attribute->getName()!="Attribute") {
            $reflect->
            $instance->{$attribute->getName()} = $attribute->getArguments();
            return factoryTest($attribute->getName(), $instance);
        }
    }
    return $instance;
}