<?php
/**
 * Class file for EbayTradingTypeShippingRegionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShippingRegionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeShippingRegionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Africa'
	 * Meta informations :
	 * 	- documentation : Africa
	 * @return string 'Africa'
	 */
	const VALUE_AFRICA = 'Africa';
	/**
	 * Constant for value 'Asia'
	 * Meta informations :
	 * 	- documentation : Asia
	 * @return string 'Asia'
	 */
	const VALUE_ASIA = 'Asia';
	/**
	 * Constant for value 'Caribbean'
	 * Meta informations :
	 * 	- documentation : Caribbean
	 * @return string 'Caribbean'
	 */
	const VALUE_CARIBBEAN = 'Caribbean';
	/**
	 * Constant for value 'Europe'
	 * Meta informations :
	 * 	- documentation : Europe
	 * @return string 'Europe'
	 */
	const VALUE_EUROPE = 'Europe';
	/**
	 * Constant for value 'LatinAmerica'
	 * Meta informations :
	 * 	- documentation : Latin America
	 * @return string 'LatinAmerica'
	 */
	const VALUE_LATINAMERICA = 'LatinAmerica';
	/**
	 * Constant for value 'MiddleEast'
	 * Meta informations :
	 * 	- documentation : Middle East
	 * @return string 'MiddleEast'
	 */
	const VALUE_MIDDLEEAST = 'MiddleEast';
	/**
	 * Constant for value 'NorthAmerica'
	 * Meta informations :
	 * 	- documentation : North America
	 * @return string 'NorthAmerica'
	 */
	const VALUE_NORTHAMERICA = 'NorthAmerica';
	/**
	 * Constant for value 'Oceania'
	 * Meta informations :
	 * 	- documentation : Oceania (Pacific region other than Asia)
	 * @return string 'Oceania'
	 */
	const VALUE_OCEANIA = 'Oceania';
	/**
	 * Constant for value 'SouthAmerica'
	 * Meta informations :
	 * 	- documentation : South America
	 * @return string 'SouthAmerica'
	 */
	const VALUE_SOUTHAMERICA = 'SouthAmerica';
	/**
	 * Constant for value 'EuropeanUnion'
	 * Meta informations :
	 * 	- documentation : European Union
	 * @return string 'EuropeanUnion'
	 */
	const VALUE_EUROPEANUNION = 'EuropeanUnion';
	/**
	 * Constant for value 'WillNotShip'
	 * Meta informations :
	 * 	- documentation : Seller will not ship the item.
	 * @return string 'WillNotShip'
	 */
	const VALUE_WILLNOTSHIP = 'WillNotShip';
	/**
	 * Constant for value 'Worldwide'
	 * Meta informations :
	 * 	- documentation : Seller has specified Worldwide or eBay has determined that the specified regions add up to Worldwide.
	 * @return string 'Worldwide'
	 */
	const VALUE_WORLDWIDE = 'Worldwide';
	/**
	 * Constant for value 'Americas'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'Americas'
	 */
	const VALUE_AMERICAS = 'Americas';
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : 
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
	 * @return EbayTradingTypeShippingRegionCodeType
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
		return in_array($_value,array(self::VALUE_AFRICA,self::VALUE_ASIA,self::VALUE_CARIBBEAN,self::VALUE_EUROPE,self::VALUE_LATINAMERICA,self::VALUE_MIDDLEEAST,self::VALUE_NORTHAMERICA,self::VALUE_OCEANIA,self::VALUE_SOUTHAMERICA,self::VALUE_EUROPEANUNION,self::VALUE_WILLNOTSHIP,self::VALUE_WORLDWIDE,self::VALUE_AMERICAS,self::VALUE_NONE,self::VALUE_CUSTOMCODE));
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