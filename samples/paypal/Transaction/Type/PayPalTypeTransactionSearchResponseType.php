<?php
/**
 * Class file for PayPalTypeTransactionSearchResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeTransactionSearchResponseType
 * @date 14/07/2012
 */
class PayPalTypeTransactionSearchResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The PaymentTransactions
	 * @var PayPalTypePaymentTransactionSearchResultType
	 */
	public $PaymentTransactions;
	/**
	 * Constructor
	 * @param PayPalTypePaymentTransactionSearchResultType PaymentTransactions
	 * @return PayPalTypeTransactionSearchResponseType
	 */
	public function __construct($_PaymentTransactions = null)
	{
		PayPalWsdlClass::__construct(array('PaymentTransactions'=>$_PaymentTransactions));
	}
	/**
	 * Set PaymentTransactions
	 * @param PaymentTransactionSearchResultType PaymentTransactions
	 * @return PaymentTransactionSearchResultType
	 */
	public function setPaymentTransactions($_PaymentTransactions)
	{
		return ($this->PaymentTransactions = $_PaymentTransactions);
	}
	/**
	 * Get PaymentTransactions
	 * @return PayPalTypePaymentTransactionSearchResultType
	 */
	public function getPaymentTransactions()
	{
		return $this->PaymentTransactions;
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