# Laravel TaxRates

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-taxrates
```

And then include the service provider within `app/config/app.php`.

``` php
'providers' => [
    'BrianFaust\TaxRates\ServiceProvider'
];
```

To get started, you'll need to publish the vendor assets and migrate the taxrates table:

```bash
php artisan vendor:publish && php artisan migrate
```

Now you can seed the taxrates into the database like this.

```bash
php artisan taxrates:seed
```

## Usage

``` php
$skeleton = new BrianFaust\Skeleton();
echo $skeleton->echoPhrase('Hello, BrianFaust!');
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

The [The MIT License (MIT)](LICENSE). Please check the [LICENSE](LICENSE) file for more details.
