<?php
/**
 * Class file for GGAdwordsTypeGeoTargetTypeSettingPositiveGeoTargetType
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeGeoTargetTypeSettingPositiveGeoTargetType
 * @date 03/07/2012
 */
class GGAdwordsTypeGeoTargetTypeSettingPositiveGeoTargetType extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'DONT_CARE'
	 * Meta informations :
	 * 	- documentation : Specifies that either AOI or LOP may trigger the ad.
	 * @return string 'DONT_CARE'
	 */
	const VALUE_DONT_CARE = 'DONT_CARE';
	/**
	 * Constant for value 'AREA_OF_INTEREST'
	 * Meta informations :
	 * 	- documentation : Specifies that the ad is triggered only if the user's AOI matches.
	 * @return string 'AREA_OF_INTEREST'
	 */
	const VALUE_AREA_OF_INTEREST = 'AREA_OF_INTEREST';
	/**
	 * Constant for value 'LOCATION_OF_PRESENCE'
	 * Meta informations :
	 * 	- documentation : Specifies that the ad is triggered only if the user's LOP matches.
	 * @return string 'LOCATION_OF_PRESENCE'
	 */
	const VALUE_LOCATION_OF_PRESENCE = 'LOCATION_OF_PRESENCE';
	/**
	 * Constructor
	 * @return GGAdwordsTypeGeoTargetTypeSettingPositiveGeoTargetType
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
		return in_array($_value,array(self::VALUE_DONT_CARE,self::VALUE_AREA_OF_INTEREST,self::VALUE_LOCATION_OF_PRESENCE));
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