<?php

namespace Brain\Games\Even;

use function cli\line;
use function Brain\Games\Engine\checkAnswer;

function game(string $name, int $rounds = 3)
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < $rounds; $i++) {
        $number = rand(1, 100);
        $isEven = $number % 2 === 0;
        $rightAnswer = $isEven ? 'yes' : 'no';

        line("Question: %s", $number);
        checkAnswer($rightAnswer, $name);
    }
}
