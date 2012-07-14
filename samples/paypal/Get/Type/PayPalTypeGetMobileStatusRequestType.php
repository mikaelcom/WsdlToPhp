<?php
/**
 * Class file for PayPalTypeGetMobileStatusRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetMobileStatusRequestType
 * @date 14/07/2012
 */
class PayPalTypeGetMobileStatusRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The GetMobileStatusRequestDetails
	 * @var PayPalTypeGetMobileStatusRequestDetailsType
	 */
	public $GetMobileStatusRequestDetails;
	/**
	 * Constructor
	 * @param PayPalTypeGetMobileStatusRequestDetailsType GetMobileStatusRequestDetails
	 * @return PayPalTypeGetMobileStatusRequestType
	 */
	public function __construct($_GetMobileStatusRequestDetails = null)
	{
		PayPalWsdlClass::__construct(array('GetMobileStatusRequestDetails'=>$_GetMobileStatusRequestDetails));
	}
	/**
	 * Set GetMobileStatusRequestDetails
	 * @param GetMobileStatusRequestDetailsType GetMobileStatusRequestDetails
	 * @return GetMobileStatusRequestDetailsType
	 */
	public function setGetMobileStatusRequestDetails($_GetMobileStatusRequestDetails)
	{
		return ($this->GetMobileStatusRequestDetails = $_GetMobileStatusRequestDetails);
	}
	/**
	 * Get GetMobileStatusRequestDetails
	 * @return PayPalTypeGetMobileStatusRequestDetailsType
	 */
	public function getGetMobileStatusRequestDetails()
	{
		return $this->GetMobileStatusRequestDetails;
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