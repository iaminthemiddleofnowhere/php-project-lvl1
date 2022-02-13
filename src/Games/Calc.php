<?php

namespace Brain\Games\Calc;

use function cli\line;
use function Brain\Games\Engine\checkAnswer;

function game($name)
{
    $actions = [
        '+' => fn($n1, $n2) => $n1 + $n2,
        '-' => fn($n1, $n2) => $n1 - $n2,
        '*' => fn($n1, $n2) => $n1 * $n2,
    ];
    $action = array_rand($actions);
    $firstNumber = rand(1, 100);
    $secondNumber = rand(1, 100);
    $rightAnswer = $actions[$action]($firstNumber, $secondNumber);

    line("Question: %s %s %s", $firstNumber, $action, $secondNumber);
    checkAnswer($rightAnswer, $name);
}
