<?php

namespace Brain\Games\Progression;

use function cli\line;
use function Brain\Games\Engine\checkAnswer;

function game($name, $rounds = 3)
{
    line("What number is missing in the progression?");
    for ($i = 0; $i < $rounds; $i++) {
        $step = rand(3, 27);
        $numbersAmount = rand(5, 10) ;
        $start = rand(1, 50);
        $end = $start + $step * ($numbersAmount - 1);
        $numbers = range($start, $end, $step);
        $missingNum = array_rand($numbers);
        $rightAnswer = $numbers[$missingNum];
        $numbers[$missingNum] = "..";

        line("Question: %s", implode(" ", $numbers));
        checkAnswer($rightAnswer, $name);
    }
}
