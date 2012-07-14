<?php
/**
 * Class file for PayPalTypeShippingOptionCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeShippingOptionCodeType
 * @date 14/07/2012
 */
class PayPalTypeShippingOptionCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'SiteOnly'
	 * Meta informations :
	 * 	- documentation : Site only.
	 * @return string 'SiteOnly'
	 */
	const VALUE_SITEONLY = 'SiteOnly';
	/**
	 * Constant for value 'WorldWide'
	 * Meta informations :
	 * 	- documentation : WorldWide.
	 * @return string 'WorldWide'
	 */
	const VALUE_WORLDWIDE = 'WorldWide';
	/**
	 * Constant for value 'SitePlusRegions'
	 * Meta informations :
	 * 	- documentation : SitePlusRegions.
	 * @return string 'SitePlusRegions'
	 */
	const VALUE_SITEPLUSREGIONS = 'SitePlusRegions';
	/**
	 * Constant for value 'WillNotShip'
	 * Meta informations :
	 * 	- documentation : WillNotShip.
	 * @return string 'WillNotShip'
	 */
	const VALUE_WILLNOTSHIP = 'WillNotShip';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeShippingOptionCodeType
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
		return in_array($_value,array(self::VALUE_SITEONLY,self::VALUE_WORLDWIDE,self::VALUE_SITEPLUSREGIONS,self::VALUE_WILLNOTSHIP,self::VALUE_CUSTOMCODE));
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