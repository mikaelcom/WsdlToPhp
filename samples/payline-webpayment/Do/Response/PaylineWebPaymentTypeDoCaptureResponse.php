<?php
/**
 * Class file for PaylineWebPaymentTypeDoCaptureResponse
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDoCaptureResponse
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDoCaptureResponse extends PaylineWebPaymentWsdlClass
{
	/**
	 * The result
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeResult
	 */
	public $result;
	/**
	 * The transaction
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeTransaction
	 */
	public $transaction;
	/**
	 * The reAuthorization
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $reAuthorization;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeResult result
	 * @param PaylineWebPaymentTypeTransaction transaction
	 * @param string reAuthorization
	 * @return PaylineWebPaymentTypeDoCaptureResponse
	 */
	public function __construct($_result = null,$_transaction = null,$_reAuthorization = null)
	{
		parent::__construct(array('result'=>$_result,'transaction'=>$_transaction,'reAuthorization'=>$_reAuthorization));
	}
	/**
	 * Set result
	 * @param result result
	 * @return result
	 */
	public function setResult($_result)
	{
		return ($this->result = $_result);
	}
	/**
	 * Get result
	 * @return PaylineWebPaymentTyperesult
	 */
	public function getResult()
	{
		return $this->result;
	}
	/**
	 * Set transaction
	 * @param transaction transaction
	 * @return transaction
	 */
	public function setTransaction($_transaction)
	{
		return ($this->transaction = $_transaction);
	}
	/**
	 * Get transaction
	 * @return PaylineWebPaymentTypetransaction
	 */
	public function getTransaction()
	{
		return $this->transaction;
	}
	/**
	 * Set reAuthorization
	 * @param string reAuthorization
	 * @return string
	 */
	public function setReAuthorization($_reAuthorization)
	{
		return ($this->reAuthorization = $_reAuthorization);
	}
	/**
	 * Get reAuthorization
	 * @return string
	 */
	public function getReAuthorization()
	{
		return $this->reAuthorization;
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