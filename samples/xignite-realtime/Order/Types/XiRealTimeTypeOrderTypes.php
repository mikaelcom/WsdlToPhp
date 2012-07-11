<?php
/**
 * Class file for XiRealTimeTypeOrderTypes
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeOrderTypes
 * @date 08/07/2012
 */
class XiRealTimeTypeOrderTypes extends XiRealTimeWsdlClass
{
	/**
	 * Constant for value 'Buy'
	 * @return string 'Buy'
	 */
	const VALUE_BUY = 'Buy';
	/**
	 * Constant for value 'Sell'
	 * @return string 'Sell'
	 */
	const VALUE_SELL = 'Sell';
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constructor
	 * @return XiRealTimeTypeOrderTypes
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
		return in_array($_value,array(self::VALUE_BUY,self::VALUE_SELL,self::VALUE_NONE));
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