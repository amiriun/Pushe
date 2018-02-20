<?php

namespace Amiriun\Pushe;

class Pushe
{

    public $appPackageNames = [];
    public $token;
    public $isAsync;
    public $title;
    public $content;
    public $sound;
    public $filter;
    public $visibility;
    public $icon;

    public function __construct($appPackageName, $token, $isAsync = false)
    {
        $this->setAppPackageNames($appPackageName);
        $this->token = $token;
        $this->isAsync = $isAsync;
    }

    public function send()
    {

    }

    /**
     * @param string|array $value
     *
     * @return $this
     */
    public function setAppPackageNames($value)
    {
        if (is_array($value)) {
            $this->appPackageNames = $this->appPackageNames + $value;

            return $this;
        }
        $this->appPackageNames[] = $value;

        return $this;
    }

    public function getAppPackageNames()
    {
        return $this->appPackageNames;
    }

    public function getToken()
    {
        return trim($this->token);
    }

    public function getIsAsync()
    {
        return isset($this->isAsync);
    }

    public function filter(Filter $filter)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * @return Filter
     */
    public function getFilter()
    {
        return $this->filter;
    }

    public function setVisible()
    {
        $this->visibility = true;
    }

    public function setInVisible()
    {
        $this->visibility = false;
    }

    public function getVisibility()
    {
        return $this->visibility;
    }


    public function setTitle($value)
    {
        $this->title = $value;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setContent($value)
    {
        $this->content = $value;

        return $this;
    }

    public function getContent()
    {
        return $this->content;

    }

    public function setSound($value)
    {
        $this->sound = $value;

        return $this;
    }

    public function getSound()
    {
        return $this->sound;

    }

    public function setIcon($value)
    {
        $this->icon = $value;

        return $this;
    }

    public function getIcon()
    {
        return $this->icon;
    }
}