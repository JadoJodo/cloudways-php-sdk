<?php

describe('InternalServerErrorException', function () {
    it('should have the right message and code', function () {
        $exception = new \JadoJodo\CloudwaysPhpSdk\Exceptions\Http\InternalServerErrorException();
        expect($exception)->toBeInstanceOf(\JadoJodo\CloudwaysPhpSdk\Exceptions\Http\HttpException::class);
        expect($exception->getMessage())->toBe('API Server is unable to handle your request.');
        expect($exception->getCode())->toBe(500);
    });
});
