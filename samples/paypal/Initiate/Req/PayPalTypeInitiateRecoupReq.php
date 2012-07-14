<?php
/**
 * Class file for PayPalTypeInitiateRecoupReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeInitiateRecoupReq
 * @date 14/07/2012
 */
class PayPalTypeInitiateRecoupReq extends PayPalWsdlClass
{
	/**
	 * The InitiateRecoupRequest
	 * @var PayPalTypeInitiateRecoupRequestType
	 */
	public $InitiateRecoupRequest;
	/**
	 * Constructor
	 * @param PayPalTypeInitiateRecoupRequestType InitiateRecoupRequest
	 * @return PayPalTypeInitiateRecoupReq
	 */
	public function __construct($_InitiateRecoupRequest = null)
	{
		parent::__construct(array('InitiateRecoupRequest'=>$_InitiateRecoupRequest));
	}
	/**
	 * Set InitiateRecoupRequest
	 * @param InitiateRecoupRequestType InitiateRecoupRequest
	 * @return InitiateRecoupRequestType
	 */
	public function setInitiateRecoupRequest($_InitiateRecoupRequest)
	{
		return ($this->InitiateRecoupRequest = $_InitiateRecoupRequest);
	}
	/**
	 * Get InitiateRecoupRequest
	 * @return PayPalTypeInitiateRecoupRequestType
	 */
	public function getInitiateRecoupRequest()
	{
		return $this->InitiateRecoupRequest;
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