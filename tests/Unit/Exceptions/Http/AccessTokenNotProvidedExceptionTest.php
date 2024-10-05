<?php

describe('AccessTokenNotProvidedException', function () {
    it('should have the right message and code', function () {
        $exception = new \JadoJodo\CloudwaysPhpSdk\Exceptions\Http\AccessTokenNotProvidedException();
        expect($exception)->toBeInstanceOf(\JadoJodo\CloudwaysPhpSdk\Exceptions\Http\HttpException::class);
        expect($exception->getMessage())->toBe('Make sure that you have sent a proper access token along with your request');
        expect($exception->getCode())->toBe(400);
    });
});