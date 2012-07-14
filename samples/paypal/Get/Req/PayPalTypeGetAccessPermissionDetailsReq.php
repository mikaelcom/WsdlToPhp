<?php
/**
 * Class file for PayPalTypeGetAccessPermissionDetailsReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetAccessPermissionDetailsReq
 * @date 14/07/2012
 */
class PayPalTypeGetAccessPermissionDetailsReq extends PayPalWsdlClass
{
	/**
	 * The GetAccessPermissionDetailsRequest
	 * @var PayPalTypeGetAccessPermissionDetailsRequestType
	 */
	public $GetAccessPermissionDetailsRequest;
	/**
	 * Constructor
	 * @param PayPalTypeGetAccessPermissionDetailsRequestType GetAccessPermissionDetailsRequest
	 * @return PayPalTypeGetAccessPermissionDetailsReq
	 */
	public function __construct($_GetAccessPermissionDetailsRequest = null)
	{
		parent::__construct(array('GetAccessPermissionDetailsRequest'=>$_GetAccessPermissionDetailsRequest));
	}
	/**
	 * Set GetAccessPermissionDetailsRequest
	 * @param GetAccessPermissionDetailsRequestType GetAccessPermissionDetailsRequest
	 * @return GetAccessPermissionDetailsRequestType
	 */
	public function setGetAccessPermissionDetailsRequest($_GetAccessPermissionDetailsRequest)
	{
		return ($this->GetAccessPermissionDetailsRequest = $_GetAccessPermissionDetailsRequest);
	}
	/**
	 * Get GetAccessPermissionDetailsRequest
	 * @return PayPalTypeGetAccessPermissionDetailsRequestType
	 */
	public function getGetAccessPermissionDetailsRequest()
	{
		return $this->GetAccessPermissionDetailsRequest;
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