<?php
/**
 * Class file for PayPalTypeItemCategoryType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeItemCategoryType
 * @date 14/07/2012
 */
class PayPalTypeItemCategoryType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Physical'
	 * Meta informations :
	 * 	- documentation : Physical
	 * @return string 'Physical'
	 */
	const VALUE_PHYSICAL = 'Physical';
	/**
	 * Constant for value 'Digital'
	 * Meta informations :
	 * 	- documentation : Digital
	 * @return string 'Digital'
	 */
	const VALUE_DIGITAL = 'Digital';
	/**
	 * Constructor
	 * @return PayPalTypeItemCategoryType
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
		return in_array($_value,array(self::VALUE_PHYSICAL,self::VALUE_DIGITAL));
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