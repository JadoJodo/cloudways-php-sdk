<?php

namespace JadoJodo\CloudwaysPhpSdk\Exceptions\Http;

class ForbiddenAuthorizationErrorException extends HttpException
{
    public function __construct()
    {
        $message = "You don't have access to the requested resource/action";
        $code = 403;
        parent::__construct($message, $code);
    }
}