<?php
/**
 * Class file for PayPalTypeDoMobileCheckoutPaymentResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoMobileCheckoutPaymentResponseType
 * @date 14/07/2012
 */
class PayPalTypeDoMobileCheckoutPaymentResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The DoMobileCheckoutPaymentResponseDetails
	 * @var PayPalTypeDoMobileCheckoutPaymentResponseDetailsType
	 */
	public $DoMobileCheckoutPaymentResponseDetails;
	/**
	 * Constructor
	 * @param PayPalTypeDoMobileCheckoutPaymentResponseDetailsType DoMobileCheckoutPaymentResponseDetails
	 * @return PayPalTypeDoMobileCheckoutPaymentResponseType
	 */
	public function __construct($_DoMobileCheckoutPaymentResponseDetails = null)
	{
		PayPalWsdlClass::__construct(array('DoMobileCheckoutPaymentResponseDetails'=>$_DoMobileCheckoutPaymentResponseDetails));
	}
	/**
	 * Set DoMobileCheckoutPaymentResponseDetails
	 * @param DoMobileCheckoutPaymentResponseDetailsType DoMobileCheckoutPaymentResponseDetails
	 * @return DoMobileCheckoutPaymentResponseDetailsType
	 */
	public function setDoMobileCheckoutPaymentResponseDetails($_DoMobileCheckoutPaymentResponseDetails)
	{
		return ($this->DoMobileCheckoutPaymentResponseDetails = $_DoMobileCheckoutPaymentResponseDetails);
	}
	/**
	 * Get DoMobileCheckoutPaymentResponseDetails
	 * @return PayPalTypeDoMobileCheckoutPaymentResponseDetailsType
	 */
	public function getDoMobileCheckoutPaymentResponseDetails()
	{
		return $this->DoMobileCheckoutPaymentResponseDetails;
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