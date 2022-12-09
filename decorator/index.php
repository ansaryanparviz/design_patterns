<?php

require 'BasketCost.php';
require 'ShippingDecorator.php';
require 'TaxDecorator.php';
require 'PackagingDecorator.php';

$basketWithShippingCost = new ShippingDecorator(new BasketCost());
$basketWithTaxCost = new TaxDecorator(new BasketCost());
$basketWithTaxAndShippingCost = new TaxDecorator(new ShippingDecorator(new BasketCost()));
$basketWithTaxAndPackagingAndShippingCost = new PackagingDecorator(new TaxDecorator(new ShippingDecorator(new BasketCost())));

var_dump($basketWithTaxAndPackagingAndShippingCost->getDetail());
var_dump($basketWithTaxAndPackagingAndShippingCost->getTotalCost());