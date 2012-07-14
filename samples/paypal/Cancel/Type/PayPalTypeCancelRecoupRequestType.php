<?php
/**
 * Class file for PayPalTypeCancelRecoupRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCancelRecoupRequestType
 * @date 14/07/2012
 */
class PayPalTypeCancelRecoupRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The EnhancedCancelRecoupRequestDetails
	 * @var PayPalTypeEnhancedCancelRecoupRequestDetailsType
	 */
	public $EnhancedCancelRecoupRequestDetails;
	/**
	 * Constructor
	 * @param PayPalTypeEnhancedCancelRecoupRequestDetailsType EnhancedCancelRecoupRequestDetails
	 * @return PayPalTypeCancelRecoupRequestType
	 */
	public function __construct($_EnhancedCancelRecoupRequestDetails = null)
	{
		PayPalWsdlClass::__construct(array('EnhancedCancelRecoupRequestDetails'=>$_EnhancedCancelRecoupRequestDetails));
	}
	/**
	 * Set EnhancedCancelRecoupRequestDetails
	 * @param EnhancedCancelRecoupRequestDetailsType EnhancedCancelRecoupRequestDetails
	 * @return EnhancedCancelRecoupRequestDetailsType
	 */
	public function setEnhancedCancelRecoupRequestDetails($_EnhancedCancelRecoupRequestDetails)
	{
		return ($this->EnhancedCancelRecoupRequestDetails = $_EnhancedCancelRecoupRequestDetails);
	}
	/**
	 * Get EnhancedCancelRecoupRequestDetails
	 * @return PayPalTypeEnhancedCancelRecoupRequestDetailsType
	 */
	public function getEnhancedCancelRecoupRequestDetails()
	{
		return $this->EnhancedCancelRecoupRequestDetails;
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