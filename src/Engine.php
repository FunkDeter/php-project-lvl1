<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function run(string $description, callable $runGame, int $roundsCount = 3)
{
    line('Welcome to the Brain Games!');
    line($description);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    for ($i = 1; $i <= $roundsCount; $i++) {
        [$question, $correctAnswer] = $runGame();

        $questionMessage = "Question: {$question}";

        $userAnswer = prompt($questionMessage);
        if ($userAnswer === $correctAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }

    line('Congratulations, %s!', $name);
}
