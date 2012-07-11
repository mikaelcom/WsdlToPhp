<?php
/**
 * Class file for EbayTradingTypeSummaryWindowPeriodCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSummaryWindowPeriodCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSummaryWindowPeriodCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Last24Hours'
	 * Meta informations :
	 * 	- documentation : The last 24 hours.
	 * @return string 'Last24Hours'
	 */
	const VALUE_LAST24HOURS = 'Last24Hours';
	/**
	 * Constant for value 'Last7Days'
	 * Meta informations :
	 * 	- documentation : The last 7 days.
	 * @return string 'Last7Days'
	 */
	const VALUE_LAST7DAYS = 'Last7Days';
	/**
	 * Constant for value 'Last31Days'
	 * Meta informations :
	 * 	- documentation : The last 31 days.
	 * @return string 'Last31Days'
	 */
	const VALUE_LAST31DAYS = 'Last31Days';
	/**
	 * Constant for value 'CurrentWeek'
	 * Meta informations :
	 * 	- documentation : The current week.
	 * @return string 'CurrentWeek'
	 */
	const VALUE_CURRENTWEEK = 'CurrentWeek';
	/**
	 * Constant for value 'LastWeek'
	 * Meta informations :
	 * 	- documentation : The prior week.
	 * @return string 'LastWeek'
	 */
	const VALUE_LASTWEEK = 'LastWeek';
	/**
	 * Constant for value 'CurrentMonth'
	 * Meta informations :
	 * 	- documentation : The current month.
	 * @return string 'CurrentMonth'
	 */
	const VALUE_CURRENTMONTH = 'CurrentMonth';
	/**
	 * Constant for value 'LastMonth'
	 * Meta informations :
	 * 	- documentation : The prior month.
	 * @return string 'LastMonth'
	 */
	const VALUE_LASTMONTH = 'LastMonth';
	/**
	 * Constant for value 'Last60Days'
	 * Meta informations :
	 * 	- documentation : The last 60 days.
	 * @return string 'Last60Days'
	 */
	const VALUE_LAST60DAYS = 'Last60Days';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSummaryWindowPeriodCodeType
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
		return in_array($_value,array(self::VALUE_LAST24HOURS,self::VALUE_LAST7DAYS,self::VALUE_LAST31DAYS,self::VALUE_CURRENTWEEK,self::VALUE_LASTWEEK,self::VALUE_CURRENTMONTH,self::VALUE_LASTMONTH,self::VALUE_LAST60DAYS,self::VALUE_CUSTOMCODE));
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