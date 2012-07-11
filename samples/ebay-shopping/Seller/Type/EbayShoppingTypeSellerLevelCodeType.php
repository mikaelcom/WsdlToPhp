<?php
/**
 * Class file for EbayShoppingTypeSellerLevelCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeSellerLevelCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeSellerLevelCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Bronze'
	 * Meta informations :
	 * 	- documentation : (out) Bronze
	 * @return string 'Bronze'
	 */
	const VALUE_BRONZE = 'Bronze';
	/**
	 * Constant for value 'Silver'
	 * Meta informations :
	 * 	- documentation : (out) Silver
	 * @return string 'Silver'
	 */
	const VALUE_SILVER = 'Silver';
	/**
	 * Constant for value 'Gold'
	 * Meta informations :
	 * 	- documentation : (out) Gold
	 * @return string 'Gold'
	 */
	const VALUE_GOLD = 'Gold';
	/**
	 * Constant for value 'Platinum'
	 * Meta informations :
	 * 	- documentation : (out) Platinum
	 * @return string 'Platinum'
	 */
	const VALUE_PLATINUM = 'Platinum';
	/**
	 * Constant for value 'Titanium'
	 * Meta informations :
	 * 	- documentation : (out) Titanium
	 * @return string 'Titanium'
	 */
	const VALUE_TITANIUM = 'Titanium';
	/**
	 * Constant for value 'Diamond'
	 * Meta informations :
	 * 	- documentation : (out) Diamond
	 * @return string 'Diamond'
	 */
	const VALUE_DIAMOND = 'Diamond';
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : (out) None
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypeSellerLevelCodeType
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
		return in_array($_value,array(self::VALUE_BRONZE,self::VALUE_SILVER,self::VALUE_GOLD,self::VALUE_PLATINUM,self::VALUE_TITANIUM,self::VALUE_DIAMOND,self::VALUE_NONE,self::VALUE_CUSTOMCODE));
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