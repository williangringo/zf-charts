<?php

namespace Phpro\Chart\ChartJs\Doughnut;

use Phpro\Chart\ChartJs\DataInterface;

/**
 * Class DoughnutData
 *
 * @package Phpro\Chart\ChartJs\Doughnut
 */
class DoughnutData
    implements DataInterface
{

    protected $data = [];

    /**
     * @param DoughnutDataSet $dataset
     */
    public function addDataset(DoughnutDataSet $dataset)
    {
        $this->data[] = $dataset;
    }

}
