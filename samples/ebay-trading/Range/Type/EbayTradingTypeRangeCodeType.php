<?php
/**
 * Class file for EbayTradingTypeRangeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRangeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeRangeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'High'
	 * Meta informations :
	 * 	- documentation : High end of the range.
	 * @return string 'High'
	 */
	const VALUE_HIGH = 'High';
	/**
	 * Constant for value 'Low'
	 * Meta informations :
	 * 	- documentation : Low end of the range.
	 * @return string 'Low'
	 */
	const VALUE_LOW = 'Low';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeRangeCodeType
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
		return in_array($_value,array(self::VALUE_HIGH,self::VALUE_LOW,self::VALUE_CUSTOMCODE));
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