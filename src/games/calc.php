<?php

/**
 * Command Line functions release game Even
 *
 * PHP version 7.3
 *
 * @category PHP
 * @package  Php-project-lvl1
 * @author   Rinat Salimyanov <rinatsin@gmail.com>
 * @license  https://github.com/Rinatsin/php-project-lvl1 MIT
 * @link     https://github.com/Rinatsin/php-project-lvl1
 */

namespace BrainGames\Calc;

use function BrainGames\Cli\endGame;
use function BrainGames\Cli\flow;
use function BrainGames\Cli\run;

/**
 * Function calculate two numbers
 *
 * @param integer $num1      first value
 * @param integer $num2      second value
 * @param string  $operation type of operation
 *
 * @return integer
 */
function calculate($num1, $num2, $operation)
{
    switch ($operation) {
        case '+':
            $corAnswer = $num1 + $num2;
            break;
        case '-':
            $corAnswer = $num1 - $num2;
            break;
        case '*':
            $corAnswer = $num1 * $num2;
            break;
    }
    return $corAnswer;
}

/**
 * Function run game brain-calc
 *
 * @return void
 */
function calc()
{
    $greeting = "What is the result of the expression?";
    $name = run($greeting);
    $operations = ['+', '-', '*'];
    for ($i = 0; $i < 3; $i++) {
        $operation = $operations[array_rand($operations)];
        $num1 = mt_rand(1, 99);
        $num2 = mt_rand(1, 99);
        $curAnswer = calculate($num1, $num2, $operation);
        $question = "{$num1}{$operation}{$num2}";
        flow($name, $question, $curAnswer);
    }
    endGame($name);
}
