<?php
/**
 * Class file for EbayTradingTypeUnpaidItemCaseOpenTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeUnpaidItemCaseOpenTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeUnpaidItemCaseOpenTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Auto'
	 * Meta informations :
	 * 	- documentation : (out) Unpaid item case opened automatically.
	 * @return string 'Auto'
	 */
	const VALUE_AUTO = 'Auto';
	/**
	 * Constant for value 'Manual'
	 * Meta informations :
	 * 	- documentation : (out) Unpaid item case opened manually.
	 * @return string 'Manual'
	 */
	const VALUE_MANUAL = 'Manual';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeUnpaidItemCaseOpenTypeCodeType
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
		return in_array($_value,array(self::VALUE_AUTO,self::VALUE_MANUAL,self::VALUE_CUSTOMCODE));
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