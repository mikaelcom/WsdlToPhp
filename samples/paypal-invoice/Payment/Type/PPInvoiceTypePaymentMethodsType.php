<?php
/**
 * Class file for PPInvoiceTypePaymentMethodsType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypePaymentMethodsType
 * @date 02/07/2012
 */
class PPInvoiceTypePaymentMethodsType extends PPInvoiceWsdlClass
{
	/**
	 * Constant for value 'BankTransfer'
	 * Meta informations :
	 * 	- documentation : Payment done by a bank transfer.
	 * @return string 'BankTransfer'
	 */
	const VALUE_BANKTRANSFER = 'BankTransfer';
	/**
	 * Constant for value 'Cash'
	 * Meta informations :
	 * 	- documentation : Payment done by cash.
	 * @return string 'Cash'
	 */
	const VALUE_CASH = 'Cash';
	/**
	 * Constant for value 'Check'
	 * Meta informations :
	 * 	- documentation : Payment done by a check.
	 * @return string 'Check'
	 */
	const VALUE_CHECK = 'Check';
	/**
	 * Constant for value 'CreditCard'
	 * Meta informations :
	 * 	- documentation : Payment done by a credit card.
	 * @return string 'CreditCard'
	 */
	const VALUE_CREDITCARD = 'CreditCard';
	/**
	 * Constant for value 'DebitCard'
	 * Meta informations :
	 * 	- documentation : Payment done by a debit card.
	 * @return string 'DebitCard'
	 */
	const VALUE_DEBITCARD = 'DebitCard';
	/**
	 * Constant for value 'Other'
	 * Meta informations :
	 * 	- documentation : Payment done by another method not specified in this enumeration.
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'PayPal'
	 * Meta informations :
	 * 	- documentation : Payment done by PayPal.
	 * @return string 'PayPal'
	 */
	const VALUE_PAYPAL = 'PayPal';
	/**
	 * Constant for value 'WireTransfer'
	 * Meta informations :
	 * 	- documentation : Payment done by a wire transfer.
	 * @return string 'WireTransfer'
	 */
	const VALUE_WIRETRANSFER = 'WireTransfer';
	/**
	 * Constructor
	 * @return PPInvoiceTypePaymentMethodsType
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
		return in_array($_value,array(self::VALUE_BANKTRANSFER,self::VALUE_CASH,self::VALUE_CHECK,self::VALUE_CREDITCARD,self::VALUE_DEBITCARD,self::VALUE_OTHER,self::VALUE_PAYPAL,self::VALUE_WIRETRANSFER));
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