<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass RandomNumberGenerator
 */
class RandomNumberGeneratorTest extends TestCase
{
    /**
     * @covers ::generate
     */
    public function test_generate()
    {
        $this->assertIsInt(RandomNumberGenerator::generate());
    }
}
