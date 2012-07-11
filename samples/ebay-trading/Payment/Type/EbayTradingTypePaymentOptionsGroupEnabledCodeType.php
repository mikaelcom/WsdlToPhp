<?php
/**
 * Class file for EbayTradingTypePaymentOptionsGroupEnabledCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePaymentOptionsGroupEnabledCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePaymentOptionsGroupEnabledCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'eBayPaymentProcessEnabled'
	 * Meta informations :
	 * 	- documentation : This value indicates that the new eBay payment process is enabled for this category.
	 * @return string 'eBayPaymentProcessEnabled'
	 */
	const VALUE_EBAYPAYMENTPROCESSENABLED = 'eBayPaymentProcessEnabled';
	/**
	 * Constant for value 'NonStandardPaymentsEnabled'
	 * Meta informations :
	 * 	- documentation : This value indicates that non-standard payments is enabled for this category.
	 * @return string 'NonStandardPaymentsEnabled'
	 */
	const VALUE_NONSTANDARDPAYMENTSENABLED = 'NonStandardPaymentsEnabled';
	/**
	 * Constant for value 'eBayPaymentProcessExcluded'
	 * Meta informations :
	 * 	- documentation : This value indicates that the new eBay payment process is excluded for this category.
	 * @return string 'eBayPaymentProcessExcluded'
	 */
	const VALUE_EBAYPAYMENTPROCESSEXCLUDED = 'eBayPaymentProcessExcluded';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePaymentOptionsGroupEnabledCodeType
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
		return in_array($_value,array(self::VALUE_EBAYPAYMENTPROCESSENABLED,self::VALUE_NONSTANDARDPAYMENTSENABLED,self::VALUE_EBAYPAYMENTPROCESSEXCLUDED,self::VALUE_CUSTOMCODE));
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