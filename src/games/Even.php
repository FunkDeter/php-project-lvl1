<?php

namespace BrainGames\games\Even;

use function BrainGames\games\run as startGame;

const PROMPT_TEXT = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven($number)
{
    return $number % 2 == 0;
}

function run()
{
    $getGameData = function () {
        
        $question = rand(1, 99);
        $answer = (isEven($question) ? 'yes' : 'no');
        
        return [$question, $answer];
    };
    
    startGame(PROMPT_TEXT, $getGameData);
}
