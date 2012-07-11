<?php
/**
 * Class file for PaylineWebPaymentTypeDoCaptureRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDoCaptureRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDoCaptureRequest extends PaylineWebPaymentWsdlClass
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
	 * @param PaylineWebPaymentTypePrivateDataList privateDataList
	 * @param string sequenceNumber
	 * @return PaylineWebPaymentTypeDoCaptureRequest
	 */
	public function __construct($_transactionID = null,$_payment = null,$_privateDataList = null,$_sequenceNumber = null)
	{
		parent::__construct(array('transactionID'=>$_transactionID,'payment'=>$_payment,'privateDataList'=>$_privateDataList,'sequenceNumber'=>$_sequenceNumber));
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