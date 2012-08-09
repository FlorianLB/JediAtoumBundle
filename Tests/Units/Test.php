<?php

namespace Jedi\AtoumBundle\Tests\Units;

use mageekguy\atoum;

require_once __DIR__ . '/../../../../../vendor/mageekguy.atoum.phar';

/**
 * Test
 *
 * @uses atoum
 * @author Stephane PY <py.stephane1@gmail.com>
 */
abstract class Test extends atoum\test
{
    public function __construct(atoum\factory $factory = null)
    {
       $this->setTestNamespace('Tests\Units');
       parent::__construct($factory);
    }
}
?>
