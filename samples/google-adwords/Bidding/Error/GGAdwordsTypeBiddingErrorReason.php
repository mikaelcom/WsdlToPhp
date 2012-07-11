<?php
/**
 * Class file for GGAdwordsTypeBiddingErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeBiddingErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeBiddingErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'BID_AMOUNT_REQUIRED'
	 * Meta informations :
	 * 	- documentation : Bid amount can not be null.
	 * @return string 'BID_AMOUNT_REQUIRED'
	 */
	const VALUE_BID_AMOUNT_REQUIRED = 'BID_AMOUNT_REQUIRED';
	/**
	 * Constant for value 'BID_TOO_SMALL'
	 * Meta informations :
	 * 	- documentation : Bid amount is too small.
	 * @return string 'BID_TOO_SMALL'
	 */
	const VALUE_BID_TOO_SMALL = 'BID_TOO_SMALL';
	/**
	 * Constant for value 'BID_TOO_BIG'
	 * Meta informations :
	 * 	- documentation : Bid amount is too big.
	 * @return string 'BID_TOO_BIG'
	 */
	const VALUE_BID_TOO_BIG = 'BID_TOO_BIG';
	/**
	 * Constant for value 'BID_TOO_MANY_FRACTIONAL_DIGITS'
	 * Meta informations :
	 * 	- documentation : Bid has too many fractional digit precision.
	 * @return string 'BID_TOO_MANY_FRACTIONAL_DIGITS'
	 */
	const VALUE_BID_TOO_MANY_FRACTIONAL_DIGITS = 'BID_TOO_MANY_FRACTIONAL_DIGITS';
	/**
	 * Constant for value 'NON_POSITIVE_BID'
	 * Meta informations :
	 * 	- documentation : Bids must have a positive amount.
	 * @return string 'NON_POSITIVE_BID'
	 */
	const VALUE_NON_POSITIVE_BID = 'NON_POSITIVE_BID';
	/**
	 * Constant for value 'BID_TOO_HIGH_FOR_DAILY_BUDGET'
	 * Meta informations :
	 * 	- documentation : Bid is too high for the daily budget.
	 * @return string 'BID_TOO_HIGH_FOR_DAILY_BUDGET'
	 */
	const VALUE_BID_TOO_HIGH_FOR_DAILY_BUDGET = 'BID_TOO_HIGH_FOR_DAILY_BUDGET';
	/**
	 * Constant for value 'BID_TOO_HIGH_FOR_MONTHLY_BUDGET'
	 * Meta informations :
	 * 	- documentation : Bid is too high for the monthly budget.
	 * @return string 'BID_TOO_HIGH_FOR_MONTHLY_BUDGET'
	 */
	const VALUE_BID_TOO_HIGH_FOR_MONTHLY_BUDGET = 'BID_TOO_HIGH_FOR_MONTHLY_BUDGET';
	/**
	 * Constant for value 'MUST_EXCLUDE_0_TO_17_WITH_OTHER_AGE_EXCLUSIONS'
	 * Meta informations :
	 * 	- documentation : Demographic targeting: Age 0-17 needs to be excluded for any other age to get excluded
	 * @return string 'MUST_EXCLUDE_0_TO_17_WITH_OTHER_AGE_EXCLUSIONS'
	 */
	const VALUE_MUST_EXCLUDE_0_TO_17_WITH_OTHER_AGE_EXCLUSIONS = 'MUST_EXCLUDE_0_TO_17_WITH_OTHER_AGE_EXCLUSIONS';
	/**
	 * Constant for value 'CAMPAIGN_MUST_HAVE_A_BUDGET_TO_ENABLE_BUDGET_OPTIMIZER'
	 * Meta informations :
	 * 	- documentation : Not allowed to enable budget optimizer, for a campaign with no budget.
	 * @return string 'CAMPAIGN_MUST_HAVE_A_BUDGET_TO_ENABLE_BUDGET_OPTIMIZER'
	 */
	const VALUE_CAMPAIGN_MUST_HAVE_A_BUDGET_TO_ENABLE_BUDGET_OPTIMIZER = 'CAMPAIGN_MUST_HAVE_A_BUDGET_TO_ENABLE_BUDGET_OPTIMIZER';
	/**
	 * Constant for value 'CANNOT_SET_CONTENT_BID_WITHOUT_SETTING_KEYWORD_MAX_CPC_AS_WELL'
	 * Meta informations :
	 * 	- documentation : Not allowed to set content bid without setting the keyword bid.
	 * @return string 'CANNOT_SET_CONTENT_BID_WITHOUT_SETTING_KEYWORD_MAX_CPC_AS_WELL'
	 */
	const VALUE_CANNOT_SET_CONTENT_BID_WITHOUT_SETTING_KEYWORD_MAX_CPC_AS_WELL = 'CANNOT_SET_CONTENT_BID_WITHOUT_SETTING_KEYWORD_MAX_CPC_AS_WELL';
	/**
	 * Constant for value 'CANNOT_CREATE_CAMPAIGN_WITH_CONVERSION_OPTIMIZER'
	 * Meta informations :
	 * 	- documentation : Campaign can not be created with Conversion Optimizer bidding strategy. It can be transitioned to conversion optimizer, once eligible.
	 * @return string 'CANNOT_CREATE_CAMPAIGN_WITH_CONVERSION_OPTIMIZER'
	 */
	const VALUE_CANNOT_CREATE_CAMPAIGN_WITH_CONVERSION_OPTIMIZER = 'CANNOT_CREATE_CAMPAIGN_WITH_CONVERSION_OPTIMIZER';
	/**
	 * Constant for value 'PAY_PER_CONVERSION_NOT_AVAILABLE_FOR_CUSTOMER'
	 * Meta informations :
	 * 	- documentation : Pay per conversion is not available to all the customer, only few whitelisted customers can use this.
	 * @return string 'PAY_PER_CONVERSION_NOT_AVAILABLE_FOR_CUSTOMER'
	 */
	const VALUE_PAY_PER_CONVERSION_NOT_AVAILABLE_FOR_CUSTOMER = 'PAY_PER_CONVERSION_NOT_AVAILABLE_FOR_CUSTOMER';
	/**
	 * Constant for value 'PAY_PER_CONVERSION_NOT_ALLOWED_WITH_TARGET_CPA'
	 * Meta informations :
	 * 	- documentation : Pay per conversion is not allowed with Target CPA
	 * @return string 'PAY_PER_CONVERSION_NOT_ALLOWED_WITH_TARGET_CPA'
	 */
	const VALUE_PAY_PER_CONVERSION_NOT_ALLOWED_WITH_TARGET_CPA = 'PAY_PER_CONVERSION_NOT_ALLOWED_WITH_TARGET_CPA';
	/**
	 * Constant for value 'PAY_PER_CONVERSION_NOT_ALLOWED_WITH_MANY_PER_CLICK'
	 * Meta informations :
	 * 	- documentation : Pay per conversion is not allowed with many per click
	 * @return string 'PAY_PER_CONVERSION_NOT_ALLOWED_WITH_MANY_PER_CLICK'
	 */
	const VALUE_PAY_PER_CONVERSION_NOT_ALLOWED_WITH_MANY_PER_CLICK = 'PAY_PER_CONVERSION_NOT_ALLOWED_WITH_MANY_PER_CLICK';
	/**
	 * Constant for value 'TARGET_CPA_NOT_AVAILABLE_FOR_CUSTOMER'
	 * Meta informations :
	 * 	- documentation : Customer is not whitelisted to use target cpa
	 * @return string 'TARGET_CPA_NOT_AVAILABLE_FOR_CUSTOMER'
	 */
	const VALUE_TARGET_CPA_NOT_AVAILABLE_FOR_CUSTOMER = 'TARGET_CPA_NOT_AVAILABLE_FOR_CUSTOMER';
	/**
	 * Constant for value 'MANY_PER_CLICK_NOT_AVAILABLE_FOR_CUSTOMER'
	 * Meta informations :
	 * 	- documentation : Customer is not whitelisted to use many per click
	 * @return string 'MANY_PER_CLICK_NOT_AVAILABLE_FOR_CUSTOMER'
	 */
	const VALUE_MANY_PER_CLICK_NOT_AVAILABLE_FOR_CUSTOMER = 'MANY_PER_CLICK_NOT_AVAILABLE_FOR_CUSTOMER';
	/**
	 * Constant for value 'CANNOT_SET_SITE_MAX_CPC'
	 * Meta informations :
	 * 	- documentation : Site cpc bid can not be set
	 * @return string 'CANNOT_SET_SITE_MAX_CPC'
	 */
	const VALUE_CANNOT_SET_SITE_MAX_CPC = 'CANNOT_SET_SITE_MAX_CPC';
	/**
	 * Constant for value 'BID_ERROR'
	 * Meta informations :
	 * 	- documentation : Default bidding related error
	 * @return string 'BID_ERROR'
	 */
	const VALUE_BID_ERROR = 'BID_ERROR';
	/**
	 * Constructor
	 * @return GGAdwordsTypeBiddingErrorReason
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
		return in_array($_value,array(self::VALUE_BID_AMOUNT_REQUIRED,self::VALUE_BID_TOO_SMALL,self::VALUE_BID_TOO_BIG,self::VALUE_BID_TOO_MANY_FRACTIONAL_DIGITS,self::VALUE_NON_POSITIVE_BID,self::VALUE_BID_TOO_HIGH_FOR_DAILY_BUDGET,self::VALUE_BID_TOO_HIGH_FOR_MONTHLY_BUDGET,self::VALUE_MUST_EXCLUDE_0_TO_17_WITH_OTHER_AGE_EXCLUSIONS,self::VALUE_CAMPAIGN_MUST_HAVE_A_BUDGET_TO_ENABLE_BUDGET_OPTIMIZER,self::VALUE_CANNOT_SET_CONTENT_BID_WITHOUT_SETTING_KEYWORD_MAX_CPC_AS_WELL,self::VALUE_CANNOT_CREATE_CAMPAIGN_WITH_CONVERSION_OPTIMIZER,self::VALUE_PAY_PER_CONVERSION_NOT_AVAILABLE_FOR_CUSTOMER,self::VALUE_PAY_PER_CONVERSION_NOT_ALLOWED_WITH_TARGET_CPA,self::VALUE_PAY_PER_CONVERSION_NOT_ALLOWED_WITH_MANY_PER_CLICK,self::VALUE_TARGET_CPA_NOT_AVAILABLE_FOR_CUSTOMER,self::VALUE_MANY_PER_CLICK_NOT_AVAILABLE_FOR_CUSTOMER,self::VALUE_CANNOT_SET_SITE_MAX_CPC,self::VALUE_BID_ERROR));
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