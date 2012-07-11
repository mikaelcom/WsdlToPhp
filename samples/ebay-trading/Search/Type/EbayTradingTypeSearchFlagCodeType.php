<?php
/**
 * Class file for EbayTradingTypeSearchFlagCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSearchFlagCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSearchFlagCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Charity'
	 * Meta informations :
	 * 	- documentation : Return only charity item listings.
	 * @return string 'Charity'
	 */
	const VALUE_CHARITY = 'Charity';
	/**
	 * Constant for value 'Gift'
	 * Meta informations :
	 * 	- documentation : Return only gift items.
	 * @return string 'Gift'
	 */
	const VALUE_GIFT = 'Gift';
	/**
	 * Constant for value 'NowAndNew'
	 * Meta informations :
	 * 	- documentation : Return only items that have been listed with Now and New. Applicable for certain sites only.
	 * @return string 'NowAndNew'
	 */
	const VALUE_NOWANDNEW = 'NowAndNew';
	/**
	 * Constant for value 'LocalSearch'
	 * Meta informations :
	 * 	- documentation : Perform a local search.
	 * @return string 'LocalSearch'
	 */
	const VALUE_LOCALSEARCH = 'LocalSearch';
	/**
	 * Constant for value 'FreeShipping'
	 * Meta informations :
	 * 	- documentation : If specified, only items with free shipping for the user's location are returned. The user's location is determined from the site ID specified in the request. If false, no filtering is done via this attribute. A listing is not considered a free shipping listing if it requires insurance or requires pick up or requires a shipping surcharge.
	 * @return string 'FreeShipping'
	 */
	const VALUE_FREESHIPPING = 'FreeShipping';
	/**
	 * Constant for value 'Gallery'
	 * Meta informations :
	 * 	- documentation : Return Gallery items only.
	 * @return string 'Gallery'
	 */
	const VALUE_GALLERY = 'Gallery';
	/**
	 * Constant for value 'Picture'
	 * Meta informations :
	 * 	- documentation : Picture.
	 * @return string 'Picture'
	 */
	const VALUE_PICTURE = 'Picture';
	/**
	 * Constant for value 'GetItFast'
	 * Meta informations :
	 * 	- documentation : Limits the results to Get It Fast listings.
	 * @return string 'GetItFast'
	 */
	const VALUE_GETITFAST = 'GetItFast';
	/**
	 * Constant for value 'Lot'
	 * Meta informations :
	 * 	- documentation : Limits the results to only those listings for which lot size is 2 or greater.
	 * @return string 'Lot'
	 */
	const VALUE_LOT = 'Lot';
	/**
	 * Constant for value 'GermanMotorsSearchable'
	 * Meta informations :
	 * 	- documentation : Limits the results based on each item's eligibility to appear on the mobile.de site. If specified, queries for eligible items only. If not specified, the search results are not affected. Only applicable for items listed on the eBay Germany site (site ID 77) in subcategories of mobile.de search-enabled categories.
	 * @return string 'GermanMotorsSearchable'
	 */
	const VALUE_GERMANMOTORSSEARCHABLE = 'GermanMotorsSearchable';
	/**
	 * Constant for value 'WorldOfGood'
	 * Meta informations :
	 * 	- documentation : Returns items that are also listed on the WorldOfGood.com website. (The Item IDs are the same on both websites.)
	 * @return string 'WorldOfGood'
	 */
	const VALUE_WORLDOFGOOD = 'WorldOfGood';
	/**
	 * Constant for value 'DigitalDelivery'
	 * Meta informations :
	 * 	- documentation : The digital delivery feature has been disabled. <br><br> If specified, limits the results to digitally delivered good only.
	 * @return string 'DigitalDelivery'
	 */
	const VALUE_DIGITALDELIVERY = 'DigitalDelivery';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSearchFlagCodeType
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
		return in_array($_value,array(self::VALUE_CHARITY,self::VALUE_GIFT,self::VALUE_NOWANDNEW,self::VALUE_LOCALSEARCH,self::VALUE_FREESHIPPING,self::VALUE_GALLERY,self::VALUE_PICTURE,self::VALUE_GETITFAST,self::VALUE_LOT,self::VALUE_GERMANMOTORSSEARCHABLE,self::VALUE_WORLDOFGOOD,self::VALUE_DIGITALDELIVERY,self::VALUE_CUSTOMCODE));
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