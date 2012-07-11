<?php
/**
 * Class file for GGAdwordsTypeEntityCountLimitExceededReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeEntityCountLimitExceededReason
 * @date 03/07/2012
 */
class GGAdwordsTypeEntityCountLimitExceededReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'ACCOUNT_LIMIT'
	 * @return string 'ACCOUNT_LIMIT'
	 */
	const VALUE_ACCOUNT_LIMIT = 'ACCOUNT_LIMIT';
	/**
	 * Constant for value 'CAMPAIGN_LIMIT'
	 * @return string 'CAMPAIGN_LIMIT'
	 */
	const VALUE_CAMPAIGN_LIMIT = 'CAMPAIGN_LIMIT';
	/**
	 * Constant for value 'ADGROUP_LIMIT'
	 * @return string 'ADGROUP_LIMIT'
	 */
	const VALUE_ADGROUP_LIMIT = 'ADGROUP_LIMIT';
	/**
	 * Constant for value 'ADGROUP_TEXT_AD_LIMIT'
	 * Meta informations :
	 * 	- documentation : Specifies max number of ads not intended for Display Network; applies to MobileAd, TextAd, TemplateAd (text templates only).
	 * @return string 'ADGROUP_TEXT_AD_LIMIT'
	 */
	const VALUE_ADGROUP_TEXT_AD_LIMIT = 'ADGROUP_TEXT_AD_LIMIT';
	/**
	 * Constant for value 'ADGROUP_DISPLAY_AD_LIMIT'
	 * Meta informations :
	 * 	- documentation : Specifies max number of Display Network ads; applies to ImageAd, MobileImageAd, TemplateAd (except text templates).
	 * @return string 'ADGROUP_DISPLAY_AD_LIMIT'
	 */
	const VALUE_ADGROUP_DISPLAY_AD_LIMIT = 'ADGROUP_DISPLAY_AD_LIMIT';
	/**
	 * Constant for value 'UNKNOWN'
	 * Meta informations :
	 * 	- documentation : Specific limit that has been exceeded is unknown (the client may be of an older version than the server).
	 * @return string 'UNKNOWN'
	 */
	const VALUE_UNKNOWN = 'UNKNOWN';
	/**
	 * Constructor
	 * @return GGAdwordsTypeEntityCountLimitExceededReason
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
		return in_array($_value,array(self::VALUE_ACCOUNT_LIMIT,self::VALUE_CAMPAIGN_LIMIT,self::VALUE_ADGROUP_LIMIT,self::VALUE_ADGROUP_TEXT_AD_LIMIT,self::VALUE_ADGROUP_DISPLAY_AD_LIMIT,self::VALUE_UNKNOWN));
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