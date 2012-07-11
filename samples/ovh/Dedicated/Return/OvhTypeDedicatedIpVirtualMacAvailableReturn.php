<?php
/**
 * Class file for OvhTypeDedicatedIpVirtualMacAvailableReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedIpVirtualMacAvailableReturn
 * @date 02/07/2012
 */
class OvhTypeDedicatedIpVirtualMacAvailableReturn extends OvhWsdlClass
{
	/**
	 * The ip
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $ip;
	/**
	 * The mac
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $mac;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfStringType ip
	 * @param OvhTypeMyArrayOfStringType mac
	 * @return OvhTypeDedicatedIpVirtualMacAvailableReturn
	 */
	public function __construct($_ip = null,$_mac = null)
	{
		parent::__construct(array('ip'=>new OvhTypeMyArrayOfStringType($_ip),'mac'=>new OvhTypeMyArrayOfStringType($_mac)));
	}
	/**
	 * Set ip
	 * @param MyArrayOfStringType ip
	 * @return MyArrayOfStringType
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Get ip
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getIp()
	{
		return $this->ip;
	}
	/**
	 * Set mac
	 * @param MyArrayOfStringType mac
	 * @return MyArrayOfStringType
	 */
	public function setMac($_mac)
	{
		return ($this->mac = $_mac);
	}
	/**
	 * Get mac
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getMac()
	{
		return $this->mac;
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