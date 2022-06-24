<?php

namespace BrainGames\games\Prime;

use function BrainGames\games\run as startGame;

const PROMPT_TEXT = 'Answer "yes" if given number is prime. Otherwise answer "no"';

function isPrime($num)
{
    for ($i = 2; $i <= sqrt($num); $i++) {
        if (!($num % $i)) {
            return false;
        }
    }
    return true;
}

function run()
{
    $getGameData = function () {

        $question = rand(1, 100);
        $answer = (isPrime($question) ? 'yes' : 'no');
        
        return [$question, $answer];
    };
    
    startGame(PROMPT_TEXT, $getGameData);
}
