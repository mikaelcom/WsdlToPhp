<?php
/**
 * Class file for PayPalTypeBMGetInventoryReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBMGetInventoryReq
 * @date 14/07/2012
 */
class PayPalTypeBMGetInventoryReq extends PayPalWsdlClass
{
	/**
	 * The BMGetInventoryRequest
	 * @var PayPalTypeBMGetInventoryRequestType
	 */
	public $BMGetInventoryRequest;
	/**
	 * Constructor
	 * @param PayPalTypeBMGetInventoryRequestType BMGetInventoryRequest
	 * @return PayPalTypeBMGetInventoryReq
	 */
	public function __construct($_BMGetInventoryRequest = null)
	{
		parent::__construct(array('BMGetInventoryRequest'=>$_BMGetInventoryRequest));
	}
	/**
	 * Set BMGetInventoryRequest
	 * @param BMGetInventoryRequestType BMGetInventoryRequest
	 * @return BMGetInventoryRequestType
	 */
	public function setBMGetInventoryRequest($_BMGetInventoryRequest)
	{
		return ($this->BMGetInventoryRequest = $_BMGetInventoryRequest);
	}
	/**
	 * Get BMGetInventoryRequest
	 * @return PayPalTypeBMGetInventoryRequestType
	 */
	public function getBMGetInventoryRequest()
	{
		return $this->BMGetInventoryRequest;
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