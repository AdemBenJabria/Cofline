<?php

namespace Tests\Feature;

use Cofline\Blog\Math;
use Cofline\Blog\Tests\TestCase;
use PHPUnit\Framework\TestCase as FrameworkTestCase;

class MathTest extends FrameworkTestCase
{

    public function testDouble()
    {
        $this->assertEquals(4, Math::double(2));

    }
}