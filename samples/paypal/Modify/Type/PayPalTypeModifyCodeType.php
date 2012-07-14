<?php
/**
 * Class file for PayPalTypeModifyCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeModifyCodeType
 * @date 14/07/2012
 */
class PayPalTypeModifyCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Dropped'
	 * Meta informations :
	 * 	- documentation : Indicate filed is to be dropped.
	 * @return string 'Dropped'
	 */
	const VALUE_DROPPED = 'Dropped';
	/**
	 * Constant for value 'Modify'
	 * Meta informations :
	 * 	- documentation : Indicate filed is to be modified.
	 * @return string 'Modify'
	 */
	const VALUE_MODIFY = 'Modify';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeModifyCodeType
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
		return in_array($_value,array(self::VALUE_DROPPED,self::VALUE_MODIFY,self::VALUE_CUSTOMCODE));
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