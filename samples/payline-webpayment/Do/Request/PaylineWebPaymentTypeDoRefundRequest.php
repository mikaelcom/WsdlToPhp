<?php
/**
 * Class file for PaylineWebPaymentTypeDoRefundRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDoRefundRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDoRefundRequest extends PaylineWebPaymentWsdlClass
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
	 * The comment
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $comment;
	/**
	 * The privateDataList
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypePrivateDataList
	 */
	public $privateDataList;
	/**
	 * The sequenceNumber
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $sequenceNumber;
	/**
	 * Constructor
	 * @param string transactionID
	 * @param PaylineWebPaymentTypePayment payment
	 * @param string comment
	 * @param PaylineWebPaymentTypePrivateDataList privateDataList
	 * @param string sequenceNumber
	 * @return PaylineWebPaymentTypeDoRefundRequest
	 */
	public function __construct($_transactionID = null,$_payment = null,$_comment = null,$_privateDataList = null,$_sequenceNumber = null)
	{
		parent::__construct(array('transactionID'=>$_transactionID,'payment'=>$_payment,'comment'=>$_comment,'privateDataList'=>$_privateDataList,'sequenceNumber'=>$_sequenceNumber));
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
	 * Set comment
	 * @param string comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
	}
	/**
	 * Set privateDataList
	 * @param privateDataList privateDataList
	 * @return privateDataList
	 */
	public function setPrivateDataList($_privateDataList)
	{
		return ($this->privateDataList = $_privateDataList);
	}
	/**
	 * Get privateDataList
	 * @return PaylineWebPaymentTypeprivateDataList
	 */
	public function getPrivateDataList()
	{
		return $this->privateDataList;
	}
	/**
	 * Set sequenceNumber
	 * @param string sequenceNumber
	 * @return string
	 */
	public function setSequenceNumber($_sequenceNumber)
	{
		return ($this->sequenceNumber = $_sequenceNumber);
	}
	/**
	 * Get sequenceNumber
	 * @return string
	 */
	public function getSequenceNumber()
	{
		return $this->sequenceNumber;
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