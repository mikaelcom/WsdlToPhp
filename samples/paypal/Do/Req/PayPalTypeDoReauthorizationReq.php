<?php
/**
 * Class file for PayPalTypeDoReauthorizationReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoReauthorizationReq
 * @date 14/07/2012
 */
class PayPalTypeDoReauthorizationReq extends PayPalWsdlClass
{
	/**
	 * The DoReauthorizationRequest
	 * @var PayPalTypeDoReauthorizationRequestType
	 */
	public $DoReauthorizationRequest;
	/**
	 * Constructor
	 * @param PayPalTypeDoReauthorizationRequestType DoReauthorizationRequest
	 * @return PayPalTypeDoReauthorizationReq
	 */
	public function __construct($_DoReauthorizationRequest = null)
	{
		parent::__construct(array('DoReauthorizationRequest'=>$_DoReauthorizationRequest));
	}
	/**
	 * Set DoReauthorizationRequest
	 * @param DoReauthorizationRequestType DoReauthorizationRequest
	 * @return DoReauthorizationRequestType
	 */
	public function setDoReauthorizationRequest($_DoReauthorizationRequest)
	{
		return ($this->DoReauthorizationRequest = $_DoReauthorizationRequest);
	}
	/**
	 * Get DoReauthorizationRequest
	 * @return PayPalTypeDoReauthorizationRequestType
	 */
	public function getDoReauthorizationRequest()
	{
		return $this->DoReauthorizationRequest;
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