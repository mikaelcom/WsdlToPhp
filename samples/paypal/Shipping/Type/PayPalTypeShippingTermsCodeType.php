<?php
/**
 * Class file for PayPalTypeShippingTermsCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeShippingTermsCodeType
 * @date 14/07/2012
 */
class PayPalTypeShippingTermsCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'SellerPays'
	 * Meta informations :
	 * 	- documentation : Seller pays all shipping costs.
	 * @return string 'SellerPays'
	 */
	const VALUE_SELLERPAYS = 'SellerPays';
	/**
	 * Constant for value 'BuyerPays'
	 * Meta informations :
	 * 	- documentation : Buyer pays all shipping costs.
	 * @return string 'BuyerPays'
	 */
	const VALUE_BUYERPAYS = 'BuyerPays';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeShippingTermsCodeType
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
		return in_array($_value,array(self::VALUE_SELLERPAYS,self::VALUE_BUYERPAYS,self::VALUE_CUSTOMCODE));
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