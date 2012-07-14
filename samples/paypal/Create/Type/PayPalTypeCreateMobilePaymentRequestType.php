<?php
/**
 * Class file for PayPalTypeCreateMobilePaymentRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCreateMobilePaymentRequestType
 * @date 14/07/2012
 */
class PayPalTypeCreateMobilePaymentRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The CreateMobilePaymentRequestDetails
	 * @var PayPalTypeCreateMobilePaymentRequestDetailsType
	 */
	public $CreateMobilePaymentRequestDetails;
	/**
	 * Constructor
	 * @param PayPalTypeCreateMobilePaymentRequestDetailsType CreateMobilePaymentRequestDetails
	 * @return PayPalTypeCreateMobilePaymentRequestType
	 */
	public function __construct($_CreateMobilePaymentRequestDetails = null)
	{
		PayPalWsdlClass::__construct(array('CreateMobilePaymentRequestDetails'=>$_CreateMobilePaymentRequestDetails));
	}
	/**
	 * Set CreateMobilePaymentRequestDetails
	 * @param CreateMobilePaymentRequestDetailsType CreateMobilePaymentRequestDetails
	 * @return CreateMobilePaymentRequestDetailsType
	 */
	public function setCreateMobilePaymentRequestDetails($_CreateMobilePaymentRequestDetails)
	{
		return ($this->CreateMobilePaymentRequestDetails = $_CreateMobilePaymentRequestDetails);
	}
	/**
	 * Get CreateMobilePaymentRequestDetails
	 * @return PayPalTypeCreateMobilePaymentRequestDetailsType
	 */
	public function getCreateMobilePaymentRequestDetails()
	{
		return $this->CreateMobilePaymentRequestDetails;
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