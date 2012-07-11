<?php
/**
 * Class file for PaylineWebPaymentTypeDisablePaymentRecordResponse
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDisablePaymentRecordResponse
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDisablePaymentRecordResponse extends PaylineWebPaymentWsdlClass
{
	/**
	 * The result
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeResult
	 */
	public $result;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeResult result
	 * @return PaylineWebPaymentTypeDisablePaymentRecordResponse
	 */
	public function __construct($_result = null)
	{
		parent::__construct(array('result'=>$_result));
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