# Pushe.co (Push Notification Service)

[![Build Status](https://travis-ci.org/amiriun/pushe.svg?branch=master)](https://travis-ci.org/amiriun/pushe)
[![Coverage Status](https://coveralls.io/repos/github/amiriun/pushe/badge.svg?branch=master)](https://coveralls.io/github/amiriun/pushe?branch=master)


#Instalation


To install Via Composer , use the command bellow:

```
composer require amiriun/pushe
```


#Usage

```php
use \Amiriun\Pushe\Configuration;
use \Amiriun\Pushe\Filter;
use \Amiriun\Pushe\Pushe;

// Firstly,you have to set your configuration
Configuration::make()->setToken("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
Configuration::make()->setIsAsync(true);
Configuration::make()->setApplicationsPackageName(["amiriundd"]);

// If you'd like to filter push to some users with some parameters you can use filter:
$filter = (new Filter())
        ->byInstanceId('nnnnn')
        ->byAndroidId('xxx')
        ->byBrand('lg')
        ->byOperator('mci')
        ->byMobileNetwork('lte')
        ->byPushIdOrIMEI('nnnnn');
        
        
// Finally you can fill your notification data to send
$pushe = new Pushe();
$pushe->setTitle('titr')
    ->setContent('badane')
    ->filter($filter) // optional
    ->setVisible() // optional
    ->send();
        
```