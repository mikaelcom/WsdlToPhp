<?php
/**
 * Class file for PayPalTypeMatchStatusCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeMatchStatusCodeType
 * @date 14/07/2012
 */
class PayPalTypeMatchStatusCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Matched'
	 * @return string 'Matched'
	 */
	const VALUE_MATCHED = 'Matched';
	/**
	 * Constant for value 'Unmatched'
	 * @return string 'Unmatched'
	 */
	const VALUE_UNMATCHED = 'Unmatched';
	/**
	 * Constructor
	 * @return PayPalTypeMatchStatusCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_MATCHED,self::VALUE_UNMATCHED));
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