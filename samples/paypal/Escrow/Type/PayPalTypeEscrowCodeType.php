<?php
/**
 * Class file for PayPalTypeEscrowCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeEscrowCodeType
 * @date 14/07/2012
 */
class PayPalTypeEscrowCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'ByBuyer'
	 * Meta informations :
	 * 	- documentation : By Buyer
	 * @return string 'ByBuyer'
	 */
	const VALUE_BYBUYER = 'ByBuyer';
	/**
	 * Constant for value 'BySeller'
	 * Meta informations :
	 * 	- documentation : By Seller.
	 * @return string 'BySeller'
	 */
	const VALUE_BYSELLER = 'BySeller';
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : None.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeEscrowCodeType
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
		return in_array($_value,array(self::VALUE_BYBUYER,self::VALUE_BYSELLER,self::VALUE_NONE,self::VALUE_CUSTOMCODE));
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