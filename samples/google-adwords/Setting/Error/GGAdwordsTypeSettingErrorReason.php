<?php
/**
 * Class file for GGAdwordsTypeSettingErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeSettingErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeSettingErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'DUPLICATE_SETTING_TYPE'
	 * Meta informations :
	 * 	- documentation : The campaign already has a setting of the type that is being added.
	 * @return string 'DUPLICATE_SETTING_TYPE'
	 */
	const VALUE_DUPLICATE_SETTING_TYPE = 'DUPLICATE_SETTING_TYPE';
	/**
	 * Constant for value 'SETTING_TYPE_IS_NOT_AVAILABLE'
	 * Meta informations :
	 * 	- documentation : The campaign setting is not available for this AdWords account.
	 * @return string 'SETTING_TYPE_IS_NOT_AVAILABLE'
	 */
	const VALUE_SETTING_TYPE_IS_NOT_AVAILABLE = 'SETTING_TYPE_IS_NOT_AVAILABLE';
	/**
	 * Constant for value 'SETTING_TYPE_IS_NOT_COMPATIBLE_WITH_CAMPAIGN'
	 * Meta informations :
	 * 	- documentation : The setting is not compatible with the campaign.
	 * @return string 'SETTING_TYPE_IS_NOT_COMPATIBLE_WITH_CAMPAIGN'
	 */
	const VALUE_SETTING_TYPE_IS_NOT_COMPATIBLE_WITH_CAMPAIGN = 'SETTING_TYPE_IS_NOT_COMPATIBLE_WITH_CAMPAIGN';
	/**
	 * Constant for value 'TARGETING_SETTING_REQUIRES_CAMPAIGN_TARGET_RESTRICT_SETTING'
	 * Meta informations :
	 * 	- documentation : TargetingSetting for AdGroups requires a TargetRestrictSetting be added to the campaign with useAdGroup set to true.
	 * @return string 'TARGETING_SETTING_REQUIRES_CAMPAIGN_TARGET_RESTRICT_SETTING'
	 */
	const VALUE_TARGETING_SETTING_REQUIRES_CAMPAIGN_TARGET_RESTRICT_SETTING = 'TARGETING_SETTING_REQUIRES_CAMPAIGN_TARGET_RESTRICT_SETTING';
	/**
	 * Constant for value 'TARGET_RESTRICT_SETTING_CANNOT_BE_REVERSED'
	 * Meta informations :
	 * 	- documentation : TargetRestrictSetting useAdGroup cannot be reversed from true back to false.
	 * @return string 'TARGET_RESTRICT_SETTING_CANNOT_BE_REVERSED'
	 */
	const VALUE_TARGET_RESTRICT_SETTING_CANNOT_BE_REVERSED = 'TARGET_RESTRICT_SETTING_CANNOT_BE_REVERSED';
	/**
	 * Constant for value 'TARGETING_SETTING_CONTAINS_INVALID_CRITERION_TYPE_GROUP'
	 * Meta informations :
	 * 	- documentation : The supplied TargetingSetting contains an invalid CriterionTypeGroup. See {@link CriterionTypeGroup} documentation for CriterionTypeGroups allowed in Campaign or AdGroup TargetingSettings.
	 * @return string 'TARGETING_SETTING_CONTAINS_INVALID_CRITERION_TYPE_GROUP'
	 */
	const VALUE_TARGETING_SETTING_CONTAINS_INVALID_CRITERION_TYPE_GROUP = 'TARGETING_SETTING_CONTAINS_INVALID_CRITERION_TYPE_GROUP';
	/**
	 * Constant for value 'UNKNOWN'
	 * Meta informations :
	 * 	- documentation : Unspecified campaign setting error. <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
	 * @return string 'UNKNOWN'
	 */
	const VALUE_UNKNOWN = 'UNKNOWN';
	/**
	 * Constructor
	 * @return GGAdwordsTypeSettingErrorReason
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
		return in_array($_value,array(self::VALUE_DUPLICATE_SETTING_TYPE,self::VALUE_SETTING_TYPE_IS_NOT_AVAILABLE,self::VALUE_SETTING_TYPE_IS_NOT_COMPATIBLE_WITH_CAMPAIGN,self::VALUE_TARGETING_SETTING_REQUIRES_CAMPAIGN_TARGET_RESTRICT_SETTING,self::VALUE_TARGET_RESTRICT_SETTING_CANNOT_BE_REVERSED,self::VALUE_TARGETING_SETTING_CONTAINS_INVALID_CRITERION_TYPE_GROUP,self::VALUE_UNKNOWN));
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