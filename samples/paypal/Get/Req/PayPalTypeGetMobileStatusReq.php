<?php
/**
 * Class file for PayPalTypeGetMobileStatusReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetMobileStatusReq
 * @date 14/07/2012
 */
class PayPalTypeGetMobileStatusReq extends PayPalWsdlClass
{
	/**
	 * The GetMobileStatusRequest
	 * @var PayPalTypeGetMobileStatusRequestType
	 */
	public $GetMobileStatusRequest;
	/**
	 * Constructor
	 * @param PayPalTypeGetMobileStatusRequestType GetMobileStatusRequest
	 * @return PayPalTypeGetMobileStatusReq
	 */
	public function __construct($_GetMobileStatusRequest = null)
	{
		parent::__construct(array('GetMobileStatusRequest'=>$_GetMobileStatusRequest));
	}
	/**
	 * Set GetMobileStatusRequest
	 * @param GetMobileStatusRequestType GetMobileStatusRequest
	 * @return GetMobileStatusRequestType
	 */
	public function setGetMobileStatusRequest($_GetMobileStatusRequest)
	{
		return ($this->GetMobileStatusRequest = $_GetMobileStatusRequest);
	}
	/**
	 * Get GetMobileStatusRequest
	 * @return PayPalTypeGetMobileStatusRequestType
	 */
	public function getGetMobileStatusRequest()
	{
		return $this->GetMobileStatusRequest;
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