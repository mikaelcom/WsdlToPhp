<?php
/**
 * Class file for PayPalTypeDeviceDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDeviceDetailsType
 * @date 14/07/2012
 */
class PayPalTypeDeviceDetailsType extends PayPalWsdlClass
{
	/**
	 * The DeviceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Device ID Optional Character length and limits: 256 single-byte characters DeviceID length morethan 256 is truncated
	 * @var string
	 */
	public $DeviceID;
	/**
	 * Constructor
	 * @param string DeviceID
	 * @return PayPalTypeDeviceDetailsType
	 */
	public function __construct($_DeviceID = null)
	{
		parent::__construct(array('DeviceID'=>$_DeviceID));
	}
	/**
	 * Set DeviceID
	 * @param string DeviceID
	 * @return string
	 */
	public function setDeviceID($_DeviceID)
	{
		return ($this->DeviceID = $_DeviceID);
	}
	/**
	 * Get DeviceID
	 * @return string
	 */
	public function getDeviceID()
	{
		return $this->DeviceID;
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