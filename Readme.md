# PHP IOTA Seeder

[![StyleCI](https://styleci.io/repos/100442553/shield?branch=master)](https://styleci.io/repos/100442553)

[![Latest Stable Version](https://poser.pugx.org/plabbett/php-iota-seeder/v/stable)](https://packagist.org/packages/plabbett/php-iota-seeder)

[![Total Downloads](https://poser.pugx.org/plabbett/php-iota-seeder/downloads)](https://packagist.org/packages/plabbett/php-iota-seeder)

[![License](https://poser.pugx.org/plabbett/php-iota-seeder/license)](https://packagist.org/packages/plabbett/php-iota-seeder)

Generates an 81-tryte random seed for [IOTA](http://iota.org)  wallets.

## Getting Started

This is a simple static function used to generate random 81-tryte (ASCII version) seeds for IOTA wallets.

## Notice

This is a work in progress. Please use at your own risk.

We've generated thousands of seeds to test the distribution, here is a sample:

```shell
cat seeds |sed -e 's/\(.\)/\1\n/g' | sort | uniq -c | sort -nr
  99526 E
  99479 H
  99427 C
  99348 T
  99306 R
  99305 K
  99199 X
  99189 Z
  99140 W
  99134 V
  99132 A
  99092 P
  99052 S
  98968 G
  98964 J
  98941 L
  98887 B
  98843 9
  98813 I
  98791 F
  98769 N
  98734 Q
  98730 O
  98683 D
  98639 M
  98619 U
  98290 Y
  ```

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
