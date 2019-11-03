<?php

namespace App\Exceptions;

use App\Traits\ExposesShortName;


class CardDeclined extends PaymentException
{
    use ExposesShortName;
}