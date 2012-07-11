<?php
/**
 * Class file for EbayTradingTypeSellerPaymentMethodCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerPaymentMethodCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellerPaymentMethodCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'NothingOnFile'
	 * Meta informations :
	 * 	- documentation : Used for all other payment methods which are not specifically listed in other columns.
	 * @return string 'NothingOnFile'
	 */
	const VALUE_NOTHINGONFILE = 'NothingOnFile';
	/**
	 * Constant for value 'CreditCard'
	 * Meta informations :
	 * 	- documentation : Credit Card
	 * @return string 'CreditCard'
	 */
	const VALUE_CREDITCARD = 'CreditCard';
	/**
	 * Constant for value 'PayPal'
	 * Meta informations :
	 * 	- documentation : PayPal
	 * @return string 'PayPal'
	 */
	const VALUE_PAYPAL = 'PayPal';
	/**
	 * Constant for value 'DirectDebit'
	 * Meta informations :
	 * 	- documentation : Direct Debit
	 * @return string 'DirectDebit'
	 */
	const VALUE_DIRECTDEBIT = 'DirectDebit';
	/**
	 * Constant for value 'DirectDebitPendingSignatureMandate'
	 * Meta informations :
	 * 	- documentation : Direct Debit, pending signature mandate
	 * @return string 'DirectDebitPendingSignatureMandate'
	 */
	const VALUE_DIRECTDEBITPENDINGSIGNATUREMANDATE = 'DirectDebitPendingSignatureMandate';
	/**
	 * Constant for value 'eBayDirectPay'
	 * Meta informations :
	 * 	- documentation : eBay Direct Pay
	 * @return string 'eBayDirectPay'
	 */
	const VALUE_EBAYDIRECTPAY = 'eBayDirectPay';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'DirectDebitPendingVerification'
	 * Meta informations :
	 * 	- documentation : Direct Debit, pending verification
	 * @return string 'DirectDebitPendingVerification'
	 */
	const VALUE_DIRECTDEBITPENDINGVERIFICATION = 'DirectDebitPendingVerification';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellerPaymentMethodCodeType
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
		return in_array($_value,array(self::VALUE_NOTHINGONFILE,self::VALUE_CREDITCARD,self::VALUE_PAYPAL,self::VALUE_DIRECTDEBIT,self::VALUE_DIRECTDEBITPENDINGSIGNATUREMANDATE,self::VALUE_EBAYDIRECTPAY,self::VALUE_CUSTOMCODE,self::VALUE_DIRECTDEBITPENDINGVERIFICATION));
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