<?php

namespace Cordoval;

class FeatureToggler
{
    const OFF = false;
    const ON = true;

    protected $features;

    public function __construct(array $features)
    {
        $this->features = $features;
    }

    public function isOff($feature)
    {
        return !$this->features[$feature];
    }

    public function isOn($feature)
    {
        return $this->features[$feature];
    }

    public function turnOn($feature)
    {
        $this->features[$feature] = self::ON;
    }

    public function turnOff($feature)
    {
        $this->features[$feature] = self::OFF;
    }
}
