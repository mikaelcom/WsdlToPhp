<?php
/**
 * Class file for PayPalTypeBillUserReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBillUserReq
 * @date 14/07/2012
 */
class PayPalTypeBillUserReq extends PayPalWsdlClass
{
	/**
	 * The BillUserRequest
	 * @var PayPalTypeBillUserRequestType
	 */
	public $BillUserRequest;
	/**
	 * Constructor
	 * @param PayPalTypeBillUserRequestType BillUserRequest
	 * @return PayPalTypeBillUserReq
	 */
	public function __construct($_BillUserRequest = null)
	{
		parent::__construct(array('BillUserRequest'=>$_BillUserRequest));
	}
	/**
	 * Set BillUserRequest
	 * @param BillUserRequestType BillUserRequest
	 * @return BillUserRequestType
	 */
	public function setBillUserRequest($_BillUserRequest)
	{
		return ($this->BillUserRequest = $_BillUserRequest);
	}
	/**
	 * Get BillUserRequest
	 * @return PayPalTypeBillUserRequestType
	 */
	public function getBillUserRequest()
	{
		return $this->BillUserRequest;
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