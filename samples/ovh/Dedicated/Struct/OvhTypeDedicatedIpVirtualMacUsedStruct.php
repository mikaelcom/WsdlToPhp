<?php
/**
 * Class file for OvhTypeDedicatedIpVirtualMacUsedStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedIpVirtualMacUsedStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedIpVirtualMacUsedStruct extends OvhWsdlClass
{
	/**
	 * The virtualMachineName
	 * @var string
	 */
	public $virtualMachineName;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The ipAddress
	 * @var string
	 */
	public $ipAddress;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The mac
	 * @var string
	 */
	public $mac;
	/**
	 * Constructor
	 * @param string virtualMachineName
	 * @param string status
	 * @param string ipAddress
	 * @param string type
	 * @param string mac
	 * @return OvhTypeDedicatedIpVirtualMacUsedStruct
	 */
	public function __construct($_virtualMachineName = null,$_status = null,$_ipAddress = null,$_type = null,$_mac = null)
	{
		parent::__construct(array('virtualMachineName'=>$_virtualMachineName,'status'=>$_status,'ipAddress'=>$_ipAddress,'type'=>$_type,'mac'=>$_mac));
	}
	/**
	 * Set virtualMachineName
	 * @param string virtualMachineName
	 * @return string
	 */
	public function setVirtualMachineName($_virtualMachineName)
	{
		return ($this->virtualMachineName = $_virtualMachineName);
	}
	/**
	 * Get virtualMachineName
	 * @return string
	 */
	public function getVirtualMachineName()
	{
		return $this->virtualMachineName;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set ipAddress
	 * @param string ipAddress
	 * @return string
	 */
	public function setIpAddress($_ipAddress)
	{
		return ($this->ipAddress = $_ipAddress);
	}
	/**
	 * Get ipAddress
	 * @return string
	 */
	public function getIpAddress()
	{
		return $this->ipAddress;
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set mac
	 * @param string mac
	 * @return string
	 */
	public function setMac($_mac)
	{
		return ($this->mac = $_mac);
	}
	/**
	 * Get mac
	 * @return string
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