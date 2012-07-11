<?php
/**
 * Class file for PaylineWebPaymentTypeDoRecurrentWalletPaymentResponse
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDoRecurrentWalletPaymentResponse
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDoRecurrentWalletPaymentResponse extends PaylineWebPaymentWsdlClass
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
	 * The billingRecordList
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeBillingRecordList
	 */
	public $billingRecordList;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeResult result
	 * @param string paymentRecordId
	 * @param PaylineWebPaymentTypeBillingRecordList billingRecordList
	 * @return PaylineWebPaymentTypeDoRecurrentWalletPaymentResponse
	 */
	public function __construct($_result = null,$_paymentRecordId = null,$_billingRecordList = null)
	{
		parent::__construct(array('result'=>$_result,'paymentRecordId'=>$_paymentRecordId,'billingRecordList'=>$_billingRecordList));
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
	 * Set billingRecordList
	 * @param billingRecordList billingRecordList
	 * @return billingRecordList
	 */
	public function setBillingRecordList($_billingRecordList)
	{
		return ($this->billingRecordList = $_billingRecordList);
	}
	/**
	 * Get billingRecordList
	 * @return PaylineWebPaymentTypebillingRecordList
	 */
	public function getBillingRecordList()
	{
		return $this->billingRecordList;
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