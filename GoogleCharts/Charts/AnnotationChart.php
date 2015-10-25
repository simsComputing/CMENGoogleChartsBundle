<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AnnotationChart\AnnotationChartOptions;

/**
 * @author Christophe Meneses
 */
class AnnotationChart extends Chart
{
    /**
     * @var AnnotationChartOptions
     */
    protected $options;


    public function __construct()
    {
        parent::__construct();

        $this->options = new AnnotationChartOptions();
    }


    /**
     * @inheritdoc
     */
    protected function getType()
    {
        return 'AnnotationChart';
    }

    /**
     * @inheritdoc
     */
    protected function getLibrary()
    {
        return 'visualization';
    }

    /**
     * @inheritdoc
     */
    public function getPackage()
    {
        return 'annotationchart';
    }

    /**
     * @return AnnotationChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options AnnotationChartOptions
     *
     * @return AnnotationChart
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
