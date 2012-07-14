<?php
/**
 * Class file for PayPalTypeAutoBillType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAutoBillType
 * @date 14/07/2012
 */
class PayPalTypeAutoBillType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'NoAutoBill'
	 * @return string 'NoAutoBill'
	 */
	const VALUE_NOAUTOBILL = 'NoAutoBill';
	/**
	 * Constant for value 'AddToNextBilling'
	 * @return string 'AddToNextBilling'
	 */
	const VALUE_ADDTONEXTBILLING = 'AddToNextBilling';
	/**
	 * Constructor
	 * @return PayPalTypeAutoBillType
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
		return in_array($_value,array(self::VALUE_NOAUTOBILL,self::VALUE_ADDTONEXTBILLING));
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