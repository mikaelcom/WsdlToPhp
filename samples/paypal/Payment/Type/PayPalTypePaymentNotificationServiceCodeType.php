<?php
/**
 * Class file for PayPalTypePaymentNotificationServiceCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaymentNotificationServiceCodeType
 * @date 14/07/2012
 */
class PayPalTypePaymentNotificationServiceCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'eBayCN'
	 * @return string 'eBayCN'
	 */
	const VALUE_EBAYCN = 'eBayCN';
	/**
	 * Constructor
	 * @return PayPalTypePaymentNotificationServiceCodeType
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
		return in_array($_value,array(self::VALUE_EBAYCN));
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