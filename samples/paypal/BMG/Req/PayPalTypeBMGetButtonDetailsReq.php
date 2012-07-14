<?php
/**
 * Class file for PayPalTypeBMGetButtonDetailsReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBMGetButtonDetailsReq
 * @date 14/07/2012
 */
class PayPalTypeBMGetButtonDetailsReq extends PayPalWsdlClass
{
	/**
	 * The BMGetButtonDetailsRequest
	 * @var PayPalTypeBMGetButtonDetailsRequestType
	 */
	public $BMGetButtonDetailsRequest;
	/**
	 * Constructor
	 * @param PayPalTypeBMGetButtonDetailsRequestType BMGetButtonDetailsRequest
	 * @return PayPalTypeBMGetButtonDetailsReq
	 */
	public function __construct($_BMGetButtonDetailsRequest = null)
	{
		parent::__construct(array('BMGetButtonDetailsRequest'=>$_BMGetButtonDetailsRequest));
	}
	/**
	 * Set BMGetButtonDetailsRequest
	 * @param BMGetButtonDetailsRequestType BMGetButtonDetailsRequest
	 * @return BMGetButtonDetailsRequestType
	 */
	public function setBMGetButtonDetailsRequest($_BMGetButtonDetailsRequest)
	{
		return ($this->BMGetButtonDetailsRequest = $_BMGetButtonDetailsRequest);
	}
	/**
	 * Get BMGetButtonDetailsRequest
	 * @return PayPalTypeBMGetButtonDetailsRequestType
	 */
	public function getBMGetButtonDetailsRequest()
	{
		return $this->BMGetButtonDetailsRequest;
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