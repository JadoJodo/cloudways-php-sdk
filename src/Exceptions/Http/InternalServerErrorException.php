<?php

namespace JadoJodo\CloudwaysPhpSdk\Exceptions\Http;

class InternalServerErrorException extends HttpException
{
    public function __construct()
    {
        $message = 'API Server is unable to handle your request.';
        $code = 500;
        parent::__construct($message, $code);
    }
}
