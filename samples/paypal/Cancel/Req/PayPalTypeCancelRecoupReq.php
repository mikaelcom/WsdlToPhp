<?php
/**
 * Class file for PayPalTypeCancelRecoupReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCancelRecoupReq
 * @date 14/07/2012
 */
class PayPalTypeCancelRecoupReq extends PayPalWsdlClass
{
	/**
	 * The CancelRecoupRequest
	 * @var PayPalTypeCancelRecoupRequestType
	 */
	public $CancelRecoupRequest;
	/**
	 * Constructor
	 * @param PayPalTypeCancelRecoupRequestType CancelRecoupRequest
	 * @return PayPalTypeCancelRecoupReq
	 */
	public function __construct($_CancelRecoupRequest = null)
	{
		parent::__construct(array('CancelRecoupRequest'=>$_CancelRecoupRequest));
	}
	/**
	 * Set CancelRecoupRequest
	 * @param CancelRecoupRequestType CancelRecoupRequest
	 * @return CancelRecoupRequestType
	 */
	public function setCancelRecoupRequest($_CancelRecoupRequest)
	{
		return ($this->CancelRecoupRequest = $_CancelRecoupRequest);
	}
	/**
	 * Get CancelRecoupRequest
	 * @return PayPalTypeCancelRecoupRequestType
	 */
	public function getCancelRecoupRequest()
	{
		return $this->CancelRecoupRequest;
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