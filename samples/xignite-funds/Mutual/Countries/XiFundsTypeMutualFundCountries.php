<?php
/**
 * Class file for XiFundsTypeMutualFundCountries
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeMutualFundCountries
 * @date 08/07/2012
 */
class XiFundsTypeMutualFundCountries extends XiFundsWsdlClass
{
	/**
	 * Constant for value 'USA'
	 * @return string 'USA'
	 */
	const VALUE_USA = 'USA';
	/**
	 * Constant for value 'Canada'
	 * @return string 'Canada'
	 */
	const VALUE_CANADA = 'Canada';
	/**
	 * Constructor
	 * @return XiFundsTypeMutualFundCountries
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
		return in_array($_value,array(self::VALUE_USA,self::VALUE_CANADA));
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