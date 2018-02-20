<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 2/20/18
 * Time: 4:32 PM
 */

namespace Amiriun\Pushe;


class Configuration
{
    public $token;
    public $isAsync;
    public $applicationsPackageName = [];
    public static $instance;
    private function __construct()
    {
    }

    public static function make(){
        if(self::$instance === null){
            self::$instance = new Configuration();
        }

        return self::$instance;
    }

    public function setToken($token){
       $this->token = $token;
    }

    public function getToken(){
       return trim($this->token);
    }

    public function setIsAsync($isAsync){
       $this->isAsync = $isAsync;
    }

    public function getIsAsync(){
       return $this->isAsync;
    }

    public function setApplicationsPackageName($names){
        if (is_array($names)) {
            $this->applicationsPackageName = array_merge($this->applicationsPackageName ,$names);

            return $this;
        }
        $this->applicationsPackageName[] = $names;
    }

    public function getApplicationsPackageName(){
        return $this->applicationsPackageName;
    }

}