<?php

require "../vendor/autoload.php";

//

use \Amiriun\Pushe\Configuration;
use \Amiriun\Pushe\Filter;
use \Amiriun\Pushe\Pushe;
//
Configuration::make()->setToken("xxxxxxxxxxxxxxxxxxx");
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

var_dump($pushe->setTitle('titr')
    ->setContent('badane')
    ->filter($filter)
    ->setVisible()
    ->send());