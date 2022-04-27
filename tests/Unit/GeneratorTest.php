<?php

declare(strict_types=1);

namespace Tests\Unit;

use T1nkl\RandomGenerator\Generator;
use Tests\TestCase;

class GeneratorTest extends TestCase
{
    /**
     * @return string
     */
    public function testGetName(): string
    {
        $name = Generator::getName();

        $this->assertNotEmpty($name);

        return $name;
    }
}
