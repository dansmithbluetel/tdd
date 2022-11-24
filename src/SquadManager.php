<?php declare(strict_types=1);

class SquadManager
{
    private EventDispatcher $eventDispatcher;

    /**
     * @param EventDispatcher $eventDispatcher
     */
    public function __construct(EventDispatcher $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    public function moveMember(string $member, Squad $from, Squad $to)
    {
        $from->removeMember($member);
        $to->addMember($member);

        $this->eventDispatcher->dispatch('squad.member_moved', [
            'member' => $member,
            'from' => $from,
            'to' => $to,
        ]);
    }

    public function swapMember(string $fromMember, Squad $from, string $toMember, Squad $to)
    {
        $this->moveMember($fromMember, $from, $to);
        $this->moveMember($toMember, $to, $from);
    }
}
