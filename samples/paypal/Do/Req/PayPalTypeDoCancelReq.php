<?php
/**
 * Class file for PayPalTypeDoCancelReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoCancelReq
 * @date 14/07/2012
 */
class PayPalTypeDoCancelReq extends PayPalWsdlClass
{
	/**
	 * The DoCancelRequest
	 * @var PayPalTypeDoCancelRequestType
	 */
	public $DoCancelRequest;
	/**
	 * Constructor
	 * @param PayPalTypeDoCancelRequestType DoCancelRequest
	 * @return PayPalTypeDoCancelReq
	 */
	public function __construct($_DoCancelRequest = null)
	{
		parent::__construct(array('DoCancelRequest'=>$_DoCancelRequest));
	}
	/**
	 * Set DoCancelRequest
	 * @param DoCancelRequestType DoCancelRequest
	 * @return DoCancelRequestType
	 */
	public function setDoCancelRequest($_DoCancelRequest)
	{
		return ($this->DoCancelRequest = $_DoCancelRequest);
	}
	/**
	 * Get DoCancelRequest
	 * @return PayPalTypeDoCancelRequestType
	 */
	public function getDoCancelRequest()
	{
		return $this->DoCancelRequest;
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