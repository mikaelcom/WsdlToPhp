<?php
/**
 * Class file for PayPalTypeDoUATPAuthorizationReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoUATPAuthorizationReq
 * @date 14/07/2012
 */
class PayPalTypeDoUATPAuthorizationReq extends PayPalWsdlClass
{
	/**
	 * The DoUATPAuthorizationRequest
	 * @var PayPalTypeDoUATPAuthorizationRequestType
	 */
	public $DoUATPAuthorizationRequest;
	/**
	 * Constructor
	 * @param PayPalTypeDoUATPAuthorizationRequestType DoUATPAuthorizationRequest
	 * @return PayPalTypeDoUATPAuthorizationReq
	 */
	public function __construct($_DoUATPAuthorizationRequest = null)
	{
		parent::__construct(array('DoUATPAuthorizationRequest'=>$_DoUATPAuthorizationRequest));
	}
	/**
	 * Set DoUATPAuthorizationRequest
	 * @param DoUATPAuthorizationRequestType DoUATPAuthorizationRequest
	 * @return DoUATPAuthorizationRequestType
	 */
	public function setDoUATPAuthorizationRequest($_DoUATPAuthorizationRequest)
	{
		return ($this->DoUATPAuthorizationRequest = $_DoUATPAuthorizationRequest);
	}
	/**
	 * Get DoUATPAuthorizationRequest
	 * @return PayPalTypeDoUATPAuthorizationRequestType
	 */
	public function getDoUATPAuthorizationRequest()
	{
		return $this->DoUATPAuthorizationRequest;
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