<?php
/**
 * Class file for PaylineWebPaymentTypeDoAuthorizationResponse
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDoAuthorizationResponse
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDoAuthorizationResponse extends PaylineWebPaymentWsdlClass
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
	 * The authorization
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeAuthorization
	 */
	public $authorization;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeResult result
	 * @param PaylineWebPaymentTypeTransaction transaction
	 * @param PaylineWebPaymentTypeAuthorization authorization
	 * @return PaylineWebPaymentTypeDoAuthorizationResponse
	 */
	public function __construct($_result = null,$_transaction = null,$_authorization = null)
	{
		parent::__construct(array('result'=>$_result,'transaction'=>$_transaction,'authorization'=>$_authorization));
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
	 * Set authorization
	 * @param authorization authorization
	 * @return authorization
	 */
	public function setAuthorization($_authorization)
	{
		return ($this->authorization = $_authorization);
	}
	/**
	 * Get authorization
	 * @return PaylineWebPaymentTypeauthorization
	 */
	public function getAuthorization()
	{
		return $this->authorization;
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