<?php
/**
 * Class file for EbayTradingTypeBalanceCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBalanceCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeBalanceCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Other'
	 * Meta informations :
	 * 	- documentation : (out) Custom Code.
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeBalanceCodeType
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
		return in_array($_value,array(self::VALUE_OTHER,self::VALUE_CUSTOMCODE));
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