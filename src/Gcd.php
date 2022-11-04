<?php

namespace BrainGames\games\Gcd;

use function BrainGames\Engine\run;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function play()
{
    $runGame = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $question = "{$number1} {$number2}";
        $correctAnswer = (string) gcd($number1, $number2);

        return [$question, $correctAnswer];
    };

    run(DESCRIPTION, $runGame);
}

function gcd(int $num1, int $num2)
{
    $iter = function ($num, $acc) use (&$iter, $num1, $num2) {
        if ($num >= $num1 && $num >= $num2) {
            return $acc;
        }

        $newAcc = ($num1 % $num === 0 && $num2 % $num === 0) ? $num : $acc;

        return $iter($num + 1, $newAcc);
    };

    return $iter(2, 1);
}
