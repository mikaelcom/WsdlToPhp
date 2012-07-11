<?php
/**
 * Class file for XiChartTypeChartTypes
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeChartTypes
 * @date 08/07/2012
 */
class XiChartTypeChartTypes extends XiChartWsdlClass
{
	/**
	 * Constant for value 'Price'
	 * @return string 'Price'
	 */
	const VALUE_PRICE = 'Price';
	/**
	 * Constant for value 'MarketCapitalization'
	 * @return string 'MarketCapitalization'
	 */
	const VALUE_MARKETCAPITALIZATION = 'MarketCapitalization';
	/**
	 * Constructor
	 * @return XiChartTypeChartTypes
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
		return in_array($_value,array(self::VALUE_PRICE,self::VALUE_MARKETCAPITALIZATION));
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