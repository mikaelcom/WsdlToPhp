<?php
/**
 * Class file for XiFuturesTypeStatus
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeStatus
 * @date 08/07/2012
 */
class XiFuturesTypeStatus extends XiFuturesWsdlClass
{
	/**
	 * Constant for value 'Open'
	 * @return string 'Open'
	 */
	const VALUE_OPEN = 'Open';
	/**
	 * Constant for value 'Closed'
	 * @return string 'Closed'
	 */
	const VALUE_CLOSED = 'Closed';
	/**
	 * Constructor
	 * @return XiFuturesTypeStatus
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
		return in_array($_value,array(self::VALUE_OPEN,self::VALUE_CLOSED));
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