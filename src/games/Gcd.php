<?php

/**
 * Namespace for Brain\Games\Gcd
 *
 * @category None
 * @package  None
 * @author   FunkDetera <igorkinko@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     None
 */

namespace Brain\Games\Gcd;

use function cli\line;
use function cli\prompt;
use function cli\out;
use function Brain\Games\Engine\welcomePrompt;

/**
 * Function runGame()
 *
 * @return void
 */
function runGame(): void
{
    line('');
    $name = welcomePrompt();
    line('Find the greatest common divisor of given numbers.');

    $count = 0;
    do {
        $randomX = rand(1, 100);
        $randomY = rand(1, 100);

        $strQuestion = "{$randomX} {$randomY}";
        $resQuestion = gcd($randomX, $randomY);

        $isCorrectAnswer = question($strQuestion, $resQuestion);
        if (!$isCorrectAnswer) {
            line("Let's try again, %s!", $name);
        }
        $count++;
    } while ($count < 3 && $isCorrectAnswer);

    if ($isCorrectAnswer) {
        line("Congratulations, %s!", $name);
    }
}

/**
 * Function gcd($a, $b)
 *
 * @param int $a check number
 * @param int $b check number
 *
 * @return int
 */
function gcd(int $a, int $b): int
{
    if ($a % $b !== 0) {
        return gcd($b, $a % $b);
    }

    return $b;
}

/**
 * Function question($strQuestion, $resQuestion)
 *
 * @param string $strQuestion show string
 * @param int    $resQuestion check number
 *
 * @return bool
 */
function question(string $strQuestion, int $resQuestion): bool
{
    line("Question: %s", $strQuestion);
    $answer = prompt('Your answer');

    if (intval($answer) === $resQuestion) {
        line("Correct!");
        return true;
    }

    out("'%s' is wrong answer ;(. ", $answer);
    line("Correct answer was '%d'.", $resQuestion);

    return false;
}
