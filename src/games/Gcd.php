<?php

namespace BrainGames\games\Gcd;

use function BrainGames\games\run as startGame;

const PROMPT_TEXT = 'Find the greatest common divisor of given numbers.';

function calcGcd($value1, $value2)
{
    if ($value2 == 0) {
        return $value1;
    }

    return calcGcd($value2, $value1 % $value2);
}

function run()
{
    $getGameData = function () {
        
        $value1 = rand(1, 100);
        $value2 = rand(1, 100);
        
        $question = "{$value1} gcd {$value2}";
        $answer = calcGcd($value1, $value2);

        return [$question, $answer];
    };
    
    startGame(PROMPT_TEXT, $getGameData);
}
