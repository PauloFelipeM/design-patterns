<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Behavioral\Strategy\Payment;

class CreditCardPaymentMethod implements PaymentMethodStrategy
{
    private const DISCOUNT_PERCENT = 0.05; // 5%

    public function pay(float $amount): void
    {
        $amount - ($amount * self::DISCOUNT_PERCENT);

        printf('Paid %s with credit card', $amount);
    }
}