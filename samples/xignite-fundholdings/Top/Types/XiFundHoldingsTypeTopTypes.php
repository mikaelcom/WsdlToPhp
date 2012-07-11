<?php
/**
 * Class file for XiFundHoldingsTypeTopTypes
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeTopTypes
 * @date 08/07/2012
 */
class XiFundHoldingsTypeTopTypes extends XiFundHoldingsWsdlClass
{
	/**
	 * Constant for value 'Top5'
	 * @return string 'Top5'
	 */
	const VALUE_TOP5 = 'Top5';
	/**
	 * Constant for value 'Top10'
	 * @return string 'Top10'
	 */
	const VALUE_TOP10 = 'Top10';
	/**
	 * Constant for value 'Top20'
	 * @return string 'Top20'
	 */
	const VALUE_TOP20 = 'Top20';
	/**
	 * Constructor
	 * @return XiFundHoldingsTypeTopTypes
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
		return in_array($_value,array(self::VALUE_TOP5,self::VALUE_TOP10,self::VALUE_TOP20));
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