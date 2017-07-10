<?php

declare(strict_types=1);

namespace GwSys;

class Deck implements \Countable
{
    const MIN_CARDS = 25;
    const MAX_CARDS = 40;

    /**
     * @var string[]
     */
    private $cards;

    /**
     * @return bool
     */
    public function validate(): bool
    {
        /** We need to have min 25 cards in deck */
        if ($this->count() < self::MIN_CARDS || $this->count() > self::MAX_CARDS) {
            return false;
        }

        return true;
    }

    /**
     * @return int
     */
    public function count(): int
    {


        return count($this->cards);
    }

    /**
     * @param string $card
     */
    public function addCard(string $card): void
    {
        $this->cards[] = $card;
    }
}