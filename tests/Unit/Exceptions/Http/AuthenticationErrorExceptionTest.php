<?php

describe('AuthenticationErrorException', function () {
    it('should have the right message and code', function () {
        $exception = new \JadoJodo\CloudwaysPhpSdk\Exceptions\Http\AuthenticationErrorException();
        expect($exception)->toBeInstanceOf(\JadoJodo\CloudwaysPhpSdk\Exceptions\Http\HttpException::class);
        expect($exception->getMessage())->toBe('Make sure that you have provided a valid access token with your request');
        expect($exception->getCode())->toBe(401);
    });
});
