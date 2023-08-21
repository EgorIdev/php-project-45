<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function runEven()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if number even otherwise answer "no".');
    // $gameData = [];

    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);

        $correctAnswer = ($number % 2 == 0) ? "yes" : "no";

        // $gameData[] = [$number, $correctAnswer];
        line("Question: $number");
        $answer = prompt('You answer');
        if ($answer !== $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, $name!");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, $name!");
}
