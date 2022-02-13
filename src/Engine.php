<?php

namespace Brain\Games\Engine;

use function cli\prompt;
use function cli\line;

function startGame($game)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $game($name);
    }
    line("Congratulations, %s!", $name);
}

function checkAnswer($rightAnswer, $name)
{
    $userAnswer = prompt("Your answer");
    if ($rightAnswer != $userAnswer) {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $rightAnswer);
        line("Let's try again, %s!", $name);
        exit();
    }
    line("Correct!");
}
