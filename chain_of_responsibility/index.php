<?php

require './Coupon.php';
require './CouponValidator.php';

$code = 'discount-30';
$coupon = new Coupon;
$validator = new CouponValidator($coupon);

$validator->validate($code);
