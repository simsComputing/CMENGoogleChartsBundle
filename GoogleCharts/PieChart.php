<?php

namespace CMENGoogleChartsBundle\GoogleCharts;

use CMENGoogleChartsBundle\GoogleCharts\Options\PieCharts\PieChartOptions;

/**
 * @author Christophe Meneses
 */
class PieChart extends Chart
{
    /**
     * @var PieChartOptions
     */
    protected $options;


    public function __construct()
    {
        parent::__construct();

        $this->options = new PieChartOptions();
    }


    /**
     * @inheritdoc
     */
    protected function getType()
    {
        return 'PieChart';
    }

    /**
     * @inheritdoc
     */
    protected function getPackage()
    {
        return 'corechart';
    }

    /**
     * @inheritdoc
     */
    public function getOptions()
    {
        return $this->options;
    }
}