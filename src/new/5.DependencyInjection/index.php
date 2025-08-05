<?php
// Dependency Injection (DI) is a design pattern where objects (dependencies) are not created inside a class, but are passed (injected) from the outside.

// This makes your code:

// Loosely coupled

// Easier to test

// Easier to maintain and extend

// More flexible

// Dependency Injection is a design pattern where dependencies are injected from outside, rather than being created inside the class. I often use it in Core PHP for things like database connections, mail services, and payment gateways. It helps me follow SOLID principles, makes my code easier to test, and improves maintainability.

interface Mailer
{
    public function send($to, $message);
}

class SmtpMailer implements Mailer
{
    public function send($to, $message)
    {
        echo "Email sent to $to: $message\n";
    }
}

class NotificationService
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function notifyUser($email)
    {
        $this->mailer->send($email, "Welcome to our platform!");
    }
}


$notifier = new NotificationService(new SmtpMailer());
$notifier->notifyUser("user@example.com");
