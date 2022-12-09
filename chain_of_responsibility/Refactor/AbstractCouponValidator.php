<?php

abstract class AbstractCouponValidator
{
    protected $coupon;
    protected $nextRule;

    public function __construct(Coupon $coupon)
    {
        $this->coupon = $coupon;
    }

    public function setNextRule($validator)
    {
        $this->nextRule = $validator;
    }

    protected function goToNextValidator($code)
    {
        if ($this->nextRule == null){
            return true;
        }

        return $this->nextRule->handle($code);
    }

    abstract public function handle($code);
}
