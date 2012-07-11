<?php
/**
 * Class file for GGAdwordsTypeBiddingTransitionErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeBiddingTransitionErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeBiddingTransitionErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'BID_TO_POSITION_ENABLED'
	 * Meta informations :
	 * 	- documentation : Transition is not allowed since Bid to position is enabled.
	 * @return string 'BID_TO_POSITION_ENABLED'
	 */
	const VALUE_BID_TO_POSITION_ENABLED = 'BID_TO_POSITION_ENABLED';
	/**
	 * Constant for value 'BIDDING_STRATEGY_NOT_AVAILABLE_FOR_ACCOUNT_TYPE'
	 * Meta informations :
	 * 	- documentation : Bidding strategy is not available for the account type.
	 * @return string 'BIDDING_STRATEGY_NOT_AVAILABLE_FOR_ACCOUNT_TYPE'
	 */
	const VALUE_BIDDING_STRATEGY_NOT_AVAILABLE_FOR_ACCOUNT_TYPE = 'BIDDING_STRATEGY_NOT_AVAILABLE_FOR_ACCOUNT_TYPE';
	/**
	 * Constant for value 'BUDGET_OPTIMIZER_IS_ENABLED'
	 * Meta informations :
	 * 	- documentation : Transition is not allowed for budget optimizer campaign.
	 * @return string 'BUDGET_OPTIMIZER_IS_ENABLED'
	 */
	const VALUE_BUDGET_OPTIMIZER_IS_ENABLED = 'BUDGET_OPTIMIZER_IS_ENABLED';
	/**
	 * Constant for value 'CONVERSION_OPTIMIZER_IS_ENABLED'
	 * Meta informations :
	 * 	- documentation : Transition is not allowed for conversion optimizer campaign.
	 * @return string 'CONVERSION_OPTIMIZER_IS_ENABLED'
	 */
	const VALUE_CONVERSION_OPTIMIZER_IS_ENABLED = 'CONVERSION_OPTIMIZER_IS_ENABLED';
	/**
	 * Constant for value 'CONVERSION_TRACKING_NOT_ENABLED'
	 * Meta informations :
	 * 	- documentation : Conversion tracking is not enabled for the campaign for VBB transition.
	 * @return string 'CONVERSION_TRACKING_NOT_ENABLED'
	 */
	const VALUE_CONVERSION_TRACKING_NOT_ENABLED = 'CONVERSION_TRACKING_NOT_ENABLED';
	/**
	 * Constant for value 'CONVERSION_TRACKING_NOT_AVAILABLE_FOR_ACCOUNT_TYPE'
	 * Meta informations :
	 * 	- documentation : Conversion tracking is not available for the account type.
	 * @return string 'CONVERSION_TRACKING_NOT_AVAILABLE_FOR_ACCOUNT_TYPE'
	 */
	const VALUE_CONVERSION_TRACKING_NOT_AVAILABLE_FOR_ACCOUNT_TYPE = 'CONVERSION_TRACKING_NOT_AVAILABLE_FOR_ACCOUNT_TYPE';
	/**
	 * Constant for value 'USE_POSITION_PREFERENCE_IN_MANUALCPC_INSTEAD_TO_DISABLE_POSITION_PREFERENCE'
	 * Meta informations :
	 * 	- documentation : Disable position preference by setting the position preference off on Campaign.
	 * @return string 'USE_POSITION_PREFERENCE_IN_MANUALCPC_INSTEAD_TO_DISABLE_POSITION_PREFERENCE'
	 */
	const VALUE_USE_POSITION_PREFERENCE_IN_MANUALCPC_INSTEAD_TO_DISABLE_POSITION_PREFERENCE = 'USE_POSITION_PREFERENCE_IN_MANUALCPC_INSTEAD_TO_DISABLE_POSITION_PREFERENCE';
	/**
	 * Constant for value 'INVALID_BID'
	 * Meta informations :
	 * 	- documentation : Explicit bid is invalid for the transition
	 * @return string 'INVALID_BID'
	 */
	const VALUE_INVALID_BID = 'INVALID_BID';
	/**
	 * Constant for value 'CANNOT_SET_EXPLICIT_BID'
	 * Meta informations :
	 * 	- documentation : Cannot set explicit bid for adgroups for transition e.g. ManualCPC from BudgetOptimizer, it takes the proxy bids.
	 * @return string 'CANNOT_SET_EXPLICIT_BID'
	 */
	const VALUE_CANNOT_SET_EXPLICIT_BID = 'CANNOT_SET_EXPLICIT_BID';
	/**
	 * Constant for value 'EXPLICIT_BID_REQUIRED_FOR_TRANSITION'
	 * Meta informations :
	 * 	- documentation : Explicit bid is required for bidding transition e.g. ManualCPC <-> ManualCPM
	 * @return string 'EXPLICIT_BID_REQUIRED_FOR_TRANSITION'
	 */
	const VALUE_EXPLICIT_BID_REQUIRED_FOR_TRANSITION = 'EXPLICIT_BID_REQUIRED_FOR_TRANSITION';
	/**
	 * Constant for value 'EXPLICIT_BID_TYPE_DOES_NOT_MATCH_CAMPAIGN_BIDDING_STRATEGY'
	 * Meta informations :
	 * 	- documentation : Explicit bid specified for the bidding transition should match the bidding strategy, the campaign is transitioning to.
	 * @return string 'EXPLICIT_BID_TYPE_DOES_NOT_MATCH_CAMPAIGN_BIDDING_STRATEGY'
	 */
	const VALUE_EXPLICIT_BID_TYPE_DOES_NOT_MATCH_CAMPAIGN_BIDDING_STRATEGY = 'EXPLICIT_BID_TYPE_DOES_NOT_MATCH_CAMPAIGN_BIDDING_STRATEGY';
	/**
	 * Constant for value 'MISSING_REQUIRED_BID'
	 * Meta informations :
	 * 	- documentation : The required bid for transition is missing
	 * @return string 'MISSING_REQUIRED_BID'
	 */
	const VALUE_MISSING_REQUIRED_BID = 'MISSING_REQUIRED_BID';
	/**
	 * Constant for value 'INVALID_STATUS'
	 * Meta informations :
	 * 	- documentation : Campaign has invalid status, it is deleted or suggested
	 * @return string 'INVALID_STATUS'
	 */
	const VALUE_INVALID_STATUS = 'INVALID_STATUS';
	/**
	 * Constant for value 'IS_CPM_CAMPAIGN'
	 * Meta informations :
	 * 	- documentation : Transition is not allowed since campaign is a CPM campaign.
	 * @return string 'IS_CPM_CAMPAIGN'
	 */
	const VALUE_IS_CPM_CAMPAIGN = 'IS_CPM_CAMPAIGN';
	/**
	 * Constant for value 'IS_PERCENT_CPA_CAMPAIGN'
	 * Meta informations :
	 * 	- documentation : Transition is not allowed since campaign is a percent CPA campaign.
	 * @return string 'IS_PERCENT_CPA_CAMPAIGN'
	 */
	const VALUE_IS_PERCENT_CPA_CAMPAIGN = 'IS_PERCENT_CPA_CAMPAIGN';
	/**
	 * Constant for value 'NOT_THE_PREVIOUS_BIDDING_STRATEGY'
	 * Meta informations :
	 * 	- documentation : In case of budget optimizer, the only transition allowed is a switch to the previous strategy.
	 * @return string 'NOT_THE_PREVIOUS_BIDDING_STRATEGY'
	 */
	const VALUE_NOT_THE_PREVIOUS_BIDDING_STRATEGY = 'NOT_THE_PREVIOUS_BIDDING_STRATEGY';
	/**
	 * Constant for value 'NOT_ENOUGH_CONVERSION_DATA'
	 * Meta informations :
	 * 	- documentation : Not enough right kind of data required for conversion or not enough data in last 3 days suggesting the campaign is not stable enough to enter into conversion optimizer.
	 * @return string 'NOT_ENOUGH_CONVERSION_DATA'
	 */
	const VALUE_NOT_ENOUGH_CONVERSION_DATA = 'NOT_ENOUGH_CONVERSION_DATA';
	/**
	 * Constant for value 'NOT_ENOUGH_CONVERSIONS'
	 * Meta informations :
	 * 	- documentation : Not enough conversions tracked for VBB transitions.
	 * @return string 'NOT_ENOUGH_CONVERSIONS'
	 */
	const VALUE_NOT_ENOUGH_CONVERSIONS = 'NOT_ENOUGH_CONVERSIONS';
	/**
	 * Constant for value 'OPTED_IN_SEARCH'
	 * Meta informations :
	 * 	- documentation : Campaign is on search network - so can not switch to CPM.
	 * @return string 'OPTED_IN_SEARCH'
	 */
	const VALUE_OPTED_IN_SEARCH = 'OPTED_IN_SEARCH';
	/**
	 * Constant for value 'PROXY_BIDDING_ON'
	 * Meta informations :
	 * 	- documentation : Proxy bidding is on.
	 * @return string 'PROXY_BIDDING_ON'
	 */
	const VALUE_PROXY_BIDDING_ON = 'PROXY_BIDDING_ON';
	/**
	 * Constant for value 'SITE_REMNANT_RESERVATION_ALLOWED'
	 * Meta informations :
	 * 	- documentation : Can not switch to manual CPC if campaign allows site remnant reservation bid type.
	 * @return string 'SITE_REMNANT_RESERVATION_ALLOWED'
	 */
	const VALUE_SITE_REMNANT_RESERVATION_ALLOWED = 'SITE_REMNANT_RESERVATION_ALLOWED';
	/**
	 * Constant for value 'TRANSITION_TO_ITSELF'
	 * Meta informations :
	 * 	- documentation : Transition to itself is not allowed.
	 * @return string 'TRANSITION_TO_ITSELF'
	 */
	const VALUE_TRANSITION_TO_ITSELF = 'TRANSITION_TO_ITSELF';
	/**
	 * Constant for value 'UNKNOWN_BIDDING_STRATEGY'
	 * Meta informations :
	 * 	- documentation : Unknown Bidding strategy
	 * @return string 'UNKNOWN_BIDDING_STRATEGY'
	 */
	const VALUE_UNKNOWN_BIDDING_STRATEGY = 'UNKNOWN_BIDDING_STRATEGY';
	/**
	 * Constant for value 'UNSUPPORTED_TRANSITION'
	 * Meta informations :
	 * 	- documentation : Transition is not supported.
	 * @return string 'UNSUPPORTED_TRANSITION'
	 */
	const VALUE_UNSUPPORTED_TRANSITION = 'UNSUPPORTED_TRANSITION';
	/**
	 * Constant for value 'VCG_ENABLED'
	 * Meta informations :
	 * 	- documentation : Transition not allowed since VCG is enabled.
	 * @return string 'VCG_ENABLED'
	 */
	const VALUE_VCG_ENABLED = 'VCG_ENABLED';
	/**
	 * Constant for value 'BIDDING_TRANSITION_FAILED'
	 * Meta informations :
	 * 	- documentation : Bidding transition failed. This is a default bidding transition error in case no other error matches. Please use a specific error.
	 * @return string 'BIDDING_TRANSITION_FAILED'
	 */
	const VALUE_BIDDING_TRANSITION_FAILED = 'BIDDING_TRANSITION_FAILED';
	/**
	 * Constant for value 'ACCELERATED_DELIVERY_NOT_SUPPORTED_FOR_BUDGET_OPTIMIZER'
	 * Meta informations :
	 * 	- documentation : Accelerated delivery method is not supported for budget optimizer.
	 * @return string 'ACCELERATED_DELIVERY_NOT_SUPPORTED_FOR_BUDGET_OPTIMIZER'
	 */
	const VALUE_ACCELERATED_DELIVERY_NOT_SUPPORTED_FOR_BUDGET_OPTIMIZER = 'ACCELERATED_DELIVERY_NOT_SUPPORTED_FOR_BUDGET_OPTIMIZER';
	/**
	 * Constant for value 'HAS_ACTIVE_EXPERIMENT'
	 * Meta informations :
	 * 	- documentation : Bidding transition is prohibited for campaigns having an active experiment
	 * @return string 'HAS_ACTIVE_EXPERIMENT'
	 */
	const VALUE_HAS_ACTIVE_EXPERIMENT = 'HAS_ACTIVE_EXPERIMENT';
	/**
	 * Constant for value 'INCOMPATIBLE_WITH_CAMPAIGN_SETTING'
	 * Meta informations :
	 * 	- documentation : Target bidding strategy is incompatible with a campaign setting.
	 * @return string 'INCOMPATIBLE_WITH_CAMPAIGN_SETTING'
	 */
	const VALUE_INCOMPATIBLE_WITH_CAMPAIGN_SETTING = 'INCOMPATIBLE_WITH_CAMPAIGN_SETTING';
	/**
	 * Constructor
	 * @return GGAdwordsTypeBiddingTransitionErrorReason
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
		return in_array($_value,array(self::VALUE_BID_TO_POSITION_ENABLED,self::VALUE_BIDDING_STRATEGY_NOT_AVAILABLE_FOR_ACCOUNT_TYPE,self::VALUE_BUDGET_OPTIMIZER_IS_ENABLED,self::VALUE_CONVERSION_OPTIMIZER_IS_ENABLED,self::VALUE_CONVERSION_TRACKING_NOT_ENABLED,self::VALUE_CONVERSION_TRACKING_NOT_AVAILABLE_FOR_ACCOUNT_TYPE,self::VALUE_USE_POSITION_PREFERENCE_IN_MANUALCPC_INSTEAD_TO_DISABLE_POSITION_PREFERENCE,self::VALUE_INVALID_BID,self::VALUE_CANNOT_SET_EXPLICIT_BID,self::VALUE_EXPLICIT_BID_REQUIRED_FOR_TRANSITION,self::VALUE_EXPLICIT_BID_TYPE_DOES_NOT_MATCH_CAMPAIGN_BIDDING_STRATEGY,self::VALUE_MISSING_REQUIRED_BID,self::VALUE_INVALID_STATUS,self::VALUE_IS_CPM_CAMPAIGN,self::VALUE_IS_PERCENT_CPA_CAMPAIGN,self::VALUE_NOT_THE_PREVIOUS_BIDDING_STRATEGY,self::VALUE_NOT_ENOUGH_CONVERSION_DATA,self::VALUE_NOT_ENOUGH_CONVERSIONS,self::VALUE_OPTED_IN_SEARCH,self::VALUE_PROXY_BIDDING_ON,self::VALUE_SITE_REMNANT_RESERVATION_ALLOWED,self::VALUE_TRANSITION_TO_ITSELF,self::VALUE_UNKNOWN_BIDDING_STRATEGY,self::VALUE_UNSUPPORTED_TRANSITION,self::VALUE_VCG_ENABLED,self::VALUE_BIDDING_TRANSITION_FAILED,self::VALUE_ACCELERATED_DELIVERY_NOT_SUPPORTED_FOR_BUDGET_OPTIMIZER,self::VALUE_HAS_ACTIVE_EXPERIMENT,self::VALUE_INCOMPATIBLE_WITH_CAMPAIGN_SETTING));
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