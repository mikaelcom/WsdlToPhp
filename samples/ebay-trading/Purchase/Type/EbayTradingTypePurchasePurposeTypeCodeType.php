<?php
/**
 * Class file for EbayTradingTypePurchasePurposeTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePurchasePurposeTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePurchasePurposeTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Other'
	 * Meta informations :
	 * 	- documentation : Custom Code
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'BuyNowItem'
	 * @return string 'BuyNowItem'
	 */
	const VALUE_BUYNOWITEM = 'BuyNowItem';
	/**
	 * Constant for value 'ShoppingCart'
	 * @return string 'ShoppingCart'
	 */
	const VALUE_SHOPPINGCART = 'ShoppingCart';
	/**
	 * Constant for value 'AuctionItem'
	 * @return string 'AuctionItem'
	 */
	const VALUE_AUCTIONITEM = 'AuctionItem';
	/**
	 * Constant for value 'GiftCertificates'
	 * @return string 'GiftCertificates'
	 */
	const VALUE_GIFTCERTIFICATES = 'GiftCertificates';
	/**
	 * Constant for value 'Subscription'
	 * @return string 'Subscription'
	 */
	const VALUE_SUBSCRIPTION = 'Subscription';
	/**
	 * Constant for value 'Donation'
	 * @return string 'Donation'
	 */
	const VALUE_DONATION = 'Donation';
	/**
	 * Constant for value 'eBayBilling'
	 * @return string 'eBayBilling'
	 */
	const VALUE_EBAYBILLING = 'eBayBilling';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePurchasePurposeTypeCodeType
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
		return in_array($_value,array(self::VALUE_OTHER,self::VALUE_BUYNOWITEM,self::VALUE_SHOPPINGCART,self::VALUE_AUCTIONITEM,self::VALUE_GIFTCERTIFICATES,self::VALUE_SUBSCRIPTION,self::VALUE_DONATION,self::VALUE_EBAYBILLING,self::VALUE_CUSTOMCODE));
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