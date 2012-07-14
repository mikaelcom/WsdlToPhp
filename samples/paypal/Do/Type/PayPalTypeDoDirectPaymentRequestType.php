<?php
/**
 * Class file for PayPalTypeDoDirectPaymentRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoDirectPaymentRequestType
 * @date 14/07/2012
 */
class PayPalTypeDoDirectPaymentRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The DoDirectPaymentRequestDetails
	 * @var PayPalTypeDoDirectPaymentRequestDetailsType
	 */
	public $DoDirectPaymentRequestDetails;
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
	 * @param PayPalTypeDoDirectPaymentRequestDetailsType DoDirectPaymentRequestDetails
	 * @param int ReturnFMFDetails
	 * @return PayPalTypeDoDirectPaymentRequestType
	 */
	public function __construct($_DoDirectPaymentRequestDetails = null,$_ReturnFMFDetails = null)
	{
		PayPalWsdlClass::__construct(array('DoDirectPaymentRequestDetails'=>$_DoDirectPaymentRequestDetails,'ReturnFMFDetails'=>$_ReturnFMFDetails));
	}
	/**
	 * Set DoDirectPaymentRequestDetails
	 * @param DoDirectPaymentRequestDetailsType DoDirectPaymentRequestDetails
	 * @return DoDirectPaymentRequestDetailsType
	 */
	public function setDoDirectPaymentRequestDetails($_DoDirectPaymentRequestDetails)
	{
		return ($this->DoDirectPaymentRequestDetails = $_DoDirectPaymentRequestDetails);
	}
	/**
	 * Get DoDirectPaymentRequestDetails
	 * @return PayPalTypeDoDirectPaymentRequestDetailsType
	 */
	public function getDoDirectPaymentRequestDetails()
	{
		return $this->DoDirectPaymentRequestDetails;
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