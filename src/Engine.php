<?php

namespace BrainGames\games;

const GAMES_COUNT = 3;

use function cli\line;
use function cli\prompt;

function run($promptText, $getgameData)
{

    line('Welcome to Brain Games!');
    line('%s', $promptText);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    for ($step = 1; $step <= GAMES_COUNT; $step++) {
        [$textQuestion, $correctAnswer] = $getgameData();
        line("Question: %s", $textQuestion);
        $answer = prompt('Your answer');
        if ($answer == $correctAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            exit;
        }
    }
    line("Congratulations, %s!", $name);
}
