<?php

namespace Amiriun\Pushe;

use Amiriun\Pushe\Actions\RequestToPushe;

class Pushe
{

    public $title;
    public $content;
    public $sound;
    public $filter;
    public $visibility;
    public $icon;

    public function send()
    {
        $action = new RequestToPushe();
        $request = $action->send($this);

        return $request; // todo
//        return new PusheResponse($request);

    }

    /**
     * @param string|array $value
     *
     * @return $this
     */
    public function setAppPackageNames($value)
    {
        Configuration::make()->setApplicationsPackageName($value);

        return $this;
    }

    public function getAppPackageNames()
    {
        return Configuration::make()->getApplicationsPackageName();
    }

    public function getToken()
    {
        return Configuration::make()->getToken();
    }

    public function getIsAsync()
    {
        return Configuration::make()->getIsAsync();
    }

    public function setIsAsync($value)
    {
        Configuration::make()->setIsAsync($value);

        return $this;
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

        return $this;
    }

    public function setInVisible()
    {
        $this->visibility = false;

        return $this;
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