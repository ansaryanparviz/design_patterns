<?php

require_once 'Cost.php';

class BasketCost implements Cost
{
    public function getCost(): int
    {
        return 59;
    }

    public function getDescription(): string
    {
        return 'Basket Cost';
    }

    public function getTotalCost(): int
    {
        return self::getCost();
    }

    public function getDetail(): array
    {
        return [
            self::getDescription() => self::getCost()
        ];
    }
}