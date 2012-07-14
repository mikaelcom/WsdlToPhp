<?php
/**
 * Class file for PayPalTypeUpdateAccessPermissionsReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeUpdateAccessPermissionsReq
 * @date 14/07/2012
 */
class PayPalTypeUpdateAccessPermissionsReq extends PayPalWsdlClass
{
	/**
	 * The UpdateAccessPermissionsRequest
	 * @var PayPalTypeUpdateAccessPermissionsRequestType
	 */
	public $UpdateAccessPermissionsRequest;
	/**
	 * Constructor
	 * @param PayPalTypeUpdateAccessPermissionsRequestType UpdateAccessPermissionsRequest
	 * @return PayPalTypeUpdateAccessPermissionsReq
	 */
	public function __construct($_UpdateAccessPermissionsRequest = null)
	{
		parent::__construct(array('UpdateAccessPermissionsRequest'=>$_UpdateAccessPermissionsRequest));
	}
	/**
	 * Set UpdateAccessPermissionsRequest
	 * @param UpdateAccessPermissionsRequestType UpdateAccessPermissionsRequest
	 * @return UpdateAccessPermissionsRequestType
	 */
	public function setUpdateAccessPermissionsRequest($_UpdateAccessPermissionsRequest)
	{
		return ($this->UpdateAccessPermissionsRequest = $_UpdateAccessPermissionsRequest);
	}
	/**
	 * Get UpdateAccessPermissionsRequest
	 * @return PayPalTypeUpdateAccessPermissionsRequestType
	 */
	public function getUpdateAccessPermissionsRequest()
	{
		return $this->UpdateAccessPermissionsRequest;
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