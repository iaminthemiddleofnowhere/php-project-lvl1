<?php

namespace Brain\Games\Gcd;

use function cli\line;
use function Brain\Games\Engine\checkAnswer;

function game(string $name, int $rounds = 3)
{
    line("Find the greatest common divisor of given numbers.");
    for ($i = 0; $i < $rounds; $i++) {
        $firstNumber = rand(1, 50);
        $secondNumber = rand(1, 50);
        $rightAnswer = getNod($firstNumber, $secondNumber);

        line("Question: %s %s", $firstNumber, $secondNumber);
        checkAnswer($rightAnswer, $name);
    }
}

function getNod(int $firstNumber, int $secondNumber)
{
    $intersect = array_intersect(getDenoms($firstNumber), getDenoms($secondNumber));
    return end($intersect);
}

function getDenoms(int $num, array $denoms = [])
{
    $limit = $num / 2;
    for ($i = 1; $i <= $limit; $i++) {
        if ($num % $i === 0) {
            $denoms[] = $i;
        }
    }
    array_push($denoms, $num);
    return $denoms;
}
