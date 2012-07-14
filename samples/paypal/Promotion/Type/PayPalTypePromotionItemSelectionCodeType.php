<?php
/**
 * Class file for PayPalTypePromotionItemSelectionCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePromotionItemSelectionCodeType
 * @date 14/07/2012
 */
class PayPalTypePromotionItemSelectionCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Manual'
	 * Meta informations :
	 * 	- documentation : Manual Selection
	 * @return string 'Manual'
	 */
	const VALUE_MANUAL = 'Manual';
	/**
	 * Constant for value 'Automatic'
	 * Meta informations :
	 * 	- documentation : Automatic Selection
	 * @return string 'Automatic'
	 */
	const VALUE_AUTOMATIC = 'Automatic';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved. Do not use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypePromotionItemSelectionCodeType
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
		return in_array($_value,array(self::VALUE_MANUAL,self::VALUE_AUTOMATIC,self::VALUE_CUSTOMCODE));
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