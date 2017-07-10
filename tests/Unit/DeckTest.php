<?php

use GwSys\Deck;
use PHPUnit\Framework\TestCase;

class DeckTest extends TestCase
{
    /**
     * @var Deck
     */
    private $deck;

    public function setUp()
    {
        $this->deck = new Deck();
    }

    public function testCanBeInitialized()
    {
        $this->assertInstanceOf(Deck::class, $this->deck);
    }

    public function testDeckCanBeValidated()
    {
        $this->assertFalse($this->deck->validate());
    }

    public function testShouldBeCountable()
    {
        $this->assertInstanceOf(Countable::class, $this->deck);
        $this->assertEquals(0, $this->deck->count());
    }

    public function testCanAddCardsToDeck()
    {
        $this->assertEquals(0, $this->deck->count());
        $this->deck->addCard('TestCard');
        $this->assertEquals(1, $this->deck->count());
    }

    public function testDeckShouldHaveMinimumCards()
    {
        for ($i = 0; $i < Deck::MIN_CARDS; $i++) {
            $this->deck->addCard('TestCard');
        }

        $this->assertEquals(Deck::MIN_CARDS, $this->deck->count());
        $this->assertTrue($this->deck->validate());
    }

    public function testDeckCanHaveMaximumCards()
    {
        for ($i = 0; $i < Deck::MAX_CARDS; $i++) {
            $this->deck->addCard('TestCard');
        }

        $this->assertEquals(Deck::MAX_CARDS, $this->deck->count());
        $this->assertTrue($this->deck->validate());
    }

    public function testDeckShouldNotHaveMoreThanMaximumCards()
    {
        for ($i = 0; $i < Deck::MAX_CARDS + 1; $i++) {
            $this->deck->addCard('TestCard');
        }

        $this->assertFalse($this->deck->validate());
    }
}
