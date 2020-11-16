<?php

namespace Leadvertex\Plugin\Components\Process;

use Leadvertex\Plugin\Components\Process\Components\Error;
use PHPUnit\Framework\TestCase;

class ErrorTest extends TestCase
{

    public function testCreateError()
    {
        $error = new Error('Test', 1);
        $this->assertEquals('Test', $error->getMessage());
        $this->assertEquals('1', $error->getEntityId());
    }

    public function testCreateErrorWithNUllEntity()
    {
        $error = new Error('Test');
        $this->assertEquals('Test', $error->getMessage());
        $this->assertNull($error->getEntityId());
    }

}