<?php

namespace BrainGames\games\Prime;

use function BrainGames\Engine\run;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function play()
{
    $runGame = function () {
        $question = rand(1, 100);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    run(DESCRIPTION, $runGame);
}

function isPrime(int $number)
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= $number / 2; $i += 1) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
