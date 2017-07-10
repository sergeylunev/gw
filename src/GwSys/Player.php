<?php

namespace GwSys;

class Player
{

    public function getDeck()
    {
        return new Deck();
    }

    public function getGrave()
    {
        return new Grave();
    }

    public function getHand()
    {
        return new Hand();
    }

}