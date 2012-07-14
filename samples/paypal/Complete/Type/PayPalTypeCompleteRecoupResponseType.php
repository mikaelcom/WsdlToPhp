<?php
/**
 * Class file for PayPalTypeCompleteRecoupResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCompleteRecoupResponseType
 * @date 14/07/2012
 */
class PayPalTypeCompleteRecoupResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The EnhancedCompleteRecoupResponseDetails
	 * @var PayPalTypeEnhancedCompleteRecoupResponseDetailsType
	 */
	public $EnhancedCompleteRecoupResponseDetails;
	/**
	 * Constructor
	 * @param PayPalTypeEnhancedCompleteRecoupResponseDetailsType EnhancedCompleteRecoupResponseDetails
	 * @return PayPalTypeCompleteRecoupResponseType
	 */
	public function __construct($_EnhancedCompleteRecoupResponseDetails = null)
	{
		PayPalWsdlClass::__construct(array('EnhancedCompleteRecoupResponseDetails'=>$_EnhancedCompleteRecoupResponseDetails));
	}
	/**
	 * Set EnhancedCompleteRecoupResponseDetails
	 * @param EnhancedCompleteRecoupResponseDetailsType EnhancedCompleteRecoupResponseDetails
	 * @return EnhancedCompleteRecoupResponseDetailsType
	 */
	public function setEnhancedCompleteRecoupResponseDetails($_EnhancedCompleteRecoupResponseDetails)
	{
		return ($this->EnhancedCompleteRecoupResponseDetails = $_EnhancedCompleteRecoupResponseDetails);
	}
	/**
	 * Get EnhancedCompleteRecoupResponseDetails
	 * @return PayPalTypeEnhancedCompleteRecoupResponseDetailsType
	 */
	public function getEnhancedCompleteRecoupResponseDetails()
	{
		return $this->EnhancedCompleteRecoupResponseDetails;
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