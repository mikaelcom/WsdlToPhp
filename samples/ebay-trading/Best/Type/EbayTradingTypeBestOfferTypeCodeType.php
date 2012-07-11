<?php
/**
 * Class file for EbayTradingTypeBestOfferTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBestOfferTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeBestOfferTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'BuyerBestOffer'
	 * Meta informations :
	 * 	- documentation : The buyer has placed best offer on the item.
	 * @return string 'BuyerBestOffer'
	 */
	const VALUE_BUYERBESTOFFER = 'BuyerBestOffer';
	/**
	 * Constant for value 'BuyerCounterOffer'
	 * Meta informations :
	 * 	- documentation : The buyer has made a counter offer.
	 * @return string 'BuyerCounterOffer'
	 */
	const VALUE_BUYERCOUNTEROFFER = 'BuyerCounterOffer';
	/**
	 * Constant for value 'SellerCounterOffer'
	 * Meta informations :
	 * 	- documentation : The seller has made a counter offer.
	 * @return string 'SellerCounterOffer'
	 */
	const VALUE_SELLERCOUNTEROFFER = 'SellerCounterOffer';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeBestOfferTypeCodeType
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
		return in_array($_value,array(self::VALUE_BUYERBESTOFFER,self::VALUE_BUYERCOUNTEROFFER,self::VALUE_SELLERCOUNTEROFFER,self::VALUE_CUSTOMCODE));
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