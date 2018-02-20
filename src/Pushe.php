<?php
namespace Amiriun\Pushe;

class Pushe{

    public $appPackageNames = [];
    public $token;
    public $isAsync;
    public $title;
    public $content;
    public $sound;
    public $rawData;
    public $androidIds;
    public $visibility;

    public function __construct($appPackageName,$token,$isAsync = false)
    {
        $this->setAppPackageNames($appPackageName);
        $this->token = $token;
        $this->isAsync = $isAsync;
    }

    public function send(){

    }

    /**
     * @param string|array $value
     *
     * @return $this
     */
    public function setAppPackageNames($value){
        if(is_array($value)){
            $this->appPackageNames = $this->appPackageNames + $value;

            return $this;
        }
        $this->appPackageNames[] = $value;

        return $this;
    }

    public function getAppPackageNames(){
        return $this->appPackageNames;
    }

    public function getToken(){
        return trim($this->token);
    }

    public function getIsAsync(){
        return isset($this->isAsync);
    }

    public function setAndroidIds(array $ids){
        $this->androidIds = array_merge(array_unique($ids));

        return $this;
    }

    public function getAndroidIds(){
        return $this->androidIds;
    }

    public function setVisible(){
        $this->visibility = true;
    }

    public function setInVisible(){
        $this->visibility = false;
    }

    public function getVisibility(){
        return $this->visibility;
    }


    public function setTitle($value){
        $this->title =$value;

        return $this;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setContent($value){
        $this->content = $value;

        return $this;
    }

    public function getContent(){
        return $this->content;

    }

    public function setSound($value){
        $this->sound = $value;

        return $this;
    }

    public function getSound(){
        return $this->sound;

    }

    public function setRawData(){

    }

    public function getRawData(){

    }

    public function setIcon(){

    }

    public function getIcon(){

    }
}