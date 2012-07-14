<?php
/**
 * Class file for PayPalTypePromotionMethodCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePromotionMethodCodeType
 * @date 14/07/2012
 */
class PayPalTypePromotionMethodCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'CrossSell'
	 * Meta informations :
	 * 	- documentation : Cross Sell
	 * @return string 'CrossSell'
	 */
	const VALUE_CROSSSELL = 'CrossSell';
	/**
	 * Constant for value 'UpSell'
	 * Meta informations :
	 * 	- documentation : Up Sell
	 * @return string 'UpSell'
	 */
	const VALUE_UPSELL = 'UpSell';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved. Do not use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypePromotionMethodCodeType
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
		return in_array($_value,array(self::VALUE_CROSSSELL,self::VALUE_UPSELL,self::VALUE_CUSTOMCODE));
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