<?php
/**
 * Class file for PayPalTypeSetExpressCheckoutRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetExpressCheckoutRequestType
 * @date 14/07/2012
 */
class PayPalTypeSetExpressCheckoutRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The SetExpressCheckoutRequestDetails
	 * @var PayPalTypeSetExpressCheckoutRequestDetailsType
	 */
	public $SetExpressCheckoutRequestDetails;
	/**
	 * Constructor
	 * @param PayPalTypeSetExpressCheckoutRequestDetailsType SetExpressCheckoutRequestDetails
	 * @return PayPalTypeSetExpressCheckoutRequestType
	 */
	public function __construct($_SetExpressCheckoutRequestDetails = null)
	{
		PayPalWsdlClass::__construct(array('SetExpressCheckoutRequestDetails'=>$_SetExpressCheckoutRequestDetails));
	}
	/**
	 * Set SetExpressCheckoutRequestDetails
	 * @param SetExpressCheckoutRequestDetailsType SetExpressCheckoutRequestDetails
	 * @return SetExpressCheckoutRequestDetailsType
	 */
	public function setSetExpressCheckoutRequestDetails($_SetExpressCheckoutRequestDetails)
	{
		return ($this->SetExpressCheckoutRequestDetails = $_SetExpressCheckoutRequestDetails);
	}
	/**
	 * Get SetExpressCheckoutRequestDetails
	 * @return PayPalTypeSetExpressCheckoutRequestDetailsType
	 */
	public function getSetExpressCheckoutRequestDetails()
	{
		return $this->SetExpressCheckoutRequestDetails;
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