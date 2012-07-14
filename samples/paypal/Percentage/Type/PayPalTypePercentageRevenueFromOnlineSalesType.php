<?php
/**
 * Class file for PayPalTypePercentageRevenueFromOnlineSalesType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePercentageRevenueFromOnlineSalesType
 * @date 14/07/2012
 */
class PayPalTypePercentageRevenueFromOnlineSalesType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'PercentageRevenueFromOnlineSales-Not-Applicable'
	 * @return string 'PercentageRevenueFromOnlineSales-Not-Applicable'
	 */
	const VALUE_PERCENTAGEREVENUEFROMONLINESALES_NOT_APPLICABLE = 'PercentageRevenueFromOnlineSales-Not-Applicable';
	/**
	 * Constant for value 'PercentageRevenueFromOnlineSales-Range1'
	 * @return string 'PercentageRevenueFromOnlineSales-Range1'
	 */
	const VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE1 = 'PercentageRevenueFromOnlineSales-Range1';
	/**
	 * Constant for value 'PercentageRevenueFromOnlineSales-Range2'
	 * @return string 'PercentageRevenueFromOnlineSales-Range2'
	 */
	const VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE2 = 'PercentageRevenueFromOnlineSales-Range2';
	/**
	 * Constant for value 'PercentageRevenueFromOnlineSales-Range3'
	 * @return string 'PercentageRevenueFromOnlineSales-Range3'
	 */
	const VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE3 = 'PercentageRevenueFromOnlineSales-Range3';
	/**
	 * Constant for value 'PercentageRevenueFromOnlineSales-Range4'
	 * @return string 'PercentageRevenueFromOnlineSales-Range4'
	 */
	const VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE4 = 'PercentageRevenueFromOnlineSales-Range4';
	/**
	 * Constructor
	 * @return PayPalTypePercentageRevenueFromOnlineSalesType
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
		return in_array($_value,array(self::VALUE_PERCENTAGEREVENUEFROMONLINESALES_NOT_APPLICABLE,self::VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE1,self::VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE2,self::VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE3,self::VALUE_PERCENTAGEREVENUEFROMONLINESALES_RANGE4));
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