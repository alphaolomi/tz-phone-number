# Tanzania Lib Phone Number

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alphaolomi/tz-phone-number.svg?style=flat-square)](https://packagist.org/packages/alphaolomi/tz-phone-number)
[![Tests](https://img.shields.io/github/actions/workflow/status/alphaolomi/tz-phone-number/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/alphaolomi/tz-phone-number/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/alphaolomi/tz-phone-number.svg?style=flat-square)](https://packagist.org/packages/alphaolomi/tz-phone-number)

A PHP package to validate and format Tanzanian phone numbers. It uses the [Tanzania Communications Regulatory Authority](https://www.tcra.go.tz/) Schema to reconcile and validate the phone number and get the network operator.


## Installation

You can install the package via composer:

```bash
composer require alphaolomi/tz-phone-number
```

## Usage

```php
use Alphaolomi\TzPhoneNumber\PhoneNumber;

$phoneNumber = new PhoneNumber('255 754 123 456');


// To get the country code
$phoneNumber->getCountryCode(); // 255

// To get the Network Operator
$phoneNumber->getNetworkOperator(); // Vodacom

// To check if the phone number is valid
$phoneNumber->isValid(); // true

// To get the phone number in international format
$phoneNumber->getNumber(); // +255754123456

// To get the phone number in local format
$phoneNumber->getLocalNumber(); // -754123456
```

## Caveats

-   The phone number must be in the format `255 754 123 456` or `754 123 456`

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Reference

-   [Summary of Tanzania Numbering Plan](https://gist.github.com/alphaolomi/27c8daf8655768fe9991749cc67dd77d)
-   [TCRA Ref. of of Tanzania Numbering Plan Doc.](https://nms.tcra.go.tz/nms/auvit/National_Numbering_Plan.pdf) 

## Credits

-   [Alpha Olomi](https://github.com/alphaolomi)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
