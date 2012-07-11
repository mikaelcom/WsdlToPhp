<?php
/**
 * Class file for EbayTradingTypeUnpaidItemCaseStatusTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeUnpaidItemCaseStatusTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeUnpaidItemCaseStatusTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Open'
	 * Meta informations :
	 * 	- documentation : (out) Unpaid item case open.
	 * @return string 'Open'
	 */
	const VALUE_OPEN = 'Open';
	/**
	 * Constant for value 'ClosedWithPayment'
	 * Meta informations :
	 * 	- documentation : (out) Unpaid item closed with payment
	 * @return string 'ClosedWithPayment'
	 */
	const VALUE_CLOSEDWITHPAYMENT = 'ClosedWithPayment';
	/**
	 * Constant for value 'ClosedWithoutPayment'
	 * Meta informations :
	 * 	- documentation : (out) Unpaid item closed without payment
	 * @return string 'ClosedWithoutPayment'
	 */
	const VALUE_CLOSEDWITHOUTPAYMENT = 'ClosedWithoutPayment';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeUnpaidItemCaseStatusTypeCodeType
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
		return in_array($_value,array(self::VALUE_OPEN,self::VALUE_CLOSEDWITHPAYMENT,self::VALUE_CLOSEDWITHOUTPAYMENT,self::VALUE_CUSTOMCODE));
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