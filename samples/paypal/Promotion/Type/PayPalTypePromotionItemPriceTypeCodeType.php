<?php
/**
 * Class file for PayPalTypePromotionItemPriceTypeCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePromotionItemPriceTypeCodeType
 * @date 14/07/2012
 */
class PayPalTypePromotionItemPriceTypeCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'AuctionPrice'
	 * Meta informations :
	 * 	- documentation : Auction Item
	 * @return string 'AuctionPrice'
	 */
	const VALUE_AUCTIONPRICE = 'AuctionPrice';
	/**
	 * Constant for value 'BuyItNowPrice'
	 * Meta informations :
	 * 	- documentation : Buy It Now
	 * @return string 'BuyItNowPrice'
	 */
	const VALUE_BUYITNOWPRICE = 'BuyItNowPrice';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved. Do not use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypePromotionItemPriceTypeCodeType
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
		return in_array($_value,array(self::VALUE_AUCTIONPRICE,self::VALUE_BUYITNOWPRICE,self::VALUE_CUSTOMCODE));
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