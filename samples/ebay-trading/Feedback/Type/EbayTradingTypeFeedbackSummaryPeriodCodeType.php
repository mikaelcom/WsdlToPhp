<?php
/**
 * Class file for EbayTradingTypeFeedbackSummaryPeriodCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFeedbackSummaryPeriodCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeFeedbackSummaryPeriodCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ThirtyDays'
	 * Meta informations :
	 * 	- documentation : Period including the last 30 days from today.
	 * @return string 'ThirtyDays'
	 */
	const VALUE_THIRTYDAYS = 'ThirtyDays';
	/**
	 * Constant for value 'FiftyTwoWeeks'
	 * Meta informations :
	 * 	- documentation : Period including the last 52 weeks from today.
	 * @return string 'FiftyTwoWeeks'
	 */
	const VALUE_FIFTYTWOWEEKS = 'FiftyTwoWeeks';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeFeedbackSummaryPeriodCodeType
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
		return in_array($_value,array(self::VALUE_THIRTYDAYS,self::VALUE_FIFTYTWOWEEKS,self::VALUE_CUSTOMCODE));
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