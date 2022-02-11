<?php

namespace Brain\Games\Even;

use function cli\prompt;
use function cli\line;

function game()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);
        $isEven = $number % 2 === 0;
        $rightAnswer = $isEven ? 'yes' : 'no';
        line("Question: {$number}");
        $userAnswer = prompt("Your answer");
        if ($rightAnswer !== $userAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, %s!", $name);
            return;
        }
        line("Correct!");
    }

    line("Congratulations, %s!", $name);
}
