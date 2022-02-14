<?php

namespace Brain\Games\Prime;

use function cli\line;
use function Brain\Games\Engine\checkAnswer;

function game(string $name, int $rounds = 3)
{
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    for ($i = 0; $i < $rounds; $i++) {
        $num = rand(2, 4);
        $rightAnswer = isPrime($num) ? "yes" : "no";

        line("Question: %s", $num);
        checkAnswer($rightAnswer, $name);
    }
}

function isPrime(int $num)
{
    $limit = $num / 2;
    for ($i = 2; $i <= $limit; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}
