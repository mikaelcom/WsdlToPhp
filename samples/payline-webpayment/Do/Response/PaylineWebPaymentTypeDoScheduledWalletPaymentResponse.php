<?php
/**
 * Class file for PaylineWebPaymentTypeDoScheduledWalletPaymentResponse
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDoScheduledWalletPaymentResponse
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDoScheduledWalletPaymentResponse extends PaylineWebPaymentWsdlClass
{
	/**
	 * The result
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeResult
	 */
	public $result;
	/**
	 * The paymentRecordId
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $paymentRecordId;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeResult result
	 * @param string paymentRecordId
	 * @return PaylineWebPaymentTypeDoScheduledWalletPaymentResponse
	 */
	public function __construct($_result = null,$_paymentRecordId = null)
	{
		parent::__construct(array('result'=>$_result,'paymentRecordId'=>$_paymentRecordId));
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
	 * Set paymentRecordId
	 * @param string paymentRecordId
	 * @return string
	 */
	public function setPaymentRecordId($_paymentRecordId)
	{
		return ($this->paymentRecordId = $_paymentRecordId);
	}
	/**
	 * Get paymentRecordId
	 * @return string
	 */
	public function getPaymentRecordId()
	{
		return $this->paymentRecordId;
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