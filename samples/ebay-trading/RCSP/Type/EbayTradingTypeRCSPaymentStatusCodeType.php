<?php
/**
 * Class file for EbayTradingTypeRCSPaymentStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRCSPaymentStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeRCSPaymentStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Canceled'
	 * Meta informations :
	 * 	- documentation : Order line item payment has been canceled. (Reserved for future use.)
	 * @return string 'Canceled'
	 */
	const VALUE_CANCELED = 'Canceled';
	/**
	 * Constant for value 'Paid'
	 * Meta informations :
	 * 	- documentation : Order line item payment is completed.
	 * @return string 'Paid'
	 */
	const VALUE_PAID = 'Paid';
	/**
	 * Constant for value 'Pending'
	 * Meta informations :
	 * 	- documentation : Order line item is awaiting payment.
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeRCSPaymentStatusCodeType
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
		return in_array($_value,array(self::VALUE_CANCELED,self::VALUE_PAID,self::VALUE_PENDING,self::VALUE_CUSTOMCODE));
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