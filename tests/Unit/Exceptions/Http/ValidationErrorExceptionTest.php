<?php

describe('ValidationErrorException', function () {
    it('should have the right message and code', function () {
        $exception = new \JadoJodo\CloudwaysPhpSdk\Exceptions\Http\ValidationErrorException(['foo' => 'bar']);
        expect($exception)->toBeInstanceOf(\JadoJodo\CloudwaysPhpSdk\Exceptions\Http\HttpException::class);
        expect($exception->getMessage())->toBe('Make sure that you have sent a proper request body with your request' . "\n\n" . 'Errors: {"foo":"bar"}');
        expect($exception->getCode())->toBe(400);
    });
});