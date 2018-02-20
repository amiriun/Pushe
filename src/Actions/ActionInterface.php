<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 2/20/18
 * Time: 2:49 PM
 */

namespace Amiriun\Pushe\Actions;


use Amiriun\Pushe\Pushe;

interface ActionInterface
{
    public function send(Pushe $manager);
    public function getRequestBody($manager);
}