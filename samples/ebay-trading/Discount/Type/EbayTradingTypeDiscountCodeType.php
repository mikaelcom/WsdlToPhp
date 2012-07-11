<?php
/**
 * Class file for EbayTradingTypeDiscountCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDiscountCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDiscountCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Percentage'
	 * Meta informations :
	 * 	- documentation : Specifies discount type as percentage.
	 * @return string 'Percentage'
	 */
	const VALUE_PERCENTAGE = 'Percentage';
	/**
	 * Constant for value 'Price'
	 * Meta informations :
	 * 	- documentation : Specifies discount type as a fixed amount. Discount will be in the currency of the original listing.
	 * @return string 'Price'
	 */
	const VALUE_PRICE = 'Price';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDiscountCodeType
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
		return in_array($_value,array(self::VALUE_PERCENTAGE,self::VALUE_PRICE,self::VALUE_CUSTOMCODE));
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