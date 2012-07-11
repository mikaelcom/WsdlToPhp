<?php
/**
 * Class file for EbayTradingTypeSellingManagerAlertTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerAlertTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerAlertTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Sold'
	 * Meta informations :
	 * 	- documentation : Indicates that an alert related to a sold listing has been issued.
	 * @return string 'Sold'
	 */
	const VALUE_SOLD = 'Sold';
	/**
	 * Constant for value 'Inventory'
	 * Meta informations :
	 * 	- documentation : Indicates that an alert related to inventory has been issued.
	 * @return string 'Inventory'
	 */
	const VALUE_INVENTORY = 'Inventory';
	/**
	 * Constant for value 'Automation'
	 * Meta informations :
	 * 	- documentation : Indicates that an automation alert has been sent because a listing did not conform to listing automation rules.
	 * @return string 'Automation'
	 */
	const VALUE_AUTOMATION = 'Automation';
	/**
	 * Constant for value 'PaisaPay'
	 * Meta informations :
	 * 	- documentation : Indicates that an alert related to PaisaPay, a payment method used for eBay India, has been issued.
	 * @return string 'PaisaPay'
	 */
	const VALUE_PAISAPAY = 'PaisaPay';
	/**
	 * Constant for value 'General'
	 * Meta informations :
	 * 	- documentation : Indicates that an alert has been issued for negative feedback received, bad email, or an unpaid item dispute.
	 * @return string 'General'
	 */
	const VALUE_GENERAL = 'General';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellingManagerAlertTypeCodeType
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
		return in_array($_value,array(self::VALUE_SOLD,self::VALUE_INVENTORY,self::VALUE_AUTOMATION,self::VALUE_PAISAPAY,self::VALUE_GENERAL,self::VALUE_CUSTOMCODE));
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