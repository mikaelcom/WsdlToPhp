<?php
/**
 * Class file for PayPalTypeCheckoutStatusCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCheckoutStatusCodeType
 * @date 14/07/2012
 */
class PayPalTypeCheckoutStatusCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'CheckoutComplete'
	 * Meta informations :
	 * 	- documentation : Checkout complete.
	 * @return string 'CheckoutComplete'
	 */
	const VALUE_CHECKOUTCOMPLETE = 'CheckoutComplete';
	/**
	 * Constant for value 'CheckoutIncomplete'
	 * Meta informations :
	 * 	- documentation : Checkout incomplete. No details specified.
	 * @return string 'CheckoutIncomplete'
	 */
	const VALUE_CHECKOUTINCOMPLETE = 'CheckoutIncomplete';
	/**
	 * Constant for value 'BuyerRequestsTotal'
	 * Meta informations :
	 * 	- documentation : Buyer requests total.
	 * @return string 'BuyerRequestsTotal'
	 */
	const VALUE_BUYERREQUESTSTOTAL = 'BuyerRequestsTotal';
	/**
	 * Constant for value 'SellerResponded'
	 * Meta informations :
	 * 	- documentation : Seller responded to buyer's request.
	 * @return string 'SellerResponded'
	 */
	const VALUE_SELLERRESPONDED = 'SellerResponded';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeCheckoutStatusCodeType
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
		return in_array($_value,array(self::VALUE_CHECKOUTCOMPLETE,self::VALUE_CHECKOUTINCOMPLETE,self::VALUE_BUYERREQUESTSTOTAL,self::VALUE_SELLERRESPONDED,self::VALUE_CUSTOMCODE));
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