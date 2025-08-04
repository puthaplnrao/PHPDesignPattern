<?php

namespace designpatterns\creationalpatterns;

class Singleton
{
    private static $instance = null;

    private function __construct()
    {
        echo "Constructor: creating instance.\n";
    }


    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
            echo "\n";
        } else {
            echo "Instance already created.\n";
        }
        return self::$instance;
    }

    public static function unsetInstance()
    {
        self::$instance = null;
        echo "Instance unset.\n";
    }

    public function sayHello()
    {
        echo "Hello from Singleton\n";
    }
}
