<?php
interface Coffee
{
    public function getCost();
}

class SimpleCoffee implements Coffee
{
    public function getCost()
    {
        return 5;
    }
}
class MilkDecorator implements Coffee
{
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        // Adds 2 for milk to the base coffee cost
        return $this->coffee->getCost() + 2;
    }
}

$coffee = new MilkDecorator(new SimpleCoffee());
echo $coffee->getCost(); // 7