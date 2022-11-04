<?php

namespace BrainGames\games\Even;

use function BrainGames\Engine\run;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no"';

function play()
{
    $runGame = function () {
        $question = rand(1, 99);
        $correctAnswer = isEven($question) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    run(DESCRIPTION, $runGame);
}

function isEven(int $number)
{
    return $number % 2 === 0;
}
