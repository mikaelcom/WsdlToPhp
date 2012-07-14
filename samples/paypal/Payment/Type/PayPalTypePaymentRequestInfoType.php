<?php
/**
 * Class file for PayPalTypePaymentRequestInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaymentRequestInfoType
 * Documentation : Contains payment request information for each bucket in the cart.
 * @date 14/07/2012
 */
class PayPalTypePaymentRequestInfoType extends PayPalWsdlClass
{
	/**
	 * The TransactionId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Contains the transaction id of the bucket.
	 * @var string
	 */
	public $TransactionId;
	/**
	 * The PaymentRequestID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Contains the bucket id.
	 * @var string
	 */
	public $PaymentRequestID;
	/**
	 * The PaymentError
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Contains the error details.
	 * @var PayPalTypeErrorType
	 */
	public $PaymentError;
	/**
	 * Constructor
	 * @param string TransactionId
	 * @param string PaymentRequestID
	 * @param PayPalTypeErrorType PaymentError
	 * @return PayPalTypePaymentRequestInfoType
	 */
	public function __construct($_TransactionId = null,$_PaymentRequestID = null,$_PaymentError = null)
	{
		parent::__construct(array('TransactionId'=>$_TransactionId,'PaymentRequestID'=>$_PaymentRequestID,'PaymentError'=>$_PaymentError));
	}
	/**
	 * Set TransactionId
	 * @param string TransactionId
	 * @return string
	 */
	public function setTransactionId($_TransactionId)
	{
		return ($this->TransactionId = $_TransactionId);
	}
	/**
	 * Get TransactionId
	 * @return string
	 */
	public function getTransactionId()
	{
		return $this->TransactionId;
	}
	/**
	 * Set PaymentRequestID
	 * @param string PaymentRequestID
	 * @return string
	 */
	public function setPaymentRequestID($_PaymentRequestID)
	{
		return ($this->PaymentRequestID = $_PaymentRequestID);
	}
	/**
	 * Get PaymentRequestID
	 * @return string
	 */
	public function getPaymentRequestID()
	{
		return $this->PaymentRequestID;
	}
	/**
	 * Set PaymentError
	 * @param ErrorType PaymentError
	 * @return ErrorType
	 */
	public function setPaymentError($_PaymentError)
	{
		return ($this->PaymentError = $_PaymentError);
	}
	/**
	 * Get PaymentError
	 * @return PayPalTypeErrorType
	 */
	public function getPaymentError()
	{
		return $this->PaymentError;
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