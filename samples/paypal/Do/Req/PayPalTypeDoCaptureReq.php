<?php
/**
 * Class file for PayPalTypeDoCaptureReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoCaptureReq
 * @date 14/07/2012
 */
class PayPalTypeDoCaptureReq extends PayPalWsdlClass
{
	/**
	 * The DoCaptureRequest
	 * @var PayPalTypeDoCaptureRequestType
	 */
	public $DoCaptureRequest;
	/**
	 * Constructor
	 * @param PayPalTypeDoCaptureRequestType DoCaptureRequest
	 * @return PayPalTypeDoCaptureReq
	 */
	public function __construct($_DoCaptureRequest = null)
	{
		parent::__construct(array('DoCaptureRequest'=>$_DoCaptureRequest));
	}
	/**
	 * Set DoCaptureRequest
	 * @param DoCaptureRequestType DoCaptureRequest
	 * @return DoCaptureRequestType
	 */
	public function setDoCaptureRequest($_DoCaptureRequest)
	{
		return ($this->DoCaptureRequest = $_DoCaptureRequest);
	}
	/**
	 * Get DoCaptureRequest
	 * @return PayPalTypeDoCaptureRequestType
	 */
	public function getDoCaptureRequest()
	{
		return $this->DoCaptureRequest;
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