<?php
/**
 * Class file for PayPalTypeBMManageButtonStatusReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBMManageButtonStatusReq
 * @date 14/07/2012
 */
class PayPalTypeBMManageButtonStatusReq extends PayPalWsdlClass
{
	/**
	 * The BMManageButtonStatusRequest
	 * @var PayPalTypeBMManageButtonStatusRequestType
	 */
	public $BMManageButtonStatusRequest;
	/**
	 * Constructor
	 * @param PayPalTypeBMManageButtonStatusRequestType BMManageButtonStatusRequest
	 * @return PayPalTypeBMManageButtonStatusReq
	 */
	public function __construct($_BMManageButtonStatusRequest = null)
	{
		parent::__construct(array('BMManageButtonStatusRequest'=>$_BMManageButtonStatusRequest));
	}
	/**
	 * Set BMManageButtonStatusRequest
	 * @param BMManageButtonStatusRequestType BMManageButtonStatusRequest
	 * @return BMManageButtonStatusRequestType
	 */
	public function setBMManageButtonStatusRequest($_BMManageButtonStatusRequest)
	{
		return ($this->BMManageButtonStatusRequest = $_BMManageButtonStatusRequest);
	}
	/**
	 * Get BMManageButtonStatusRequest
	 * @return PayPalTypeBMManageButtonStatusRequestType
	 */
	public function getBMManageButtonStatusRequest()
	{
		return $this->BMManageButtonStatusRequest;
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