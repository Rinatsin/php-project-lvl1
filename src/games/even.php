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

namespace BrainGames\Even;

use function BrainGames\Cli\run;

/**
 * The function is expect the nunber is even
 *
 * @param integer $num random number
 *
 * @return string
 */
function isEven($num)
{
    return ($num % 2) === 0;
}

/**
 * The function is run game even
 *
 * @return string
 */
function even()
{
    $arrGame = [];
    $arrGame['greeting'] = "Answer 'yes' if the number is even, other answer 'no'.";
    $num = mt_rand(1, 99);
    $arrGame['currentAnswer'] = isEven($num) ? "yes" : "no";
    $arrGame['question'] = strval($num);
    return $arrGame;
}

/**
 * Function run game
 *
 * @return void
 */
function runEven()
{
    run('even()');
}
