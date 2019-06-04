# Gratipay PHP Client

[![Build Status](https://img.shields.io/travis/plients/Gratipay-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/plients/Gratipay-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/plients/gratipay.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/plients/Gratipay-PHP-Client.svg?style=flat-square)](https://github.com/plients/Gratipay-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/plients/Gratipay-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/plients/Gratipay-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require plients/gratipay
```

## Usage

```php
$client = new Plients\Gratipay\Client();
$client->setConfig(['apiKey' => 'YOUR_API_KEY']);

$response = $client->api('File')->scan('infected.rar');

dump($response);
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
