<?php

namespace BrainGames\games\Progression;

use function BrainGames\Engine\run;

const DESCRIPTION = 'What number is missing in the progression?';

function play()
{
    $runGame = function () {
        $initValue = rand(1, 10);
        $step = rand(1, 5);
        $size = 10;
        $progression = makeProgression($initValue, $step, $size);
        $randomPosition = rand(1, $size);

        $progressionWithHidden = array_replace($progression, [$randomPosition => '..']);
        $question = implode(' ', $progressionWithHidden);
        $correctAnswer = (string) $progression[$randomPosition];

        return [$question, $correctAnswer];
    };


    run(DESCRIPTION, $runGame);
}

function makeProgression($initValue = 1, $step = 2, $size = 10)
{
    $result = [];
    for ($i = 1; $i <= $size; $i += 1) {
        $result[] = $initValue + ($i * $step);
    }

    return $result;
}
