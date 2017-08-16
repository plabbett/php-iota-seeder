# PHP IOTA Seeder

Generates an 81-tryte random seed for [IOTA](http://iota.org)  wallets.

## Getting Started

This is a simple static function used to generate random 81-tryte (ASCII version) seeds for IOTA wallets.

## Notice

This is a work in progress. Please use at your own risk.

### Installing and Usage

Install with composer:
```
composer require plabbett/php-iota-seeder
```

Usage:
```
require 'vendor/autoload.php';

use Labbett\IOTA\Wallet\Seed as IotaSeed;

$seed = IotaSeed::generate();

```

See example.php for usage examples.

```
php example.php
```

Or, run it in a browser:

```
php -S localhost:8080
```
Then go to http://localhost:8080/example.php to see the seed.




## Authors

* **Patrick Labbett**

See also the list of [contributors](https://github.com/plabbett/php-iota-seeder/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
