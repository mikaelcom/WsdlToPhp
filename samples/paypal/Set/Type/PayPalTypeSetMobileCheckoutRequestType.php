<?php
/**
 * Class file for PayPalTypeSetMobileCheckoutRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetMobileCheckoutRequestType
 * @date 14/07/2012
 */
class PayPalTypeSetMobileCheckoutRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The SetMobileCheckoutRequestDetails
	 * @var PayPalTypeSetMobileCheckoutRequestDetailsType
	 */
	public $SetMobileCheckoutRequestDetails;
	/**
	 * Constructor
	 * @param PayPalTypeSetMobileCheckoutRequestDetailsType SetMobileCheckoutRequestDetails
	 * @return PayPalTypeSetMobileCheckoutRequestType
	 */
	public function __construct($_SetMobileCheckoutRequestDetails = null)
	{
		PayPalWsdlClass::__construct(array('SetMobileCheckoutRequestDetails'=>$_SetMobileCheckoutRequestDetails));
	}
	/**
	 * Set SetMobileCheckoutRequestDetails
	 * @param SetMobileCheckoutRequestDetailsType SetMobileCheckoutRequestDetails
	 * @return SetMobileCheckoutRequestDetailsType
	 */
	public function setSetMobileCheckoutRequestDetails($_SetMobileCheckoutRequestDetails)
	{
		return ($this->SetMobileCheckoutRequestDetails = $_SetMobileCheckoutRequestDetails);
	}
	/**
	 * Get SetMobileCheckoutRequestDetails
	 * @return PayPalTypeSetMobileCheckoutRequestDetailsType
	 */
	public function getSetMobileCheckoutRequestDetails()
	{
		return $this->SetMobileCheckoutRequestDetails;
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