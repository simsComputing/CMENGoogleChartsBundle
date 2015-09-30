<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

class MediumHAxis extends HAxis
{
    /**
     *
     * The baseline for the horizontal axis.
     * This option is only supported for a continuous axis.
     *
     * @var int
     */
    protected $baseline;

    /**
     * The color of the baseline for the horizontal axis. Can be any HTML color string, for example: 'red' or '#00cc00'.
     * This option is only supported for a continuous axis.
     *
     * @var string
     */
    protected $baselineColor;

    /**
     * The direction in which the values along the horizontal axis grow. Specify -1 to reverse the order of the values
     * or 1 for normal order.
     *
     * @var int
     */
    protected $direction;

    /**
     * A format string for numeric or date axis labels.
     * For number axis labels, this is a subset of the decimal formatting ICU pattern set . For instance,
     * '#,###%' will display values "1,000%", "750%", and "50%" for values 10, 7.5, and 0.5. You can also
     * supply any of the following :
     *     'none' : displays numbers with no formatting (e.g., 8000000)
     *     'decimal' : displays numbers with thousands separators (e.g., 8,000,000)
     *     'scientific' : displays numbers in scientific notation (e.g., 8e6)
     *     'currency' : displays numbers in the local currency (e.g., $8,000,000.00)
     *     'percent' : displays numbers as percentages (e.g., 800,000,000%)
     *     'short' : displays abbreviated numbers (e.g., 8M)
     *     'long' : displays numbers as full words (e.g., 8 million)
     *
     * For date axis labels, this is a subset of the date formatting ICU pattern set . For instance, 'MMM d, y' will
     * display the value "Jul 1, 2011" for the date of July first in 2011.
     * The actual formatting applied to the label is derived from the locale the API has been loaded with. For more
     * details, see loading charts with a specific locale .
     * This option is only supported for a continuous axis.
     *
     * @var string
     */
    protected $format;

    /**
     * hAxis property that makes the horizontal axis a logarithmic scale (requires all values to be positive).
     * Set to true for yes.
     * This option is only supported for a continuous axis.
     *
     * @var boolean
     */
    protected $logScale;

    /**
     * Replaces the automatically generated X-axis ticks with the specified array. Each element of the array should be
     * either a valid tick value (such as a number, date, datetime, or timeofday), or an object. If it's an object, it
     * should have a v property for the tick value, and an optional f property containing the literal string to be
     * displayed as the label. Examples :
     * [5, 10, 15, 20]
     * [['v' => 32, 'f' => 'thirty two'], ['v' => 64, 'f' => 'sixty four']]
     *
     * This option is only supported for a continuous axis.
     *
     * @var array
     */
    protected $ticks;


    /**
     * @param int $baseline
     */
    public function setBaseline($baseline)
    {
        $this->baseline = $baseline;
    }

    /**
     * @param string $baselineColor
     */
    public function setBaselineColor($baselineColor)
    {
        $this->baselineColor = $baselineColor;
    }

    /**
     * @param int $direction
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
    }

    /**
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @param boolean $logScale
     */
    public function setLogScale($logScale)
    {
        $this->logScale = $logScale;
    }

    /**
     * @param array $ticks
     */
    public function setTicks($ticks)
    {
        $this->ticks = $ticks;
    }
}