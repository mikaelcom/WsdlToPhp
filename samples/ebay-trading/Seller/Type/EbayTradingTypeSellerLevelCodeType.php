<?php
/**
 * Class file for EbayTradingTypeSellerLevelCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerLevelCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellerLevelCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Bronze'
	 * Meta informations :
	 * 	- documentation : Bronze (lowest tier)
	 * @return string 'Bronze'
	 */
	const VALUE_BRONZE = 'Bronze';
	/**
	 * Constant for value 'Silver'
	 * Meta informations :
	 * 	- documentation : Silver (between Bronze and Gold)
	 * @return string 'Silver'
	 */
	const VALUE_SILVER = 'Silver';
	/**
	 * Constant for value 'Gold'
	 * Meta informations :
	 * 	- documentation : Gold (between Silver and Platinum)
	 * @return string 'Gold'
	 */
	const VALUE_GOLD = 'Gold';
	/**
	 * Constant for value 'Platinum'
	 * Meta informations :
	 * 	- documentation : Platinum (between Gold and Titanium)
	 * @return string 'Platinum'
	 */
	const VALUE_PLATINUM = 'Platinum';
	/**
	 * Constant for value 'Titanium'
	 * Meta informations :
	 * 	- documentation : Titanium (highest tier)
	 * @return string 'Titanium'
	 */
	const VALUE_TITANIUM = 'Titanium';
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : Not a PowerSeller (eBay has not yet evaluated your PowerSeller status, or you have not chosen to be a member of the PowerSeller program, or you lost your PowerSeller status due to a policy violation.)
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellerLevelCodeType
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
		return in_array($_value,array(self::VALUE_BRONZE,self::VALUE_SILVER,self::VALUE_GOLD,self::VALUE_PLATINUM,self::VALUE_TITANIUM,self::VALUE_NONE,self::VALUE_CUSTOMCODE));
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