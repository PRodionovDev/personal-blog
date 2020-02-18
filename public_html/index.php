<?php

/**
 * Index
 * Main file for project
 * php version 7.2.22
 *
 * @category Index
 * @package  Public_Folder
 * @author   Pavel Rodionov aka JOKER-THE <pavel11_06@mail.ru>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://localhost
 */

/**
 * Connect autoload and core of Yii2
 */
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

/**
 * Connect configuration settings
 */
$config = include __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
