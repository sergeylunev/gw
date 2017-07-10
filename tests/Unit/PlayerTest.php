<?php

use GwSys\Deck;
use GwSys\Grave;
use GwSys\Hand;
use GwSys\Player;
use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    /**
     * @var Player
     */
    private $player;

    public function setUp()
    {
        $this->player = new Player();
    }

    public function testPlayerShouldBeInitialize()
    {
        $this->assertInstanceOf(Player::class, $this->player);
    }

    public function testPlayerShouldHaveDeck()
    {
        $this->assertInstanceOf(Deck::class,$this->player->getDeck());
    }

    public function testPlayerShouldHaveGraveYard()
    {
        $this->assertInstanceOf(Grave::class,$this->player->getGrave());
    }

    public function testPlayerShouldHaveHand()
    {
        $this->assertInstanceOf(Hand::class,$this->player->getHand());
    }
}
