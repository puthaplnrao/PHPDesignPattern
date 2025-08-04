<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use designpatterns\creationalpatterns\Singleton;

$obj1 = Singleton::getInstance();
$obj1->sayHello();

$obj2 = Singleton::getInstance();
$obj2->sayHello();

Singleton::unsetInstance();

$obj3 = Singleton::getInstance();
$obj3->sayHello();
