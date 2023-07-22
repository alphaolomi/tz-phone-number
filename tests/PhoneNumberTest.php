<?php

use Alphaolomi\TzPhoneNumber\PhoneNumber;

it('can make new instance', function () {
    $phoneNumber = new PhoneNumber('0712345678');
    expect($phoneNumber)->toBeInstanceOf(PhoneNumber::class);
});

it('can get phone number', function ($mobileNumber) {
    $phoneNumber = new PhoneNumber($mobileNumber);
    expect($phoneNumber)->toBeInstanceOf(PhoneNumber::class);
    expect($phoneNumber->getPhoneNumber())->toBeString();

})->with([
    '0712345678',
    new PhoneNumber('0712345678'),
]);
