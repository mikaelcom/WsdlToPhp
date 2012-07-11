<?php
/**
 * Class file for EbayTradingTypeURLTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeURLTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeURLTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ViewItemURL'
	 * Meta informations :
	 * 	- documentation : URL Prefix for viewing a particular listing. Just add an item id.
	 * @return string 'ViewItemURL'
	 */
	const VALUE_VIEWITEMURL = 'ViewItemURL';
	/**
	 * Constant for value 'ViewUserURL'
	 * Meta informations :
	 * 	- documentation : URL Prefix for viewing the feedback for a particular userid. Just add a userid.
	 * @return string 'ViewUserURL'
	 */
	const VALUE_VIEWUSERURL = 'ViewUserURL';
	/**
	 * Constant for value 'MyeBayURL'
	 * Meta informations :
	 * 	- documentation : Full URL for an eBay login page.
	 * @return string 'MyeBayURL'
	 */
	const VALUE_MYEBAYURL = 'MyeBayURL';
	/**
	 * Constant for value 'MyeBayBiddingURL'
	 * Meta informations :
	 * 	- documentation : Full URL for viewing the items on which the user is bidding.
	 * @return string 'MyeBayBiddingURL'
	 */
	const VALUE_MYEBAYBIDDINGURL = 'MyeBayBiddingURL';
	/**
	 * Constant for value 'MyeBayNotWonURL'
	 * Meta informations :
	 * 	- documentation : Full URL for viewing the items on which the user bid but did not win.
	 * @return string 'MyeBayNotWonURL'
	 */
	const VALUE_MYEBAYNOTWONURL = 'MyeBayNotWonURL';
	/**
	 * Constant for value 'MyeBayWonURL'
	 * Meta informations :
	 * 	- documentation : Full URL for viewing the items on which the user bid and also won.
	 * @return string 'MyeBayWonURL'
	 */
	const VALUE_MYEBAYWONURL = 'MyeBayWonURL';
	/**
	 * Constant for value 'MyeBayWatchingURL'
	 * Meta informations :
	 * 	- documentation : Full URL for viewing the items the user is currently watching.
	 * @return string 'MyeBayWatchingURL'
	 */
	const VALUE_MYEBAYWATCHINGURL = 'MyeBayWatchingURL';
	/**
	 * Constant for value 'eBayStoreURL'
	 * Meta informations :
	 * 	- documentation : Full URL for eBay Stores.
	 * @return string 'eBayStoreURL'
	 */
	const VALUE_EBAYSTOREURL = 'eBayStoreURL';
	/**
	 * Constant for value 'SmallLogoURL'
	 * Meta informations :
	 * 	- documentation : Full URL for the small version of the "An eBay Marketplace" logo.
	 * @return string 'SmallLogoURL'
	 */
	const VALUE_SMALLLOGOURL = 'SmallLogoURL';
	/**
	 * Constant for value 'MediumLogoURL'
	 * Meta informations :
	 * 	- documentation : Full URL for the medium version of the "An eBay Marketplace" logo.
	 * @return string 'MediumLogoURL'
	 */
	const VALUE_MEDIUMLOGOURL = 'MediumLogoURL';
	/**
	 * Constant for value 'LargeLogoURL'
	 * Meta informations :
	 * 	- documentation : Full URL for the large version of the "An eBay Marketplace" logo.
	 * @return string 'LargeLogoURL'
	 */
	const VALUE_LARGELOGOURL = 'LargeLogoURL';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeURLTypeCodeType
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
		return in_array($_value,array(self::VALUE_VIEWITEMURL,self::VALUE_VIEWUSERURL,self::VALUE_MYEBAYURL,self::VALUE_MYEBAYBIDDINGURL,self::VALUE_MYEBAYNOTWONURL,self::VALUE_MYEBAYWONURL,self::VALUE_MYEBAYWATCHINGURL,self::VALUE_EBAYSTOREURL,self::VALUE_SMALLLOGOURL,self::VALUE_MEDIUMLOGOURL,self::VALUE_LARGELOGOURL,self::VALUE_CUSTOMCODE));
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