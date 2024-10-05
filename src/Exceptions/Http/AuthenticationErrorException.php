<?php

namespace JadoJodo\CloudwaysPhpSdk\Exceptions\Http;

class AuthenticationErrorException extends HttpException
{
    public function __construct()
    {
        $message = 'Make sure that you have provided a valid access token with your request';
        $code = 401;
        parent::__construct($message, $code);
    }
}