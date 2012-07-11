<?php
/**
 * Class file for XiSecurityTypePaymentFrequencyTypes
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypePaymentFrequencyTypes
 * @date 08/07/2012
 */
class XiSecurityTypePaymentFrequencyTypes extends XiSecurityWsdlClass
{
	/**
	 * Constant for value 'AtMaturity'
	 * @return string 'AtMaturity'
	 */
	const VALUE_ATMATURITY = 'AtMaturity';
	/**
	 * Constant for value 'SemiAnnually'
	 * @return string 'SemiAnnually'
	 */
	const VALUE_SEMIANNUALLY = 'SemiAnnually';
	/**
	 * Constructor
	 * @return XiSecurityTypePaymentFrequencyTypes
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
		return in_array($_value,array(self::VALUE_ATMATURITY,self::VALUE_SEMIANNUALLY));
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