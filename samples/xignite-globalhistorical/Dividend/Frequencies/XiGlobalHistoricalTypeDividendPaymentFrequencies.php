<?php
/**
 * Class file for XiGlobalHistoricalTypeDividendPaymentFrequencies
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeDividendPaymentFrequencies
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeDividendPaymentFrequencies extends XiGlobalHistoricalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Annual'
	 * @return string 'Annual'
	 */
	const VALUE_ANNUAL = 'Annual';
	/**
	 * Constant for value 'Initial'
	 * @return string 'Initial'
	 */
	const VALUE_INITIAL = 'Initial';
	/**
	 * Constant for value 'Resumption'
	 * @return string 'Resumption'
	 */
	const VALUE_RESUMPTION = 'Resumption';
	/**
	 * Constant for value 'Interim'
	 * @return string 'Interim'
	 */
	const VALUE_INTERIM = 'Interim';
	/**
	 * Constant for value 'Quarterly'
	 * @return string 'Quarterly'
	 */
	const VALUE_QUARTERLY = 'Quarterly';
	/**
	 * Constant for value 'SemiAnnual'
	 * @return string 'SemiAnnual'
	 */
	const VALUE_SEMIANNUAL = 'SemiAnnual';
	/**
	 * Constant for value 'Monthly'
	 * @return string 'Monthly'
	 */
	const VALUE_MONTHLY = 'Monthly';
	/**
	 * Constant for value 'Final'
	 * @return string 'Final'
	 */
	const VALUE_FINAL = 'Final';
	/**
	 * Constant for value 'Other'
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'Unknown'
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'DefaultValue'
	 * @return string 'DefaultValue'
	 */
	const VALUE_DEFAULTVALUE = 'DefaultValue';
	/**
	 * Constructor
	 * @return XiGlobalHistoricalTypeDividendPaymentFrequencies
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_ANNUAL,self::VALUE_INITIAL,self::VALUE_RESUMPTION,self::VALUE_INTERIM,self::VALUE_QUARTERLY,self::VALUE_SEMIANNUAL,self::VALUE_MONTHLY,self::VALUE_FINAL,self::VALUE_OTHER,self::VALUE_UNKNOWN,self::VALUE_DEFAULTVALUE));
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