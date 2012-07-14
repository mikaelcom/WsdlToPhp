<?php
/**
 * Class file for PayPalTypeGetBillingAgreementCustomerDetailsReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetBillingAgreementCustomerDetailsReq
 * @date 14/07/2012
 */
class PayPalTypeGetBillingAgreementCustomerDetailsReq extends PayPalWsdlClass
{
	/**
	 * The GetBillingAgreementCustomerDetailsRequest
	 * @var PayPalTypeGetBillingAgreementCustomerDetailsRequestType
	 */
	public $GetBillingAgreementCustomerDetailsRequest;
	/**
	 * Constructor
	 * @param PayPalTypeGetBillingAgreementCustomerDetailsRequestType GetBillingAgreementCustomerDetailsRequest
	 * @return PayPalTypeGetBillingAgreementCustomerDetailsReq
	 */
	public function __construct($_GetBillingAgreementCustomerDetailsRequest = null)
	{
		parent::__construct(array('GetBillingAgreementCustomerDetailsRequest'=>$_GetBillingAgreementCustomerDetailsRequest));
	}
	/**
	 * Set GetBillingAgreementCustomerDetailsRequest
	 * @param GetBillingAgreementCustomerDetailsRequestType GetBillingAgreementCustomerDetailsRequest
	 * @return GetBillingAgreementCustomerDetailsRequestType
	 */
	public function setGetBillingAgreementCustomerDetailsRequest($_GetBillingAgreementCustomerDetailsRequest)
	{
		return ($this->GetBillingAgreementCustomerDetailsRequest = $_GetBillingAgreementCustomerDetailsRequest);
	}
	/**
	 * Get GetBillingAgreementCustomerDetailsRequest
	 * @return PayPalTypeGetBillingAgreementCustomerDetailsRequestType
	 */
	public function getGetBillingAgreementCustomerDetailsRequest()
	{
		return $this->GetBillingAgreementCustomerDetailsRequest;
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