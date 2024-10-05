<?php

namespace JadoJodo\CloudwaysPhpSdk\Exceptions\Http;

class ValidationErrorException extends HttpException
{
    public function __construct(array $errors)
    {
        $message = 'Make sure that you have sent a proper request body with your request';
        $message .= "\n\n";
        $message .= 'Errors: ' . json_encode($errors);
        $code = 400;
        parent::__construct($message, $code);
    }
}
