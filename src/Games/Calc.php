<?php

namespace BrainGames\Games\Calc;

use function cli\line;
use function cli\prompt;

function action($number1, $number2, $mark) 
{
    switch ($mark) {
      case ('+'): return $number1 + $number2;
      case ('-'): return $number1 - $number2;
      case ('*'): return $number1 * $number2;
    }
}

function runCalc()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('What is the result of the expression?');

    for ($i = 0; $i < 3; $i++) {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $symbols = ["+", "-", "*"];
        $randSymb = array_rand($symbols, 1);
        $mark = $symbols[$randSymb];

        $correctAnswer = action($number1, $number2, $mark);

        line("Question: $number1 $mark $number2");
        $answer = prompt('You answer');
        if ($answer != $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, $name!");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, $name!");
}
