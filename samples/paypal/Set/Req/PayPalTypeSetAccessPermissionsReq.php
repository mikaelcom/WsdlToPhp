<?php
/**
 * Class file for PayPalTypeSetAccessPermissionsReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetAccessPermissionsReq
 * @date 14/07/2012
 */
class PayPalTypeSetAccessPermissionsReq extends PayPalWsdlClass
{
	/**
	 * The SetAccessPermissionsRequest
	 * @var PayPalTypeSetAccessPermissionsRequestType
	 */
	public $SetAccessPermissionsRequest;
	/**
	 * Constructor
	 * @param PayPalTypeSetAccessPermissionsRequestType SetAccessPermissionsRequest
	 * @return PayPalTypeSetAccessPermissionsReq
	 */
	public function __construct($_SetAccessPermissionsRequest = null)
	{
		parent::__construct(array('SetAccessPermissionsRequest'=>$_SetAccessPermissionsRequest));
	}
	/**
	 * Set SetAccessPermissionsRequest
	 * @param SetAccessPermissionsRequestType SetAccessPermissionsRequest
	 * @return SetAccessPermissionsRequestType
	 */
	public function setSetAccessPermissionsRequest($_SetAccessPermissionsRequest)
	{
		return ($this->SetAccessPermissionsRequest = $_SetAccessPermissionsRequest);
	}
	/**
	 * Get SetAccessPermissionsRequest
	 * @return PayPalTypeSetAccessPermissionsRequestType
	 */
	public function getSetAccessPermissionsRequest()
	{
		return $this->SetAccessPermissionsRequest;
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