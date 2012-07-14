<?php
/**
 * Class file for PayPalTypeAverageMonthlyVolumeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAverageMonthlyVolumeType
 * @date 14/07/2012
 */
class PayPalTypeAverageMonthlyVolumeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'AverageMonthlyVolume-Not-Applicable'
	 * @return string 'AverageMonthlyVolume-Not-Applicable'
	 */
	const VALUE_AVERAGEMONTHLYVOLUME_NOT_APPLICABLE = 'AverageMonthlyVolume-Not-Applicable';
	/**
	 * Constant for value 'AverageMonthlyVolume-Range1'
	 * @return string 'AverageMonthlyVolume-Range1'
	 */
	const VALUE_AVERAGEMONTHLYVOLUME_RANGE1 = 'AverageMonthlyVolume-Range1';
	/**
	 * Constant for value 'AverageMonthlyVolume-Range2'
	 * @return string 'AverageMonthlyVolume-Range2'
	 */
	const VALUE_AVERAGEMONTHLYVOLUME_RANGE2 = 'AverageMonthlyVolume-Range2';
	/**
	 * Constant for value 'AverageMonthlyVolume-Range3'
	 * @return string 'AverageMonthlyVolume-Range3'
	 */
	const VALUE_AVERAGEMONTHLYVOLUME_RANGE3 = 'AverageMonthlyVolume-Range3';
	/**
	 * Constant for value 'AverageMonthlyVolume-Range4'
	 * @return string 'AverageMonthlyVolume-Range4'
	 */
	const VALUE_AVERAGEMONTHLYVOLUME_RANGE4 = 'AverageMonthlyVolume-Range4';
	/**
	 * Constant for value 'AverageMonthlyVolume-Range5'
	 * @return string 'AverageMonthlyVolume-Range5'
	 */
	const VALUE_AVERAGEMONTHLYVOLUME_RANGE5 = 'AverageMonthlyVolume-Range5';
	/**
	 * Constant for value 'AverageMonthlyVolume-Range6'
	 * @return string 'AverageMonthlyVolume-Range6'
	 */
	const VALUE_AVERAGEMONTHLYVOLUME_RANGE6 = 'AverageMonthlyVolume-Range6';
	/**
	 * Constructor
	 * @return PayPalTypeAverageMonthlyVolumeType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_AVERAGEMONTHLYVOLUME_NOT_APPLICABLE,self::VALUE_AVERAGEMONTHLYVOLUME_RANGE1,self::VALUE_AVERAGEMONTHLYVOLUME_RANGE2,self::VALUE_AVERAGEMONTHLYVOLUME_RANGE3,self::VALUE_AVERAGEMONTHLYVOLUME_RANGE4,self::VALUE_AVERAGEMONTHLYVOLUME_RANGE5,self::VALUE_AVERAGEMONTHLYVOLUME_RANGE6));
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>