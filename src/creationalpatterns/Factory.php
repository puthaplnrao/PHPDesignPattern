<?php
class Car
{
    public function drive()
    {
        echo "Driving a car\n";
    }
}

class Lorry
{
    public function drive()
    {
        echo "Driving a Lorry\n";
    }
}

class Factory
{
    public static function driveVehicle($type)
    {
        switch ($type) {
            case 'car':
                $vehicle = new Car();
                break;
            case 'lorry':
                $vehicle = new Lorry();
                break;
            default:
                throw new Exception("Unknown vehicle type");
        }
        return $vehicle;
    }
}
Factory::driveVehicle('car')->drive();
Factory::driveVehicle('lorry')->drive();
