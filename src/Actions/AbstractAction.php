<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 2/20/18
 * Time: 1:57 PM
 */

namespace Amiriun\Pushe\Actions;


use GuzzleHttp\Client;

abstract class AbstractAction
{
    public function __construct()
    {
        $this->guzzle = new Client(
            [
                'base_uri' => 'https://panel.pushe.co/api/v1/notifications/',
                'headers'  => [
                    'Authorization' => 'Token e7cbeee90e11e6f43a4d5585c732bfbf2ba62e1e',
                    'Content-Type'  => 'application/json',
                ]
            ]
        );
    }

    public function request($method, $uri = '', array $options = [])
    {
        return $this->guzzle->request($method, $uri, $options);
    }
}