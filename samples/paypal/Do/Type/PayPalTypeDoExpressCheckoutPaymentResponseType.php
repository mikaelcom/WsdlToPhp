<?php
/**
 * Class file for PayPalTypeDoExpressCheckoutPaymentResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoExpressCheckoutPaymentResponseType
 * @date 14/07/2012
 */
class PayPalTypeDoExpressCheckoutPaymentResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The DoExpressCheckoutPaymentResponseDetails
	 * @var PayPalTypeDoExpressCheckoutPaymentResponseDetailsType
	 */
	public $DoExpressCheckoutPaymentResponseDetails;
	/**
	 * The FMFDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var PayPalTypeFMFDetailsType
	 */
	public $FMFDetails;
	/**
	 * Constructor
	 * @param PayPalTypeDoExpressCheckoutPaymentResponseDetailsType DoExpressCheckoutPaymentResponseDetails
	 * @param PayPalTypeFMFDetailsType FMFDetails
	 * @return PayPalTypeDoExpressCheckoutPaymentResponseType
	 */
	public function __construct($_DoExpressCheckoutPaymentResponseDetails = null,$_FMFDetails = null)
	{
		PayPalWsdlClass::__construct(array('DoExpressCheckoutPaymentResponseDetails'=>$_DoExpressCheckoutPaymentResponseDetails,'FMFDetails'=>$_FMFDetails));
	}
	/**
	 * Set DoExpressCheckoutPaymentResponseDetails
	 * @param DoExpressCheckoutPaymentResponseDetailsType DoExpressCheckoutPaymentResponseDetails
	 * @return DoExpressCheckoutPaymentResponseDetailsType
	 */
	public function setDoExpressCheckoutPaymentResponseDetails($_DoExpressCheckoutPaymentResponseDetails)
	{
		return ($this->DoExpressCheckoutPaymentResponseDetails = $_DoExpressCheckoutPaymentResponseDetails);
	}
	/**
	 * Get DoExpressCheckoutPaymentResponseDetails
	 * @return PayPalTypeDoExpressCheckoutPaymentResponseDetailsType
	 */
	public function getDoExpressCheckoutPaymentResponseDetails()
	{
		return $this->DoExpressCheckoutPaymentResponseDetails;
	}
	/**
	 * Set FMFDetails
	 * @param FMFDetailsType FMFDetails
	 * @return FMFDetailsType
	 */
	public function setFMFDetails($_FMFDetails)
	{
		return ($this->FMFDetails = $_FMFDetails);
	}
	/**
	 * Get FMFDetails
	 * @return PayPalTypeFMFDetailsType
	 */
	public function getFMFDetails()
	{
		return $this->FMFDetails;
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