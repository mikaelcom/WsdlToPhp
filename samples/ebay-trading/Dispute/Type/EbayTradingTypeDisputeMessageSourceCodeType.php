<?php
/**
 * Class file for EbayTradingTypeDisputeMessageSourceCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDisputeMessageSourceCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDisputeMessageSourceCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Buyer'
	 * Meta informations :
	 * 	- documentation : (out) The buyer of the item under dispute.
	 * @return string 'Buyer'
	 */
	const VALUE_BUYER = 'Buyer';
	/**
	 * Constant for value 'Seller'
	 * Meta informations :
	 * 	- documentation : (out) The seller of the item under dispute.
	 * @return string 'Seller'
	 */
	const VALUE_SELLER = 'Seller';
	/**
	 * Constant for value 'eBay'
	 * Meta informations :
	 * 	- documentation : (out) eBay, either an administrator or the site itself.
	 * @return string 'eBay'
	 */
	const VALUE_EBAY = 'eBay';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDisputeMessageSourceCodeType
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
		return in_array($_value,array(self::VALUE_BUYER,self::VALUE_SELLER,self::VALUE_EBAY,self::VALUE_CUSTOMCODE));
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