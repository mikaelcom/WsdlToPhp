<?php
/**
 * Class file for PaylineWebPaymentTypeGetTransactionDetailsRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeGetTransactionDetailsRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeGetTransactionDetailsRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The transactionId
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $transactionId;
	/**
	 * The orderRef
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $orderRef;
	/**
	 * Constructor
	 * @param string transactionId
	 * @param string orderRef
	 * @return PaylineWebPaymentTypeGetTransactionDetailsRequest
	 */
	public function __construct($_transactionId = null,$_orderRef = null)
	{
		parent::__construct(array('transactionId'=>$_transactionId,'orderRef'=>$_orderRef));
	}
	/**
	 * Set transactionId
	 * @param string transactionId
	 * @return string
	 */
	public function setTransactionId($_transactionId)
	{
		return ($this->transactionId = $_transactionId);
	}
	/**
	 * Get transactionId
	 * @return string
	 */
	public function getTransactionId()
	{
		return $this->transactionId;
	}
	/**
	 * Set orderRef
	 * @param string orderRef
	 * @return string
	 */
	public function setOrderRef($_orderRef)
	{
		return ($this->orderRef = $_orderRef);
	}
	/**
	 * Get orderRef
	 * @return string
	 */
	public function getOrderRef()
	{
		return $this->orderRef;
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