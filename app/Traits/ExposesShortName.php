<?php

namespace App\Traits;

use ReflectionClass;

trait ExposesShortName
{
    /**
     * @return string
     * @throws \ReflectionException
     */
    public function getShortName()
    {
        return (new ReflectionClass($this))->getShortName();
    }
}
