<?php
/**
 * Class file for XiEdgarTypePredefinedQueryTypes
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypePredefinedQueryTypes
 * @date 08/07/2012
 */
class XiEdgarTypePredefinedQueryTypes extends XiEdgarWsdlClass
{
	/**
	 * Constant for value 'AllFilings'
	 * @return string 'AllFilings'
	 */
	const VALUE_ALLFILINGS = 'AllFilings';
	/**
	 * Constant for value 'AnnualReports'
	 * @return string 'AnnualReports'
	 */
	const VALUE_ANNUALREPORTS = 'AnnualReports';
	/**
	 * Constant for value 'QuarterlyReports'
	 * @return string 'QuarterlyReports'
	 */
	const VALUE_QUARTERLYREPORTS = 'QuarterlyReports';
	/**
	 * Constant for value 'RegistrationStatements'
	 * @return string 'RegistrationStatements'
	 */
	const VALUE_REGISTRATIONSTATEMENTS = 'RegistrationStatements';
	/**
	 * Constant for value 'InsiderTransactions'
	 * @return string 'InsiderTransactions'
	 */
	const VALUE_INSIDERTRANSACTIONS = 'InsiderTransactions';
	/**
	 * Constant for value 'CurrentReports'
	 * @return string 'CurrentReports'
	 */
	const VALUE_CURRENTREPORTS = 'CurrentReports';
	/**
	 * Constant for value 'PressReleases'
	 * @return string 'PressReleases'
	 */
	const VALUE_PRESSRELEASES = 'PressReleases';
	/**
	 * Constructor
	 * @return XiEdgarTypePredefinedQueryTypes
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
		return in_array($_value,array(self::VALUE_ALLFILINGS,self::VALUE_ANNUALREPORTS,self::VALUE_QUARTERLYREPORTS,self::VALUE_REGISTRATIONSTATEMENTS,self::VALUE_INSIDERTRANSACTIONS,self::VALUE_CURRENTREPORTS,self::VALUE_PRESSRELEASES));
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