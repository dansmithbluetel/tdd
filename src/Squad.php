<?php declare(strict_types=1);

final class Squad
{
    private $members = [];

    public function __construct($members = [])
    {
        //$this->members = $members;
        foreach($members as $member)
        {
            $this->addMember($member);
        }
    }

    public function addMember(string $member)
    {
        $this->members[] = $this->format($member);
    }

    public function removeMember(string $member)
    {
        $key = array_search($this->format($member), $this->members);
        if (!$key) {
            throw new \Exception('Member is not in squad');
        }
        unset($this->members[$key]);
    }

    public function getMembers(): array
    {
        return $this->sort($this->members);
        /*return array_map(function($member) {
            return trim(ucfirst($member));
        }, $this->sort($this->members));*/
    }

    private function sort($members)
    {
        sort($members);
        return $members;
    }

    private function format(string $member)
    {
        return ucfirst(trim(preg_replace('/[0-9,!]+/', '', $member)));
    }
}
