<?php

use GwSys\Game;
use GwSys\Player;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    /**
     * @var Game
     */
    protected $game;

    public function setUp()
    {
        $player1 = $this->prophesize(Player::class)->reveal();
        $player2 = $this->prophesize(Player::class)->reveal();

        $this->game = new Game($player1, $player2);
    }

    public function testClassInitialize()
    {
        $this->assertInstanceOf(Game::class, $this->game);
    }

    public function testGameCanReturnCurrentStatus()
    {
        $this->assertInternalType('string', $this->game->getStatus());
        $this->assertEquals(Game::NOT_STARTED, $this->game->getStatus());
    }

    public function testGameCanBeStarted()
    {
        $this->game->start();

        $this->assertEquals(Game::STARTED, $this->game->getStatus());
    }

    public function testGameCanReturnCurrentRound()
    {
        $this->assertInternalType('int', $this->game->getCurrentRound());
        $this->assertEquals(0, $this->game->getCurrentRound());
    }

    public function testAfterGamesStartsRoundShouldBeFirst()
    {
        $this->game->start();
        $this->assertEquals(1, $this->game->getCurrentRound());
    }

    public function testGameShouldHaveTwoPlayers()
    {
        ;
        $this->game->getSecondPlayer();

        $this->assertInstanceOf(Player::class, $this->game->getFirstPlayer());
        $this->assertInstanceOf(Player::class, $this->game->getSecondPlayer());
    }

}
