<?php

namespace Brain\Games\Calc;

use function cli\line;
use function Brain\Games\Engine\checkAnswer;

function game($name, $rounds = 3)
{
    $actions = [
        '+' => fn($n1, $n2) => $n1 + $n2,
        '-' => fn($n1, $n2) => $n1 - $n2,
        '*' => fn($n1, $n2) => $n1 * $n2,
    ];
    line("What is the result of the expression?");
    for ($i = 0; $i < $rounds; $i++) {
        $action = array_rand($actions);
        $firstNumber = rand(1, 100);
        $secondNumber = rand(1, 100);
        $rightAnswer = $actions[$action]($firstNumber, $secondNumber);

        line("Question: %s %s %s", $firstNumber, $action, $secondNumber);
        checkAnswer($rightAnswer, $name);
    }
}
