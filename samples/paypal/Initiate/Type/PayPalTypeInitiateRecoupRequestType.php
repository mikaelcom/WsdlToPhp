<?php
/**
 * Class file for PayPalTypeInitiateRecoupRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeInitiateRecoupRequestType
 * @date 14/07/2012
 */
class PayPalTypeInitiateRecoupRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The EnhancedInitiateRecoupRequestDetails
	 * @var PayPalTypeEnhancedInitiateRecoupRequestDetailsType
	 */
	public $EnhancedInitiateRecoupRequestDetails;
	/**
	 * Constructor
	 * @param PayPalTypeEnhancedInitiateRecoupRequestDetailsType EnhancedInitiateRecoupRequestDetails
	 * @return PayPalTypeInitiateRecoupRequestType
	 */
	public function __construct($_EnhancedInitiateRecoupRequestDetails = null)
	{
		PayPalWsdlClass::__construct(array('EnhancedInitiateRecoupRequestDetails'=>$_EnhancedInitiateRecoupRequestDetails));
	}
	/**
	 * Set EnhancedInitiateRecoupRequestDetails
	 * @param EnhancedInitiateRecoupRequestDetailsType EnhancedInitiateRecoupRequestDetails
	 * @return EnhancedInitiateRecoupRequestDetailsType
	 */
	public function setEnhancedInitiateRecoupRequestDetails($_EnhancedInitiateRecoupRequestDetails)
	{
		return ($this->EnhancedInitiateRecoupRequestDetails = $_EnhancedInitiateRecoupRequestDetails);
	}
	/**
	 * Get EnhancedInitiateRecoupRequestDetails
	 * @return PayPalTypeEnhancedInitiateRecoupRequestDetailsType
	 */
	public function getEnhancedInitiateRecoupRequestDetails()
	{
		return $this->EnhancedInitiateRecoupRequestDetails;
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