<?php
/**
 * Class file for PayPalTypeBillingCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBillingCodeType
 * @date 14/07/2012
 */
class PayPalTypeBillingCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'MerchantInitiatedBilling'
	 * @return string 'MerchantInitiatedBilling'
	 */
	const VALUE_MERCHANTINITIATEDBILLING = 'MerchantInitiatedBilling';
	/**
	 * Constant for value 'RecurringPayments'
	 * @return string 'RecurringPayments'
	 */
	const VALUE_RECURRINGPAYMENTS = 'RecurringPayments';
	/**
	 * Constant for value 'MerchantInitiatedBillingSingleAgreement'
	 * @return string 'MerchantInitiatedBillingSingleAgreement'
	 */
	const VALUE_MERCHANTINITIATEDBILLINGSINGLEAGREEMENT = 'MerchantInitiatedBillingSingleAgreement';
	/**
	 * Constant for value 'ChannelInitiatedBilling'
	 * @return string 'ChannelInitiatedBilling'
	 */
	const VALUE_CHANNELINITIATEDBILLING = 'ChannelInitiatedBilling';
	/**
	 * Constructor
	 * @return PayPalTypeBillingCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_MERCHANTINITIATEDBILLING,self::VALUE_RECURRINGPAYMENTS,self::VALUE_MERCHANTINITIATEDBILLINGSINGLEAGREEMENT,self::VALUE_CHANNELINITIATEDBILLING));
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