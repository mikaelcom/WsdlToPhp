<?php
/**
 * Class file for GGAdwordsTypeGeoTargetTypeSettingNegativeGeoTargetType
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeGeoTargetTypeSettingNegativeGeoTargetType
 * @date 03/07/2012
 */
class GGAdwordsTypeGeoTargetTypeSettingNegativeGeoTargetType extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'DONT_CARE'
	 * Meta informations :
	 * 	- documentation : Specifies that a user is excluded from seeing the ad if either their AOI or their LOP matches the geo target.
	 * @return string 'DONT_CARE'
	 */
	const VALUE_DONT_CARE = 'DONT_CARE';
	/**
	 * Constant for value 'LOCATION_OF_PRESENCE'
	 * Meta informations :
	 * 	- documentation : Specifies that a user is excluded from seeing the ad only if their LOP matches the geo target.
	 * @return string 'LOCATION_OF_PRESENCE'
	 */
	const VALUE_LOCATION_OF_PRESENCE = 'LOCATION_OF_PRESENCE';
	/**
	 * Constructor
	 * @return GGAdwordsTypeGeoTargetTypeSettingNegativeGeoTargetType
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
		return in_array($_value,array(self::VALUE_DONT_CARE,self::VALUE_LOCATION_OF_PRESENCE));
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