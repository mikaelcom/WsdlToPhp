<?php
/**
 * Class file for EbayTradingTypeStoreSubscriptionLevelCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreSubscriptionLevelCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeStoreSubscriptionLevelCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Close'
	 * Meta informations :
	 * 	- documentation : (in) This closes your eBay Store and cancels your eBay Store subscription. All of your current Store Inventory items (if any) will end automatically. All of your current Online Auction and Fixed Price items will remain active until their ending date is reached or they are sold. All your Store pictures hosted on eBay will be deleted unless you have a Picture Manager subscription.
	 * @return string 'Close'
	 */
	const VALUE_CLOSE = 'Close';
	/**
	 * Constant for value 'Basic'
	 * Meta informations :
	 * 	- documentation : Basic level subscription.
	 * @return string 'Basic'
	 */
	const VALUE_BASIC = 'Basic';
	/**
	 * Constant for value 'Featured'
	 * Meta informations :
	 * 	- documentation : Featured level subscription.
	 * @return string 'Featured'
	 */
	const VALUE_FEATURED = 'Featured';
	/**
	 * Constant for value 'Anchor'
	 * Meta informations :
	 * 	- documentation : Anchor level subscription.
	 * @return string 'Anchor'
	 */
	const VALUE_ANCHOR = 'Anchor';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeStoreSubscriptionLevelCodeType
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
		return in_array($_value,array(self::VALUE_CLOSE,self::VALUE_BASIC,self::VALUE_FEATURED,self::VALUE_ANCHOR,self::VALUE_CUSTOMCODE));
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