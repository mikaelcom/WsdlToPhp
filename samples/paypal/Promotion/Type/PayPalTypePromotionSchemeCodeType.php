<?php
/**
 * Class file for PayPalTypePromotionSchemeCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePromotionSchemeCodeType
 * @date 14/07/2012
 */
class PayPalTypePromotionSchemeCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'ItemToItem'
	 * Meta informations :
	 * 	- documentation : Item to Item Promotional Scheme
	 * @return string 'ItemToItem'
	 */
	const VALUE_ITEMTOITEM = 'ItemToItem';
	/**
	 * Constant for value 'ItemToStoreCat'
	 * Meta informations :
	 * 	- documentation : Item to Item Store Scheme
	 * @return string 'ItemToStoreCat'
	 */
	const VALUE_ITEMTOSTORECAT = 'ItemToStoreCat';
	/**
	 * Constant for value 'StoreToStoreCat'
	 * Meta informations :
	 * 	- documentation : Store to Store Scheme
	 * @return string 'StoreToStoreCat'
	 */
	const VALUE_STORETOSTORECAT = 'StoreToStoreCat';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved. Do not use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypePromotionSchemeCodeType
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
		return in_array($_value,array(self::VALUE_ITEMTOITEM,self::VALUE_ITEMTOSTORECAT,self::VALUE_STORETOSTORECAT,self::VALUE_CUSTOMCODE));
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