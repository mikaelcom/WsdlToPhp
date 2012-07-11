<?php
/**
 * Class file for EbayTradingTypeListingSubtypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingSubtypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeListingSubtypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ClassifiedAd'
	 * Meta informations :
	 * 	- documentation : General classified ad listing subtype.
	 * @return string 'ClassifiedAd'
	 */
	const VALUE_CLASSIFIEDAD = 'ClassifiedAd';
	/**
	 * Constant for value 'LocalMarketBestOfferOnly'
	 * Meta informations :
	 * 	- documentation : General LocalMarketBestOfferOnly listing subtype.
	 * @return string 'LocalMarketBestOfferOnly'
	 */
	const VALUE_LOCALMARKETBESTOFFERONLY = 'LocalMarketBestOfferOnly';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeListingSubtypeCodeType
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
		return in_array($_value,array(self::VALUE_CLASSIFIEDAD,self::VALUE_LOCALMARKETBESTOFFERONLY,self::VALUE_CUSTOMCODE));
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