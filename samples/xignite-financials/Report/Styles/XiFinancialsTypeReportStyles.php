<?php
/**
 * Class file for XiFinancialsTypeReportStyles
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeReportStyles
 * @date 08/07/2012
 */
class XiFinancialsTypeReportStyles extends XiFinancialsWsdlClass
{
	/**
	 * Constant for value 'Last4Quarters'
	 * @return string 'Last4Quarters'
	 */
	const VALUE_LAST4QUARTERS = 'Last4Quarters';
	/**
	 * Constant for value 'Last4Years'
	 * @return string 'Last4Years'
	 */
	const VALUE_LAST4YEARS = 'Last4Years';
	/**
	 * Constructor
	 * @return XiFinancialsTypeReportStyles
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
		return in_array($_value,array(self::VALUE_LAST4QUARTERS,self::VALUE_LAST4YEARS));
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