<?php
/**
 * Class file for PayPalTypeShippingRegionCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeShippingRegionCodeType
 * @date 14/07/2012
 */
class PayPalTypeShippingRegionCodeType extends PayPalWsdlClass
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
	 * 	- documentation : Carribbean
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
	 * 	- documentation : LatinAmerica
	 * @return string 'LatinAmerica'
	 */
	const VALUE_LATINAMERICA = 'LatinAmerica';
	/**
	 * Constant for value 'MiddleEast'
	 * Meta informations :
	 * 	- documentation : MiddleEast
	 * @return string 'MiddleEast'
	 */
	const VALUE_MIDDLEEAST = 'MiddleEast';
	/**
	 * Constant for value 'NorthAmerica'
	 * Meta informations :
	 * 	- documentation : NorthAmerica
	 * @return string 'NorthAmerica'
	 */
	const VALUE_NORTHAMERICA = 'NorthAmerica';
	/**
	 * Constant for value 'Oceania'
	 * Meta informations :
	 * 	- documentation : Oceania (i.e., Pacific region other than Asia)
	 * @return string 'Oceania'
	 */
	const VALUE_OCEANIA = 'Oceania';
	/**
	 * Constant for value 'SouthAmerica'
	 * Meta informations :
	 * 	- documentation : SouthAmerica
	 * @return string 'SouthAmerica'
	 */
	const VALUE_SOUTHAMERICA = 'SouthAmerica';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeShippingRegionCodeType
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
		return in_array($_value,array(self::VALUE_AFRICA,self::VALUE_ASIA,self::VALUE_CARIBBEAN,self::VALUE_EUROPE,self::VALUE_LATINAMERICA,self::VALUE_MIDDLEEAST,self::VALUE_NORTHAMERICA,self::VALUE_OCEANIA,self::VALUE_SOUTHAMERICA,self::VALUE_CUSTOMCODE));
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