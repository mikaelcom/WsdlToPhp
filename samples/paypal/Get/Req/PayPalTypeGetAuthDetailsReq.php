<?php
/**
 * Class file for PayPalTypeGetAuthDetailsReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetAuthDetailsReq
 * @date 14/07/2012
 */
class PayPalTypeGetAuthDetailsReq extends PayPalWsdlClass
{
	/**
	 * The GetAuthDetailsRequest
	 * @var PayPalTypeGetAuthDetailsRequestType
	 */
	public $GetAuthDetailsRequest;
	/**
	 * Constructor
	 * @param PayPalTypeGetAuthDetailsRequestType GetAuthDetailsRequest
	 * @return PayPalTypeGetAuthDetailsReq
	 */
	public function __construct($_GetAuthDetailsRequest = null)
	{
		parent::__construct(array('GetAuthDetailsRequest'=>$_GetAuthDetailsRequest));
	}
	/**
	 * Set GetAuthDetailsRequest
	 * @param GetAuthDetailsRequestType GetAuthDetailsRequest
	 * @return GetAuthDetailsRequestType
	 */
	public function setGetAuthDetailsRequest($_GetAuthDetailsRequest)
	{
		return ($this->GetAuthDetailsRequest = $_GetAuthDetailsRequest);
	}
	/**
	 * Get GetAuthDetailsRequest
	 * @return PayPalTypeGetAuthDetailsRequestType
	 */
	public function getGetAuthDetailsRequest()
	{
		return $this->GetAuthDetailsRequest;
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