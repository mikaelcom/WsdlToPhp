<?php
/**
 * Class file for GGAdwordsTypeCampaignErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeCampaignErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeCampaignErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'AFTER_MAXIMUM_ALLOWABLE_DATE'
	 * Meta informations :
	 * 	- documentation : A date was used that is past the system "last" date.
	 * @return string 'AFTER_MAXIMUM_ALLOWABLE_DATE'
	 */
	const VALUE_AFTER_MAXIMUM_ALLOWABLE_DATE = 'AFTER_MAXIMUM_ALLOWABLE_DATE';
	/**
	 * Constant for value 'CANNOT_GO_BACK_TO_INCOMPLETE'
	 * Meta informations :
	 * 	- documentation : A complete campaign cannot go back to being incomplete
	 * @return string 'CANNOT_GO_BACK_TO_INCOMPLETE'
	 */
	const VALUE_CANNOT_GO_BACK_TO_INCOMPLETE = 'CANNOT_GO_BACK_TO_INCOMPLETE';
	/**
	 * Constant for value 'CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED'
	 * Meta informations :
	 * 	- documentation : Trying to change start date on a campaign that has started.
	 * @return string 'CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED'
	 */
	const VALUE_CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED = 'CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED';
	/**
	 * Constant for value 'CANNOT_SET_ACCELERATED_DELIVERY_FOR_BUDGET_OPTIMIZER_CAMPAIGN'
	 * Meta informations :
	 * 	- documentation : An accelerated delivery method was specified for a budget optimizer campaign.
	 * @return string 'CANNOT_SET_ACCELERATED_DELIVERY_FOR_BUDGET_OPTIMIZER_CAMPAIGN'
	 */
	const VALUE_CANNOT_SET_ACCELERATED_DELIVERY_FOR_BUDGET_OPTIMIZER_CAMPAIGN = 'CANNOT_SET_ACCELERATED_DELIVERY_FOR_BUDGET_OPTIMIZER_CAMPAIGN';
	/**
	 * Constant for value 'CANNOT_SET_END_DATE_BEFORE_EXPERIMENT_END_DATE'
	 * Meta informations :
	 * 	- documentation : Trying to modify an end date before an active experiment end date.
	 * @return string 'CANNOT_SET_END_DATE_BEFORE_EXPERIMENT_END_DATE'
	 */
	const VALUE_CANNOT_SET_END_DATE_BEFORE_EXPERIMENT_END_DATE = 'CANNOT_SET_END_DATE_BEFORE_EXPERIMENT_END_DATE';
	/**
	 * Constant for value 'CANNOT_SET_DATE_TO_PAST'
	 * Meta informations :
	 * 	- documentation : Trying to modify a date into the past.
	 * @return string 'CANNOT_SET_DATE_TO_PAST'
	 */
	const VALUE_CANNOT_SET_DATE_TO_PAST = 'CANNOT_SET_DATE_TO_PAST';
	/**
	 * Constant for value 'CANNOT_SET_POSITION_PREFERENCE_IF_NOT_SEARCH_TARGETED'
	 * Meta informations :
	 * 	- documentation : The campaign is not search targeted to enable position preference
	 * @return string 'CANNOT_SET_POSITION_PREFERENCE_IF_NOT_SEARCH_TARGETED'
	 */
	const VALUE_CANNOT_SET_POSITION_PREFERENCE_IF_NOT_SEARCH_TARGETED = 'CANNOT_SET_POSITION_PREFERENCE_IF_NOT_SEARCH_TARGETED';
	/**
	 * Constant for value 'CURRENCY_NOT_VALID_FOR_ACCOUNT'
	 * Meta informations :
	 * 	- documentation : A currency was specified other than the account currency.
	 * @return string 'CURRENCY_NOT_VALID_FOR_ACCOUNT'
	 */
	const VALUE_CURRENCY_NOT_VALID_FOR_ACCOUNT = 'CURRENCY_NOT_VALID_FOR_ACCOUNT';
	/**
	 * Constant for value 'DUPLICATE_CAMPAIGN_NAME'
	 * Meta informations :
	 * 	- documentation : Trying to modify name of campaign to one already assigned to another campaign.
	 * @return string 'DUPLICATE_CAMPAIGN_NAME'
	 */
	const VALUE_DUPLICATE_CAMPAIGN_NAME = 'DUPLICATE_CAMPAIGN_NAME';
	/**
	 * Constant for value 'INCOMPATIBLE_CAMPAIGN_FIELD'
	 * Meta informations :
	 * 	- documentation : Two fields are in conflicting modes.
	 * @return string 'INCOMPATIBLE_CAMPAIGN_FIELD'
	 */
	const VALUE_INCOMPATIBLE_CAMPAIGN_FIELD = 'INCOMPATIBLE_CAMPAIGN_FIELD';
	/**
	 * Constant for value 'INVALID_CAMPAIGN_NAME'
	 * Meta informations :
	 * 	- documentation : Campaign name cannot be used.
	 * @return string 'INVALID_CAMPAIGN_NAME'
	 */
	const VALUE_INVALID_CAMPAIGN_NAME = 'INVALID_CAMPAIGN_NAME';
	/**
	 * Constant for value 'INVALID_AD_SERVING_OPTIMIZATION_STATUS'
	 * Meta informations :
	 * 	- documentation : Given status is invalid.
	 * @return string 'INVALID_AD_SERVING_OPTIMIZATION_STATUS'
	 */
	const VALUE_INVALID_AD_SERVING_OPTIMIZATION_STATUS = 'INVALID_AD_SERVING_OPTIMIZATION_STATUS';
	/**
	 * Constant for value 'KEYWORD_QUOTA_EXCEEDED'
	 * Meta informations :
	 * 	- documentation : Customer keyword quota has been exceeded.
	 * @return string 'KEYWORD_QUOTA_EXCEEDED'
	 */
	const VALUE_KEYWORD_QUOTA_EXCEEDED = 'KEYWORD_QUOTA_EXCEEDED';
	/**
	 * Constant for value 'MAX_IMPRESSIONS_NOT_IN_RANGE'
	 * Meta informations :
	 * 	- documentation : The maximum number of impressions for Frequency Cap should be an integer greater than 0.
	 * @return string 'MAX_IMPRESSIONS_NOT_IN_RANGE'
	 */
	const VALUE_MAX_IMPRESSIONS_NOT_IN_RANGE = 'MAX_IMPRESSIONS_NOT_IN_RANGE';
	/**
	 * Constant for value 'START_DATE_AFTER_END_DATE'
	 * Meta informations :
	 * 	- documentation : The campaign start date was after the campaign end date.
	 * @return string 'START_DATE_AFTER_END_DATE'
	 */
	const VALUE_START_DATE_AFTER_END_DATE = 'START_DATE_AFTER_END_DATE';
	/**
	 * Constant for value 'TIME_UNIT_NOT_SUPPORTED'
	 * Meta informations :
	 * 	- documentation : Only the Day, Week and Month time units are supported.
	 * @return string 'TIME_UNIT_NOT_SUPPORTED'
	 */
	const VALUE_TIME_UNIT_NOT_SUPPORTED = 'TIME_UNIT_NOT_SUPPORTED';
	/**
	 * Constant for value 'USE_BIDDING_TRANSITION_FIELD_INSTEAD_TO_SWITCH_BIDDING_STRATEGY'
	 * Meta informations :
	 * 	- documentation : Bidding strategy field was set to a value other than the current bidding strategy of the campaign
	 * @return string 'USE_BIDDING_TRANSITION_FIELD_INSTEAD_TO_SWITCH_BIDDING_STRATEGY'
	 */
	const VALUE_USE_BIDDING_TRANSITION_FIELD_INSTEAD_TO_SWITCH_BIDDING_STRATEGY = 'USE_BIDDING_TRANSITION_FIELD_INSTEAD_TO_SWITCH_BIDDING_STRATEGY';
	/**
	 * Constant for value 'CANNOT_CHANGE_CAMPAIGN_TYPE'
	 * Meta informations :
	 * 	- documentation : Changing campaignType is not allowed
	 * @return string 'CANNOT_CHANGE_CAMPAIGN_TYPE'
	 */
	const VALUE_CANNOT_CHANGE_CAMPAIGN_TYPE = 'CANNOT_CHANGE_CAMPAIGN_TYPE';
	/**
	 * Constant for value 'INVALID_OPERATION_IF_SERVING_STATUS_HAS_ENDED'
	 * Meta informations :
	 * 	- documentation : Operation not allowed on a campaign whose serving status has ended
	 * @return string 'INVALID_OPERATION_IF_SERVING_STATUS_HAS_ENDED'
	 */
	const VALUE_INVALID_OPERATION_IF_SERVING_STATUS_HAS_ENDED = 'INVALID_OPERATION_IF_SERVING_STATUS_HAS_ENDED';
	/**
	 * Constant for value 'CANNOT_CHANGE_TV_CAMPAIGN'
	 * Meta informations :
	 * 	- documentation : Modifying TV Campaigns is not allowed
	 * @return string 'CANNOT_CHANGE_TV_CAMPAIGN'
	 */
	const VALUE_CANNOT_CHANGE_TV_CAMPAIGN = 'CANNOT_CHANGE_TV_CAMPAIGN';
	/**
	 * Constant for value 'CANNOT_ADD_CAMPAIGN_WITH_CONVERSION_OPTIMIZER_BIDDING_STRATEGY'
	 * Meta informations :
	 * 	- documentation : Cannot add a campaign with conversion optimizer turned on
	 * @return string 'CANNOT_ADD_CAMPAIGN_WITH_CONVERSION_OPTIMIZER_BIDDING_STRATEGY'
	 */
	const VALUE_CANNOT_ADD_CAMPAIGN_WITH_CONVERSION_OPTIMIZER_BIDDING_STRATEGY = 'CANNOT_ADD_CAMPAIGN_WITH_CONVERSION_OPTIMIZER_BIDDING_STRATEGY';
	/**
	 * Constant for value 'CANNOT_SET_BUDGET'
	 * Meta informations :
	 * 	- documentation : Campaigns with percent cpa bidding strategy do not have budgets
	 * @return string 'CANNOT_SET_BUDGET'
	 */
	const VALUE_CANNOT_SET_BUDGET = 'CANNOT_SET_BUDGET';
	/**
	 * Constant for value 'MUST_SPECIFY_KEYWORD_MATCH_SETTINGS'
	 * Meta informations :
	 * 	- documentation : All new campaigns nust specify KeywordMatchSetting
	 * @return string 'MUST_SPECIFY_KEYWORD_MATCH_SETTINGS'
	 */
	const VALUE_MUST_SPECIFY_KEYWORD_MATCH_SETTINGS = 'MUST_SPECIFY_KEYWORD_MATCH_SETTINGS';
	/**
	 * Constant for value 'UNKNOWN'
	 * Meta informations :
	 * 	- documentation : Default error <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
	 * @return string 'UNKNOWN'
	 */
	const VALUE_UNKNOWN = 'UNKNOWN';
	/**
	 * Constructor
	 * @return GGAdwordsTypeCampaignErrorReason
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
		return in_array($_value,array(self::VALUE_AFTER_MAXIMUM_ALLOWABLE_DATE,self::VALUE_CANNOT_GO_BACK_TO_INCOMPLETE,self::VALUE_CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED,self::VALUE_CANNOT_SET_ACCELERATED_DELIVERY_FOR_BUDGET_OPTIMIZER_CAMPAIGN,self::VALUE_CANNOT_SET_END_DATE_BEFORE_EXPERIMENT_END_DATE,self::VALUE_CANNOT_SET_DATE_TO_PAST,self::VALUE_CANNOT_SET_POSITION_PREFERENCE_IF_NOT_SEARCH_TARGETED,self::VALUE_CURRENCY_NOT_VALID_FOR_ACCOUNT,self::VALUE_DUPLICATE_CAMPAIGN_NAME,self::VALUE_INCOMPATIBLE_CAMPAIGN_FIELD,self::VALUE_INVALID_CAMPAIGN_NAME,self::VALUE_INVALID_AD_SERVING_OPTIMIZATION_STATUS,self::VALUE_KEYWORD_QUOTA_EXCEEDED,self::VALUE_MAX_IMPRESSIONS_NOT_IN_RANGE,self::VALUE_START_DATE_AFTER_END_DATE,self::VALUE_TIME_UNIT_NOT_SUPPORTED,self::VALUE_USE_BIDDING_TRANSITION_FIELD_INSTEAD_TO_SWITCH_BIDDING_STRATEGY,self::VALUE_CANNOT_CHANGE_CAMPAIGN_TYPE,self::VALUE_INVALID_OPERATION_IF_SERVING_STATUS_HAS_ENDED,self::VALUE_CANNOT_CHANGE_TV_CAMPAIGN,self::VALUE_CANNOT_ADD_CAMPAIGN_WITH_CONVERSION_OPTIMIZER_BIDDING_STRATEGY,self::VALUE_CANNOT_SET_BUDGET,self::VALUE_MUST_SPECIFY_KEYWORD_MATCH_SETTINGS,self::VALUE_UNKNOWN));
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