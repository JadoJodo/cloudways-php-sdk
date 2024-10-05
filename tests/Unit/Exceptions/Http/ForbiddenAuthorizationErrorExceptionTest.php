<?php

describe('ForbiddenAuthorizationErrorException', function () {
    it('should have the right message and code', function () {
        $exception = new \JadoJodo\CloudwaysPhpSdk\Exceptions\Http\ForbiddenAuthorizationErrorException();
        expect($exception)->toBeInstanceOf(\JadoJodo\CloudwaysPhpSdk\Exceptions\Http\HttpException::class);
        expect($exception->getMessage())->toBe('You don\'t have access to the requested resource/action');
        expect($exception->getCode())->toBe(403);
    });
});