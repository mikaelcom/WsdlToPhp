<?php
/**
 * Class file for PaylineWebPaymentTypeDisablePaymentRecordRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDisablePaymentRecordRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDisablePaymentRecordRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The contractNumber
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $contractNumber;
	/**
	 * The paymentRecordId
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $paymentRecordId;
	/**
	 * Constructor
	 * @param string contractNumber
	 * @param string paymentRecordId
	 * @return PaylineWebPaymentTypeDisablePaymentRecordRequest
	 */
	public function __construct($_contractNumber = null,$_paymentRecordId = null)
	{
		parent::__construct(array('contractNumber'=>$_contractNumber,'paymentRecordId'=>$_paymentRecordId));
	}
	/**
	 * Set contractNumber
	 * @param string contractNumber
	 * @return string
	 */
	public function setContractNumber($_contractNumber)
	{
		return ($this->contractNumber = $_contractNumber);
	}
	/**
	 * Get contractNumber
	 * @return string
	 */
	public function getContractNumber()
	{
		return $this->contractNumber;
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