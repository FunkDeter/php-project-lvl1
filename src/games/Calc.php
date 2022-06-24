<?php

namespace BrainGames\games\Calc;

use function BrainGames\games\run as startGame;

const PROMPT_TEXT = 'What is the result of the expression?';
const OPERATIONS = ['*','+','-'];

function run()
{
    $getGameData = function () {
        $value1 = rand(1, 10);
        $value2 = rand(1, 10);
        $operation = OPERATIONS[array_rand(OPERATIONS)];

        $question = "{$value1} {$operation} {$value2}";
        switch ($operation) {
            case '*':
                $answer = $value1 * $value2;
                break;
            case '+':
                $answer = $value1 + $value2;
                break;
            case '-':
                $answer = $value1 - $value2;
                break;
        }
        return [$question, $answer];
    };

    startGame(PROMPT_TEXT, $getGameData);
}
