<?php

// Creates objects without exposing the instantiation logic to the client.
// ✅ Used for: Object creation (e.g., UserFactory, PaymentFactory, etc.)
// ✅ Benefit: Centralizes object creation logic and supports open/closed principle.

// Interface for all notification types
interface Notification
{
    public function send($to, $message);
}

// Email Notification
class EmailNotification implements Notification
{
    public function send($to, $message)
    {
        echo "Email sent to $to: $message\n";
    }
}

// SMS Notification
class SMSNotification implements Notification
{
    public function send($to, $message)
    {
        echo "SMS sent to $to: $message\n";
    }
}

// Factory to create notification objects
class NotificationFactory
{
    public static function create($type)
    {
        if ($type === 'email') {
            return new EmailNotification();
        } elseif ($type === 'sms') {
            return new SMSNotification();
        } else {
            throw new Exception("Unsupported notification type: $type");
        }
    }
}

// Usage
try {
    $notifier = NotificationFactory::create('sms');
    $notifier->send('1234567890', 'Hello from Factory!');
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
