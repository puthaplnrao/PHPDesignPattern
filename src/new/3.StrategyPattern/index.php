<?php
// Defines a family of algorithms (behaviors) and makes them interchangeable at runtime.
// ✅ Used for: Payment gateways, sorting strategies, authentication methods.
// ✅ Benefit: Easily switch between multiple algorithms at runtime.

interface PaymentStrategy
{
    public function pay($amount);
}

class PayPal implements PaymentStrategy
{
    public function pay($amount)
    {
        echo "Paid $amount via PayPal\n";
    }
}

class CreditCard implements PaymentStrategy
{
    public function pay($amount)
    {
        echo "Paid $amount via Credit Card\n";
    }
}

class PaymentContext
{
    private $strategy;

    public function __construct(PaymentStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function pay($amount)
    {
        $this->strategy->pay($amount);
    }
}

$payment = new PaymentContext(new CreditCard());
$payment->pay(100);
$payment = new PaymentContext(new PayPal());
$payment->pay(100);
