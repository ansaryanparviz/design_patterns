<?php

require_once 'Decorator.php';

class TaxDecorator extends Decorator
{
    public function getCost(): int
    {
        return $this->cost->getTotalCost() * 0.09;
    }

    public function getDescription(): string
    {
        return 'Tax Cost';
    }
}