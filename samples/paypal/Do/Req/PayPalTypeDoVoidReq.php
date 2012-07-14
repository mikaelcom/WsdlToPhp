<?php
/**
 * Class file for PayPalTypeDoVoidReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoVoidReq
 * @date 14/07/2012
 */
class PayPalTypeDoVoidReq extends PayPalWsdlClass
{
	/**
	 * The DoVoidRequest
	 * @var PayPalTypeDoVoidRequestType
	 */
	public $DoVoidRequest;
	/**
	 * Constructor
	 * @param PayPalTypeDoVoidRequestType DoVoidRequest
	 * @return PayPalTypeDoVoidReq
	 */
	public function __construct($_DoVoidRequest = null)
	{
		parent::__construct(array('DoVoidRequest'=>$_DoVoidRequest));
	}
	/**
	 * Set DoVoidRequest
	 * @param DoVoidRequestType DoVoidRequest
	 * @return DoVoidRequestType
	 */
	public function setDoVoidRequest($_DoVoidRequest)
	{
		return ($this->DoVoidRequest = $_DoVoidRequest);
	}
	/**
	 * Get DoVoidRequest
	 * @return PayPalTypeDoVoidRequestType
	 */
	public function getDoVoidRequest()
	{
		return $this->DoVoidRequest;
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