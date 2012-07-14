<?php
/**
 * Class file for PayPalTypeDoAuthorizationReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoAuthorizationReq
 * @date 14/07/2012
 */
class PayPalTypeDoAuthorizationReq extends PayPalWsdlClass
{
	/**
	 * The DoAuthorizationRequest
	 * @var PayPalTypeDoAuthorizationRequestType
	 */
	public $DoAuthorizationRequest;
	/**
	 * Constructor
	 * @param PayPalTypeDoAuthorizationRequestType DoAuthorizationRequest
	 * @return PayPalTypeDoAuthorizationReq
	 */
	public function __construct($_DoAuthorizationRequest = null)
	{
		parent::__construct(array('DoAuthorizationRequest'=>$_DoAuthorizationRequest));
	}
	/**
	 * Set DoAuthorizationRequest
	 * @param DoAuthorizationRequestType DoAuthorizationRequest
	 * @return DoAuthorizationRequestType
	 */
	public function setDoAuthorizationRequest($_DoAuthorizationRequest)
	{
		return ($this->DoAuthorizationRequest = $_DoAuthorizationRequest);
	}
	/**
	 * Get DoAuthorizationRequest
	 * @return PayPalTypeDoAuthorizationRequestType
	 */
	public function getDoAuthorizationRequest()
	{
		return $this->DoAuthorizationRequest;
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