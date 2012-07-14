<?php
/**
 * Class file for PayPalTypeAddressVerifyReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAddressVerifyReq
 * @date 14/07/2012
 */
class PayPalTypeAddressVerifyReq extends PayPalWsdlClass
{
	/**
	 * The AddressVerifyRequest
	 * @var PayPalTypeAddressVerifyRequestType
	 */
	public $AddressVerifyRequest;
	/**
	 * Constructor
	 * @param PayPalTypeAddressVerifyRequestType AddressVerifyRequest
	 * @return PayPalTypeAddressVerifyReq
	 */
	public function __construct($_AddressVerifyRequest = null)
	{
		parent::__construct(array('AddressVerifyRequest'=>$_AddressVerifyRequest));
	}
	/**
	 * Set AddressVerifyRequest
	 * @param AddressVerifyRequestType AddressVerifyRequest
	 * @return AddressVerifyRequestType
	 */
	public function setAddressVerifyRequest($_AddressVerifyRequest)
	{
		return ($this->AddressVerifyRequest = $_AddressVerifyRequest);
	}
	/**
	 * Get AddressVerifyRequest
	 * @return PayPalTypeAddressVerifyRequestType
	 */
	public function getAddressVerifyRequest()
	{
		return $this->AddressVerifyRequest;
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