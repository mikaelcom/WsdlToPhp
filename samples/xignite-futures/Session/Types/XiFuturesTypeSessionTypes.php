<?php
/**
 * Class file for XiFuturesTypeSessionTypes
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeSessionTypes
 * @date 08/07/2012
 */
class XiFuturesTypeSessionTypes extends XiFuturesWsdlClass
{
	/**
	 * Constant for value 'Day'
	 * @return string 'Day'
	 */
	const VALUE_DAY = 'Day';
	/**
	 * Constant for value 'Night'
	 * @return string 'Night'
	 */
	const VALUE_NIGHT = 'Night';
	/**
	 * Constant for value 'Combined'
	 * @return string 'Combined'
	 */
	const VALUE_COMBINED = 'Combined';
	/**
	 * Constructor
	 * @return XiFuturesTypeSessionTypes
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
		return in_array($_value,array(self::VALUE_DAY,self::VALUE_NIGHT,self::VALUE_COMBINED));
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