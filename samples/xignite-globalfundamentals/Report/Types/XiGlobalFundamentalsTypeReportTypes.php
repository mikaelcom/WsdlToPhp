<?php
/**
 * Class file for XiGlobalFundamentalsTypeReportTypes
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeReportTypes
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeReportTypes extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * Constant for value 'Latest'
	 * @return string 'Latest'
	 */
	const VALUE_LATEST = 'Latest';
	/**
	 * Constant for value 'Quarterly'
	 * @return string 'Quarterly'
	 */
	const VALUE_QUARTERLY = 'Quarterly';
	/**
	 * Constant for value 'Annual'
	 * @return string 'Annual'
	 */
	const VALUE_ANNUAL = 'Annual';
	/**
	 * Constant for value 'TTM'
	 * @return string 'TTM'
	 */
	const VALUE_TTM = 'TTM';
	/**
	 * Constant for value 'LatestPreliminary'
	 * @return string 'LatestPreliminary'
	 */
	const VALUE_LATESTPRELIMINARY = 'LatestPreliminary';
	/**
	 * Constant for value 'QuarterlyPreliminary'
	 * @return string 'QuarterlyPreliminary'
	 */
	const VALUE_QUARTERLYPRELIMINARY = 'QuarterlyPreliminary';
	/**
	 * Constant for value 'AnnualPreliminary'
	 * @return string 'AnnualPreliminary'
	 */
	const VALUE_ANNUALPRELIMINARY = 'AnnualPreliminary';
	/**
	 * Constant for value 'TTMPreliminary'
	 * @return string 'TTMPreliminary'
	 */
	const VALUE_TTMPRELIMINARY = 'TTMPreliminary';
	/**
	 * Constant for value 'QuarterlyRestated'
	 * @return string 'QuarterlyRestated'
	 */
	const VALUE_QUARTERLYRESTATED = 'QuarterlyRestated';
	/**
	 * Constant for value 'AnnualRestated'
	 * @return string 'AnnualRestated'
	 */
	const VALUE_ANNUALRESTATED = 'AnnualRestated';
	/**
	 * Constant for value 'TTMRestated'
	 * @return string 'TTMRestated'
	 */
	const VALUE_TTMRESTATED = 'TTMRestated';
	/**
	 * Constructor
	 * @return XiGlobalFundamentalsTypeReportTypes
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
		return in_array($_value,array(self::VALUE_LATEST,self::VALUE_QUARTERLY,self::VALUE_ANNUAL,self::VALUE_TTM,self::VALUE_LATESTPRELIMINARY,self::VALUE_QUARTERLYPRELIMINARY,self::VALUE_ANNUALPRELIMINARY,self::VALUE_TTMPRELIMINARY,self::VALUE_QUARTERLYRESTATED,self::VALUE_ANNUALRESTATED,self::VALUE_TTMRESTATED));
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