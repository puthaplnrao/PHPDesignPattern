<?php

include_once 'InterfaceAnimal.php';
include_once 'Class.php';
class AnimalFactory
{
    public static function create($type): Animal
    {
        return match (strtolower($type)) {
            'dog' => new Dog(),
            'cat' => new Cat(),
            default => throw new Exception("Animal type not supported."),
        };
    }
}

$animal1 = AnimalFactory::create('dog');
echo $animal1->speak(); // Output: Woof!

$animal2 = AnimalFactory::create('cat');
echo $animal2->speak(); // Output: Meow!