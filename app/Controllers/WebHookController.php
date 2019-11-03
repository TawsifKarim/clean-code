<?php

namespace App\Controllers;



class WebHookController
{
    public function __construct()
    {

    }

    /**
     * @param $request
     */
    public function handle($request)
    {
        $method = str_replace('_', '', ucwords($request->type, '_'));

        if(method_exists($this, $handler = 'handle' . $method)){
            $this->{$handler}($request);
        }
    }

    /**
     * @param $request
     */
    protected function handleCardDeclined($request)
    {
        var_dump('Card Declined');
    }

    /**
     * @param $request
     */
    protected function handleCardAccepted($request)
    {
        var_dump('Card Accepted');
    }
}