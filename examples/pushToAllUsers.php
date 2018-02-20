<?php

require "../vendor/autoload.php";

//

use \Amiriun\Pushe\Configuration;
use \Amiriun\Pushe\Filter;
use \Amiriun\Pushe\Pushe;
//
Configuration::make()->setToken("e7cbeee90e11e6f43a4d5585c732bfbf2ba62e1e");
Configuration::make()->setIsAsync(true);
Configuration::make()->setApplicationsPackageName(["amiriundd"]);

$filter = (new Filter())
//        ->byInstanceId('nnnnn')
//        ->byAndroidId('xxx')
//        ->byBrand('lg')
        ->byOperator('mci')
        ->byMobileNetwork('lte')
        ->byPushIdOrIMEI('nnnnn');

$pushe = new Pushe();

$pushe->setTitle('titr')
    ->setContent('badane')
    ->filter($filter)
    ->setVisible()
    ->send();