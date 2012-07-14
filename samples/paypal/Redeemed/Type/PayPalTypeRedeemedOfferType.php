<?php
/**
 * Class file for PayPalTypeRedeemedOfferType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeRedeemedOfferType
 * @date 14/07/2012
 */
class PayPalTypeRedeemedOfferType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'MERCHANT_COUPON'
	 * @return string 'MERCHANT_COUPON'
	 */
	const VALUE_MERCHANT_COUPON = 'MERCHANT_COUPON';
	/**
	 * Constant for value 'LOYALTY_CARD'
	 * @return string 'LOYALTY_CARD'
	 */
	const VALUE_LOYALTY_CARD = 'LOYALTY_CARD';
	/**
	 * Constant for value 'MANUFACTURER_COUPON'
	 * @return string 'MANUFACTURER_COUPON'
	 */
	const VALUE_MANUFACTURER_COUPON = 'MANUFACTURER_COUPON';
	/**
	 * Constant for value 'RESERVED'
	 * @return string 'RESERVED'
	 */
	const VALUE_RESERVED = 'RESERVED';
	/**
	 * Constructor
	 * @return PayPalTypeRedeemedOfferType
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
		return in_array($_value,array(self::VALUE_MERCHANT_COUPON,self::VALUE_LOYALTY_CARD,self::VALUE_MANUFACTURER_COUPON,self::VALUE_RESERVED));
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