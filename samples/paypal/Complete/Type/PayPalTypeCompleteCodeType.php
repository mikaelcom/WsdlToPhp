<?php
/**
 * Class file for PayPalTypeCompleteCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCompleteCodeType
 * @date 14/07/2012
 */
class PayPalTypeCompleteCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'NotComplete'
	 * @return string 'NotComplete'
	 */
	const VALUE_NOTCOMPLETE = 'NotComplete';
	/**
	 * Constant for value 'Complete'
	 * @return string 'Complete'
	 */
	const VALUE_COMPLETE = 'Complete';
	/**
	 * Constructor
	 * @return PayPalTypeCompleteCodeType
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
		return in_array($_value,array(self::VALUE_NOTCOMPLETE,self::VALUE_COMPLETE));
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