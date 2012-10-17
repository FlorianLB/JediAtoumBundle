<?php

namespace Jedi\AtoumBundle\Tests\Controller;

use Jedi\AtoumBundle\Tests\Units\WebTestCase;
use mageekguy\atoum;

abstract class ControllerTest extends WebTestCase
{
    /**
     * @param atoum\factory $factory factory
     */
    public function __construct(atoum\factory $factory = null)
    {
        parent::__construct($factory);
        $this->setTestNamespace('Tests');
    }
}
