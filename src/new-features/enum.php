<?php

enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

function pickCard(Suit $suit) {
    var_dump($suit);
}

$s = Suit::Clubs;
pickCard($s); // enum(Suit::Clubs)
pickCard(Suit::Diamonds); // enum(Suit::Diamonds)

$a = Suit::Spades;
$b = Suit::Spades;
var_dump($a === $b); // true

var_dump($a instanceof Suit); // true

var_dump(Suit::Spades->name); // "Spades"
