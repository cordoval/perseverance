<?php

namespace Cordoval\Tests;

use Cordoval\FeatureToggler;

class FeatureTogglerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Cordoval\FeatureToggler
     */
    protected $perseverance;

    public function setUp()
    {
        $this->perseverance = new FeatureToggler(
            [
                'feature_a' => true,
                'feature_b' => false,
            ]
        );
    }

    /**
     * @test
     */
    public function it_checks_that_feature_is_on_or_off()
    {
        $this->assertTrue($this->perseverance->isOn('feature_a'));
        $this->assertTrue($this->perseverance->isOff('feature_b'));
    }

    /**
     * @test
     */
    public function it_checks_that_feature_is_turned_off_or_on()
    {
        $this->perseverance->turnOff('feature_a');
        $this->assertFalse($this->perseverance->isOn('feature_a'));

        $this->perseverance->turnOn('feature_b');
        $this->assertTrue($this->perseverance->isOn('feature_b'));
    }
}
