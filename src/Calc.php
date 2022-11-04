<?php

namespace BrainGames\games\Calc;

use function BrainGames\Engine\run;

const DESCRIPTION = "What is the result of the expression?";

function play()
{
    $runGame = function () {
        $number1 = rand(1, 50);
        $number2 = rand(1, 10);
        $operations = ['+', '-', '*'];
        $operation = $operations[array_rand($operations)];
        $question = "{$number1} {$operation} {$number2}";
        $correctAnswer = 0;
        switch ($operation) {
            case '+':
                $correctAnswer = $number1 + $number2;
                break;
            case '-':
                $correctAnswer = $number1 - $number2;
                break;
            case '*':
                $correctAnswer = $number1 * $number2;
                break;
        }

        return [$question, (string) $correctAnswer];
    };

    run(DESCRIPTION, $runGame);
}
