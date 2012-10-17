<?php

namespace Jedi\AtoumBundle\Tests\Units;

use mageekguy\atoum;

abstract class Test extends atoum\test
{
    /**
     * @param atoum\factory $factory factory
     */
    public function __construct(atoum\factory $factory = null)
    {
        $this->setTestNamespace('Tests\Units');
        parent::__construct($factory);
    }
}
