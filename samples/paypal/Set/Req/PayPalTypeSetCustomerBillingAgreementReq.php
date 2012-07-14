<?php
/**
 * Class file for PayPalTypeSetCustomerBillingAgreementReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetCustomerBillingAgreementReq
 * @date 14/07/2012
 */
class PayPalTypeSetCustomerBillingAgreementReq extends PayPalWsdlClass
{
	/**
	 * The SetCustomerBillingAgreementRequest
	 * @var PayPalTypeSetCustomerBillingAgreementRequestType
	 */
	public $SetCustomerBillingAgreementRequest;
	/**
	 * Constructor
	 * @param PayPalTypeSetCustomerBillingAgreementRequestType SetCustomerBillingAgreementRequest
	 * @return PayPalTypeSetCustomerBillingAgreementReq
	 */
	public function __construct($_SetCustomerBillingAgreementRequest = null)
	{
		parent::__construct(array('SetCustomerBillingAgreementRequest'=>$_SetCustomerBillingAgreementRequest));
	}
	/**
	 * Set SetCustomerBillingAgreementRequest
	 * @param SetCustomerBillingAgreementRequestType SetCustomerBillingAgreementRequest
	 * @return SetCustomerBillingAgreementRequestType
	 */
	public function setSetCustomerBillingAgreementRequest($_SetCustomerBillingAgreementRequest)
	{
		return ($this->SetCustomerBillingAgreementRequest = $_SetCustomerBillingAgreementRequest);
	}
	/**
	 * Get SetCustomerBillingAgreementRequest
	 * @return PayPalTypeSetCustomerBillingAgreementRequestType
	 */
	public function getSetCustomerBillingAgreementRequest()
	{
		return $this->SetCustomerBillingAgreementRequest;
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