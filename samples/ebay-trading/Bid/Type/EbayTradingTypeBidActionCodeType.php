<?php
/**
 * Class file for EbayTradingTypeBidActionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBidActionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeBidActionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * Meta informations :
	 * 	- documentation : Unknown.
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'Bid'
	 * Meta informations :
	 * 	- documentation : The item is being offered (or was placed) as a competitive-bid item listing. This auction format if often referred to as a Chinese auction.
	 * @return string 'Bid'
	 */
	const VALUE_BID = 'Bid';
	/**
	 * Constant for value 'NotUsed'
	 * Meta informations :
	 * 	- documentation : Not used.
	 * @return string 'NotUsed'
	 */
	const VALUE_NOTUSED = 'NotUsed';
	/**
	 * Constant for value 'Retraction'
	 * Meta informations :
	 * 	- documentation : The offer was retracted by the user who extended the offer. (This can only be done on the eBay site, not via API.)
	 * @return string 'Retraction'
	 */
	const VALUE_RETRACTION = 'Retraction';
	/**
	 * Constant for value 'AutoRetraction'
	 * Meta informations :
	 * 	- documentation : The offer was automatically retracted. (This can only be done on the eBay site, not via API.)
	 * @return string 'AutoRetraction'
	 */
	const VALUE_AUTORETRACTION = 'AutoRetraction';
	/**
	 * Constant for value 'Cancelled'
	 * Meta informations :
	 * 	- documentation : The offer was cancelled. (This can only be done on the eBay site, not via API.)
	 * @return string 'Cancelled'
	 */
	const VALUE_CANCELLED = 'Cancelled';
	/**
	 * Constant for value 'AutoCancel'
	 * Meta informations :
	 * 	- documentation : The offer was automatically cancelled. (This can only be done on the eBay site, not via API.)
	 * @return string 'AutoCancel'
	 */
	const VALUE_AUTOCANCEL = 'AutoCancel';
	/**
	 * Constant for value 'Absentee'
	 * Meta informations :
	 * 	- documentation : The offer placed was an absentee bid. (This can only be done on the eBay site, not via API.)
	 * @return string 'Absentee'
	 */
	const VALUE_ABSENTEE = 'Absentee';
	/**
	 * Constant for value 'BuyItNow'
	 * Meta informations :
	 * 	- documentation : The offer resulted in the successful exercise of the Buy It Now option for a competitive-bid auction.
	 * @return string 'BuyItNow'
	 */
	const VALUE_BUYITNOW = 'BuyItNow';
	/**
	 * Constant for value 'Purchase'
	 * Meta informations :
	 * 	- documentation : The offer is being placed, or was placed, on a fixed-price listing. This value is used for fixed-price listings (Basic Fixed-Price and eBay Store Inventory listings) to purchase an item. In PlaceOffer, for Chinese-auction items with the BIN option, specify Purchase to buy the item. In the case of fixed-price items listed with AutoPay, PlaceOffer cannot be used for purchase. But for fixed-price items listed with AutoPay that have the BestOffer option, PlaceOffer can be used to make an offer (but not to purchase).
	 * @return string 'Purchase'
	 */
	const VALUE_PURCHASE = 'Purchase';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'Offer'
	 * Meta informations :
	 * 	- documentation : If an item is best-offer enabled, use this value if a buyer is making a best offer on the item. After a buyer makes a best offer (or counter-offer, etc.), the buyer can get the status of the best offer (and of a possible seller-counter-offer, etc.) using the GetBestOffers call. See the Trading Web Services Guide for information about best-offer enabled items and about GetBestOffers.
	 * @return string 'Offer'
	 */
	const VALUE_OFFER = 'Offer';
	/**
	 * Constant for value 'Counter'
	 * Meta informations :
	 * 	- documentation : If an item is best-offer enabled, use this value if a buyer is making a counteroffer to a seller's counteroffer.
	 * @return string 'Counter'
	 */
	const VALUE_COUNTER = 'Counter';
	/**
	 * Constant for value 'Accept'
	 * Meta informations :
	 * 	- documentation : If an item is best-offer enabled, use this value if a buyer is accepting a counteroffer of a seller.
	 * @return string 'Accept'
	 */
	const VALUE_ACCEPT = 'Accept';
	/**
	 * Constant for value 'Decline'
	 * Meta informations :
	 * 	- documentation : If an item is best-offer enabled, use this value if a buyer is declining a counteroffer of a seller.
	 * @return string 'Decline'
	 */
	const VALUE_DECLINE = 'Decline';
	/**
	 * Constructor
	 * @return EbayTradingTypeBidActionCodeType
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
		return in_array($_value,array(self::VALUE_UNKNOWN,self::VALUE_BID,self::VALUE_NOTUSED,self::VALUE_RETRACTION,self::VALUE_AUTORETRACTION,self::VALUE_CANCELLED,self::VALUE_AUTOCANCEL,self::VALUE_ABSENTEE,self::VALUE_BUYITNOW,self::VALUE_PURCHASE,self::VALUE_CUSTOMCODE,self::VALUE_OFFER,self::VALUE_COUNTER,self::VALUE_ACCEPT,self::VALUE_DECLINE));
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