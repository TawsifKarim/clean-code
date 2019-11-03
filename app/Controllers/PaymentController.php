<?php

namespace App\Controllers;

use App\Exceptions\CardDeclined;
use App\Exceptions\PaymentException;
use Exception;

class PaymentController
{
    public function __construct()
    {

    }

    public function store()
    {
        try{
            $this->makePayment();
        }catch(PaymentException $e){
            if(method_exists($this, $handler = 'handle' . $e->getShortName())){
                $this->{$handler}($e);
            }
        }
    }

    /**
     * @param $e
     */
    protected function handleCardDeclined(Exception $e)
    {
        var_dump($e->getMessage());
    }

    protected function makePayment()
    {
        throw new CardDeclined('card was declined');
    }
}