<?php
/**
 * Class file for EbayTradingTypePromotionItemPriceTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePromotionItemPriceTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePromotionItemPriceTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'AuctionPrice'
	 * Meta informations :
	 * 	- documentation : (out) Bid offer in a competitive-bidding listing.
	 * @return string 'AuctionPrice'
	 */
	const VALUE_AUCTIONPRICE = 'AuctionPrice';
	/**
	 * Constant for value 'BuyItNowPrice'
	 * Meta informations :
	 * 	- documentation : (out) Buy It Now offer in a fixed-price or Buy It Now listing.
	 * @return string 'BuyItNowPrice'
	 */
	const VALUE_BUYITNOWPRICE = 'BuyItNowPrice';
	/**
	 * Constant for value 'BestOfferOnlyPrice'
	 * Meta informations :
	 * 	- documentation : (out) Best Offer in Best Offer Only listing.
	 * @return string 'BestOfferOnlyPrice'
	 */
	const VALUE_BESTOFFERONLYPRICE = 'BestOfferOnlyPrice';
	/**
	 * Constant for value 'ClassifiedAdPrice'
	 * Meta informations :
	 * 	- documentation : (out) Advertised price for a Classified Ad format listing.
	 * @return string 'ClassifiedAdPrice'
	 */
	const VALUE_CLASSIFIEDADPRICE = 'ClassifiedAdPrice';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePromotionItemPriceTypeCodeType
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
		return in_array($_value,array(self::VALUE_AUCTIONPRICE,self::VALUE_BUYITNOWPRICE,self::VALUE_BESTOFFERONLYPRICE,self::VALUE_CLASSIFIEDADPRICE,self::VALUE_CUSTOMCODE));
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