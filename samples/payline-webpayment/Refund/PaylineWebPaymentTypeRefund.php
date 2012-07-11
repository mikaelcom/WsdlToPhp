<?php
/**
 * Class file for PaylineWebPaymentTypeRefund
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeRefund
 * Documentation : This element contains information about the refund
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeRefund extends PaylineWebPaymentWsdlClass
{
	/**
	 * The transactionID
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $transactionID;
	/**
	 * The payment
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypePayment
	 */
	public $payment;
	/**
	 * Constructor
	 * @param string transactionID
	 * @param PaylineWebPaymentTypePayment payment
	 * @return PaylineWebPaymentTypeRefund
	 */
	public function __construct($_transactionID = null,$_payment = null)
	{
		parent::__construct(array('transactionID'=>$_transactionID,'payment'=>$_payment));
	}
	/**
	 * Set transactionID
	 * @param string transactionID
	 * @return string
	 */
	public function setTransactionID($_transactionID)
	{
		return ($this->transactionID = $_transactionID);
	}
	/**
	 * Get transactionID
	 * @return string
	 */
	public function getTransactionID()
	{
		return $this->transactionID;
	}
	/**
	 * Set payment
	 * @param payment payment
	 * @return payment
	 */
	public function setPayment($_payment)
	{
		return ($this->payment = $_payment);
	}
	/**
	 * Get payment
	 * @return PaylineWebPaymentTypepayment
	 */
	public function getPayment()
	{
		return $this->payment;
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