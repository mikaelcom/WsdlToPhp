<?php
/**
 * Class file for EbayTradingTypePromotionalSaleTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePromotionalSaleTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePromotionalSaleTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'PriceDiscountOnly'
	 * Meta informations :
	 * 	- documentation : Sale offers price discount only.
	 * @return string 'PriceDiscountOnly'
	 */
	const VALUE_PRICEDISCOUNTONLY = 'PriceDiscountOnly';
	/**
	 * Constant for value 'FreeShippingOnly'
	 * Meta informations :
	 * 	- documentation : Sale offers free shipping only.
	 * @return string 'FreeShippingOnly'
	 */
	const VALUE_FREESHIPPINGONLY = 'FreeShippingOnly';
	/**
	 * Constant for value 'PriceDiscountAndFreeShipping'
	 * Meta informations :
	 * 	- documentation : Sale offers both price discount and free shipping.
	 * @return string 'PriceDiscountAndFreeShipping'
	 */
	const VALUE_PRICEDISCOUNTANDFREESHIPPING = 'PriceDiscountAndFreeShipping';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePromotionalSaleTypeCodeType
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
		return in_array($_value,array(self::VALUE_PRICEDISCOUNTONLY,self::VALUE_FREESHIPPINGONLY,self::VALUE_PRICEDISCOUNTANDFREESHIPPING,self::VALUE_CUSTOMCODE));
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