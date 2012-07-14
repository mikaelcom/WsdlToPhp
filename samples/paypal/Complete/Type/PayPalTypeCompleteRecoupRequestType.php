<?php
/**
 * Class file for PayPalTypeCompleteRecoupRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCompleteRecoupRequestType
 * @date 14/07/2012
 */
class PayPalTypeCompleteRecoupRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The EnhancedCompleteRecoupRequestDetails
	 * @var PayPalTypeEnhancedCompleteRecoupRequestDetailsType
	 */
	public $EnhancedCompleteRecoupRequestDetails;
	/**
	 * Constructor
	 * @param PayPalTypeEnhancedCompleteRecoupRequestDetailsType EnhancedCompleteRecoupRequestDetails
	 * @return PayPalTypeCompleteRecoupRequestType
	 */
	public function __construct($_EnhancedCompleteRecoupRequestDetails = null)
	{
		PayPalWsdlClass::__construct(array('EnhancedCompleteRecoupRequestDetails'=>$_EnhancedCompleteRecoupRequestDetails));
	}
	/**
	 * Set EnhancedCompleteRecoupRequestDetails
	 * @param EnhancedCompleteRecoupRequestDetailsType EnhancedCompleteRecoupRequestDetails
	 * @return EnhancedCompleteRecoupRequestDetailsType
	 */
	public function setEnhancedCompleteRecoupRequestDetails($_EnhancedCompleteRecoupRequestDetails)
	{
		return ($this->EnhancedCompleteRecoupRequestDetails = $_EnhancedCompleteRecoupRequestDetails);
	}
	/**
	 * Get EnhancedCompleteRecoupRequestDetails
	 * @return PayPalTypeEnhancedCompleteRecoupRequestDetailsType
	 */
	public function getEnhancedCompleteRecoupRequestDetails()
	{
		return $this->EnhancedCompleteRecoupRequestDetails;
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