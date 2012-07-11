<?php
/**
 * Class file for PaylineWebPaymentTypeBillingRecord
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeBillingRecord
 * Documentation : This element contains element for a billing record
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeBillingRecord extends PaylineWebPaymentWsdlClass
{
	/**
	 * The date
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $date;
	/**
	 * The amount
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $amount;
	/**
	 * The status
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $status;
	/**
	 * The result
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeResult
	 */
	public $result;
	/**
	 * The transaction
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeTransaction
	 */
	public $transaction;
	/**
	 * The authorization
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeAuthorization
	 */
	public $authorization;
	/**
	 * Constructor
	 * @param string date
	 * @param string amount
	 * @param string status
	 * @param PaylineWebPaymentTypeResult result
	 * @param PaylineWebPaymentTypeTransaction transaction
	 * @param PaylineWebPaymentTypeAuthorization authorization
	 * @return PaylineWebPaymentTypeBillingRecord
	 */
	public function __construct($_date = null,$_amount = null,$_status = null,$_result = null,$_transaction = null,$_authorization = null)
	{
		parent::__construct(array('date'=>$_date,'amount'=>$_amount,'status'=>$_status,'result'=>$_result,'transaction'=>$_transaction,'authorization'=>$_authorization));
	}
	/**
	 * Set date
	 * @param string date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get date
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set amount
	 * @param string amount
	 * @return string
	 */
	public function setAmount($_amount)
	{
		return ($this->amount = $_amount);
	}
	/**
	 * Get amount
	 * @return string
	 */
	public function getAmount()
	{
		return $this->amount;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
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