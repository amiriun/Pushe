<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 2/20/18
 * Time: 1:57 PM
 */

namespace Amiriun\Pushe\Actions;


use Amiriun\Pushe\Configuration;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

abstract class AbstractAction
{
    public function __construct()
    {
        $this->guzzle = new Client(
            [
                'base_uri' => 'https://panel.pushe.co/api/v1/notifications/',
                'headers'  => [
                    'Authorization' => 'Token ' . Configuration::make()->getToken(),
                    'Content-Type'  => 'application/json',
                    'Accept'        => 'application/json',
                ]
            ]
        );
    }

    public function request($method, $uri = '', array $options = [])
    {
        if (Configuration::make()->getIsAsync()) {
            $this->guzzle->requestAsync($method, $uri, $options);

            return;
        }

        $request = $this->guzzle->request($method, $uri, $options);

        return $request->getBody()->getContents();
    }
}