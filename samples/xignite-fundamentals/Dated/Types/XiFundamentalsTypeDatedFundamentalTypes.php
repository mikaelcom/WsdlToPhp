<?php
/**
 * Class file for XiFundamentalsTypeDatedFundamentalTypes
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeDatedFundamentalTypes
 * @date 08/07/2012
 */
class XiFundamentalsTypeDatedFundamentalTypes extends XiFundamentalsWsdlClass
{
	/**
	 * Constant for value 'PeriodAveragePrice'
	 * @return string 'PeriodAveragePrice'
	 */
	const VALUE_PERIODAVERAGEPRICE = 'PeriodAveragePrice';
	/**
	 * Constant for value 'SharesOutstanding'
	 * @return string 'SharesOutstanding'
	 */
	const VALUE_SHARESOUTSTANDING = 'SharesOutstanding';
	/**
	 * Constant for value 'LastAnnualReportDate'
	 * @return string 'LastAnnualReportDate'
	 */
	const VALUE_LASTANNUALREPORTDATE = 'LastAnnualReportDate';
	/**
	 * Constant for value 'LastQuarterlyReportDate'
	 * @return string 'LastQuarterlyReportDate'
	 */
	const VALUE_LASTQUARTERLYREPORTDATE = 'LastQuarterlyReportDate';
	/**
	 * Constructor
	 * @return XiFundamentalsTypeDatedFundamentalTypes
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
		return in_array($_value,array(self::VALUE_PERIODAVERAGEPRICE,self::VALUE_SHARESOUTSTANDING,self::VALUE_LASTANNUALREPORTDATE,self::VALUE_LASTQUARTERLYREPORTDATE));
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