<?php
/**
 * Class file for PayPalTypeSetCustomerBillingAgreementRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetCustomerBillingAgreementRequestType
 * @date 14/07/2012
 */
class PayPalTypeSetCustomerBillingAgreementRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The SetCustomerBillingAgreementRequestDetails
	 * @var PayPalTypeSetCustomerBillingAgreementRequestDetailsType
	 */
	public $SetCustomerBillingAgreementRequestDetails;
	/**
	 * Constructor
	 * @param PayPalTypeSetCustomerBillingAgreementRequestDetailsType SetCustomerBillingAgreementRequestDetails
	 * @return PayPalTypeSetCustomerBillingAgreementRequestType
	 */
	public function __construct($_SetCustomerBillingAgreementRequestDetails = null)
	{
		PayPalWsdlClass::__construct(array('SetCustomerBillingAgreementRequestDetails'=>$_SetCustomerBillingAgreementRequestDetails));
	}
	/**
	 * Set SetCustomerBillingAgreementRequestDetails
	 * @param SetCustomerBillingAgreementRequestDetailsType SetCustomerBillingAgreementRequestDetails
	 * @return SetCustomerBillingAgreementRequestDetailsType
	 */
	public function setSetCustomerBillingAgreementRequestDetails($_SetCustomerBillingAgreementRequestDetails)
	{
		return ($this->SetCustomerBillingAgreementRequestDetails = $_SetCustomerBillingAgreementRequestDetails);
	}
	/**
	 * Get SetCustomerBillingAgreementRequestDetails
	 * @return PayPalTypeSetCustomerBillingAgreementRequestDetailsType
	 */
	public function getSetCustomerBillingAgreementRequestDetails()
	{
		return $this->SetCustomerBillingAgreementRequestDetails;
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