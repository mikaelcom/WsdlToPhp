<?php
/**
 * Class file for PayPalTypeDoUATPExpressCheckoutPaymentResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoUATPExpressCheckoutPaymentResponseType
 * @date 14/07/2012
 */
class PayPalTypeDoUATPExpressCheckoutPaymentResponseType extends PayPalTypeDoExpressCheckoutPaymentResponseType
{
	/**
	 * The UATPDetails
	 * @var PayPalTypeUATPDetailsType
	 */
	public $UATPDetails;
	/**
	 * Constructor
	 * @param PayPalTypeUATPDetailsType UATPDetails
	 * @return PayPalTypeDoUATPExpressCheckoutPaymentResponseType
	 */
	public function __construct($_UATPDetails = null)
	{
		PayPalWsdlClass::__construct(array('UATPDetails'=>$_UATPDetails));
	}
	/**
	 * Set UATPDetails
	 * @param UATPDetailsType UATPDetails
	 * @return UATPDetailsType
	 */
	public function setUATPDetails($_UATPDetails)
	{
		return ($this->UATPDetails = $_UATPDetails);
	}
	/**
	 * Get UATPDetails
	 * @return PayPalTypeUATPDetailsType
	 */
	public function getUATPDetails()
	{
		return $this->UATPDetails;
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