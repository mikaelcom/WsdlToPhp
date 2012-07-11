<?php
/**
 * Class file for EbayTradingTypeUnitCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeUnitCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeUnitCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'kg'
	 * Meta informations :
	 * 	- documentation : Kilograms
	 * @return string 'kg'
	 */
	const VALUE_KG = 'kg';
	/**
	 * Constant for value 'gm'
	 * Meta informations :
	 * 	- documentation : Grams
	 * @return string 'gm'
	 */
	const VALUE_GM = 'gm';
	/**
	 * Constant for value 'lbs'
	 * Meta informations :
	 * 	- documentation : Pounds
	 * @return string 'lbs'
	 */
	const VALUE_LBS = 'lbs';
	/**
	 * Constant for value 'oz'
	 * Meta informations :
	 * 	- documentation : Ounces
	 * @return string 'oz'
	 */
	const VALUE_OZ = 'oz';
	/**
	 * Constant for value 'cm'
	 * Meta informations :
	 * 	- documentation : Centimeters
	 * @return string 'cm'
	 */
	const VALUE_CM = 'cm';
	/**
	 * Constant for value 'mm'
	 * Meta informations :
	 * 	- documentation : Milimeters
	 * @return string 'mm'
	 */
	const VALUE_MM = 'mm';
	/**
	 * Constant for value 'inches'
	 * Meta informations :
	 * 	- documentation : Inches
	 * @return string 'inches'
	 */
	const VALUE_INCHES = 'inches';
	/**
	 * Constant for value 'ft'
	 * Meta informations :
	 * 	- documentation : Feet
	 * @return string 'ft'
	 */
	const VALUE_FT = 'ft';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeUnitCodeType
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
		return in_array($_value,array(self::VALUE_KG,self::VALUE_GM,self::VALUE_LBS,self::VALUE_OZ,self::VALUE_CM,self::VALUE_MM,self::VALUE_INCHES,self::VALUE_FT,self::VALUE_CUSTOMCODE));
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