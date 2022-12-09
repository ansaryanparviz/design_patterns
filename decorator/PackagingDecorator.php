<?php

require_once 'Decorator.php';

class PackagingDecorator extends Decorator
{
    public function getCost(): int
    {
        return 2;
    }

    public function getDescription(): string
    {
        return 'Packaging Cost';
    }
}