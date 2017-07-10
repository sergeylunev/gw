<?php

declare(strict_types=1);

namespace GwSys;

class Game
{
    const NOT_STARTED = 'not_started';
    const STARTED = 'started';

    /**
     * @var string
     */
    protected $status;
    /**
     * @var int
     */
    protected $round;
    /**
     * @var Player
     */
    private $firstPlayer;
    /**
     * @var Player
     */
    private $secondPlayer;

    public function __construct(Player $firstPlayer, Player $secondPlayer)
    {
        $this->setStatus(self::NOT_STARTED);
        $this->setRound(0);
        $this->firstPlayer = $firstPlayer;
        $this->secondPlayer = $secondPlayer;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    protected function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function start(): void
    {
        $this->setStatus(self::STARTED);
        $this->setRound(1);
    }

    public function getCurrentRound(): int
    {
        return $this->round;
    }

    private function setRound(int $round): void
    {
        $this->round = $round;
    }

    /**
     * @return Player
     */
    public function getFirstPlayer(): Player
    {
        return $this->firstPlayer;
    }

    /**
     * @return Player
     */
    public function getSecondPlayer(): Player
    {
        return $this->secondPlayer;
    }
}