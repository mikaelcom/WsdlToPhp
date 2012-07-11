<?php
/**
 * Class file for PaylineWebPaymentTypeFailedObject
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeFailedObject
 * Documentation : This element contains failedObject
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeFailedObject extends PaylineWebPaymentWsdlClass
{
	/**
	 * The transactionID
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $transactionID;
	/**
	 * The result
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeResult
	 */
	public $result;
	/**
	 * Constructor
	 * @param string transactionID
	 * @param PaylineWebPaymentTypeResult result
	 * @return PaylineWebPaymentTypeFailedObject
	 */
	public function __construct($_transactionID = null,$_result = null)
	{
		parent::__construct(array('transactionID'=>$_transactionID,'result'=>$_result));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>