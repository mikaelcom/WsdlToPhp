<?php
/**
 * Class file for EbayTradingTypePaymentStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePaymentStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePaymentStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'NoPaymentFailure'
	 * Meta informations :
	 * 	- documentation : (out) No payment failure.
	 * @return string 'NoPaymentFailure'
	 */
	const VALUE_NOPAYMENTFAILURE = 'NoPaymentFailure';
	/**
	 * Constant for value 'BuyerECheckBounced'
	 * Meta informations :
	 * 	- documentation : (out) The buyer's eCheck bounced.
	 * @return string 'BuyerECheckBounced'
	 */
	const VALUE_BUYERECHECKBOUNCED = 'BuyerECheckBounced';
	/**
	 * Constant for value 'BuyerCreditCardFailed'
	 * Meta informations :
	 * 	- documentation : (out) The buyer's credit card failed.
	 * @return string 'BuyerCreditCardFailed'
	 */
	const VALUE_BUYERCREDITCARDFAILED = 'BuyerCreditCardFailed';
	/**
	 * Constant for value 'BuyerFailedPaymentReportedBySeller'
	 * Meta informations :
	 * 	- documentation : (out) The seller reports that the buyer's payment failed.
	 * @return string 'BuyerFailedPaymentReportedBySeller'
	 */
	const VALUE_BUYERFAILEDPAYMENTREPORTEDBYSELLER = 'BuyerFailedPaymentReportedBySeller';
	/**
	 * Constant for value 'PayPalPaymentInProcess'
	 * Meta informations :
	 * 	- documentation : (out) The payment from buyer to seller is in PayPal process, but has not yet been completed.
	 * @return string 'PayPalPaymentInProcess'
	 */
	const VALUE_PAYPALPAYMENTINPROCESS = 'PayPalPaymentInProcess';
	/**
	 * Constant for value 'PaymentInProcess'
	 * Meta informations :
	 * 	- documentation : (out) Indicates that the buyer's payment has been initiated but has yet to be completed.
	 * @return string 'PaymentInProcess'
	 */
	const VALUE_PAYMENTINPROCESS = 'PaymentInProcess';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePaymentStatusCodeType
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
		return in_array($_value,array(self::VALUE_NOPAYMENTFAILURE,self::VALUE_BUYERECHECKBOUNCED,self::VALUE_BUYERCREDITCARDFAILED,self::VALUE_BUYERFAILEDPAYMENTREPORTEDBYSELLER,self::VALUE_PAYPALPAYMENTINPROCESS,self::VALUE_PAYMENTINPROCESS,self::VALUE_CUSTOMCODE));
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