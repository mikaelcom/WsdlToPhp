<?php
/**
 * Class file for PPInvoiceTypeOtherPaymentMethodType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeOtherPaymentMethodType
 * @date 02/07/2012
 */
class PPInvoiceTypeOtherPaymentMethodType extends PPInvoiceWsdlClass
{
	/**
	 * Constant for value 'Bank_transfer'
	 * @return string 'Bank_transfer'
	 */
	const VALUE_BANK_TRANSFER = 'Bank_transfer';
	/**
	 * Constant for value 'Cash'
	 * @return string 'Cash'
	 */
	const VALUE_CASH = 'Cash';
	/**
	 * Constant for value 'Check'
	 * @return string 'Check'
	 */
	const VALUE_CHECK = 'Check';
	/**
	 * Constant for value 'Credit_card'
	 * @return string 'Credit_card'
	 */
	const VALUE_CREDIT_CARD = 'Credit_card';
	/**
	 * Constant for value 'Debit_card'
	 * @return string 'Debit_card'
	 */
	const VALUE_DEBIT_CARD = 'Debit_card';
	/**
	 * Constant for value 'PayPal'
	 * @return string 'PayPal'
	 */
	const VALUE_PAYPAL = 'PayPal';
	/**
	 * Constant for value 'Wire_transfer'
	 * @return string 'Wire_transfer'
	 */
	const VALUE_WIRE_TRANSFER = 'Wire_transfer';
	/**
	 * Constant for value 'Other'
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constructor
	 * @return PPInvoiceTypeOtherPaymentMethodType
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
		return in_array($_value,array(self::VALUE_BANK_TRANSFER,self::VALUE_CASH,self::VALUE_CHECK,self::VALUE_CREDIT_CARD,self::VALUE_DEBIT_CARD,self::VALUE_PAYPAL,self::VALUE_WIRE_TRANSFER,self::VALUE_OTHER));
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