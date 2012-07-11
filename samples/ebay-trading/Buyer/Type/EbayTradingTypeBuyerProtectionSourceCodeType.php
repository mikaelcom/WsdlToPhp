<?php
/**
 * Class file for EbayTradingTypeBuyerProtectionSourceCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBuyerProtectionSourceCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeBuyerProtectionSourceCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'eBay'
	 * Meta informations :
	 * 	- documentation : Buyer protection is covered by the eBay Standard Purchase Protection Program.
	 * @return string 'eBay'
	 */
	const VALUE_EBAY = 'eBay';
	/**
	 * Constant for value 'PayPal'
	 * Meta informations :
	 * 	- documentation : Buyer protection is covered by the PayPal Protection Program.
	 * @return string 'PayPal'
	 */
	const VALUE_PAYPAL = 'PayPal';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeBuyerProtectionSourceCodeType
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
		return in_array($_value,array(self::VALUE_EBAY,self::VALUE_PAYPAL,self::VALUE_CUSTOMCODE));
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