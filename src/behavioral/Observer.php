<?php
class Subject
{
    private $observers = [];
    public function attach($observer)
    {
        $this->observers[] = $observer;
    }
    public function notify($data)
    {
        foreach ($this->observers as $observer) {
            $observer->update($data);
        }
    }
}

class Logger
{
    public function update($data)
    {
        echo "Logging: $data\n";
    }
}

$subject = new Subject();
$subject->attach(new Logger());
$subject->notify("User registered");
