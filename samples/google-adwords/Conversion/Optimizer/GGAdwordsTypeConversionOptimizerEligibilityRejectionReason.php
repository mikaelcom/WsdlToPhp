<?php
/**
 * Class file for GGAdwordsTypeConversionOptimizerEligibilityRejectionReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeConversionOptimizerEligibilityRejectionReason
 * @date 03/07/2012
 */
class GGAdwordsTypeConversionOptimizerEligibilityRejectionReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'CAMPAIGN_IS_NOT_ACTIVE'
	 * Meta informations :
	 * 	- documentation : Campaign is not active
	 * @return string 'CAMPAIGN_IS_NOT_ACTIVE'
	 */
	const VALUE_CAMPAIGN_IS_NOT_ACTIVE = 'CAMPAIGN_IS_NOT_ACTIVE';
	/**
	 * Constant for value 'NOT_CPC_CAMPAIGN'
	 * Meta informations :
	 * 	- documentation : Conversion optimizer is available to only Manual CPC campaign
	 * @return string 'NOT_CPC_CAMPAIGN'
	 */
	const VALUE_NOT_CPC_CAMPAIGN = 'NOT_CPC_CAMPAIGN';
	/**
	 * Constant for value 'CONVERSION_TRACKING_NOT_ENABLED'
	 * Meta informations :
	 * 	- documentation : Conversion tracking is not enabled for the Campaign
	 * @return string 'CONVERSION_TRACKING_NOT_ENABLED'
	 */
	const VALUE_CONVERSION_TRACKING_NOT_ENABLED = 'CONVERSION_TRACKING_NOT_ENABLED';
	/**
	 * Constant for value 'NOT_ENOUGH_CONVERSIONS'
	 * Meta informations :
	 * 	- documentation : The campaign does not meet the requirement to have a sufficient count of conversions.
	 * @return string 'NOT_ENOUGH_CONVERSIONS'
	 */
	const VALUE_NOT_ENOUGH_CONVERSIONS = 'NOT_ENOUGH_CONVERSIONS';
	/**
	 * Constant for value 'UNKNOWN'
	 * @return string 'UNKNOWN'
	 */
	const VALUE_UNKNOWN = 'UNKNOWN';
	/**
	 * Constructor
	 * @return GGAdwordsTypeConversionOptimizerEligibilityRejectionReason
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
		return in_array($_value,array(self::VALUE_CAMPAIGN_IS_NOT_ACTIVE,self::VALUE_NOT_CPC_CAMPAIGN,self::VALUE_CONVERSION_TRACKING_NOT_ENABLED,self::VALUE_NOT_ENOUGH_CONVERSIONS,self::VALUE_UNKNOWN));
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