<?php
// Notifies subscribed objects (observers) when the state of the subject changes.
// ✅ Used for: Event listeners, logging, email notifications on user actions.
// ✅ Benefit: Decouples the core logic from side effects like logging or notifications.

interface Observer
{
    public function update($data);
}

class EmailNotifier implements Observer
{
    public function update($data)
    {
        echo "Email: User {$data} registered.\n";
    }
}

class Logger implements Observer
{
    public function update($data)
    {
        echo "Log: New user registered - $data\n";
    }
}

class UserSubject
{
    private $observers = [];

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function register($username)
    {
        echo "Registering user: $username\n";
        foreach ($this->observers as $observer) {
            $observer->update($username);
        }
    }
}

$subject = new UserSubject();
$subject->attach(new EmailNotifier());
$subject->attach(new Logger());
$subject->register("john_doe");
