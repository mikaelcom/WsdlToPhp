<?php
/**
 * Class file for PayPalTypeButtonTypeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeButtonTypeType
 * @date 14/07/2012
 */
class PayPalTypeButtonTypeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'BUYNOW'
	 * Meta informations :
	 * 	- documentation : button type is BUYNOW
	 * @return string 'BUYNOW'
	 */
	const VALUE_BUYNOW = 'BUYNOW';
	/**
	 * Constant for value 'CART'
	 * Meta informations :
	 * 	- documentation : button type is CART
	 * @return string 'CART'
	 */
	const VALUE_CART = 'CART';
	/**
	 * Constant for value 'GIFTCERTIFICATE'
	 * Meta informations :
	 * 	- documentation : button type is GIFTCERTIFICATE
	 * @return string 'GIFTCERTIFICATE'
	 */
	const VALUE_GIFTCERTIFICATE = 'GIFTCERTIFICATE';
	/**
	 * Constant for value 'SUBSCRIBE'
	 * Meta informations :
	 * 	- documentation : button type is SUBSCRIBE
	 * @return string 'SUBSCRIBE'
	 */
	const VALUE_SUBSCRIBE = 'SUBSCRIBE';
	/**
	 * Constant for value 'DONATE'
	 * Meta informations :
	 * 	- documentation : button type is DONATE
	 * @return string 'DONATE'
	 */
	const VALUE_DONATE = 'DONATE';
	/**
	 * Constant for value 'UNSUBSCRIBE'
	 * Meta informations :
	 * 	- documentation : button type is UNSUBSCRIBE
	 * @return string 'UNSUBSCRIBE'
	 */
	const VALUE_UNSUBSCRIBE = 'UNSUBSCRIBE';
	/**
	 * Constant for value 'VIEWCART'
	 * Meta informations :
	 * 	- documentation : button type is VIEWCART
	 * @return string 'VIEWCART'
	 */
	const VALUE_VIEWCART = 'VIEWCART';
	/**
	 * Constant for value 'PAYMENTPLAN'
	 * Meta informations :
	 * 	- documentation : button type is PAYMENTPLAN
	 * @return string 'PAYMENTPLAN'
	 */
	const VALUE_PAYMENTPLAN = 'PAYMENTPLAN';
	/**
	 * Constant for value 'AUTOBILLING'
	 * Meta informations :
	 * 	- documentation : button type is AUTOBILLING
	 * @return string 'AUTOBILLING'
	 */
	const VALUE_AUTOBILLING = 'AUTOBILLING';
	/**
	 * Constant for value 'PAYMENT'
	 * Meta informations :
	 * 	- documentation : button type is PAYMENT
	 * @return string 'PAYMENT'
	 */
	const VALUE_PAYMENT = 'PAYMENT';
	/**
	 * Constructor
	 * @return PayPalTypeButtonTypeType
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
		return in_array($_value,array(self::VALUE_BUYNOW,self::VALUE_CART,self::VALUE_GIFTCERTIFICATE,self::VALUE_SUBSCRIBE,self::VALUE_DONATE,self::VALUE_UNSUBSCRIBE,self::VALUE_VIEWCART,self::VALUE_PAYMENTPLAN,self::VALUE_AUTOBILLING,self::VALUE_PAYMENT));
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