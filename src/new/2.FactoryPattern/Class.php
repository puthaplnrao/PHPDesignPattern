<?php
class Dog implements Animal
{
    public function speak()
    {
        return "Woof!";
    }
}

class Cat implements Animal
{
    public function speak()
    {
        return "Meow!";
    }
}
