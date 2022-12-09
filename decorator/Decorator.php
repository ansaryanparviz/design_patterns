<?php

require_once 'Cost.php';

abstract class Decorator implements Cost
{
    protected $cost;

    public function __construct(Cost $cost)
    {
        $this->cost = $cost;
    }

    public function getTotalCost(): int
    {
        return $this->cost->getTotalCost() + static::getCost();
    }

    public function getDetail(): array
    {
        return $this->cost->getDetail() + [
                static::getDescription() => static::getCost()
            ];
    }
}