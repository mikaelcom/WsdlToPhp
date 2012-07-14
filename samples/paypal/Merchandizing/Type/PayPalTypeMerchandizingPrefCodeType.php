<?php
/**
 * Class file for PayPalTypeMerchandizingPrefCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeMerchandizingPrefCodeType
 * @date 14/07/2012
 */
class PayPalTypeMerchandizingPrefCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'OptIn'
	 * Meta informations :
	 * 	- documentation : OptIn
	 * @return string 'OptIn'
	 */
	const VALUE_OPTIN = 'OptIn';
	/**
	 * Constant for value 'OptOut'
	 * Meta informations :
	 * 	- documentation : OptOut
	 * @return string 'OptOut'
	 */
	const VALUE_OPTOUT = 'OptOut';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeMerchandizingPrefCodeType
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
		return in_array($_value,array(self::VALUE_OPTIN,self::VALUE_OPTOUT,self::VALUE_CUSTOMCODE));
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