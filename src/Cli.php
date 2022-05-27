<?php
/**
 * PHP version 2222
 * fgh@category $this is a category.
 * ghj@package $this is a category.
 * fty@author $this is a category.
 * lkj@license $this is a category.
 * nbv@link $this is a category.
 */

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

line('Welcome to the Brain Game!');
$name = prompt('May I have your name?');
line('Hello, %s!', $name);
