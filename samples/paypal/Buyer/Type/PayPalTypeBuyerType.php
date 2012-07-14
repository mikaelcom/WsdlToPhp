<?php
/**
 * Class file for PayPalTypeBuyerType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBuyerType
 * Documentation : Information about user used by buying applications
 * @date 14/07/2012
 */
class PayPalTypeBuyerType extends PayPalWsdlClass
{
	/**
	 * The ShippingAddress
	 * @var PayPalTypeAddressType
	 */
	public $ShippingAddress;
	/**
	 * Constructor
	 * @param PayPalTypeAddressType ShippingAddress
	 * @return PayPalTypeBuyerType
	 */
	public function __construct($_ShippingAddress = null)
	{
		parent::__construct(array('ShippingAddress'=>$_ShippingAddress));
	}
	/**
	 * Set ShippingAddress
	 * @param AddressType ShippingAddress
	 * @return AddressType
	 */
	public function setShippingAddress($_ShippingAddress)
	{
		return ($this->ShippingAddress = $_ShippingAddress);
	}
	/**
	 * Get ShippingAddress
	 * @return PayPalTypeAddressType
	 */
	public function getShippingAddress()
	{
		return $this->ShippingAddress;
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