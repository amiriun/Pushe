<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 2/20/18
 * Time: 3:37 PM
 */

namespace Amiriun\Pushe;


class Filter
{
    public $instanceIds = [];
    public $androidIds = [];
    public $pushIdOrIMEIs = [];
    public $operators = [];
    public $brands = [];
    public $mobileNetworks = [];
    public $states = [];


    public function prepareData()
    {
        $data = [
            'device_id'   => $this->androidIds,
            'instance_id' => $this->instanceIds,
            'operator'    => $this->operators,
            'brand'       => $this->brands,
            'mobile_net'  => $this->mobileNetworks,
            'state'       => $this->states,
        ];

        if (empty($this->androidIds)) {
            unset($data['device_id']);
        }

        if (empty($this->pushIdOrIMEIs)) {
            unset($data['imei']);
        }

        if (empty($this->instanceIds)) {
            unset($data['instance_id']);
        }

        return $data;
    }

    public function byInstanceId($data)
    {
        if (is_string($data)) {
            $this->instanceIds[] = $data;

            return $this;
        }
        $this->instanceIds = $data;

        return $this;
    }

    public function byAndroidId($data)
    {
        if (is_string($data)) {
            $this->androidIds[] = $data;

            return $this;
        }
        $this->androidIds = $data;

        return $this;
    }

    public function byPushIdOrIMEI($data)
    {
        if (is_string($data)) {
            $this->pushIdOrIMEIs[] = $data;

            return $this;
        }
        $this->pushIdOrIMEIs = $data;

        return $this;
    }

    public function byOperator($data)
    {
        if (is_string($data)) {
            $this->operators[] = $data;

            return $this;
        }
        $this->operators = $data;

        return $this;
    }

    public function byBrand($data)
    {
        if (is_string($data)) {
            $this->brands[] = $data;

            return $this;
        }
        $this->brands = $data;

        return $this;

    }

    public function byMobileNetwork($data)
    {
        if (is_string($data)) {
            $this->mobileNetworks[] = $data;

            return $this;
        }
        $this->mobileNetworks = $data;

        return $this;
    }

    public function byState($data)
    {
        if (is_string($data)) {
            $this->states[] = $data;

            return $this;
        }
        $this->states = $data;

        return $this;
    }


}