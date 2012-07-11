<?php
/**
 * Class file for AmazonEc2TypeAttachNetworkInterfaceType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAttachNetworkInterfaceType
 * @date 10/07/2012
 */
class AmazonEc2TypeAttachNetworkInterfaceType extends AmazonEc2WsdlClass
{
	/**
	 * The networkInterfaceId
	 * @var string
	 */
	public $networkInterfaceId;
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * The deviceIndex
	 * @var int
	 */
	public $deviceIndex;
	/**
	 * Constructor
	 * @param string networkInterfaceId
	 * @param string instanceId
	 * @param int deviceIndex
	 * @return AmazonEc2TypeAttachNetworkInterfaceType
	 */
	public function __construct($_networkInterfaceId = null,$_instanceId = null,$_deviceIndex = null)
	{
		parent::__construct(array('networkInterfaceId'=>$_networkInterfaceId,'instanceId'=>$_instanceId,'deviceIndex'=>$_deviceIndex));
	}
	/**
	 * Set networkInterfaceId
	 * @param string networkInterfaceId
	 * @return string
	 */
	public function setNetworkInterfaceId($_networkInterfaceId)
	{
		return ($this->networkInterfaceId = $_networkInterfaceId);
	}
	/**
	 * Get networkInterfaceId
	 * @return string
	 */
	public function getNetworkInterfaceId()
	{
		return $this->networkInterfaceId;
	}
	/**
	 * Set instanceId
	 * @param string instanceId
	 * @return string
	 */
	public function setInstanceId($_instanceId)
	{
		return ($this->instanceId = $_instanceId);
	}
	/**
	 * Get instanceId
	 * @return string
	 */
	public function getInstanceId()
	{
		return $this->instanceId;
	}
	/**
	 * Set deviceIndex
	 * @param int deviceIndex
	 * @return int
	 */
	public function setDeviceIndex($_deviceIndex)
	{
		return ($this->deviceIndex = $_deviceIndex);
	}
	/**
	 * Get deviceIndex
	 * @return int
	 */
	public function getDeviceIndex()
	{
		return $this->deviceIndex;
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