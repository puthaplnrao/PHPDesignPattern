<?php
class Burger
{
    public $lettuce = false, $cheese = false;
}

class BurgerBuilder
{
    private $burger;
    public function __construct()
    {
        $this->burger = new Burger();
    }
    public function addLettuce()
    {
        $this->burger->lettuce = true;
        return $this;
    }
    public function addCheese()
    {
        $this->burger->cheese = true;
        return $this;
    }
    public function build()
    {
        return $this->burger;
    }
}

$burger = (new BurgerBuilder())->addLettuce()->addCheese()->build();
echo "Burger with " . ($burger->lettuce ? "lettuce" : "no lettuce") . " and " . ($burger->cheese ? "cheese" : "no cheese") . ".\n";
