<?php

namespace JadoJodo\CloudwaysPhpSdk\Exceptions\Http;;

class AccessTokenNotProvidedException extends HttpException
{
    public function __construct()
    {
        $message = 'Make sure that you have sent a proper access token along with your request';
        $code = 400;
        parent::__construct($message, $code);
    }
}
