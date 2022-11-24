<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass HighFiveService
 */
class HighFiveServiceTest extends TestCase {

    /**
     * @covers ::gimmeFive
     */
    public function testGimmeFive()
    {
        $this->assertEquals(5, HighFiveService::gimmeFive());
    }
}
