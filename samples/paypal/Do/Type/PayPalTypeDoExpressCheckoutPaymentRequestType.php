<?php
/**
 * Class file for PayPalTypeDoExpressCheckoutPaymentRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoExpressCheckoutPaymentRequestType
 * @date 14/07/2012
 */
class PayPalTypeDoExpressCheckoutPaymentRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The DoExpressCheckoutPaymentRequestDetails
	 * @var PayPalTypeDoExpressCheckoutPaymentRequestDetailsType
	 */
	public $DoExpressCheckoutPaymentRequestDetails;
	/**
	 * The ReturnFMFDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : This flag indicates that the response should include FMFDetails
	 * @var int
	 */
	public $ReturnFMFDetails;
	/**
	 * Constructor
	 * @param PayPalTypeDoExpressCheckoutPaymentRequestDetailsType DoExpressCheckoutPaymentRequestDetails
	 * @param int ReturnFMFDetails
	 * @return PayPalTypeDoExpressCheckoutPaymentRequestType
	 */
	public function __construct($_DoExpressCheckoutPaymentRequestDetails = null,$_ReturnFMFDetails = null)
	{
		PayPalWsdlClass::__construct(array('DoExpressCheckoutPaymentRequestDetails'=>$_DoExpressCheckoutPaymentRequestDetails,'ReturnFMFDetails'=>$_ReturnFMFDetails));
	}
	/**
	 * Set DoExpressCheckoutPaymentRequestDetails
	 * @param DoExpressCheckoutPaymentRequestDetailsType DoExpressCheckoutPaymentRequestDetails
	 * @return DoExpressCheckoutPaymentRequestDetailsType
	 */
	public function setDoExpressCheckoutPaymentRequestDetails($_DoExpressCheckoutPaymentRequestDetails)
	{
		return ($this->DoExpressCheckoutPaymentRequestDetails = $_DoExpressCheckoutPaymentRequestDetails);
	}
	/**
	 * Get DoExpressCheckoutPaymentRequestDetails
	 * @return PayPalTypeDoExpressCheckoutPaymentRequestDetailsType
	 */
	public function getDoExpressCheckoutPaymentRequestDetails()
	{
		return $this->DoExpressCheckoutPaymentRequestDetails;
	}
	/**
	 * Set ReturnFMFDetails
	 * @param int ReturnFMFDetails
	 * @return int
	 */
	public function setReturnFMFDetails($_ReturnFMFDetails)
	{
		return ($this->ReturnFMFDetails = $_ReturnFMFDetails);
	}
	/**
	 * Get ReturnFMFDetails
	 * @return int
	 */
	public function getReturnFMFDetails()
	{
		return $this->ReturnFMFDetails;
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