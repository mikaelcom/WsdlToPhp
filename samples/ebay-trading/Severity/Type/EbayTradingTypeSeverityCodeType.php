<?php
/**
 * Class file for EbayTradingTypeSeverityCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSeverityCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSeverityCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Warning'
	 * Meta informations :
	 * 	- documentation : (out) Warning or informational error
	 * @return string 'Warning'
	 */
	const VALUE_WARNING = 'Warning';
	/**
	 * Constant for value 'Error'
	 * Meta informations :
	 * 	- documentation : (out) Application-level error
	 * @return string 'Error'
	 */
	const VALUE_ERROR = 'Error';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSeverityCodeType
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
		return in_array($_value,array(self::VALUE_WARNING,self::VALUE_ERROR,self::VALUE_CUSTOMCODE));
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