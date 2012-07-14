<?php
/**
 * Class file for PayPalTypeCompleteRecoupReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCompleteRecoupReq
 * @date 14/07/2012
 */
class PayPalTypeCompleteRecoupReq extends PayPalWsdlClass
{
	/**
	 * The CompleteRecoupRequest
	 * @var PayPalTypeCompleteRecoupRequestType
	 */
	public $CompleteRecoupRequest;
	/**
	 * Constructor
	 * @param PayPalTypeCompleteRecoupRequestType CompleteRecoupRequest
	 * @return PayPalTypeCompleteRecoupReq
	 */
	public function __construct($_CompleteRecoupRequest = null)
	{
		parent::__construct(array('CompleteRecoupRequest'=>$_CompleteRecoupRequest));
	}
	/**
	 * Set CompleteRecoupRequest
	 * @param CompleteRecoupRequestType CompleteRecoupRequest
	 * @return CompleteRecoupRequestType
	 */
	public function setCompleteRecoupRequest($_CompleteRecoupRequest)
	{
		return ($this->CompleteRecoupRequest = $_CompleteRecoupRequest);
	}
	/**
	 * Get CompleteRecoupRequest
	 * @return PayPalTypeCompleteRecoupRequestType
	 */
	public function getCompleteRecoupRequest()
	{
		return $this->CompleteRecoupRequest;
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