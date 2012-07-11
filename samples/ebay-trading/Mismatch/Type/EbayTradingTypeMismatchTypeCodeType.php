<?php
/**
 * Class file for EbayTradingTypeMismatchTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMismatchTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeMismatchTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'OverPayment'
	 * Meta informations :
	 * 	- documentation : This value indicates that the buyer paid more than the required amount.
	 * @return string 'OverPayment'
	 */
	const VALUE_OVERPAYMENT = 'OverPayment';
	/**
	 * Constant for value 'UnderPayment'
	 * Meta informations :
	 * 	- documentation : This value indicates that the buyer paid less than the required amount.
	 * @return string 'UnderPayment'
	 */
	const VALUE_UNDERPAYMENT = 'UnderPayment';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeMismatchTypeCodeType
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
		return in_array($_value,array(self::VALUE_OVERPAYMENT,self::VALUE_UNDERPAYMENT,self::VALUE_CUSTOMCODE));
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