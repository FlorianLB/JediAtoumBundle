JediAtoumBundle
================

This bundle provides a (very) simple integration of [Atoum](https://github.com/mageekguy/atoum), the unit testing framework, from [mageekguy](https://github.com/mageekguy) into Symfony2.

## Installation

### All with composer

```json
{
    "require": {
        "jedi/atoum-bundle": "dev-master",
        "mageekguy/atoum": "dev-master"
    },
    "config": {
        "bin-dir": "bin"
    }
}
```

### Composer & Atoum Phar

```json
{
    "require": {
        "jedi/atoum-bundle": "dev-master"
    }
}
```

Download the [Atoum PHAR archive](http://downloads.atoum.org/nightly/mageekguy.atoum.phar).

## Simple Usage

Make your test class extends the `Tests\Units\Test` class of the bundle.

Don't forget to load this class with your favorite method (require, autoload, ...)

``` php
<?php

//if you don't use a bootstrap file, you need to require the autoload
require __DIR__ . '/../../../../../../../vendor/autoload.php';

// use path of the atoum.phar as bello if you don't want to use atoum via composer
//require_once __DIR__ . '/../../../../../vendor/mageekguy.atoum.phar';

use Jedi\AtoumBundle\Tests\Units;

class helloWorld extends Units\Test
{
}
```

## Web test case

You can create easily a kernel environment :

``` php
<?php

require __DIR__ . '/../../../../../../../vendor/autoload.php';

use Jedi\AtoumBundle\Tests\Units;

class helloWorld extends Units\WebTestCase
{
    public function testMyTralala()
    {
        $client = self::createClient();
    }
}
```

### Known issues

- The path of the AppKernel cannot be find, override the method `getKernelDirectory` and add the path to your `app` directory.

## Test a controller

You can test your controller with the ControllerTest class (it extends WebTestCase) :

``` php
<?php

namespace vendor\FooBundle\Tests\Controller;

use Jedi\AtoumBundle\Tests\Units\WebTestCase;
use Jedi\AtoumBundle\Tests\Controller\ControllerTest;

class BarController extends ControllerTest
{
    //test a json api method
    public function testGet()
    {
        $client   = static::createClient();
        $crawler  = $client->request('GET', '/api/foobar');
        $response = $client->getResponse();

        $this
            ->integer($response->getStatusCode())
                ->isEqualTo(200)

            ->string($response->headers->get('Content-Type'))
                ->isEqualTo('application/json')
        ;
    }
}
```