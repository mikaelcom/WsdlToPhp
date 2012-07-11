<?php
/**
 * Class file for EbayTradingTypeWarningLevelCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeWarningLevelCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeWarningLevelCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Low'
	 * Meta informations :
	 * 	- documentation : Do not return warnings when the application passes unrecognized or deprecated elements in a request. This is the default value if WarningLevel is not specified.
	 * @return string 'Low'
	 */
	const VALUE_LOW = 'Low';
	/**
	 * Constant for value 'High'
	 * Meta informations :
	 * 	- documentation : Return warnings when the application passes unrecognized or deprecated elements in a request.
	 * @return string 'High'
	 */
	const VALUE_HIGH = 'High';
	/**
	 * Constructor
	 * @return EbayTradingTypeWarningLevelCodeType
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
		return in_array($_value,array(self::VALUE_LOW,self::VALUE_HIGH));
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