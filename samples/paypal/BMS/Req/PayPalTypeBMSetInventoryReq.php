<?php
/**
 * Class file for PayPalTypeBMSetInventoryReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBMSetInventoryReq
 * @date 14/07/2012
 */
class PayPalTypeBMSetInventoryReq extends PayPalWsdlClass
{
	/**
	 * The BMSetInventoryRequest
	 * @var PayPalTypeBMSetInventoryRequestType
	 */
	public $BMSetInventoryRequest;
	/**
	 * Constructor
	 * @param PayPalTypeBMSetInventoryRequestType BMSetInventoryRequest
	 * @return PayPalTypeBMSetInventoryReq
	 */
	public function __construct($_BMSetInventoryRequest = null)
	{
		parent::__construct(array('BMSetInventoryRequest'=>$_BMSetInventoryRequest));
	}
	/**
	 * Set BMSetInventoryRequest
	 * @param BMSetInventoryRequestType BMSetInventoryRequest
	 * @return BMSetInventoryRequestType
	 */
	public function setBMSetInventoryRequest($_BMSetInventoryRequest)
	{
		return ($this->BMSetInventoryRequest = $_BMSetInventoryRequest);
	}
	/**
	 * Get BMSetInventoryRequest
	 * @return PayPalTypeBMSetInventoryRequestType
	 */
	public function getBMSetInventoryRequest()
	{
		return $this->BMSetInventoryRequest;
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