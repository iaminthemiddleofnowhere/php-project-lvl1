<?php

namespace Brain\Games\Even;

use function cli\line;
use function Brain\Games\Engine\checkAnswer;

function game($name)
{
    $number = rand(1, 100);
    $isEven = $number % 2 === 0;
    $rightAnswer = $isEven ? 'yes' : 'no';

    line("Question: {$number}");
    checkAnswer($rightAnswer, $name);
}
