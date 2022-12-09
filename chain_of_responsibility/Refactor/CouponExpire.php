<?php

require_once 'AbstractCouponValidator.php';

class CouponExpire extends AbstractCouponValidator
{
    public function handle($code)
    {
        if ($this->coupon->isExpired($code)){
            throw new Exception('Coupon is expired');
        }

        echo 'Coupon is not expired'. PHP_EOL;

        return $this->goToNextValidator($code);
    }
}
