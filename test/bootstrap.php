<?php

/**
 * Phpunit bootstrap file.
 * 
 * @license http://opensource.org/licenses/mit-license.php The MIT License (MIT)
 * @link https://github.com/amiriun/pushe
 * @author Amir Alian <amircup2006@gmail.com>
 */

$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->addPsr4('Fixture\\', 'test/Fixture');
