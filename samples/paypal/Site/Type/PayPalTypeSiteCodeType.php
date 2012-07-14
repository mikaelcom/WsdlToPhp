<?php
/**
 * Class file for PayPalTypeSiteCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSiteCodeType
 * @date 14/07/2012
 */
class PayPalTypeSiteCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'US'
	 * Meta informations :
	 * 	- documentation : USA
	 * @return string 'US'
	 */
	const VALUE_US = 'US';
	/**
	 * Constant for value 'Canada'
	 * Meta informations :
	 * 	- documentation : Canada
	 * @return string 'Canada'
	 */
	const VALUE_CANADA = 'Canada';
	/**
	 * Constant for value 'UK'
	 * Meta informations :
	 * 	- documentation : United Kingdom
	 * @return string 'UK'
	 */
	const VALUE_UK = 'UK';
	/**
	 * Constant for value 'Australia'
	 * Meta informations :
	 * 	- documentation : Australia
	 * @return string 'Australia'
	 */
	const VALUE_AUSTRALIA = 'Australia';
	/**
	 * Constant for value 'Austria'
	 * Meta informations :
	 * 	- documentation : Austria
	 * @return string 'Austria'
	 */
	const VALUE_AUSTRIA = 'Austria';
	/**
	 * Constant for value 'Belgium_French'
	 * Meta informations :
	 * 	- documentation : Belgium (French)
	 * @return string 'Belgium_French'
	 */
	const VALUE_BELGIUM_FRENCH = 'Belgium_French';
	/**
	 * Constant for value 'France'
	 * Meta informations :
	 * 	- documentation : France
	 * @return string 'France'
	 */
	const VALUE_FRANCE = 'France';
	/**
	 * Constant for value 'Germany'
	 * Meta informations :
	 * 	- documentation : Germany
	 * @return string 'Germany'
	 */
	const VALUE_GERMANY = 'Germany';
	/**
	 * Constant for value 'Italy'
	 * Meta informations :
	 * 	- documentation : Italy
	 * @return string 'Italy'
	 */
	const VALUE_ITALY = 'Italy';
	/**
	 * Constant for value 'Belgium_Dutch'
	 * Meta informations :
	 * 	- documentation : Belgium (Dutch)
	 * @return string 'Belgium_Dutch'
	 */
	const VALUE_BELGIUM_DUTCH = 'Belgium_Dutch';
	/**
	 * Constant for value 'Netherlands'
	 * Meta informations :
	 * 	- documentation : Netherlands
	 * @return string 'Netherlands'
	 */
	const VALUE_NETHERLANDS = 'Netherlands';
	/**
	 * Constant for value 'Spain'
	 * Meta informations :
	 * 	- documentation : Spain
	 * @return string 'Spain'
	 */
	const VALUE_SPAIN = 'Spain';
	/**
	 * Constant for value 'Switzerland'
	 * Meta informations :
	 * 	- documentation : Switzerland
	 * @return string 'Switzerland'
	 */
	const VALUE_SWITZERLAND = 'Switzerland';
	/**
	 * Constant for value 'Taiwan'
	 * Meta informations :
	 * 	- documentation : Taiwan
	 * @return string 'Taiwan'
	 */
	const VALUE_TAIWAN = 'Taiwan';
	/**
	 * Constant for value 'eBayMotors'
	 * Meta informations :
	 * 	- documentation : eBay Motors
	 * @return string 'eBayMotors'
	 */
	const VALUE_EBAYMOTORS = 'eBayMotors';
	/**
	 * Constant for value 'HongKong'
	 * Meta informations :
	 * 	- documentation : Hong Kong
	 * @return string 'HongKong'
	 */
	const VALUE_HONGKONG = 'HongKong';
	/**
	 * Constant for value 'Singapore'
	 * Meta informations :
	 * 	- documentation : Singapore
	 * @return string 'Singapore'
	 */
	const VALUE_SINGAPORE = 'Singapore';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeSiteCodeType
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
		return in_array($_value,array(self::VALUE_US,self::VALUE_CANADA,self::VALUE_UK,self::VALUE_AUSTRALIA,self::VALUE_AUSTRIA,self::VALUE_BELGIUM_FRENCH,self::VALUE_FRANCE,self::VALUE_GERMANY,self::VALUE_ITALY,self::VALUE_BELGIUM_DUTCH,self::VALUE_NETHERLANDS,self::VALUE_SPAIN,self::VALUE_SWITZERLAND,self::VALUE_TAIWAN,self::VALUE_EBAYMOTORS,self::VALUE_HONGKONG,self::VALUE_SINGAPORE,self::VALUE_CUSTOMCODE));
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