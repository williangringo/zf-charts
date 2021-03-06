<?php

namespace spec\Phpro\Chart\ChartJs\Doughnut;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DoughnutDatasetSpec extends ObjectBehavior
{
    public function it_is_a_dataset()
    {
        $this->shouldImplement('Phpro\Chart\ChartJs\DatasetInterface');
    }

    public function it_is_configurable_through_options()
    {
        $this->shouldHaveType('Zend\Stdlib\AbstractOptions');
    }

    public function it_is_json_serializable()
    {
        $this->jsonSerialize()->shouldBeArray();
    }
}
