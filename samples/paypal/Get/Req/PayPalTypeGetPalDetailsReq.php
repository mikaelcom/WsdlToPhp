<?php
/**
 * Class file for PayPalTypeGetPalDetailsReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetPalDetailsReq
 * @date 14/07/2012
 */
class PayPalTypeGetPalDetailsReq extends PayPalWsdlClass
{
	/**
	 * The GetPalDetailsRequest
	 * @var PayPalTypeGetPalDetailsRequestType
	 */
	public $GetPalDetailsRequest;
	/**
	 * Constructor
	 * @param PayPalTypeGetPalDetailsRequestType GetPalDetailsRequest
	 * @return PayPalTypeGetPalDetailsReq
	 */
	public function __construct($_GetPalDetailsRequest = null)
	{
		parent::__construct(array('GetPalDetailsRequest'=>$_GetPalDetailsRequest));
	}
	/**
	 * Set GetPalDetailsRequest
	 * @param GetPalDetailsRequestType GetPalDetailsRequest
	 * @return GetPalDetailsRequestType
	 */
	public function setGetPalDetailsRequest($_GetPalDetailsRequest)
	{
		return ($this->GetPalDetailsRequest = $_GetPalDetailsRequest);
	}
	/**
	 * Get GetPalDetailsRequest
	 * @return PayPalTypeGetPalDetailsRequestType
	 */
	public function getGetPalDetailsRequest()
	{
		return $this->GetPalDetailsRequest;
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