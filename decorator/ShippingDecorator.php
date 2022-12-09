<?php

require_once 'Decorator.php';

class ShippingDecorator extends Decorator
{
    public function getCost(): int
    {
        return 5;
    }

    public function getDescription(): string
    {
        return 'Shipping Cost';
    }
}