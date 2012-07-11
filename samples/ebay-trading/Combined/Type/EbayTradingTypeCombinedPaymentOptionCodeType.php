<?php
/**
 * Class file for EbayTradingTypeCombinedPaymentOptionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCombinedPaymentOptionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeCombinedPaymentOptionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'NoCombinedPayment'
	 * Meta informations :
	 * 	- documentation : Combined payments are not allowed by seller.
	 * @return string 'NoCombinedPayment'
	 */
	const VALUE_NOCOMBINEDPAYMENT = 'NoCombinedPayment';
	/**
	 * Constant for value 'DiscountSpecified'
	 * Meta informations :
	 * 	- documentation : Yes. Specify discount now.
	 * @return string 'DiscountSpecified'
	 */
	const VALUE_DISCOUNTSPECIFIED = 'DiscountSpecified';
	/**
	 * Constant for value 'SpecifyDiscountLater'
	 * Meta informations :
	 * 	- documentation : Yes. Specify discount later.
	 * @return string 'SpecifyDiscountLater'
	 */
	const VALUE_SPECIFYDISCOUNTLATER = 'SpecifyDiscountLater';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeCombinedPaymentOptionCodeType
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
		return in_array($_value,array(self::VALUE_NOCOMBINEDPAYMENT,self::VALUE_DISCOUNTSPECIFIED,self::VALUE_SPECIFYDISCOUNTLATER,self::VALUE_CUSTOMCODE));
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