<?php
/**
 * Class file for PayPalTypeDetailLevelCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDetailLevelCodeType
 * @date 14/07/2012
 */
class PayPalTypeDetailLevelCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'ReturnAll'
	 * Meta informations :
	 * 	- documentation : Return in response message all detail levels.
	 * @return string 'ReturnAll'
	 */
	const VALUE_RETURNALL = 'ReturnAll';
	/**
	 * Constant for value 'ItemReturnDescription'
	 * Meta informations :
	 * 	- documentation : Return item description.
	 * @return string 'ItemReturnDescription'
	 */
	const VALUE_ITEMRETURNDESCRIPTION = 'ItemReturnDescription';
	/**
	 * Constant for value 'ItemReturnAttributes'
	 * Meta informations :
	 * 	- documentation : Return attributes as part of the item.
	 * @return string 'ItemReturnAttributes'
	 */
	const VALUE_ITEMRETURNATTRIBUTES = 'ItemReturnAttributes';
	/**
	 * Constructor
	 * @return PayPalTypeDetailLevelCodeType
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
		return in_array($_value,array(self::VALUE_RETURNALL,self::VALUE_ITEMRETURNDESCRIPTION,self::VALUE_ITEMRETURNATTRIBUTES));
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