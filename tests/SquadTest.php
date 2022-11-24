<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass Squad
 */
final class SquadTest extends TestCase
{
    /**
     * @covers ::__construct
     * @covers ::addMember
     * @covers ::getMembers
     * @covers ::format
     * @covers ::sort
     */
    public function testBlueSquadMembers()
    {
        $blueSquad = new Squad(['dan', 'simon', 'danny ', 'lewis']);

        $this->assertCount(4, $blueSquad->getMembers());
        $this->assertEquals(['Dan', 'Danny', 'Lewis', 'Simon'], $blueSquad->getMembers());
    }

    /**
     * @covers ::__construct
     * @covers ::addMember
     * @covers ::getMembers
     * @covers ::format
     * @covers ::sort
     */
    public function testAddMember()
    {
        $redSquad = new Squad;
        $redSquad->addMember('JB');
        $redSquad->addMember('Bakang');
        $redSquad->addMember('Bronwen');
        $redSquad->addMember('Bal');

        $this->assertCount(4, $redSquad->getMembers());
        $this->assertEquals(['Bakang', 'Bal', 'Bronwen', 'JB'], $redSquad->getMembers());
    }

    /**
     * @covers ::__construct
     * @covers ::addMember
     * @covers ::getMembers
     * @covers ::format
     * @covers ::sort
     * @covers ::removeMember
     */
    public function testRemoveMember()
    {
        $blueSquad = new Squad(['dan', 'simon', 'danny ', 'lewis']);

        $blueSquad->removeMember('simon');

        $this->assertCount(3, $blueSquad->getMembers());
        $this->assertEquals(['Dan', 'Danny', 'Lewis'], $blueSquad->getMembers());
    }
}

