JediAtoumBundle
================

This bundle provides a (very) simple integration of [Atoum](https://github.com/mageekguy/atoum), the unit testing framework, from [mageekguy](https://github.com/mageekguy) into Symfony2.

## Installation

First you have to download the [Atoum PHAR archive](http://downloads.atoum.org/nightly/mageekguy.atoum.phar) and store it under `/vendor/mageekguy.atoum.phar`.

### With composer

After that, just add the bundle in your `composer.json` :

```
{
    "require": {
        ...
        "FlorianLB/JediAtoumBundle": "dev-master"
    }
}
```

## Usage

Make your test class extends the `Tests\Units\Test` class of the bundle.

Don't forget to load this class with your favorite method (require, autoload, ...)

``` php
...

require __DIR__ . '/../../../../../../../vendor/autoload.php';

use Jedi\AtoumBundle\Tests\Units;

class helloWorld extends Units\Test
{
  ...
}

```