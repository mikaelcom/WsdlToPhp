<?php
/**
 * Class file for EbayTradingTypeListingDurationCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingDurationCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeListingDurationCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Days_1'
	 * Meta informations :
	 * 	- documentation : 1 Day - A seller must have a positive feedback rating of 10 or more, or must be ID Verified to use the 1-day listing duration on the US site. Typically applicable to competitive-bid (Chinese) auction formats (including Real Estate), and Personal Offer (Second Chance Offer) actions. Call GetCategoryFeatures to determine which listing formats support this duration for the site you are using. <br><br> <span class="tablenote"><strong>Note:</strong> As of version 619, Dutch-style (multi-item) competitive-bid auctions are deprecated. eBay throws an error if you submit a Dutch item listing with AddItem or VerifyAddItem. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the Quantity value to 1. </span> <br>
	 * @return string 'Days_1'
	 */
	const VALUE_DAYS_1 = 'Days_1';
	/**
	 * Constant for value 'Days_3'
	 * Meta informations :
	 * 	- documentation : 3 Days - Typically applicable to competitive-bid (Chinese) auction formats (including Real Estate), Basic Fixed-Price auction formats, and Personal Offer (Second Chance Offer) actions. Call GetCategoryFeatures to determine which listing formats support this duration for the site you are using. <br><br> <span class="tablenote"><strong>Note:</strong> As of version 619, Dutch-style (multi-item) competitive-bid auctions are deprecated. eBay throws an error if you submit a Dutch item listing with AddItem or VerifyAddItem. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the Quantity value to 1. </span> <br>
	 * @return string 'Days_3'
	 */
	const VALUE_DAYS_3 = 'Days_3';
	/**
	 * Constant for value 'Days_5'
	 * Meta informations :
	 * 	- documentation : 5 Days - Typically applicable to competitive-bid (Chinese) auction formats (including Real Estate), Basic Fixed-Price auction formats, and Personal Offer (Second Chance Offer) actions. Call GetCategoryFeatures to determine which listing formats support this duration for the site you are using. <br><br> <span class="tablenote"><strong>Note:</strong> As of version 619, Dutch-style (multi-item) competitive-bid auctions are deprecated. eBay throws an error if you submit a Dutch item listing with AddItem or VerifyAddItem. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the Quantity value to 1. </span> <br>
	 * @return string 'Days_5'
	 */
	const VALUE_DAYS_5 = 'Days_5';
	/**
	 * Constant for value 'Days_7'
	 * Meta informations :
	 * 	- documentation : 7 Days - Typically applicable to competitive-bid (Chinese) auction formats (including Real Estate), Basic Fixed-Price auction formats, and Personal Offer (Second Chance Offer) actions. Call GetCategoryFeatures to determine which listing formats support this duration for the site you are using. <br><br> <span class="tablenote"><strong>Note:</strong> As of version 619, Dutch-style (multi-item) competitive-bid auctions are deprecated. eBay throws an error if you submit a Dutch item listing with AddItem or VerifyAddItem. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the Quantity value to 1. </span> <br>
	 * @return string 'Days_7'
	 */
	const VALUE_DAYS_7 = 'Days_7';
	/**
	 * Constant for value 'Days_10'
	 * Meta informations :
	 * 	- documentation : 10 Days - Subject to an additional listing upgrade fee. Typically applicable to competitive-bid (Chinese) auction formats (including Real Estate) and Basic Fixed-Price auction formats. Call GetCategoryFeatures to determine which listing formats support this duration for the site you are using. <br><br> <span class="tablenote"><strong>Note:</strong> As of version 619, Dutch-style (multi-item) competitive-bid auctions are deprecated. eBay throws an error if you submit a Dutch item listing with AddItem or VerifyAddItem. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the Quantity value to 1. </span> <br>
	 * @return string 'Days_10'
	 */
	const VALUE_DAYS_10 = 'Days_10';
	/**
	 * Constant for value 'Days_14'
	 * Meta informations :
	 * 	- documentation : 14 Days - Subject to an additional listing upgrade fee. Call GetCategoryFeatures to determine which listing formats support this duration for the site you are using.
	 * @return string 'Days_14'
	 */
	const VALUE_DAYS_14 = 'Days_14';
	/**
	 * Constant for value 'Days_21'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'Days_21'
	 */
	const VALUE_DAYS_21 = 'Days_21';
	/**
	 * Constant for value 'Days_30'
	 * Meta informations :
	 * 	- documentation : 30 Days - Typically applicable to Real Estate Ad format and Store Inventory format. Call GetCategoryFeatures to determine which listing formats support this duration for the site you are using.
	 * @return string 'Days_30'
	 */
	const VALUE_DAYS_30 = 'Days_30';
	/**
	 * Constant for value 'Days_60'
	 * Meta informations :
	 * 	- documentation : Call GetCategoryFeatures to determine which listing formats support this duration for the site you are using.
	 * @return string 'Days_60'
	 */
	const VALUE_DAYS_60 = 'Days_60';
	/**
	 * Constant for value 'Days_90'
	 * Meta informations :
	 * 	- documentation : 90 Days - Typically applicable to Real Estate Ad format. Call GetCategoryFeatures to determine which listing formats support this duration for the site you are using.
	 * @return string 'Days_90'
	 */
	const VALUE_DAYS_90 = 'Days_90';
	/**
	 * Constant for value 'Days_120'
	 * Meta informations :
	 * 	- documentation : (in/out) Call GetCategoryFeatures to determine which listing formats support this duration for the site you are using.
	 * @return string 'Days_120'
	 */
	const VALUE_DAYS_120 = 'Days_120';
	/**
	 * Constant for value 'GTC'
	 * Meta informations :
	 * 	- documentation : GTC - Relist automatically every 30 days until all the items sell or the seller ends the listing. Typically applicable to Store Inventory format and Half.com listings. This duration is not applicable to AdFormat listing type. Call GetCategoryFeatures to determine which listing formats support this duration for the site you are using.
	 * @return string 'GTC'
	 */
	const VALUE_GTC = 'GTC';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeListingDurationCodeType
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
		return in_array($_value,array(self::VALUE_DAYS_1,self::VALUE_DAYS_3,self::VALUE_DAYS_5,self::VALUE_DAYS_7,self::VALUE_DAYS_10,self::VALUE_DAYS_14,self::VALUE_DAYS_21,self::VALUE_DAYS_30,self::VALUE_DAYS_60,self::VALUE_DAYS_90,self::VALUE_DAYS_120,self::VALUE_GTC,self::VALUE_CUSTOMCODE));
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