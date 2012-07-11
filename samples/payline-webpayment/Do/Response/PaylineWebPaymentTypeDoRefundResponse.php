<?php
/**
 * Class file for PaylineWebPaymentTypeDoRefundResponse
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDoRefundResponse
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDoRefundResponse extends PaylineWebPaymentWsdlClass
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
	 * Constructor
	 * @param PaylineWebPaymentTypeResult result
	 * @param PaylineWebPaymentTypeTransaction transaction
	 * @return PaylineWebPaymentTypeDoRefundResponse
	 */
	public function __construct($_result = null,$_transaction = null)
	{
		parent::__construct(array('result'=>$_result,'transaction'=>$_transaction));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>