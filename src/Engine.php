<?php

namespace Brain\Games\Engine;

use function cli\prompt;
use function cli\line;

function startGame(string $game)
{
    $mapping = [
        'even' => fn($name) => \Brain\Games\Even\game($name),
        'calc' => fn($name) => \Brain\Games\Calc\game($name),
        'gcd' => fn($name) => \Brain\Games\Gcd\game($name),
        'progression' => fn($name) => \Brain\Games\Progression\game($name),
        'prime' => fn($name) => \Brain\Games\Prime\game($name),
    ];
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $mapping[$game]($name);
    line("Congratulations, %s!", $name);
}

function checkAnswer(mixed $rightAnswer, string $name)
{
    $userAnswer = prompt("Your answer");
    if ($rightAnswer != $userAnswer) {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $rightAnswer);
        line("Let's try again, %s!", $name);
        exit();
    }
    line("Correct!");
}
