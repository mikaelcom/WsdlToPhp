<?php
/**
 * Class file for EbayTradingTypeAccessRuleCurrentStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAccessRuleCurrentStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeAccessRuleCurrentStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'NotSet'
	 * Meta informations :
	 * 	- documentation : (out) The rule is not set and usage limits do not apply.
	 * @return string 'NotSet'
	 */
	const VALUE_NOTSET = 'NotSet';
	/**
	 * Constant for value 'HourlyLimitExceeded'
	 * Meta informations :
	 * 	- documentation : (out) Your application has exceeded its hourly hard limit.
	 * @return string 'HourlyLimitExceeded'
	 */
	const VALUE_HOURLYLIMITEXCEEDED = 'HourlyLimitExceeded';
	/**
	 * Constant for value 'DailyLimitExceeded'
	 * Meta informations :
	 * 	- documentation : (out) Your application has exceeded its daily hard limit.
	 * @return string 'DailyLimitExceeded'
	 */
	const VALUE_DAILYLIMITEXCEEDED = 'DailyLimitExceeded';
	/**
	 * Constant for value 'PeriodicLimitExceeded'
	 * Meta informations :
	 * 	- documentation : (out) Your application has exceeded its periodic hard limit.
	 * @return string 'PeriodicLimitExceeded'
	 */
	const VALUE_PERIODICLIMITEXCEEDED = 'PeriodicLimitExceeded';
	/**
	 * Constant for value 'HourlySoftLimitExceeded'
	 * Meta informations :
	 * 	- documentation : (out) Your application has exceeded its hourly soft limit.
	 * @return string 'HourlySoftLimitExceeded'
	 */
	const VALUE_HOURLYSOFTLIMITEXCEEDED = 'HourlySoftLimitExceeded';
	/**
	 * Constant for value 'DailySoftLimitExceeded'
	 * Meta informations :
	 * 	- documentation : (out) Your application has exceeded its daily soft limit.
	 * @return string 'DailySoftLimitExceeded'
	 */
	const VALUE_DAILYSOFTLIMITEXCEEDED = 'DailySoftLimitExceeded';
	/**
	 * Constant for value 'PeriodicSoftLimitExceeded'
	 * Meta informations :
	 * 	- documentation : (out) Your application has exceeded its periodic soft limit.
	 * @return string 'PeriodicSoftLimitExceeded'
	 */
	const VALUE_PERIODICSOFTLIMITEXCEEDED = 'PeriodicSoftLimitExceeded';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeAccessRuleCurrentStatusCodeType
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
		return in_array($_value,array(self::VALUE_NOTSET,self::VALUE_HOURLYLIMITEXCEEDED,self::VALUE_DAILYLIMITEXCEEDED,self::VALUE_PERIODICLIMITEXCEEDED,self::VALUE_HOURLYSOFTLIMITEXCEEDED,self::VALUE_DAILYSOFTLIMITEXCEEDED,self::VALUE_PERIODICSOFTLIMITEXCEEDED,self::VALUE_CUSTOMCODE));
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