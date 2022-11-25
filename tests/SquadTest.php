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

    /**
     * @covers ::__construct
     * @covers ::addMember
     * @covers ::getMembers
     * @covers ::format
     * @covers ::sort
     * @covers ::removeMember
     */
    public function testMemberFormatting()
    {
        $blueSquad = new Squad(['dAn3NY', 'dan    ', 'SI111MON', ' lewis!']);

        foreach($blueSquad->getMembers() as $member) {
            $this->formatChecks($member);
        }
    }

    private function formatChecks($member)
    {
        $this->assertStringNotContainsString(' ', $member);
        $this->assertStringNotContainsString('1', $member);
        $this->assertStringNotContainsString('2', $member);
        $this->assertStringNotContainsString('3', $member);
        $this->assertStringNotContainsString('4', $member);
        $this->assertStringNotContainsString('5', $member);
        $this->assertStringNotContainsString('6', $member);
        $this->assertStringNotContainsString('7', $member);
        $this->assertStringNotContainsString('8', $member);
        $this->assertStringNotContainsString('9', $member);
        $this->assertStringNotContainsString('0', $member);
        $this->assertStringNotContainsString('!', $member);
    }
}

