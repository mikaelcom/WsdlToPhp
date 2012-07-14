<?php
/**
 * Class file for PayPalTypeSenderDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSenderDetailsType
 * @date 14/07/2012
 */
class PayPalTypeSenderDetailsType extends PayPalWsdlClass
{
	/**
	 * The DeviceDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var PayPalTypeDeviceDetailsType
	 */
	public $DeviceDetails;
	/**
	 * Constructor
	 * @param PayPalTypeDeviceDetailsType DeviceDetails
	 * @return PayPalTypeSenderDetailsType
	 */
	public function __construct($_DeviceDetails = null)
	{
		parent::__construct(array('DeviceDetails'=>$_DeviceDetails));
	}
	/**
	 * Set DeviceDetails
	 * @param DeviceDetailsType DeviceDetails
	 * @return DeviceDetailsType
	 */
	public function setDeviceDetails($_DeviceDetails)
	{
		return ($this->DeviceDetails = $_DeviceDetails);
	}
	/**
	 * Get DeviceDetails
	 * @return PayPalTypeDeviceDetailsType
	 */
	public function getDeviceDetails()
	{
		return $this->DeviceDetails;
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